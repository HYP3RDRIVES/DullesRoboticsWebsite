﻿# CoffeeScript - HOME

#Load onecup files
eval(onecup.import())

ui.home = ->
    #Display Flyer
    img src: "imgs/RoboticsFlyer.jpeg", width: (window.innerHeight+250)/2, height: 2.4*window.innerHeight/3, ->
        position "relative"
        top "50px"
        display "block"
        margin_left "auto"
        margin_right "auto"
