<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Services\ExportDataFile;

class Customer extends Component
{
	public $showForm;
	public $showProfile;

	protected $listeners = ['showList' => 'resetForm'];
	protected $exportDataFile;

    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateExcelTemplateCustomer();
    }

	public function render()
	{
		return view('livewire.app.common.customer');
	}

	public function mount() {}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
		$this->showProfile = false;
	}

	public function showProfile()
	{
		$this->showProfile = true;
	}
}