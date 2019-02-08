# CoffeeScript - UI

#File for universal UI
window.ui = {}
ui.state = "HOME"

#Load onecup files
eval(onecup.import())


class window.SpecialText
    @type = "Raw"
    @text = "Text"
    
    #Constructor for controlled text
    constructor: (type, text) ->
        @type = type
        @text = text
    
#Convert raw text into special text  
#Special Characters: 
#<!Break>[Text]<!>  --> Creates new line  
ui.spliceText = (text) ->
    
    textArray = []
    tempArray = []
    stack = []
    breakPoints = []
    #Search text for special characters
    #Check for <! first
    for i in [text.length-1..0]
        if (text.substring(i,i+2) == "!>")
            stack.push(i)
    #Check for !> last using a stack


    for i in [stack.length-1..0]
        foundEnd = false
        index = stack[i]
        for j in [index-2..0]
            if (text.substring(j,j+2)== "<!")
                foundEnd = true
                #Since we are cutting out a string, change the indices in the stack to match the new string
                for k in [i-1..0]
                    stack[k] -= index-j+2
               

                tempArray.push(text.substring(j+2,index-1))
                text = text.substring(0,j)+text.substring(index+2,text.length)
                breakPoints.push(j)
                #console.log("Adding break point at: "+j)
                #We already found the tag for the one in the stack, break the loop now to not cut the tag again
                break
        if !foundEnd
            break

    lastIndex = 0
    for i in [0..breakPoints.length-1]
        index = breakPoints[i]
        textArray.push(text.substring(lastIndex,index))
        textArray.push(tempArray[i])
        lastIndex = breakPoints[i]
    
    if (text != "")
        textArray.push(text.substring(lastIndex,text.length))
    splicedText = []

    
    for text,textRef in textArray
        if text.indexOf("Break>") != -1
            text = text.substring(6,text.length)
            splicedText.push(new SpecialText("Break",text))
        else
            splicedText.push(new SpecialText("Raw",text))
    #console.log(splicedText)
    return splicedText
    
ui.navButton = (menu, name, x, y) ->
   return div ".navButton", ->
        left x
        top y
        if ui.state == name
            box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
            text_shadow "0 0 10px #FF0000;"
        onclick ->
            if menu == false
                onecup.goto(name+".html")
                ui.state = name
        text name

#UI Navigation Function 
ui.nav = ->
    navWidth = window.innerWidth-30
    navBorderLength = 12
    div ".navBar", ->
        width navWidth
        position "relative"
        top "10px"
        margin "auto" 
        height "120px"
        #Website Title
        div ->
            position "relative"
            font_family "Impact"
            margin "auto"
            text_align "center"
            text "DULLES ROBOTICS"
            font_size "24px"
        #HOME BUTTON
        ui.navButton(false,"HOME",window.innerWidth-25,25)

        #ABOUT Button
        div ".navButton" , ->
            left (0.50695*window.innerWidth-84.4479+25)/3
            if ui.state == "ABOUT"
                box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
                text_shadow "0 0 10px #FF0000;"
            onclick ->
                onecup.goto("ABOUT.html")
                ui.state = "ABOUT"
            text "ABOUT"
        #BLOG BUTTON
        div ".navButton" , ->
            left 2*(0.50695*window.innerWidth-84.4479+25)/3
            if ui.state == "BLOG"
                box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
                text_shadow "0 0 10px #FF0000;"
            onclick ->
                onecup.goto("BLOG.html")
                ui.state = "BLOG"
            text "BLOG"

        #MEDIA BUTTON
        div ".navButton" , ->
            left 0.50695*window.innerWidth-84.4479
            if ui.state == "MEDIA"
                box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
                text_shadow "0 0 10px #FF0000;"
            onclick ->
                onecup.goto("MEDIA.html")
                ui.state = "MEDIA"
            text "MEDIA"
        #DOCUMENTS BUTTON
        div ".navButton" , ->
            left (window.innerWidth-170-(0.50695*window.innerWidth-84.4479))/3+0.50695*window.innerWidth-84.4479
            if ui.state == "DOCUMENTS"
                box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
                text_shadow "0 0 10px #FF0000;"
            onclick ->
                onecup.goto("DOCUMENTS.html")
                ui.state = "DOCUEMENTS"
            text "DOCUMENTS"
        #CONTACT BUTTON
        div ".navButton" , ->
            left 2*(window.innerWidth-170-(0.50695*window.innerWidth-84.4479))/3+0.50695*window.innerWidth-84.4479
            if ui.state == "CONTACT"
                box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
                text_shadow "0 0 10px #FF0000;"
            onclick ->
                onecup.goto("CONTACT.html")
                ui.state = "CONTACT"
            text "CONTACT"
        #MORE Button
        div ".navButton" , ->
            left window.innerWidth-170
            if ui.state == "MORE"
                box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
                text_shadow "0 0 10px #FF0000;"
            onclick ->
                onecup.goto("MORE.html")
                ui.state = "MORE"
            text "MORE"
            

#Main UI Function
ui.main = ->
    #Background image
    img src: "imgs/sitebg.png", width: window.innerWidth, height: window.innerHeight, ->
        position "absolute"
        background_size "100% 100%"
        display "block"
        top "0"
        overflow "hidden"
        #margin_left "0"
        #margin_right "0"
    #Main Div
    div ->
        position "relative"
        width window.innerWidth
        height window.innerHeight
        overflow_y "auto"
        ui.nav()
        switch ui.state
            when "HOME"
                ui.home()
                break
            when "ABOUT"
                ui.about()
                break
            when "BLOG"
                ui.blogging()
                break
    onecup.refresh()
