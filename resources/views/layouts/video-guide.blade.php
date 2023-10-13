<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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
        .modal-dialog{
          max-width:700px;
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
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Video Guide</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center"> <!-- Center the content -->
          <div class="ratio ratio-16x9">
            <iframe id="videoIframe" class="embed-responsive-item" src="{{ $videoUrl }}" frameborder="0" allowfullscreen></iframe>
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