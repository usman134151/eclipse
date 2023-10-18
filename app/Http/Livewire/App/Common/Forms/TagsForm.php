<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Tag;
use Illuminate\Validation\Rule;

use Livewire\Component;

class TagsForm extends Component
{
    public $tag;
    public $label = "Add";
    protected $listeners = ['editRecord' => 'edit'];


    public function mount(Tag $tag)
    {
        $this->tag = $tag;
    }


    // Validation Rules
    public function rules()
    {
        return [
            'tag.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('tags', 'name')->ignore($this->tag->id)
            ],
        ];
    }
    public function showList($message = "")
    {
        // save data
        $this->emit('showList', $message);
    }

    public function edit(Tag $tag)
    {
        $this->label = "Edit";
        $this->tag = $tag;
    }

    public function save()
    {
        $this->validate();
        $type = !is_null($this->tag->id) ? "update" : "create";
        // $this->tag->added_by=1;
        $this->tag->save();
        $this->showList("Record saved successfully");
        callLogs($this->tag->id, "Tag", $type);
        $this->tag = new Tag;
    }

    public function render()
    {
        return view('livewire.app.common.forms.tags-form');
    }
}
