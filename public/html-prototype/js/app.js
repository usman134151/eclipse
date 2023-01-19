// Initialize the plugin
const jsMainMenu = document.querySelector('.jsMainMenu');
const ps = new PerfectScrollbar(jsMainMenu);

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