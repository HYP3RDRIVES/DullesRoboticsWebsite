# CoffeeScript - UI

#File for universal UI

window.ui = {}
ui.state = "HOME"
ui.logging = false
ui.menuStates = new Map()
ui.menuShows = new Map()
ui.dropDowns = new Map()

# --- Move UI Stuff ---
ui.enlargeables = new Map()
ui.shiftables = new Map()

# --- Custom Stuff ---
ui.customizables = new Map()
ui.customEvents = new Map()

#No conflict plz
#jQuery.noConflict()

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

#Vertically Centers Text within div - To be implemented
ui.vertCentTXT = (txt) ->

#Dispatches events to multiple divs
ui.dispatchEvents = (divs,eventName) ->
    for i,index in divs
        div = document.getElementById(i)
        console.log(i)
        div.dispatchEvent(ui.customEvents.get(eventName)) if div

#Makes div enlargeable by mousing over and shrinks on leaving
ui.enlargeable = (divName) ->
    div = document.getElementById(divName)
    return if div == undefined or !div?
    return if ui.enlargeables.has(divName)
    div.addEventListener "mouseenter",->
        div.style.transition = "all 0.5s ease-out"
        div.style.transform = "scale(1.5,1.5)"

    div.addEventListener "mouseleave", ->
        div.style.transition = "all 0.5s ease-out"
        div.style.transform = "scale(1,1)"

    ui.enlargeables.set(divName,true)

    return true
    
ui.redirectFunction = (page) ->
    return redirect = ->
        window.location.assign(page)
        
#Returns a function that redirects to a certain section of a page when called
ui.redirectTPS = (page,type,section) ->
    return redirect = ->
        window.location.assign(page)
        ui.menuStates.set(type,section)

        
#Makes div moveable by mousing over and shifts back on leaving
ui.shiftable = (divName, leftShift, topShift) ->
    div = document.getElementById(divName)
    return if div == undefined or !div?
    return if ui.shiftables.has(divName)
    div.addEventListener "mouseenter", ->
        div.style.transition = "all 0.5s ease-out"
        div.style.left = (div.offsetLeft + leftShift) + "px"
        div.style.top = (div.offsetTop + topShift) + "px"
    div.addEventListener "mouseleave", ->
        div.style.transition = "all 0.5s ease-out"
        div.style.left = (div.offsetLeft - leftShift) + "px"
        div.style.top = (div.offsetTop - topShift) + "px"
    
    ui.shiftables.set(divName,true)

    return true

#Makes a ui div have a customizable function
ui.customizableByEvent = (divName, eventName, func) ->
     div = document.getElementById(divName)
     return if div == undefined or !div?
     return if continous == false and ui.customizables.has(divName)
     console.log("#{divName}, #{eventName}, #{func}")
     div.addEventListener eventName, ->
        console.log(eventName + " dispatched!")
        func(div)
     ui.customizables.set(divName,true)
     return true

ui.customizable = ->
#Changes a UI state
ui.stateButton = (txt, type, state, w, h, l, t, z, background) ->
    button = div "##{type}#{state}.dullesButton" , ->
        position "fixed"
        width w
        height h
        left l
        top t
        z_index z
        transition "all 0.2s ease-out"
        #if background == true
            ### Deprecated -> Don't Use
            ui.customizable(type+state, type, true, func = (mDiv) ->
                bg = document.getElementById("#{type}Background")
                if bg? and bg != undefined and mDiv? and mDiv != undefined
                    console.log("Border Found!")
                    bgBorder = bg.getBoundingClientRect()
                    ourBorder = mDiv.getBoundingClientRect()
                    console.log(ourBorder)
                    console.log(bgBorder)
                    console.log(bgBorder.bottom-ourBorder.bottom)
                    if bgBorder.bottom-ourBorder.bottom <= 0
                        mDiv.style.opacity = "0"
                    else
                        mDiv.style.opacity = "1")
                                                ###
        if ui.menuShows.get(type) != false
            opacity "1"
        else 
            opacity "0"
        if ui.menuStates.get(type) == state
            box_shadow "0 0 0 4px #ccffff, 0 0 0 6px #006666"
            text_shadow "0 0 10px #3333ff"
        onclick ->
            ui.menuStates.set(type,state)
        text txt
    return button

#Makes a state menu that can change a state of the ui
#states and stateNames should be the same length
ui.stateMenu = (type, txt, states, stateNames, x, y, z, background) ->
    #Make sure our menuStates has our state first
    #If it doesn't then add it
    if !ui.menuStates.has(type)
        ui.menuStates.set(type,states[0])
    if !ui.menuShows.has(type)
        ui.menuShows.set(type,true)
    if !ui.customEvents.has(type)
        event = new Event(type)
        ui.customEvents.set(type,event)
    buttons = []
    if background == true
        div "##{type}Background.menu", ->
            #console.log("Making Background")
            left x-5
            top y-5
            width 260
            height if ui.menuShows.get(type) == true then (60+states.length*59) else 60
            position "absolute"
        ### Deprecated
        div "##{type}Cover.menu" , ->
            left x-5
            top if ui.menuShows.get(type) == true then y-55+states.length*59 else y+55
            width 260
            height if ui.menuShows.get(type) == true then 0 else states.length*59
            z_index "#{z+1}"
            position "absolute"
            border "hidden"
            background_color "rgba(0,0,0,0.8)"
                                                ###
    div "##{type}.navMenu" , ->
        #Make a ui state for each state parameter
        for state,index in states
            ui.stateButton(stateNames[index], type, state, 220, 45, x + 15, y + 58 + index * 58, z, background)
            if buttons.length != states.length
                buttons.push(type+state)
        left x
        top y
        z_index z
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
                    #ui.dispatchEvents(buttons,type)

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

#Downloads a file
ui.dropDownButton = (txt, type, func, w, h, l, t) ->
    div ".dullesButton .secondfont", ->
        position "fixed"
        width w
        height h
        left l
        top t
        onclick ->
            func()
        text txt

#Makes a drop down menu
ui.dropDownMenu = (type, txt, functions, buttonNames, x, y, mainFunc) ->
    if !ui.dropDowns.has(type)
        ui.dropDowns.set(type,true)
    div ".navButton" , ->
        #Make a ui state for each state parameter
        if ui.menuShows.get(type) != false
            for func,index in functions
                ui.dropDownButton(buttonNames[index], type, func, 110, 25, x + 15, y + 58 + index * 58)
        left x
        top y
        #width 250
        #position "fixed"
        #text_align "center"
        div ".navTitle", ->
            text txt
            height "inherit"
            #Toggle menu on hover
            onmouseover ->
                ui.dropDowns.set(type,true)
            onmouseout ->
                ui.dropDowns.set(type,false)
            #Do main function if main button clicked
            onclick ->
                mainFunc()
#LoginScreen
makeLoginScreen = ->
    

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
                window.location.assign(name+".html")
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
            position "absolute"
            font_family "NavButtonFont"
            top 0
            left 0
            right 0
            bottom 0
            margin "auto"
            text_align "center"
            text "DULLES ROBOTICS"
            font_size "60px"
        img "#FRCLogo", width: "60px", height: "60px", src:"imgs/FRCTeamLogo.jpeg", ->
            position "relative"
        img "#BigRedLogo", width: "60px", height: "60px", src:"imgs/BigRedTeamLogo.jpeg", ->
            position "relative"
        img "#RoboVikesLogo", width: "60px", height: "60px", src:"imgs/RoboVikesTeamLogo.jpeg", ->
            position "relative"
        #HOME BUTTON
        div "#navButtonContainer", ->
            margin "auto"
            width 840
            position "relative"
            #position "absolute"
            
            #Temporary variable
            temp = []

            ui.navButton(false,"HOME",0, 78)



            #ABOUT Button
            #ui.navButton(false,"ABOUT",10, 78)
            temp = [ui.redirectTPS("ABOUT.html","ABOUT","Mission Statement")]
            ui.dropDownMenu("ABOUT","ABOUT",temp,["Mission Statement","What Do We Do?","Who Can Join?","Brief History","Departments"],10,78,ui.redirectFunction("ABOUT.html"))

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
    
        #LOGIN Button
        div "#LoginButtonContainer", ->
            position "absolute"
            top "10px"
            right "25px"
            width "20px"
            height "20px"
            z_index "2"
            i "#LoginButton.fas fa-rocket", ->
                font_size "30px"
                onmousedown ->
                    ui.logging  = true

        makeLoginScreen()
                    


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
    #Main Container Div
    div "#MainContainer" , ->
        #Main Div - Holds all main divs
        div "#MainDiv" , ->
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
                    ui.contact() if ui.contact? 
                    break
     if ui.logging == true

        div ->
            #console.log("Editing div")
            ui.login()
            position "-webkit-fixed"
            position "fixed"
            left 0
            top 0
            width window.innerWidth
            height window.innerHeight
            z_index "4"
            background_color "rgba(0, 13, 26,0.8)"       
            

#Reappend an element to onecup
ui.putOnOnecup = (div) ->
    ui.onecup.appendChild(div)

#Make sure widgets aren't on unless we are in the correct state
checker = ->
    #Enlarge everything we want to enlarge
    ui.enlargeable("FRCLogo")
    ui.enlargeable("BigRedLogo")
    ui.enlargeable("RoboVikesLogo")
    ui.shiftable("LoginButtonContainer",-10,0)
    ui.twitterDiv = document.getElementById("twitter-widget-0") if !ui.twitterDiv?
    ui.facebookDiv = document.getElementById("facebook") if !ui.facebookDiv?
    ui.instagramDiv = document.getElementById("instagram") if !ui.instagramDiv?
    ui.remindDiv = document.getElementById("remind101-widget-0") if !ui.remindDiv?
    if ui.state != "MEDIA"
        ui.twitterDiv.style.visibility = "hidden" if ui.twitterDiv?
        ui.facebookDiv.style.visibility = "hidden" if ui.facebookDiv?
        ui.instagramDiv.style.visibility = "hidden" if ui.instagramDiv?
        ui.remindDiv.style.visibility = "hidden" if ui.remindDiv?
    #Add stuff to onecup if not added
    ui.onecup.appendChild(ui.twitterDiv) if ui.twitterDiv? and ui.twitterDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.onecup.appendChild(ui.facebookDiv) if ui.facebookDiv? and ui.facebookDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.onecup.appendChild(ui.instagramDiv) if ui.instagramDiv? and ui.instagramDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.onecup.appendChild(ui.remindDiv) if ui.remindDiv? and ui.remindDiv.parentNode != ui.onecup and ui.state != "MEDIA"
    ui.mediaCheck() if ui.mediaCheck?

#Check every 30 ms
setInterval(checker, 30)
