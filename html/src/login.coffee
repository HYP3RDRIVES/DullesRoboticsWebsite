# CoffeeScript - login

#Load onecup files
eval(onecup.import())

ui.login = ->
    ui.stateMenu("Login", "Login Navigation", ["Login","Register","Forgot Password"], ["Login","Register","Forgot Password"], 35, 150, 3)