# CoffeeScript - HOME

#Load onecup files
eval(onecup.import())

ui.home = ->
    #Display Flyer
    img src: "imgs/RoboticsFlyer.jpeg", width: 600, height: 736, ->
        position "relative"
        top "50px"
        display "block"
        margin_left "auto"
        margin_right "auto"
