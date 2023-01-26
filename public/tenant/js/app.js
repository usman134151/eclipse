// // Initialize the plugin
// const jsMainMenu = document.querySelector('.jsMainMenu');
// const ps = new PerfectScrollbar(jsMainMenu);

// Handle size change
// document.querySelector('#resize').addEventListener('click', () => {

//   // Get updated values
//   width = document.querySelector('#width').value;
//   height = document.querySelector('#height').value;
  
  
//   // Update Perfect Scrollbar
//   ps.update();
// });

var config = {
  '.chosen-select'           : {},
  '.chosen-select-deselect'  : { allow_single_deselect: true },
  '.chosen-select-no-single' : { disable_search_threshold: 10 },
  '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
  '.chosen-select-rtl'       : { rtl: true },
  '.chosen-select-width'     : { width: '95%' }
}
for (var selector in config) {
  $(selector).chosen(config[selector]);
}

// $(function() {
//   $('.js-single-date').daterangepicker({
//     singleDatePicker: true,
//     showDropdowns: true,
//     autoApply: true
//   });
//   $('.js-single-date').val('');
//   $('.js-single-date').attr("placeholder","MM/DD/YYYY");
// });

// $(function() {
//   $('.js-select-day').daterangepicker({
//     singleDatePicker: true,
//     showDropdowns: true,
//     autoApply: true
//   });
//   $('.js-select-day').val('');
//   $('.js-select-day').attr("placeholder","Select Day");
// });


// $(function() {
//   $('.js-timepciker-start-time').daterangepicker({
//       timePicker: true,
//       singleDatePicker:true,
//       locale: {
//           format: 'hh:mm A'
//       }
//   }).on('show.daterangepicker', function (ev, picker) {
//       picker.container.find(".calendar-table").hide();
//   });
//   $('.js-timepciker-start-time').val('');
//   $('.js-timepciker-start-time').attr("placeholder","Select Start Time");
// });

// $(function() {
//   $('.js-timepciker-end-time').daterangepicker({
//       timePicker: true,
//       singleDatePicker:true,
//       locale: {
//           format: 'hh:mm A'
//       }
//   }).on('show.daterangepicker', function (ev, picker) {
//       picker.container.find(".calendar-table").hide();
//   });
//   $('.js-timepciker-end-time').val('');
//   $('.js-timepciker-end-time').attr("placeholder","Select End Time");
// });


