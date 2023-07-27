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



$(function() {
    if ($('.js-single-date').val() == "")
        setDefaultDate = true; 
    else
        setDefaultDate = false; //field has some value
 
        // Single date start
    $('.js-single-date').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoApply: true
    });

    if(setDefaultDate)
        $('.js-single-date').val('');
    $('.js-single-date').attr("placeholder","MM/DD/YYYY");
    $('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
        //console.log($(this).val());
        updateVal($(this).attr('id'),  $(this).val());

    });
    // Single date end

    // Select day start
    $('.js-select-day').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoApply: true
    });
    $('.js-select-day').val('');
    $('.js-select-day').attr("placeholder","Select Day");
    // Select day end

    // Time picker start time
    $('.js-timepciker-start-time').daterangepicker({
        timePicker: true,
        singleDatePicker:true,
        locale: {
            format: 'hh:mm A'
        }
    }).on('show.daterangepicker', function (ev, picker) {
        picker.container.find(".calendar-table").hide();
    });
    $('.js-timepciker-start-time').val('');
    $('.js-timepciker-start-time').attr("placeholder","Select Start Time");
    // Time picker start time end

    // Time picker end time start
    $('.js-timepciker-end-time').daterangepicker({
        timePicker: true,
        singleDatePicker:true,
        locale: {
            format: 'hh:mm A'
        }
    }).on('show.daterangepicker', function (ev, picker) {
        picker.container.find(".calendar-table").hide();
    });
    $('.js-timepciker-end-time').val('');
    $('.js-timepciker-end-time').attr("placeholder","Select End Time");
    // Time picker end time
});

document.addEventListener('alpine:init', () => {
    Alpine.data('slider', () => ({
        
        // set initial tab
        tab: 0,
        
        // slider tabs
        tabs: [...document.querySelectorAll('nav[role=tablist] a[role=tab]')],
        
        init() {
            // initialize main function
            this.changeSlide()
        },
        
        // main function
        changeSlide() {
            let timeInterval = this.$refs.slider.dataset.interval;
            this.tabs[this.tab].setAttribute('class', 'active')
            
            // set interval to change slide
            let startInterval = () => {
                this.tab = (this.tab < this.tabs.length - 1)? this.tab + 1 : 0;
                this.tabs.forEach( (tab)=> {
                    (this.tab == this.tabs.indexOf(tab)) ?  tab.setAttribute('class', 'active') : tab.removeAttribute('class') 
                })
            }
            
            // start interval to change slide
            let slideInterval = setInterval(startInterval, timeInterval);
            
            // mouse over slider stops slide
            this.$refs.slider.onmouseover = () => {
                if (slideInterval) { 
                    clearInterval(slideInterval)
                    slideInterval = null;
                }
            }
            
            // mouse out slider starts again slide
            this.$refs.slider.onmouseout = () => {
                if (slideInterval === null) { 
                    slideInterval = setInterval(startInterval, timeInterval);
                }
            }
            
            // slider tabs click event 
            this.tabs.forEach( (tab)=> {
                tab.addEventListener('click', (e)=> {
                    e.preventDefault()
                    this.tab = this.tabs.indexOf(e.target)
                    this.tabs.forEach( (tab)=> {
                        (this.tab == this.tabs.indexOf(tab)) ?  tab.setAttribute('class', 'active') : tab.removeAttribute('class') 
                    }) 
                })
            })
        }
    }))
})

/* Sweet Alert Dialogs Start */
window.addEventListener('swal:modal', event => {
    swal({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
    });
});

window.addEventListener('swal:confirm', event => {
    swal({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                window.livewire.emit('delete');
            }
        });
});
/* Sweet Alert Dialogs End */


$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (event) {
    $('.js-form-switch-toggle').change(function(){
        if($(this).is(":checked")) {
            $(this).parent().parent().next('.js-hidden-switch-toggle-content').addClass("show-switch-toggle-content");
            $(this).next('.js-hidden-switch-toggle-content').removeClass("d-none");
            $(this).next().next('.js-hidden-switch-toggle-content').addClass("d-none");
        } else {
            $(this).parent().parent().next('.js-hidden-switch-toggle-content').removeClass("show-switch-toggle-content");
            $(this).next('.js-hidden-switch-toggle-content').addClass("d-none");
            $(this).next().next('.js-hidden-switch-toggle-content').removeClass("d-none");
        }
    });
});


//For Manual Entry

$('.js-form-check-input-manual-entry').change(function(){
    if($(this).is(":checked")) {
        $(this).parent().parent().children('.js-form-select-manual-entry').addClass("hidden");
        $(this).parent().parent().children('.js-form-input-manual-entry').removeClass("hidden");
    } else {
        $(this).parent().parent().children('.js-form-select-manual-entry').removeClass("hidden");
        $(this).parent().parent().children('.js-form-input-manual-entry').addClass("hidden");
    }
});



// For Highlighting Address Table Row

$('.js-selected-row').click(function(){
    $(this).addClass("selected");
    $('.js-tick').removeClass("d-none");
    $(this).siblings().removeClass("selected");
});

// Initialize Tooltip

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


// Check-Out Off-Canvas Provider

$('.js-checkout-go-step-2').click(function(){
  $('.js-checkout-step-1-content').addClass("hidden");
  $('.js-checkout-step-2-content').removeClass("hidden");
});

$('.js-checkout-go-step-3').click(function(){
  $('.js-checkout-step-2-content').addClass("hidden");
  $('.js-checkout-step-3-content').removeClass("hidden");
});

$('.js-checkout-go-step-4').click(function(){
  $('.js-checkout-step-3-content').addClass("hidden");
  $('.js-checkout-step-4-content').removeClass("hidden");
});


// For Notify Later Checkbox - Modal Request from User - Create Assignment

$('.js-form-check-input-notify-later').change(function(){
    if($(this).is(":checked")) {
        $(this).parent().parent().parent().parent().children('.js-notify-later-content').addClass("shown");
        $(this).parent().parent().parent().parent().children('.js-notify-later-content').removeClass("hidden");
    } else {
        $(this).parent().parent().parent().parent().children('.js-notify-later-content').removeClass("shown");
        $(this).parent().parent().parent().parent().children('.js-notify-later-content').addClass("hidden");
    }
});


// For In-Person Services Radio - Default Notification Settings Tab - Add Service

$('.js-auto-notify').change(function(){
    if($(this).is(":checked")) {
        $(this).parent().parent().parent().children('.js-auto-notify-content').addClass("shown");
        $(this).parent().parent().parent().children('.js-auto-notify-content').removeClass("hidden");
    } else {
        $(this).parent().parent().parent().children('.js-auto-notify-content').removeClass("shown");
        $(this).parent().parent().parent().children('.js-auto-notify-content').addClass("hidden");
    }
});


// Start Service Content Show/Hide

$('.js-show-start-service-hidden-content').click(function(){
  $('.js-start-service-hidden-content').removeClass("hidden");
});


// Dark- Light Theme Script

    var $html = $('html');
$( document ).ready(function() {    
    function getCurrentLayout() {
    var currentLayout = '';
    if ($html.hasClass('dark-layout')) {
      currentLayout = 'dark-layout';
    } else if ($html.hasClass('bordered-layout')) {
      currentLayout = 'bordered-layout';
    } else if ($html.hasClass('semi-dark-layout')) {
      currentLayout = 'semi-dark-layout';
    } else {
      currentLayout = 'light-layout';
    }
    return currentLayout;
  }

  // Get the data layout, for blank set to light layout
  var dataLayout = $html.attr('data-layout') ? $html.attr('data-layout') : 'light-layout';

  // Navbar Dark / Light Layout Toggle Switch
  $('.nav-link-style').on('click', function () {
    var currentLayout = getCurrentLayout(),
      switchToLayout = '',
      prevLayout = localStorage.getItem(dataLayout + '-prev-skin', currentLayout);

    // If currentLayout is not dark layout
    if (currentLayout !== 'dark-layout') {
      // Switch to dark
      switchToLayout = 'dark-layout';
    } else {
      // Switch to light
      // switchToLayout = prevLayout ? prevLayout : 'light-layout';
      if (currentLayout === prevLayout) {
        switchToLayout = 'light-layout';
      } else {
        switchToLayout = prevLayout ? prevLayout : 'light-layout';
      }
    }
    // Set Previous skin in local db
    localStorage.setItem(dataLayout + '-prev-skin', currentLayout);
    // Set Current skin in local db
    localStorage.setItem(dataLayout + '-current-skin', switchToLayout);

    // Call set layout
    setLayout(switchToLayout);

    // ToDo: Customizer fix
    $('.horizontal-menu .header-navbar.navbar-fixed').css({
      background: 'inherit',
      'box-shadow': 'inherit'
    });
    $('.horizontal-menu .horizontal-menu-wrapper.header-navbar').css('background', 'inherit');
  });

  // Get current local storage layout
  var currentLocalStorageLayout = localStorage.getItem(dataLayout + '-current-skin');

  // Set layout on screen load
  //? Comment it if you don't want to sync layout with local db
  // setLayout(currentLocalStorageLayout);

  function setLayout(currentLocalStorageLayout) {
    var navLinkStyle = $('.nav-link-style'),
      currentLayout = getCurrentLayout(),
      mainMenu = $('.main-menu'),
      navbar = $('.header-navbar'),
      // Witch to local storage layout if we have else current layout
      switchToLayout = currentLocalStorageLayout ? currentLocalStorageLayout : currentLayout;

    $html.removeClass('semi-dark-layout dark-layout bordered-layout');

    if (switchToLayout === 'dark-layout') {
      $html.addClass('dark-layout');
      mainMenu.removeClass('menu-light').addClass('menu-dark');
      navbar.removeClass('navbar-light').addClass('navbar-dark');
      navLinkStyle.find('.ficon').replaceWith(feather.icons['sun'].toSvg({ class: 'ficon' }));
    } else if (switchToLayout === 'bordered-layout') {
      $html.addClass('bordered-layout');
      mainMenu.removeClass('menu-dark').addClass('menu-light');
      navbar.removeClass('navbar-dark').addClass('navbar-light');
      navLinkStyle.find('.ficon').replaceWith(feather.icons['moon'].toSvg({ class: 'ficon' }));
    } else if (switchToLayout === 'semi-dark-layout') {
      $html.addClass('semi-dark-layout');
      mainMenu.removeClass('menu-dark').addClass('menu-light');
      navbar.removeClass('navbar-dark').addClass('navbar-light');
      navLinkStyle.find('.ficon').replaceWith(feather.icons['moon'].toSvg({ class: 'ficon' }));
    } else {
      $html.addClass('light-layout');
      mainMenu.removeClass('menu-dark').addClass('menu-light');
      navbar.removeClass('navbar-dark').addClass('navbar-light');
      navLinkStyle.find('.ficon').replaceWith(feather.icons['moon'].toSvg({ class: 'ficon' }));
    }
  }

  });

  function copyTo(type,section){
  
    $('.'+section+'Fld_1').each(function() {
        var elementId = this.id;
       
        elementId = elementId.split('_')[0];
        
        var targetElement = document.getElementById(elementId + '_' + type);
        if (targetElement) {
            $('#' + elementId + '_' + type).val($('#' + elementId + '_1').val());
            targetElement.dispatchEvent(new Event('input'));
        } else {
            console.error("Element not found for ID: " + elementId + '_' + type);
        }
    });
  
    $('.'+section+'Chk_1').each(function() {
        var elementId = this.id;
       
        elementId = elementId.split('_')[0];
        console.log(elementId);
        var targetElement = document.getElementById(elementId + '_' + type);
        if (targetElement) {
            $('#' + elementId + '_' + type).prop('checked',$('#' + elementId + '_1').prop('checked'));
            targetElement.dispatchEvent(new Event('change'));
        } else {
            console.error("Element not found for ID: " + elementId + '_' + type);
        }
    });
  
  
  
  
  }