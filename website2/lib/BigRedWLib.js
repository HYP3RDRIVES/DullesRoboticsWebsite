// JavaScript source code


// Library for Dulles Robotics Website

// Makes an element and appends it to the parent 
var mkElement = function (type,parent,left,top,width,height,type) {
    var element = document.createElement(type);
    parent.appendChild(element);
    element.style.left = left;
    element.style.top = top;
    element.style.width = width;
    element.style.height = height;
    if (type == undefined || type == null || type == "absolute") {
        element.style.position = "absolute";
    }
    else {
        element.style.position = type;
    }
}

/*

SCREEN POSITIONING FUNCTIONS

*/

//Positions an element to the left on the screen
var leftElementOS = function (element) {
    element.style.left = 0;
}

//Positions an element to the horizontal center on the screen
var centerHElementOS = function (element) {
    element.style.left = screen.width / 2 - element.style.width / 2;
}

//Positions an element to the right on the screen
var rightElementOS = function (element) {
    element.style.left = screen.width - element.style.width;
}

//Positions an element to the top on the screen
var topElementOS = function (element) {
    element.style.top = 0;
}

//Positions an element to the vertical center on the screen
var centerVElementOS = function (element) {
    element.style.top = screen.height / 2 - element.style.height / 2;
}

//Positions an element to the bottom on the screen
var bottomElementOS = function (element) {
    element.style.top = screen.height - element.style.height
}

//Positions an element to the true center on the screen
var centerElementOS = function (element) {
    centerHElementOS(element);
    centerVElementOS(element);
}

//Positions an element on the screen
var posElementOS = function (element ,x , y) {
    element.left = x;
    element.top = y;
}

/*

PARENT POSITIONING FUNCTIONS

*/

//Positions an element to the left on the screen
var leftElementPS = function (element) {
    element.style.left = element.parent.left;
}

//Positions an element to the horizontal center on the screen
var centerHElementPS = function (element) {
    element.style.left = element.parent.width / 2 - element.style.width / 2;
}

//Positions an element to the right on the screen
var rightElementPS = function (element) {
    element.style.left = element.parent.width - element.style.width;
}

//Positions an element to the top on the screen
var topElementPS = function (element) {
    element.style.top = 0;
}

//Positions an element to the vertical center on the screen
var centerVElementPS = function (element) {
    element.style.top = element.parent.height / 2 - element.style.height / 2;
}

//Positions an element to the bottom on the screen
var bottomElementPS = function (element) {
    element.style.top = element.parent.height - element.style.height
}

//Positions an element to the true center on the screen
var centerElementPS = function (element) {
    centerHElementPS(element);
    centerVElementPS(element);
}

//Positions an element around a parent
var posElementPS = function (element,x,y) {
    element.left = x + element.parent.style.left;
    element.top = y + element.parent.style.right;
}

/*

CLASS AND ID FUNCTIONS

*/

//Sets the element ID
var setID = function (element, id) {
    element.id = id;
}

//Adds a class to an element
var addClass = function (element, c) {
    element.addClass(c)
}
