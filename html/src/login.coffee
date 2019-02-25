# CoffeeScript - login

#Load onecup files
eval(onecup.import())

ui.login = ->
    
        
    ui.stateMenu("Login", "Login Navigation", ["Login","Register","Forgot Password"], ["Login","Register","Forgot Password"], 35, 150 , 2, true)
    div ".dullesButton" , ->
        position "absolute"
        left "50px"
        top "90px"
        width "220px"
        text "Exit"
        #Exit Login 
        onclick ->
            ui.logging = false
    div ".about" , ->
        top "100px"
        width "600px"
        left "50px"
        margin "auto"
        position "relative"
        div ->
            position "relative"
            font_style "italic"
            font_weight "bold"
            text_decoration "underline"
            text_align "center"
            text ui.menuStates.get("Login")
        switch ui.menuStates.get("Login")
            when "Login"
                form "#LoginForm", action:"/html/php/authenticate.php", method:"POST", ->
                    margin_left "auto"
                    margin_right "auto"
                    display "grid" 
                    input "#loginUserName", name:"username", type:"text", placeholder:"User Name", ->
                        margin_top "30px"
                        display "grid"
                        margin "auto"
                    input "#loginPassword", name:"password", type:"password", placeholder:"Password", ->
                        margin_top "5px"
                        display "grid"
                        margin "auto"
                    div "#loginSubmit.dullesButton2", ->
                        margin_top "5px"
                        height "40px"
                        width "100px"
                        display "inline-grid"
                        margin_left "auto"
                        margin_right "auto"
                        text "Submit"
                        #Submit Data manually because automatic submit is broken
                        onclick ->
                            document.getElementById("LoginForm").submit(-> return false)

        #switch ui.menuStates.get("Login")