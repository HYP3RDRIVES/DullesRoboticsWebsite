# CoffeeScript - ABOUT

#Load onecup files
eval(onecup.import())


ui.about = ->
    #Button Format : Text, State, Width, Height, Left, Top
    ui.stateMenu("About", "About Navigation", ["Mission Statement","What Do We Do?","Who Can Join?","Brief History","Departments"], ["Mission Statement","What Do We Do?","Who Can Join?","Brief History","Departments"], 35, 235)
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
            text ui.menuStates.get("About")
        switch ui.menuStates.get("About")
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
    
