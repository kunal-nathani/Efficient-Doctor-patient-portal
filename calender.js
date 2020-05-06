var dt= new Date();
var day=dt.getday();
var endDate = new Date(
    dt.getFullYear(),
    dt.getMonth() + 1,
    0
    ).getdate();
var months=["January","February","March","April","May","June","July","August","September","October","November","December"];
document.getElementById("date_str").innerHTML = dt.toDatestring();
document.getElementById("month").innerHTML = months[dt.getMonth()];


var cells = "";
for(x = day; x>0; x--){
    cells+= "<div>" + "x" + "</div>";
}
for(i=1;i<=30;i++){
    cells+= "<div>" + i + "</div>";
}
document.getElementByClassName("days")[0].innerHTML = cells;