<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Services\ExportDataFile;

class Provider extends Component
{
	public $showForm;
	public $showProfile;

	protected $listeners = [
		'showList'=>'resetForm',
		'showProfile' => 'showProfile',
	];
	protected $exportDataFile;

    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateExcelTemplate();
    }

	public function render()
	{
		return view('livewire.app.common.provider');
	}

	public function mount() {}

	function showForm()
	{
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider/create-provider']);
	}

	public function resetForm()
	{
		$this->showForm=false;
		$this->showProfile = false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider']);
	}

	public function showProfile()
	{
		$this->showProfile = true;
	}
}