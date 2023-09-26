window.addEventListener('update-url', function(event) {
    pushStateToUrl(event.detail.url);
  });
  document.addEventListener('refreshSelects', function(event) {
     console.log('refresh');
      let el = $('.select2')
      initSelect();
      //initDates();
      Livewire.hook('message.processed', (message, component) => {
          initSelect();
          //initDates();
      })


      function initSelect () {
          
          
          el.select2({
              placeholder: "Select your option",
              allowClear: !el.attr('required'),
          });
          el.on('change', function (e) {
              if($(this).attr('id')!='tags-select'){
                  let attrName = $(this).attr('id');
                  updateVal(attrName,  $(this).select2("val"));
              }
              else{
                      $('#tags-holder').val( $(this).select2("val"));
                  updateVal('tags',$('#tags-holder').val());
              }
          });
      }

      function initDates(){
        

          $('.js-single-date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true
        });
        $('.js-single-date').attr("placeholder","MM/DD/YYYY");
        $('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
        console.log($(this).val());
        updateVal($(this).attr('id'),  $(this).val());
  
    });
    setTimeout(function() {
      
  
      $('.js-select-day').daterangepicker({
              singleDatePicker: true,
              showDropdowns: true,
              autoApply: true
          });
          $('.js-select-day').val('');
          $('.js-select-day').attr("placeholder", "Select Day");
    
  }, 500); // 500 milliseconds
        $('.js-select-day').val('');
        $('.js-select-day').attr("placeholder","Select Day");
      }

          
  });
  function pushStateToUrl(url) {
  history.pushState(null, null, url);
}
     

      
window.addEventListener("livewire:load", () => {
  
      let el = $('.select2')
      initSelect()

      Livewire.hook('message.processed', (message, component) => {
          initSelect()
      })


      function initSelect () {
          
          el.select2({
              placeholder: "Select your options",
              allowClear: !el.attr('required'),
          })
          el.on('change', function (e) {
              if($(this).attr('id')!='tags-select'){
                  let attrName = $(this).attr('id');
                  updateVal(attrName,  $(this).select2("val"));
              }
              else{
                  
                  $('#tags-holder').val( $(this).select2("val"));
                  updateVal('tags',$('#tags-holder').val());

              }

          });
          $('#tags-select').select2({
      tags: true,
      createTag: function (params) {
        return {
          id: params.term,
          text: params.term,
          isNew: true
        };
      }
    });

    $('#mySelect').on('select2:select', function (e) {
      var selectedOption = e.params.data;

      if (selectedOption.isNew) {
        // A new value was entered
        console.log('New value:', selectedOption.text);
      }
    });
      }
      
  })
  $('.js-select-date').on('apply.daterangepicker', function(ev, picker) {
 
});

$(document).on("keypress", "input.js-search-by-keyword", function(e){
    if(e.which == 13){
        $('#searchByKeywordModal').modal('show');
    }
  });
  $(document).on("keypress", "input.js-search-by-no", function(e){
    if(e.which == 13){
        $('#searchByNoModal').modal('show');
    }
  });
  $(document).ready(function() {
  $('#tags-select').select2({
    tags: true,
    createTag: function (params) {
      return {
        id: params.term,
        text: params.term,
        isNew: true
      };
    }
  });

  $('#mySelect').on('select2:select', function (e) {
    var selectedOption = e.params.data;

    if (selectedOption.isNew) {
      // A new value was entered
      console.log('New value:', selectedOption.text);
    }
  });
});

$('.js-single-date').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,
  autoApply: true
});
$('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
  console.log($(this).val());
  updateVal($(this).attr('id'),  $(this).val());

});