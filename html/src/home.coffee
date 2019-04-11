# CoffeeScript - HOME

#Load onecup files
eval(onecup.import())

ui.home = ->
    #Display Flyer
<<<<<<< HEAD
    img src: "imgs/RoboticsFlyer.jpeg", width: (window.innerHeight+250)/2, height: 2.4*window.innerHeight/3, ->
=======
    img src: "imgs/RoboticsFlyer.jpeg", width: 600, height: 736, ->
>>>>>>> fcc8ecb032f9bbbe02ffaed6974afaa52b3c16a0
        position "relative"
        top "50px"
        display "block"
        margin_left "auto"
        margin_right "auto"
