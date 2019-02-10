# CoffeeScript - media.coffee

#Load onecup files
eval(onecup.import())

#Make a menu
#Add twitter widget, facebook widget, instagram widget, discord widget, and remind widget
ui.media = ->
    ui.stateMenu("Media", "Media Navigation", ["Twitter","Facebook","Instagram","Remind"], ["Twitter","Facebook","Instagram","Remind"], 35, 150)
    div ".about" , ->
        top "50px"
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
            text ui.menuStates.get("Media")
        #Sets the div height for widgets
        div "#mediaHeight" , ->

    #ui.mediaButton "Discord" , "Discord" , 220 , 45 , window.innerWidth-250, 500 Make discord section for logged in members only

#Make sure only certain widgets show
ui.mediaCheck = ->
    return if ui.state != "MEDIA"
    if ui.menuStates.get("Media") == "Twitter"
        if ui.twitterDiv?
            ui.twitterDiv.style.visibility = "visible"
            ui.twitterDiv.style.position = "absolute"
            ui.twitterDiv.style.width = "560px"
            ui.twitterDiv.style.marginLeft = "auto"
            ui.twitterDiv.style.marginRight = "auto"
            ui.twitterDiv.style.display = "inline-block"
            
            #Set inside div height
            temp = onecup.lookup("#mediaHeight")
            temp.appendChild(ui.twitterDiv) if temp? and ui.twitterDiv.parentNode != temp
            temp.style.height = ui.twitterDiv.style.height

    #Delete twitter div if we aren't on the twitter state
    else
        if ui.twitterDiv?
            ui.twitterDiv.style.visibility = "hidden"
    
    if ui.menuStates.get("Media") == "Facebook"
        if ui.facebookDiv?
            ui.facebookDiv.style.visibility = "visible"
            ui.facebookDiv.style.position = "absolute"
            ui.facebookDiv.style.left = "120px"
            ui.facebookDiv.style.marginLeft = "auto"
            ui.facebookDiv.style.marginRight = "auto"
            ui.facebookDiv.style.display = "inline-block"
            
            #Set inside div height
            temp = onecup.lookup("#mediaHeight")
            temp.appendChild(ui.facebookDiv) if temp? and ui.facebookDiv.parentNode != temp
            temp.style.height = "500px"

    #Delete facebook div if we aren't on the facebook state
    else
        if ui.facebookDiv?
            ui.facebookDiv.style.visibility = "hidden"

    if ui.menuStates.get("Media") == "Instagram"
        if ui.instagramDiv?
            ui.instagramDiv.style.visibility = "visible"
            ui.instagramDiv.style.position = "absolute"
            ui.instagramDiv.style.width = "550px"
            #ui.instagramDiv.style.left = "120px"
            ui.instagramDiv.style.marginLeft = "auto"
            ui.instagramDiv.style.marginRight = "auto"
            ui.instagramDiv.style.display = "inline-block"
            
            #Set inside div height
            temp = onecup.lookup("#mediaHeight")
            temp.appendChild(ui.instagramDiv) if temp? and ui.instagramDiv.parentNode != temp
            temp.style.height = ui.instagramDiv.style.height

    #Delete instagram div if we aren't on the instagram state
    else
        if ui.instagramDiv?
            ui.instagramDiv.style.visibility = "hidden"

    if ui.menuStates.get("Media") == "Remind"
        if ui.remindDiv?
            ui.remindDiv.style.visibility = "visible"
            ui.remindDiv.style.position = "absolute"
            ui.remindDiv.style.width = "550px"
            ui.remindDiv.style.left = "20px"
            ui.remindDiv.style.marginLeft = "auto"
            ui.remindDiv.style.marginRight = "auto"
            ui.remindDiv.style.display = "inline-block"
            
            #Set inside div height
            temp = onecup.lookup("#mediaHeight")
            temp.appendChild(ui.remindDiv) if temp? and ui.remindDiv.parentNode != temp
            temp.style.height = "320px"

    #Delete remind div if we aren't on the remind state
    else
        if ui.remindDiv?
            ui.remindDiv.style.visibility = "hidden"
