

var x = document.getElementById('#javelin');
var y = document.getElementById('#elephant');
var n = document.getElementById('#blowtorch');
n.style = 'display:none';
y.style = 'display:none;';
x.style = 'display:flex;';
document.getElementById('javelin-btn').setAttribute('class', 'btn btn-primary active');
document.getElementById('elephant-btn').setAttribute('class', 'btn btn-primary');
document.getElementById('blowtorch-btn').setAttribute('class', 'btn btn-primary');

function javelinShow() {
  var x = document.getElementById('#javelin');
  var y = document.getElementById('#elephant');
  var n = document.getElementById('#blowtorch');
  n.style = 'display:none';
  y.style = 'display:none;';
  x.style = 'display:flex;';
  document.getElementById('javelin-btn').setAttribute('class', 'btn btn-primary active');
  document.getElementById('elephant-btn').setAttribute('class', 'btn btn-primary');
  document.getElementById('blowtorch-btn').setAttribute('class', 'btn btn-primary');
}

function blowtorchShow() {
  var x = document.getElementById('#javelin');
  var y = document.getElementById('#elephant');
  var n = document.getElementById('#blowtorch');
  x.style = 'display:none';
  y.style = 'display:none;';
  n.style = 'display:flex;';
  document.getElementById('javelin-btn').setAttribute('class', 'btn btn-primary');
  document.getElementById('elephant-btn').setAttribute('class', 'btn btn-primary');
  document.getElementById('blowtorch-btn').setAttribute('class', 'btn btn-primary active');

}

function elephantShow() {
  var x = document.getElementById('#javelin');
  var y = document.getElementById('#elephant');
  var n = document.getElementById('#blowtorch');
  n.style = 'display:none';
  x.style = 'display:none;';
  y.style = 'display:flex;';
  document.getElementById('javelin-btn').setAttribute('class', 'btn btn-primary');
  document.getElementById('elephant-btn').setAttribute('class', 'btn btn-primary active');
  document.getElementById('blowtorch-btn').setAttribute('class', 'btn btn-primary');
}
