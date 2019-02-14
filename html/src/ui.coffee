# CoffeeScript - UI

#File for universal UI

window.ui = {}
ui.state = "HOME"
ui.menuStates = new Map()
ui.menuShows = new Map()
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

#Vertically Centers Text within div
ui.vertCentTXT = (txt) ->


#Changes a UI state
ui.stateButton = (txt, type, state, w, h, l, t) ->
    div ".dullesButton" , ->
        position "fixed"
        width w
        height h
        left l
        top t
        if ui.menuStates.get(type) == state
            box_shadow "0 0 0 4px #ccffff, 0 0 0 6px #006666"
            text_shadow "0 0 10px #3333ff"
        onclick ->
            ui.menuStates.set(type,state)
        text txt

#Makes a state menu that can change a state of the ui
#states and stateNames should be the same length
ui.stateMenu = (type, txt, states, stateNames, x, y) ->
    #Make sure our menuStates has our state first
    #If it doesn't then add it
    if !ui.menuStates.has(type)
        ui.menuStates.set(type,states[0])
    if !ui.menuShows.has(type)
        ui.menuShows.set(type,true)
    div ".navMenu" , ->
        #Make a ui state for each state parameter
        if ui.menuShows.get(type) != false
            for state,index in states
                ui.stateButton(stateNames[index], type, state, 220, 45, x + 15, y + 58 + index * 58)
        left x
        top y
        width 250
        position "fixed"
        text_align "center"
        div ".navTitle", ->
            text txt
            height "inherit"
            #Toggle menu on click
            onclick ->
                if ui.menuShows.get(type) != false
                    ui.menuShows.set(type,false)
                else
                    ui.menuShows.set(type,true)

#Downloads a file
ui.downloadButton = (txt, type, state, w, h, l, t) ->
    div ".dullesButton .secondfont", ->
        position "fixed"
        width w
        height h
        left l
        top t
        onclick ->
            onecup.newTab(state)
        text txt


#Makes a download menu that can download files
#fileNames and buttonNames should be the same length
ui.downloadMenu = (type, txt, fileNames, buttonNames, x, y) ->
    if !ui.menuShows.has(type)
        ui.menuShows.set(type,true)
    div ".navMenu" , ->
        #Make a ui state for each state parameter
        if ui.menuShows.get(type) != false
            for file,index in fileNames
                ui.downloadButton(buttonNames[index], type, file, 220, 45, x + 15, y + 58 + index * 58)
        left x
        top y
        width 250
        position "fixed"
        text_align "center"
        div ".navTitle", ->
            text txt
            height "inherit"
            #Toggle menu on click
            onclick ->
                if ui.menuShows.get(type) != false
                    ui.menuShows.set(type,false)
                else
                    ui.menuShows.set(type,true)


#Makes a nav bar button
ui.navButton = (menu, name, x, y) ->
   return div ".navButton", ->
        left x
        top y
        if ui.state == name
            box_shadow "0 0 0 4px #ccffff, 0 0 0 6px #006666"
            text_shadow "0 0 10px #3333ff"
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
        font_family "NavButtonFont"
        top "10px"
        margin "auto"
        height "120px"
        #Website Title
        div ->
            position "relative"
            font_family "NavButtonFont"
            margin "auto"
            text_align "center"
            text "DULLES ROBOTICS"
            font_size "60px"

        #HOME BUTTON
        ui.navButton(false,"HOME",window.innerWidth-445, 40)

        #ABOUT Button
        ui.navButton(false,"ABOUT",window.innerWidth-325, 40)

        #BLOG BUTTON
        ui.navButton(false,"BLOG",window.innerWidth-205, 40)

        #MEDIA BUTTON
        ui.navButton(false,"MEDIA",window.innerWidth-510, 78)

        #DOCUMENTS BUTTON
        ui.navButton(false,"DOCUMENTS",window.innerWidth-390, 78)

        #CONTACT BUTTON
        ui.navButton(false,"CONTACT",window.innerWidth-270, 78)

        #MORE Button
        ui.navButton(true,"MORE",window.innerWidth-150, 78)


#Main UI Function
#Use window.body so we don't see page flickering - Onecup.refresh flickers
window.body = ->

    #Background image
    ###img src: "imgs/sitebg.png", width: window.innerWidth, height: window.innerHeight, ->
        position "absolute"
        background_size "100% 100%"
        display "block"
        top "0"
        overflow "hidden"
        #margin_left "0"
        #margin_right "0"###

    if !ui.onecup?
        ui.onecup = onecup.body
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
            when "MEDIA"
                ui.media()
                break
            when "DOCUMENTS"
                ui.documents()
                break
            when "CONTACT"
                ui.contact()
                break

#Reappend an element to onecup
ui.putOnOnecup = (div) ->
    ui.onecup.appendChild(div)

#Make sure widgets aren't on unless we are in the correct state
checker = ->
    ui.twitterDiv = document.getElementById("twitter-widget-0") if !ui.twitterDiv?
    ui.facebookDiv = document.getElementById("facebook") if !ui.facebookDiv?
    ui.instagramDiv = document.getElementById("instagram") if !ui.instagramDiv?
    ui.remindDiv = document.getElementById("remind101-widget-0") if !ui.remindDiv?
    if ui.state != "MEDIA"
        ui.twitterDiv.style.visibility = "hidden" if ui.twitterDiv
        ui.facebookDiv.style.visibility = "hidden" if ui.facebookDiv
        ui.instagramDiv.style.visibility = "hidden" if ui.instagramDiv
        ui.remindDiv.style.visibility = "hidden" if ui.remindDiv
    #Add stuff to onecup if not added
    ui.onecup.appendChild(ui.twitterDiv) if ui.twitterDiv? and ui.twitterDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.onecup.appendChild(ui.facebookDiv) if ui.facebookDiv? and ui.facebookDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.onecup.appendChild(ui.instagramDiv) if ui.instagramDiv? and ui.instagramDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.onecup.appendChild(ui.remindDiv) if ui.remindDiv? and ui.remindDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.mediaCheck() if ui.mediaCheck?

#Check every 30 ms
setInterval(checker, 30)
