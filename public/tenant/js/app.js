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


// Chart JS - Reports Page

const RevenueByCompanyChart = new Chart("RevenueByCompanyChart", {
  type: "doughnut",
  data : {
  labels: [
    'Microsoft Inc 72%',
    'Ministry of Education 14%',
    'LA Hospital 28%',
    'Adobe Cooperative 36%',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [72, 14, 28, 36],
    backgroundColor: [
      'rgb(10, 30, 70)',
      'rgb(136, 133, 117)',
      'rgb(229, 179, 47)',
      'rgb(21, 151, 79)'
    ],
    hoverOffset: 0
  }]
},
  options: {
    aspectRatio: 1.2,
    legend: {
      position: 'bottom',
      labels: {
      padding: 50,
      boxWidth: 10,
    }
            },
  }
});

const RevenueByServices = new Chart("RevenueByServices", {
  type: "doughnut",
  data : {
  labels: [
    'Microsoft Inc 72%',
    'Ministry of Education 14%',
    'LA Hospital 28%',
    'Adobe Cooperative 36%',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [72, 14, 28, 36],
    backgroundColor: [
      'rgb(10, 30, 70)',
      'rgb(136, 133, 117)',
      'rgb(229, 179, 47)',
      'rgb(21, 151, 79)'
    ],
    hoverOffset: 0
  }]
},
  options: {
    aspectRatio: 1.2,
    legend: {
      position: 'bottom',
      labels: {
      padding: 50,
      boxWidth: 10,
    }
            },
  }
});


const RevenueVsPayment = new Chart("RevenueVsPayment", {
      type: 'line',
        data: {
    "datasets": [
      {
        "backgroundColor": "rgb(229, 179, 47)",
        "borderColor": "rgb(229, 179, 47)",
        "fill": false,
        "data": [
          10,
          120,
          80,
          134
        ],
        "id": "amount",
        "label": "Revenue",
                "yAxisID":"left"
      },
      {
        "backgroundColor": "rgb(10, 30, 70)",
        "borderColor": "rgb(10, 30, 70)",
        "fill": false,
        "data": [
          300,
          -1200,
          500,
          -340
        ],
        "id": "amount",
        "label": "Payment",
                "yAxisID":"right"

      }
    ],
    "labels": [
      "2017-01-02",
      "2017-04-02",
      "2017-07-02",
      "2018-01-02"
    ]
  },
        options: {
            "elements": {
              "rectangle": {
                "borderWidth": 2
              },
              point:{
                                radius: 0
                            }
            },
            "layout": {
              "padding": 0
            },
            "legend": {
              "display": true,
              "labels": {
                "boxWidth": 16
              }
            },
            "maintainAspectRatio": false,
            "responsive": true,
            "scales": {
              "xAxes": [
                {
                  "gridLines": {
                    "display": false
                  },
                  "scaleLabel": {
                    "display": false,
                    "labelString": ""
                  },
                  "stacked": false,
                  "ticks": {
                    "autoSkip": true,
                    "beginAtZero": true
                  },
                  "time": {
                    "tooltipFormat": "[Q]Q - YYYY",
                    "unit": "quarter"
                  },
                  "type": "time"
                }
              ],
              "yAxes": [
                {
                  "scaleLabel": {
                    "display": false,
                    "labelString": ""
                  },
                            "id": "left",
                  "stacked": false,
                  "ticks": {
                    "beginAtZero": true
                  }
                },
                {
                  "scaleLabel": {
                    "display": false,
                    "labelString": ""
                  },
                            "id": "right",
                            "position": "right",
                  "stacked": false,
                  "ticks": {
                    "beginAtZero": true
                  }
                }
              ]
            },
            "title": {
              "display": false
            },
            "tooltips": {
              "intersect": false,
              "mode": "index",
              "position": "nearest",
              "callbacks": {}
            }
          }
    });

    const jsChartRevenue = new Chart("jsChartRevenue", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartServices = new Chart("jsChartServices", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartAssignment = new Chart("jsChartAssignment", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartInvoice = new Chart("jsChartInvoice", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartPayments = new Chart("jsChartPayments", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartReferrals = new Chart("jsChartReferrals", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartRatingsPending = new Chart("jsChartRatingsPending", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartCancellations = new Chart("jsChartCancellations", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });

    const jsChartTopProviders = new Chart("jsChartTopProviders", {
      type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '',
                backgroundColor: 'rgb(10, 30, 70)',
                borderColor: 'rgb(10, 30, 70)',
                fill: false,
                data: [
                    0,
                    300,
                    300,
                    450,
                    300,
                    450,
                    300
                ],
            }]
        },
        options: {
            elements: {
                    point:{
                        radius: 0
                    }
                },
            legend: {
              labels: {
                display: false,
                boxWidth: 0,
            }
            },
            responsive: true,
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    display: false,
          scaleLabel: {
            display: true,
            labelString: 'Date'
          },
            
                }],
                yAxes: [{
                    display: false,
                    //type: 'logarithmic',
          scaleLabel: {
                            display: true,
                            labelString: 'Index Returns'
                        },
                        ticks: {
                            min: 0,
                            max: 500,

                            // forces step size to be 5 units
                            stepSize: 100
                        }
                }]
            }
        }
    });