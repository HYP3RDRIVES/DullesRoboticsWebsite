# CoffeeScript - HOME

#Load onecup files
eval(onecup.import())

ui.home = ->
    #Display Flyer
    position "relative"
    img src: "imgs/sitebg.png", width: window.innerWidth, height: window.innerHeight, ->
        background_size "cover"
        display "block"
        top "0"
        overflow "hidden"
        margin_left "0"
        margin_right "0"
