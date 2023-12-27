// Chart JS - Reports Page

// const RevenueByCompanyChart = new Chart("RevenueByCompanyChart", {
//   type: "doughnut",
//   data : {
//   // labels: [
//   //   'Microsoft Inc 72%',
//   //   'Ministry of Education 14%',
//   //   'LA Hospital 28%',
//   //   'Adobe Cooperative 36%',
//   // ],
//   datasets: [{
//     label: 'My First Dataset',
//     // data: [72, 14, 28, 36],
//     backgroundColor: [
//       'rgb(10, 30, 70)',
//       'rgb(136, 133, 117)',
//       'rgb(229, 179, 47)',
//       'rgb(191, 64, 64)',
//       'rgb(21, 151, 79)'
//     ],
//     hoverOffset: 0
//   }]
// },
//   options: {
//     aspectRatio: 1.2,
//     legend: {
//       position: 'bottom',
//       labels: {
//       padding: 50,
//       boxWidth: 10,
//     }
//             },
//   }
// });


// const jsChartTopProviders = new Chart("jsChartTopProviders", {
//   type: "doughnut",
//   data: {
//     datasets: [{
//       label: 'My First Dataset',
//       backgroundColor: [
//         'rgb(10, 30, 70)',
//         'rgb(136, 133, 117)',
//         'rgb(229, 179, 47)',
//         'rgb(191, 64, 64)',
//         'rgb(21, 151, 79)'
//       ],
//       hoverOffset: 0
//     }]
//   },
//   options: {
//     aspectRatio: 1.2,
//     legend: {
//       display: false,
//       position: 'bottom',
//       labels: {
//         padding: 50,
//         boxWidth: 10,
//       }
//     },
//   }
// });

// const jsChartAssignment = new Chart("jsChartAssignment", {
//   type: "doughnut",
//   data: {
//     datasets: [{
//       label: 'My First Dataset',
//       backgroundColor: [
//         'rgb(10, 30, 70)',
//         'rgb(136, 133, 117)',
//         'rgb(229, 179, 47)',
//         'rgb(191, 64, 64)',
//         'rgb(21, 151, 79)'
//       ],
//       hoverOffset: 0
//     }]
//   },
//   options: {
//     aspectRatio: 1.2,
//     legend: {
//       display: false,
//       position: 'bottom',
//       labels: {
//         padding: 50,
//         boxWidth: 10,
//       }
//     },
//   }
// });

// const jsChartInvoice = new Chart("jsChartInvoice", {
//   type: "doughnut",
//   data: {
//     datasets: [{
//       label: 'My First Dataset',
//       backgroundColor: [
//         'rgb(191, 64, 64)',
//         'rgb(10, 30, 70)',
//         'rgb(136, 133, 117)',
//         'rgb(229, 179, 47)',
//         'rgb(21, 151, 79)'
//       ],
//       hoverOffset: 0
//     }]
//   },
//   options: {
//     aspectRatio: 1.2,
//     legend: {
//       display: false,
//       position: 'bottom',
//       labels: {
//         padding: 50,
//         boxWidth: 10,
//       }
//     },
//   }
// });

// const jsChartServices = new Chart("jsChartServices", {
//   type: "doughnut",
//   data: {
//     datasets: [{
//       label: 'My First Dataset',
//       backgroundColor: [
//         'rgb(191, 64, 64)',
//         'rgb(10, 30, 70)',
//         'rgb(136, 133, 117)',
//         'rgb(229, 179, 47)',
//         'rgb(21, 151, 79)'
//       ],
//       hoverOffset: 0
//     }]
//   },
//   options: {
//     aspectRatio: 1.2,
//     legend: {
//       display: false,
//       position: 'bottom',
//       labels: {
//         padding: 50,
//         boxWidth: 10,
//       }
//     },
//   }
// });

// const jsChartRevenue = new Chart("jsChartRevenue", {
//   type: "doughnut",
//   data: {
//     datasets: [{
//       label: 'My First Dataset',
//       backgroundColor: [
//         'rgb(191, 64, 64)',
//         'rgb(10, 30, 70)',
//         'rgb(136, 133, 117)',
//         'rgb(229, 179, 47)',
//         'rgb(21, 151, 79)'
//       ],
//       hoverOffset: 0
//     }]
//   },
//   options: {
//     aspectRatio: 1.2,
//     legend: {
//       display: false,
//       position: 'bottom',
//       labels: {
//         padding: 50,
//         boxWidth: 10,
//       }
//     },
//   }
// });

const RevenueByServices = new Chart("RevenueByServices", {
  type: "doughnut",
  data : {
  labels: [
    'Microsoft Inc 72%',
    'Ministry of Education 14%',
    'LA Hospital 28%',
    'Adobe Cooperative 36%',
    'Meta 16%',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [72, 14, 28, 36, 16],
    backgroundColor: [
      'rgb(10, 30, 70)',
      'rgb(136, 133, 117)',
      'rgb(229, 179, 47)',
      'rgb(191, 64, 64)',
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
