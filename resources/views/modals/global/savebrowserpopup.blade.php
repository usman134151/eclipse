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
        <button type="button" class="btn btn-primary" onclick="closeModal('saveBrowser')">No</button>
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade show" id="backdrop" style="display: none;"></div>-->
