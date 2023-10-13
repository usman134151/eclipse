<style>
        .custom-btn {
            background-color: #213969;
            color: #213969;
            border: 2px solid #213969;
        }
        .custom-btn:hover{
            background-color: blue;
            color: blue;
            border: 2px solid blue;
        }

    </style>
    <div class="login-container">
  <!-- Button trigger modal -->
  <button type="button" class="btn custom-btn fw-bold bg-transparent rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <span>
      <i class="bi bi-youtube fs-4 align-middle"></i>
      Video Guide
    </span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Video Guide</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center"> <!-- Center the content -->
          <div class="embed-responsive embed-responsive-16by9 h-90">
            <iframe id="videoIframe" class="embed-responsive-item" src="{{ $videoUrl }}" frameborder="0" allowfullscreen width="100%" height="500"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- JavaScript to control the YouTube video playback -->
    <!-- JavaScript to control the YouTube video playback and mute audio -->
    <script>
      // Function to stop the YouTube video and mute audio when the modal is closed
      function stopAndMuteVideo() {
          var iframe = document.getElementById('videoIframe');
  
          // Stop the video playback
          iframe.contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
  
          // Mute the video's audio by adding a mute parameter to the URL
          iframe.src = iframe.src.replace("?enablejsapi=1", "?enablejsapi=1&mute=1");
      }
  
      $(document).ready(function () {
          // Handle modal close event
          $('#exampleModal').on('hidden.bs.modal', function () {
              // Stop and mute the video when the modal is closed
              stopAndMuteVideo();
          });
      });
  </script>