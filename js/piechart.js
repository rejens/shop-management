//pie

var num=[300, 50, 100, 40, 12]
var bg=["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"]
var bgc=["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]



var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
    labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
    datasets: [{
        data: num,
        backgroundColor: bg,
        hoverBackgroundColor: bgc
        }]
    },
    options: {
        responsive: true
    }    
});
const config = {
    type: 'line',
    data: data,
    options: {}
    };