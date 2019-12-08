
//Stuff for adaptive loading
const cores = window.navigator.hardwareConcurrency
console.log("logical cores" + cores/2)
var isChrome = false;
console.log("isChrome " + isChrome);
const networkType = navigator.connection.effectiveType;
const saveData = navigator.connection.saveData;

if (networkType === '2g' || networkType === '3g' || networkType === '4g'){
  isChrome = true;
console.log("Network type is " + networkType + " data saver status " + saveData);
}
else {
  isChrome = false;
}


if (cores < 3){
var slowHardware = true;
}
else{
  var slowHardware = false;
}
/* Network connection stuff
switch (networkType) {
  case '4g':

    break;
  case '3g':

    break;
}
*/

var removal;
var superSlow = false;
if (networkType === '2g'){
  superSlow = true;
}
else{
  superSlow = false;
}
if (networkType === '4g') { //4G and broadband internet
  console.log("normal loading");
  removal = false;


} else { //3G and lower

  console.log("abnormal loading");
//Removes carousel on the home page
  removal = true;

/*
  var newStyle = document.createElement('style');
  newStyle.appendChild(document.createTextNode("\
    @font-face {\
    font-family: " + yourFontName + ";\
    src: url('https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOUuhp.woff2');\
  }
 document.head.appendChild(newStyle);
 */



}

//FIRST PAGE LAZY LOAD LOADER
