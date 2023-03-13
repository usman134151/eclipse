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

$(function() {
    // Single date start
    $('.js-single-date').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoApply: true
    });
    $('.js-single-date').val('');
    $('.js-single-date').attr("placeholder","MM/DD/YYYY");
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