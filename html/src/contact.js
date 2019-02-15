// Generated by CoffeeScript 2.3.2
(function() {
  // CoffeeScript - contact.coffee

  //Load onecup files
  eval(onecup.import());

  //Two states - team leaders and site technicians
  ui.contactState = "Team Leaders";

  ui.otherContactState = "Site Technicians";

  ui.contact = function() {
    return div(".about", function() {
      top("100px");
      width("600px");
      left("50px");
      margin("auto");
      position("relative");
      div(function() {
        position("relative");
        font_style("italic");
        font_weight("bold");
        text_decoration("underline");
        text_align("center");
        return text("Contact Dulles Robotics - " + ui.contactState);
      });
      //Button to toggle whether we are contacting the team leaders or site technicians
      div(".dullesButton", function() {
        position("relative");
        //We are flexing our display!
        display("flex");
        margin_left("auto");
        margin_right("auto");
        margin_bottom("25px");
        top("5px");
        width("200px");
        text(`Contact ${ui.otherContactState} instead`);
        //Switch Modes for Contact
        return onclick(function() {
          var temp;
          //Swap the states
          temp = ui.contactState;
          ui.contactState = ui.otherContactState;
          return ui.otherContactState = temp;
        });
      });
      input("#contactName", {
        placeholder: "Name"
      }, function() {
        display("flex");
        return margin("auto");
      });
      input("#contactEmail", {
        placeholder: "Email"
      }, function() {
        display("flex");
        return margin("auto");
      });
      textarea("#contactContent", {
        placeholder: "Type your request here"
      }, function() {
        width("400px");
        height("400px");
        display("flex");
        margin("auto");
        return margin_top("5px");
      });
      return div(".dullesButton", function() {
        position("relative");
        margin_top("-30px");
        display("grid");
        margin_left("auto");
        margin_right("auto");
        margin_bottom("55px");
        width("200px");
        text("Submit Message");
        padding("10px 0px");
        //Send the message
        return onclick(function() {});
      });
    });
  };

}).call(this);