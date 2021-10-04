$(".counter-up").counterUp({
    delay: 10,
    times:1000
})

//Chart
let dateArr = ['july 21','july 20','july 19','july 18','july 17','july 16','july 15','july 14','july 13','july 12','july 11',];
let orderCountArr = [7,5,6,4,6,4,8,6,8,9,6];
let viewerCountArr = [13,12,15,14,20,17,19,16,23,33,16];

var ov = document.getElementById('ov').getContext('2d');
var ovChart = new Chart(ov, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [{
            label: 'Order Counts',
            data: orderCountArr,
            backgroundColor: [
                ' #0dcaf030',
            ],
            borderColor: [
                '#0dcaf0',
            ],
            borderWidth: 1,
            tension:0
        },
        {
            label: 'Viewer Counts',
            data: viewerCountArr,
            backgroundColor: [
                '  #20c99730',
            ],
            borderColor: [
                ' #20c997',
            ],
            borderWidth: 1,
            tension:0
        }
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
          xAxes: [{
                ticks: {
                   display:false
                },
                gridLines: {
                    display: false,
                    // color: "rgba(0, 0, 0, 0)",
                    // drawOnChartArea: false
                }   
            }],
            yAxes:[{
                display:false
             }],
        },
      
        legend: {
            display: true,
            position: 'top',
            labels: {
              fontColor: "#000080",
              usePointStyle:true
            }
          },
    }
});

//Donuts Chart
let orderFromPlace = [5,15,4,9,7];
let places = ['YGN',"MDY","NPY","SHAN","MGW"];

let op = document.getElementById('op').getContext('2d');
let opChart = new Chart(op, {
    type: 'doughnut',
    data: {
        labels: places,
        datasets: [{
            label: '# of Votes',
            data: orderFromPlace,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            }
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
              fontColor: "#000080",
              usePointStyle:false
            }
          },
    }
});

//popover
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})