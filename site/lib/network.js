
//Stuff for adaptive loading

const networkType = navigator.connection.effectiveType;
const saveData = navigator.connection.saveData;
console.log("Network type is " + networkType + " data saver status " + saveData);

/* Network connection stuff
switch (networkType) {
  case '4g':

    break;
  case '3g':

    break;
}
*/

var removal;

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
