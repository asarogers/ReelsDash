
$(document).ready(function () {
    var tit = ["Text 1", "Text 2", "Text 3", "Text 4", "Text 5"];

    for (var i in tit) {
        var element = document.createElement("th");
        element.innerHTML = tit[i];
        $("#greeting").append(element);
    }
});
var canvas = document.getElementById("Line");
let mountains = [
  {  Line: "Monte Falco", Shift: 1658, "Units Produced": "Parco Foreste Casentinesi", Uptime: 5, "Avg Speed": 5, "Speed(10min)": 5, "Data Integrity": 5, "Order Info": 5, Need: 5 }
];

function generateTableHead(table, data) {
  let thead = table.createTHead();
  let row = thead.insertRow();
  for (let key of data) {
    let th = document.createElement("th");
    let text = document.createTextNode(key);
    th.appendChild(text);
    row.appendChild(th);
  }
}

function generateTable(table, data) {
  for (let element of data) {
    let row = table.insertRow();
    for (key in element) {
      let cell = row.insertCell();
      let text = document.createTextNode(element[key]);
      cell.appendChild(text);
    }
  }
}

let table = document.querySelector("table");
let data = Object.keys(mountains[0]);
generateTableHead(table, data);
generateTable(table, mountains);

window.onload = function(){

alert(context + " it works");
}
