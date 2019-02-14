# CoffeeScript - contact.coffee

#Load onecup files
eval(onecup.import())

#Two states - team leaders and site technicians
ui.contactState = "Team Leaders"
ui.otherContactState = "Site Technicians"

ui.contact = ->
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
            text "Contact Dulles Robotics - "+ ui.contactState
        #Button to toggle whether we are contacting the team leaders or site technicians
        div ".dullesButton" , ->
            position "relative"
            #We are flexing our display!
            display "flex"
            margin_left "auto"
            margin_right "auto"
            margin_bottom "25px"
            top "5px"
            width "200px"
            text "Contact #{ui.otherContactState} instead"
            #Switch Modes for Contact
            onclick ->
                #Swap the states
                temp = ui.contactState
                ui.contactState = ui.otherContactState
                ui.otherContactState = temp
        input "#contactName", placeholder:"Name", ->
            display "flex"
            margin "auto"
        input "#contactEmail", placeholder:"Email", ->
            display "flex"
            margin "auto"
        textarea "#contactContent", placeholder:"Type your request here", ->
            width "400px"
            height "400px"
            display "flex"
            margin "auto"
            margin_top "5px"
        div ".dullesButton" , ->
            position "relative"
            margin_top "-30px"
            display "grid"
            margin_left "auto"
            margin_right "auto"
            margin_bottom "55px"
            width "200px"            
            text "Submit Message"
            padding "10px 0px"
            #Send the message
            onclick ->
    
        
    
