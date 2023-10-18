<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

use Illuminate\Validation\ValidationException;


class TagsImport extends Component
{
    use WithFileUploads;
    public $file;
    public $tags = [];
    public $warningMessage, $errorMessage = '';
    protected $listeners = ['updateVal' => 'updateVal'];

    public function render()
    {
        return view('livewire.app.common.import.tags-import');
    }

    public function mount()
    {
       
       
    }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
        $this->warningMessage = '';

        $rows = Excel::toArray([], $this->file)[0];
        $this->tags = [];
        // dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if ($i > 0) {
                try {
                    if ($row[0] != '') {
                        $tag = [];
                        $tag['name'] = $row[0];
                        $this->tags[] = $tag;
                    }
                } catch (\ErrorException $e) {
                    $this->warningMessage = "Please make sure that you are trying to upload valid file to import data.";
                }
            }
            $i++;
        }
        if (count($this->tags) == 0 && $this->warningMessage == '') {
            $this->warningMessage = "Please ensure that the file contains records before proceeding with the import. Currently, the file is empty.";
        }

        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
        $this->resetValidation();

        $validationRules = [
            'tags.*.name' => 'required',
        ];

        try {

            $validatedData = $this->validate($validationRules);
        } catch (ValidationException $e) {

            $this->addErrorMessages($e);

            return;
        }
        $saved = [];


        foreach ($this->tags as $tagData) {
            $tag = new Tag;
            if (Tag::where('name', $tagData['name'])->exists()) {
                $tag = \App\Models\Tenant\Tag::where('name', $tagData['name'])->first();
            } else {
                $tag->name = $tagData['name'];
            }
            // $tag->added_by = Auth::id();

            // Call the createUser method of UserService and pass the user model along with other parameters
            $saved[] = $tag->save();
        }
        $this->showList("Tag data has been imported successfully");

        $this->tags = [];
    }

    public function showList($message = "")
    {
        // Save data
        $this->emit('showList', $message);
    }
    protected function addErrorMessages(ValidationException $e)
    {
        $errors = $e->validator->getMessageBag();
        $this->errorMessage = "Please make sure all records are properly filled";

        foreach ($errors->messages() as $field => $messages) {
            foreach ($messages as $message) {
                $this->addError($field, $message);
            }
        }
    }

}
