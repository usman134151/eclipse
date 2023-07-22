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

    public $keywords, $documentType='',$tab="pending", $dateRange; 
    protected $listeners = ['showList' => 'resetForm', 'showConfirmation','updateVal'];

    public function render()
    {   
        $this->setData();
        return view('livewire.app.common.forms.provider-credentials-drive');
    }

    public function mount()
    {
        $this->user = User::find($this->provider_id);
    }
    
    public function updateVal($attrName, $val){
        $this->$attrName=$val;
    }

    function setData(){
        

        if ($this->user) {
            $this->credentials=[];

            $query = User::query();
            $query->where('users.id', $this->provider_id);
            $query->join('provider_accommodation_services', 'provider_accommodation_services.user_id', "users.id");
            $query->join('services_credentials', 'provider_accommodation_services.service_id', "services_credentials.service_id");
            $query->join('credentials', 'credentials.id', "services_credentials.credential_id");
            $query->join('credential_documents', 'credentials.id', "credential_documents.credential_id");
            $query->leftJoin('provider_credentials', function($join){
                    $join->on('provider_credentials.credential_document_id','credential_documents.id');
                    $join->where('provider_credentials.provider_id',$this->provider_id);
                });
            $query->select([
                'credentials.id as cred_id', 'credentials.title',
                'credentials.attach_accommodation_services',
                'credential_documents.id as id',
                'credential_documents.upload_file',
                'credential_documents.document_type',
                'credential_documents.expiration_type',
                'credential_documents.expiry',
                'provider_credentials.id as provider_doc_id','provider_credentials.expiry_date','provider_credentials.expiry_status',

            ]);
            $query->distinct('credential_documents.id');

            // search enabled
            if ($this->keywords != null) {
                $query->where('credentials.title', 'like', '%' . $this->keywords . '%');
            }

            if ($this->documentType != null) {
                $query->where('credential_documents.document_type', '=', $this->documentType);
            }
            if ($this->dateRange != null) {
                $date = Carbon::parse($this->dateRange);
                $query->whereDate('expiry_date', '<=', $date);
            }


            $documents = $query->get()->toArray();

            // dd($documents);
            foreach ($documents as $doc) {
                if ($doc['provider_doc_id']) {
                    if ($doc['expiry_status'] == 1)
                        $type = "expired";
                    else
                        $type = "active";
                } else {
                    $type = 'pending';
                }
                $this->credentials[$type][$doc['id']] = $doc;
                
            }

            if(isset($this->credentials['pending']))
                $this->credentials['pending'] = array_values($this->credentials['pending']);    //fixing index values
            if (isset($this->credentials['active']))
                $this->credentials['active'] = array_values($this->credentials['active']);    //fixing index values
            if (isset($this->credentials['expired']))
                $this->credentials['expired'] = array_values($this->credentials['expired']);    //fixing index values
          
        }     
    }

    public function clearFilters()
    {
        $this->keywords = null;
        $this->documentType = null;
        $this->dateRange = '';
        $this->tab = 'pending';
        
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
            $doc=ProviderCredentials::where(['credential_document_id' => $doc_id, 'provider_id' => $this->user->id])->first();
            $doc->acknowledged=true; $doc->expiry_date =$expiry; $doc->expiry_status=0;
            $doc->update();

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
