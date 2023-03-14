<!-- Modal
<div class="modal fade" id="saveBrowser" tabindex="-1" aria-labelledby="saveBrowserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="saveBrowserLabel">Remember Browser?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
      </div>
      <div class="modal-body">
      Would you like Eclipse to remember this browser for future login? Click "no" if using a public or shared device.
      </div>
      <div class="modal-footer">

        <form>
          <input type="hidden" name="is_browser" id="is_browser" value="1" />
          <input type="hidden" name="user_email" id="user_email" value="{{auth()->user()->email}}" />
        </form>
        <button type="button" class="btn btn-secondary" onclick="saveBrowser()">Yes</button>
        <button type="button" class="btn btn-primary" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade show" id="backdrop" style="display: none;"></div>


@if(auth()->check())
@if(!Helper::checkUserSavedBrowser())
<script>
function openModal() {
    document.getElementById("saveBrowser").style.display = "block"
    document.getElementById("saveBrowser").classList.add("show")
    document.getElementById("backdrop").style.display = "block"
}
function closeModal() {
    document.getElementById("saveBrowser").style.display = "none"
    document.getElementById("saveBrowser").classList.remove("show")
    document.getElementById("backdrop").style.display = "none"
}
// Get the modal
// var modal = document.getElementById('saveBrowser');

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     closeModal()
//   }
// }

var firstTime = localStorage.getItem("first_time");
if(!firstTime) {
  // first time loaded!
  localStorage.setItem("first_time","1");
  openModal();
}

function saveBrowser(){
  var userEmail    = document.getElementById("user_email").value;
  if(userEmail!=""){
    if(localStorage.getItem("savedEmails")){
      var savedEmails  = localStorage.getItem("savedEmails");
      var parseEmail   = JSON.parse(savedEmails);
        parseEmail.push(userEmail);
        localStorage.setItem("savedEmails", JSON.stringify(parseEmail));
    }else{
      localStorage.setItem("savedEmails", JSON.stringify([userEmail]));
    }
    let options = {
      method: 'POST',      
      headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
      }
    };

    fetch('/saveBrowser', options)
    .then(response => response.json())
    .then(body => {
      console.log('browser saved');
    });
  }
  closeModal();
}
</script>
@endif
@endif  -->