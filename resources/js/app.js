require('./bootstrap');
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()


$(document).ready(function(){
  $(".has-sub a").click(function(){
    alert("The paragraph was clicked.");
  });
});