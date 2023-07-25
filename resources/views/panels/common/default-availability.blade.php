{{-- Default Availibility Off Canvas - Start --}}
<x-off-canvas show="defaultAvailability">
	<x-slot name="title">Change Your Default Availability</x-slot>
            @livewire('app.common.setup.business-hours-setup', ['model_id' => $userid, 'model_type' => '3'])
            <div class="col-12 justify-content-center form-actions d-flex gap-3">
                <button type="button" class="btn btn-outline-dark rounded" x-on:click="defaultAvailability = !defaultAvailability">
                    Cancel
                </button>
                <button type="submit" wire:click='saveSchedule' class="btn btn-primary rounded"  x-on:close-default-schedule-modal.window="defaultAvailability = !defaultAvailability">
                    Save
                </button>
            </div>
</x-off-canvas>
{{-- Default Availibility Off Canvas - End --}}