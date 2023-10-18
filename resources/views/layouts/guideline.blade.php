<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Playlist</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    .bg-guideline {
      background-color: #213969;
      padding: 0;
      height: 90vh;
    }
    
    body {
      margin: 0;
      padding: 0;
    }

    .modal-body {
      margin: 40px 0 40px 0;
    }

    li:hover, li button:hover {
      background-color: #213969;
      color: white;
    }

    .channel {
      background-color: #213969;
      color: white;
    }
    .list-scroll {
    max-height: 500px; /* Adjust this value as needed */
    overflow-y: auto;
  }
  @media screen and (max-width:541px) {
    .phpdebugbar-header{
        display:none;
    }
  }
  </style>
</head>
<body>
  <div class="container-fluid bg-guideline">
    <div class="row">
      <!-- Left Column - YouTube Playlist (100% width on small devices, moved below) -->
      
      <div class=" position-relative col-12 col-lg-3 bg-light order-1 order-lg-0">
          <a href="{{route('central.landing')}}" class="btn btn-primary bg-transparent border-0 position-absolute top-0 rounded-pill">
            <span>
            <i class="bi bi-arrow-left fs-5 "></i>
            </span>
        </a>
        <h2 class="channel pt-5 pb-5 pe-2 ps-4">Eclipse Scheduling - Admin Tutorials</h2>
        <div class="list-scroll">

            <ul class="list-group">
              <li class="list-group-item">
                <button class="bg-transparent border-0 fw-medium" onclick="changeVideo('epSdx8YXwNw')">Service Catalogues: Accommodations, Services and Specializations Setup - Eclipse Scheduling Tutorial
                </button>
              </li>
              <li class="list-group-item">
                <button class="bg-transparent border-0 fw-medium" onclick="changeVideo('rylWoNqHiyw')">Managing Notifications: Email, SMS, and System - Eclipse Scheduling Tutorial <br></br>
                </button>
              </li>
              <li class="list-group-item">
                <button class="bg-transparent border-0 fw-medium" onclick="changeVideo('MLdkcJ5Cb5s')">Managing Admin Users: Adding Admin, Admin Teams, and Permissions - Eclipse Scheduling Tutorial
                </button>
              </li>
              <li class="list-group-item">
                <button class="bg-transparent border-0 fw-medium" onclick="changeVideo('KvjnuVlXhgo')">Credentials Manager: Create & Review Required Provider Documents - Eclipse Scheduling Tutorial
                </button>
              </li>
            </ul>
            
        </div>
      </div>
      <!-- Right Column - Video Player (100% width on small devices) -->
      <div class="col-12  col-lg-9 bg-dark order-0 order-lg-1">
        <div class="modal-body text-center">
          <div class="ratio ratio-16x9">
            <iframe id="videoIframe" class="embed-responsive-item" src="https://www.youtube.com/embed/epSdx8YXwNw?si=eZ4Snz5ihXsb4ZRa" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script>
    function changeVideo(videoId) {
      document.getElementById('videoIframe').src = `https://www.youtube.com/embed/${videoId}?si=eZ4Snz5ihXsb4ZRa`;
    }
  </script>
</body>
</html>
