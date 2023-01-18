// Initialize the plugin
const jsMainMenu = document.querySelector('.jsMainMenu');
const ps = new PerfectScrollbar(jsMainMenu);

// Handle size change
document.querySelector('#resize').addEventListener('click', () => {

  // Get updated values
  width = document.querySelector('#width').value;
  height = document.querySelector('#height').value;
  
  
  // Update Perfect Scrollbar
  ps.update();
});