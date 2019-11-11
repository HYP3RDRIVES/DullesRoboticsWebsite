

var x = document.getElementById('#javelin');
var y = document.getElementById('#elephant');
var n = document.getElementById('#blowtorch');
var l = document.getElementById('#javelin-btn');
var m = document.getElementById('#elephant-btn');
var c = document.getElementById('#blowtorch-btn');
n.style = 'display:none';
y.style = 'display:none;';
x.style = 'display:flex;';
l.setAttribute('class', 'btn btn-primary active');
m.setAttribute('class', 'btn btn-primary');
c.setAttribute('class', 'btn btn-primary');

function javelinShow() {
  var x = document.getElementById('#javelin');
  var y = document.getElementById('#elephant');
  var n = document.getElementById('#blowtorch');
  n.style = 'display:none';
  y.style = 'display:none;';
  x.style = 'display:flex;';

}

function blowtorchShow() {
  var x = document.getElementById('#javelin');
  var y = document.getElementById('#elephant');
  var n = document.getElementById('#blowtorch');
  x.style = 'display:none';
  y.style = 'display:none;';
  n.style = 'display:flex;';
l.setAttribute('class', 'btn btn-primary');
m.setAttribute('class', 'btn btn-primary');
c.setAttribute('class', 'btn btn-primary active');

}

function elephantShow() {
  var x = document.getElementById('#javelin');
  var y = document.getElementById('#elephant');
  var n = document.getElementById('#blowtorch');
  n.style = 'display:none';
  x.style = 'display:none;';
  y.style = 'display:flex;';
l.setAttribute('class', 'btn btn-primary');
m.setAttribute('class', 'btn btn-primary active');
c.setAttribute('class', 'btn btn-primary');
}
