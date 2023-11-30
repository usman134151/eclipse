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
            Message Team
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-4">
            <label class="form-label" >Message</label>
            <textarea id="messageData" class="form-control" rows="5" cols="5" wire:model.defer="message"></textarea>
        </div>

        <div class="d-flex gap-3 justify-content-center mb-3">
            <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">
                Cancel
            </a>
            <a href="#" wire:click="sendMessage" wire:modal='message' id="sendMessage" class="btn rounded btn-primary">Send Message</a>
        </div>
    </div>
</div>


@push('scripts')
<script>
document.addEventListener('livewire:load', function () {
    Livewire.on('sendMessageTeamEvent', async ({ userIds, message }) => {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let responses = [];
        
        try {
            document.getElementById('loader-section').style.display = 'block';

            for (const userId of userIds) {
                const formData = new FormData();
                formData.append('id', userId);
                formData.append('message', message);

                const response = await $.ajax({
                    url: '/chat/sendMessage',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: formData,
                    contentType: false,
                    processData: false
                });

                responses.push(response);
            }

            let res = [];
            for (const response of responses)
            {
                const message = response.message;
                const regex = /data-id="([^"]+)"/;
                const match = message.match(regex);
                
                if (match && match.length > 1) {
                    const dataId = match[1];
                    res.push(dataId);
                }
            }

            document.getElementById('loader-section').style.display = 'none';


            Livewire.emit('messageTeamResponse', {
                type: 'success',
                title: 'Success',
                message: 'Message sent successfully',
                response: res
            });
        } catch (error) {
            console.error('Error:', error);
            // Handle error if needed
        }
    });
});
</script>
@endpush