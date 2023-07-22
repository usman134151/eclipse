<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Credential;
use App\Models\Tenant\CredentialDocument;
use App\Models\Tenant\ProviderCredentials;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Livewire\Component;

class ProviderCredentialsDrive extends Component
{
    public $showForm, $provider_id =0,$credentials=[] ,$user=null;
    protected $listeners = ['showList' => 'resetForm', 'showConfirmation'];

    public function render()
    {   
        $this->setData();
        return view('livewire.app.common.forms.provider-credentials-drive');
    }

    public function mount()
    {
        $this->user = User::find($this->provider_id);
    }

    function setData(){
        // select `service_categories`.*, `provider_accommodation_services`.`user_id` as `pivot_user_id`, `provider_accommodation_services`.`service_id` as `pivot_service_id`,
        //  `provider_accommodation_services`.`created_at` as
        //  `pivot_created_at`, `provider_accommodation_services`.`updated_at` as `pivot_updated_at` from `service_categories`
        //  inner join `provider_accommodation_services` 
        // on `service_categories`.`id` = `provider_accommodation_services`.`service_id` where `provider_accommodation_services`.`user_id` = 2


        // select `credentials`.*, `services_credentials`.`service_id` as `pivot_service_id`, `services_credentials`.`credential_id` as 
        // `pivot_credential_id` from `credentials` inner join `services_credentials` on `credentials`.`id` = `services_credentials`.`credential_id`
        //  where `services_credentials`.`service_id` = 2
        
        // select * from `credential_documents` where `credential_documents`.`credential_id` = 2 and `credential_documents`.`credential_id` is not null
        
        
        // dd($documents);


        
        // $query->where(['record_id' => $this->field['record_id'], 'record_type' => $this->field['record_type']]);

        // if ($this->keywords != null) {
        //     $query->where('document_title', 'like', '%' . $this->keywords . '%');
        // }

        // if ($this->documentType != null) {
        //     $query->where('document_type', '=', $this->documentType);
        // }
        // if ($this->dateRange != null) {
        //     $date = Carbon::parse($this->dateRange);
        //     $query->whereDate('expiration_date', '=', $date);
        // }


        // $this->existingDocuments = $query->get();

        // where('id',$this->provider_id)->with('services','credentials','documents')->first();
        // dd($details);
        if ($this->user) {
            $this->credentials=[];

            $query = User::query();
            $query->where('users.id', $this->provider_id);
            $query->join('provider_accommodation_services', 'provider_accommodation_services.user_id', "users.id");
            $query->join('services_credentials', 'provider_accommodation_services.service_id', "services_credentials.service_id");
            // $query->join('services_credentials', 'provider_accommodation_services.service_id', "services_credentials.service_id");
            $query->join('credentials', 'credentials.id', "services_credentials.credential_id");
            $query->join('credential_documents', 'credentials.id', "credential_documents.credential_id");
            $query->select([
                'credentials.id as cred_id', 'credentials.title',
                'credentials.attach_accommodation_services',
                'credential_documents.id as id',
                'credential_documents.upload_file',
                'credential_documents.document_type',
                'credential_documents.expiration_type',
                'credential_documents.expiry'
            ]);
            $query->distinct('credential_documents.id');

            $documents = $query->get()->toArray();

            foreach ($documents as $doc) {
                $u_doc = ProviderCredentials::where(['provider_id' => $this->provider_id, 'credential_document_id' => $doc['id']])->first();
                if ($u_doc) {
                    if ($u_doc->expiry_status == 1)
                        $type = "expired";
                    else
                        $type = "active";
                } else {
                    $type = 'pending';
                }
                $this->credentials[$type][$doc['id']] = $doc;
                if ($type != 'pending') {

                    $this->credentials[$type][$doc['id']]['provider_doc_id'] = $u_doc->id;
                    $this->credentials[$type][$doc['id']]['expiry_date'] = $u_doc->expiry_date;
                }
            }

            if(isset($this->credentials['pending']))
                $this->credentials['pending'] = array_values($this->credentials['pending']);    //fixing index values
            if (isset($this->credentials['active']))
                $this->credentials['active'] = array_values($this->credentials['active']);    //fixing index values
            if (isset($this->credentials['expired']))
                $this->credentials['expired'] = array_values($this->credentials['expired']);    //fixing index values
          
        }     
    }

    public function acceptCredential($doc_id){
        ProviderCredentials::create(['credential_document_id'=>$doc_id,'provider_id'=>$this->user->id,'acknowledged'=>true]);
        $this->showConfirmation('Credential has been accepted');
    }

    public function renewAcceptance($doc_id)
    {
        $cred_doc = CredentialDocument::where('id',$doc_id)->first();
        if($cred_doc){
            if($cred_doc->expiry)
                $expiry= Carbon::now()->addMonths($cred_doc['expiry']);
            else
                $expiry =null;
            ProviderCredentials::updateOrCreate(['credential_document_id' => $doc_id, 'provider_id' => $this->user->id])
            ->update(['acknowledged'=>true,'expiry_date'=> $expiry,'expiry_status'=>0]);

        }
        $this->showConfirmation('Credential has been accepted');
    }
    

    public function openCredential($credentialId,$label){
        
        $this->dispatchBrowserEvent('open-credential',['credentialId'=>$credentialId, 'credentialLabel'=>$label]);
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

    public function showConfirmation($message = '')
    {
        $this->setData();

        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
    }


}
