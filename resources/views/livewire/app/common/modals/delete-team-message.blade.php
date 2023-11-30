<div class="modal-content">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="MessageTeamModalLabel">
            Delete Team Messages
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-4">
            <label class="form-label" >Messages</label>
            <textarea disabled id="messageData" class="form-control" rows="5" cols="5" wire:model.defer="message"></textarea>
        </div>

        <div class="d-flex gap-3 justify-content-center mb-3">
            <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">
                Cancel
            </a>
            <a href="#" wire:click="deleteMessage" class="btn rounded btn-primary">Delete Messages</a>
        </div>
    </div>
</div>
