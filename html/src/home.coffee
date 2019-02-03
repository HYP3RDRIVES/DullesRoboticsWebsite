# CoffeeScript - HOME

#Load onecup files
eval(onecup.import())

ui.home = ->
    #Display Flyer
    position "relative"
    img src: "imgs/RoboticsFlyer.png", width: 2*(window.innerWidth-30)/3, height: window.innerHeight, ->
        display "block"
        margin_left "auto"
        margin_right "auto"
