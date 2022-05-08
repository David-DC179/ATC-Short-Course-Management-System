var todayDate = new Date();
var month = todayDate.getMonth() + 1;
var year = todayDate.getUTCFullYear();
var tdate = todayDate.getDate();

if(month < 10){
    month = "0" + month;
}
if(tdate < 10){
    tdate = "0" + tdate;
}

var maxDate = year + "-" + month + "-" + tdate;
var minDate = year + "-" + month + "-" + tdate;

document.getElementById("date").setAttribute("max",maxDate);
console.log(maxDate);

document.getElementById("datee").setAttribute("min",minDate);
console.log(minDate);


