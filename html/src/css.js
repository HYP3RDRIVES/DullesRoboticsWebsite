// Generated by CoffeeScript 2.3.2
(function() {
  // CoffeeScript - CSS

  //Load onecup files
  eval(onecup.import());

  //CSS - See onecup for more
  css(".navBar", function() {
    border_radius("10px");
    border("4px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 8px #f9f9eb, 0 0 0 12px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    background_color("#f5f5dc");
    return color("#FF0000");
  });

  css(".navButton", function() {
    border_radius("25px");
    border("2px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 4px #ffcccc, 0 0 0 6px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    background_color("#ffb3b3");
    top("50px");
    width("110px");
    height("45px");
    color("#FF0000");
    position("absolute");
    display("inline-block");
    margin("auto");
    return text_align("center");
  });

  css(".navButton:hover", function() {
    border_radius("25px");
    border("2px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    background_color("#ffb3b3");
    top("50px");
    width("110px");
    height("45px");
    color("#FF0000");
    text_align("center");
    return text_shadow("0 0 10px #FF0000;");
  });

  css(".dullesButton", function() {
    border_radius("25px");
    border("2px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 4px #ffcccc, 0 0 0 6px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    background_color("#ffb3b3");
    width("110px");
    height("45px");
    color("#FF0000");
    position("absolute");
    display("inline-block");
    margin("auto");
    return text_align("center");
  });

  css(".dullesButton:hover", function() {
    border_radius("25px");
    border("2px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    background_color("#ffb3b3");
    width("110px");
    height("45px");
    color("#FF0000");
    text_align("center");
    return text_shadow("0 0 10px #FF0000;");
  });

  css(".blogPost", function() {
    border_radius("25px");
    border("4px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 8px #f9f9eb, 0 0 0 12px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    return background_color("#f5f5dc");
  });

  css(".about", function() {
    border_radius("25px");
    border("4px solid #FF0000");
    padding("10px");
    box_shadow("0 0 0 8px #f9f9eb, 0 0 0 12px hsl(0, 100%, 50%)");
    font_family("Impress BT");
    return background_color("#f5f5dc");
  });

  css(".hover-black", function() {
    return background_color("rgba(0,0,0,0)");
  });

  css(".hover-black:hover", function() {
    return background_color("rgba(0,0,0,.3)");
  });

  css(".hover-black-dark", function() {
    return background_color("rgba(0,0,0,.1)");
  });

  css(".hover-black-dark:hover", function() {
    return background_color("rgba(0,0,0,.4)");
  });

  css(".hover-white", function() {
    return background_color("rgba(255,255,255,0)");
  });

  css(".hover-white:hover", function() {
    return background_color("rgba(255,255,255,.3)");
  });

  css(".hover-red", function() {
    return background_color("rgba(255,0,0,.3)");
  });

  css(".hover-red:hover", function() {
    return background_color("rgba(255,0,0,.7)");
  });

  css(".button", function() {
    return background_color("rgba(255,255,255,.1)");
  });

  css(".button:hover", function() {
    return background_color("rgba(0,0,0,.5)");
  });

  css(".menu-button", function() {
    background_color("rgba(255,255,255,.1)");
    text_align("left");
    padding(20);
    font_size(30);
    color("white");
    width("100%");
    return border("none");
  });

  css(".menu-button:hover", function() {
    return background_color("rgba(0,0,0,.5)");
  });

  css(".hover-fade", function() {
    return opacity(".2");
  });

  css(".hover-fade:hover", function() {
    return opacity("1");
  });

}).call(this);
