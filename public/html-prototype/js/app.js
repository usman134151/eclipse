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
  $('.js-single-date').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    autoApply: true
  });
  $('.js-single-date').val('');
  $('.js-single-date').attr("placeholder","MM/DD/YYYY");
});

$(function() {
  $('.js-select-day').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    autoApply: true
  });
  $('.js-select-day').val('');
  $('.js-select-day').attr("placeholder","Select Day");
});


$(function() {
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
});

$(function() {
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

function dropdown() {
    return {
        options: [],
        selected: [],
        show: false,
        open() { this.show = true },
        close() { this.show = false },
        isOpen() { return this.show === true },
        select(index, event) {

            if (!this.options[index].selected) {

                this.options[index].selected = true;
                this.options[index].element = event.target;
                this.selected.push(index);

            } else {
                this.selected.splice(this.selected.lastIndexOf(index), 1);
                this.options[index].selected = false
            }
        },
        remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);


        },
        loadOptions() {
            const options = document.getElementById('select').options;
            for (let i = 0; i < options.length; i++) {
                this.options.push({
                    value: options[i].value,
                    text: options[i].innerText,
                    selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                });
            }


        },
        selectedValues(){
            return this.selected.map((option)=>{
                return this.options[option].value;
            })
        }
    }
}


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


// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    alert('test')
    $('.select2').select2({
        allowClear: true,
    });
});



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

const ps = new
PerfectScrollbar('.js-ps-container', {
    wheelSpeed: 2,
    wheelPropagation: false,
    minScrollbarLength: 20
});

const psContainerCheckOut = new
PerfectScrollbar('.js-ps-container-check-out', {
    wheelSpeed: 2,
    wheelPropagation: false,
    minScrollbarLength: 20
});