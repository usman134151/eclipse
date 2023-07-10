/**
 *  Dev: Sakhawat Kamran
 *  Des: All Common Globel Function 
 *  Date: 3-3-2023
 */
function messageBox(message,title,status) {
    swal(
        {
            title: title,
            text: message,
            timer: 3000,
            timerProgressBar: true,
            buttons: false,
            icon: status
        }
    );
}

/***
 *  Modal Common Module
 */
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
    document.getElementById(modalId).classList.add("show");
   // document.getElementById("backdrop").style.display = "block";
}
function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
    document.getElementById(modalId).classList.remove("show");
   // document.getElementById("backdrop").style.display = "none";
}

/**
 *  Save Browser Module
 */

function resetSaveBrowser()
{
    localStorage.setItem("first_time","");
}

function openSaveBrowserPopup() 
{
    var firstTime = localStorage.getItem("first_time");
    if(!firstTime) {
        localStorage.setItem("first_time","1");
        openModal('saveBrowser');
    }   
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
      .then(response => {
        var result = response.result;
        messageBox(result.message,'', response.status);
     
      });
    }
    localStorage.setItem("first_time","");
    closeModal('saveBrowser');
  }