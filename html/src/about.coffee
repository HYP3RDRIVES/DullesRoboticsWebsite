# CoffeeScript - ABOUT

#Load onecup files
eval(onecup.import())

ui.aboutState = "Mission Statement"

#Template for About Buttons
ui.aboutButton = (txt, state, w, h, l, t) ->
    div ".dullesButton" , ->
        width w
        height h
        left l
        top t
        if ui.aboutState == state
            box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
            text_shadow "0 0 10px #FF0000;"
        onclick ->
            ui.aboutState = state
        text txt

ui.about = ->
    #Button Format : Text, State, Width, Height, Left, Top
    ui.aboutButton "Mission Statement" , "Mission Statement" , 220 , 45 , 50, 200
    ui.aboutButton "What Do We Do?" , "What Do We Do?" , 220 , 45 , 50, 400
    ui.aboutButton "Who Can Join?" , "Who Can Join?" , 220 , 45 , 50, 600
    ui.aboutButton "Brief History" , "Brief History" , 220 , 45 , window.innerWidth-250, 300
    ui.aboutButton "Departments" , "Departments" , 220 , 45 , window.innerWidth-250, 500
    div ".about" , ->
        top "100px"
        width "600px"
        margin "auto"
        position "relative"
        div ->
            position "relative"
            font_style "italic"
            font_weight "bold"
            text_decoration "underline"
            text_align "center"
            text ui.aboutState
        switch ui.aboutState
            when "Mission Statement"
                div ->
                    text "We hope to foster an interest in STEM to allow our students to become the leaders and problem solvers of tomorrow."
                break
            when "What Do We Do?"
                div ->
                    text "Robotics is a growing market in today's world and building skills in STEM could prove extremely beneficial in the future. Give it a try! If you need more information or have any questions, go to our contacts page.
​The hands-on activities that we do help us build the valuable skills of creativity and applied science. We attend several robotics competitions!"
                break
            when "Who Can Join?"
                div ->
                    text "No prior experience is necessary to join the club. Anyone can join if they hold an interest for robotics. We will have workshops to accommodate for those who don't have any experience with programming, building or robotics. "
                break
            when "Brief History"
                div ->
                    img src: "imgs/DullesRobotics-AboutRobot.jpeg", width: 415, height: 205, ->
                        position "relative"
                        display "block"
                        margin_left "auto"
                        margin_right "auto"
                div ->
                    data  = "<!Break>-Founded in August 2016 by Kenneth Mitra, Karim Karim, and Austin Joseph<!> 
<!Break>-Brian Sonnier is the club sponsor<!>
<!Break>-Won 3rd over at our first competition, USTEM BEST<!>
<!Break>-Made it to the FTC (First Tech Challenge) UIL State Competition in Austin and won a UIL award<!>
"                   
                    splicedText = ui.spliceText(data)
                    for textData,textDataRef in splicedText
                        div ->
                            text textData.text
                break
            when "Departments"
                div ->
                    img src: "imgs/DullesRobotics-AboutDepartments.jpeg", width: 549, height: 1226, ->
                        position "relative"
                        margin "auto"
                        display "block"
                        margin_left "auto"
                        margin_right "auto"
                break
    
