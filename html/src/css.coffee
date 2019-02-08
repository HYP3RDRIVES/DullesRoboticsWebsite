# CoffeeScript - CSS

#Load onecup files
eval(onecup.import())

#CSS - See onecup for more
css ".navBar", ->
    border_radius "10px"
    #border "4px solid #FF0000"
    border_bottom "4px solid #ffffff"
    padding "10px"
    #box_shadow "0 0 0 8px #f9f9eb, 0 0 0 12px hsl(0, 100%, 50%)"
    font_family "Impress BT"
    #background_color "#f5f5dc"
    color "#FF0000"

css ".navButton", ->
    #border_radius "25px"
    #border "2px solid #FF0000"
    #padding "10px"
    #box_shadow "0 0 0 4px #ffcccc, 0 0 0 6px hsl(0, 100%, 50%)"
    font_family "Impress BT"
    #background_color "#ffb3b3"
    top "50px"
    width "110px"
    height "25px"
    color "#FF0000"
    position "absolute"
    display "inline-block"
    margin "auto"
    text_align "center"

css ".navButton:hover", ->
    #border_radius "25px"
    #border "2px solid #FF0000"
    #padding "10px"
    box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
    #font_family "Impress BT"
    #background_color "#ffb3b3"
    #top "50px"
    #width "110px"
    #height "45px"
    #color "#FF0000"
    #text_align "center"
    text_shadow "0 0 10px #FF0000;"

css ".dullesButton", ->
    border_radius "25px"
    border "2px solid #FF0000"
    padding "10px"
    box_shadow "0 0 0 4px #ffcccc, 0 0 0 6px hsl(0, 100%, 50%)"
    font_family "Impress BT"
    background_color "#ffb3b3"
    width "110px"
    height "45px"
    #color "#FF0000"
    position "absolute"
    display "inline-block"
    margin "auto"
    text_align "center"

css ".dullesButton:hover", ->
    border_radius "25px"
    border "2px solid #FF0000"
    padding "10px"
    box_shadow "0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)"
    font_family "Impress BT"
    background_color "#ffb3b3"
    width "110px"
    height "45px"
    #color "#FF0000"
    text_align "center"
    text_shadow "0 0 10px #FF0000;"

css ".blogPost", ->
    border_radius "25px"
    border "4px solid #FF0000"
    padding "10px"
    box_shadow "0 0 0 8px #f9f9eb, 0 0 0 12px hsl(0, 100%, 50%)"
    font_family "Impress BT"
    background_color "#f5f5dc"

css ".about", ->
    border_radius "25px"
    border "4px solid #FF0000"
    padding "10px"
    box_shadow "0 0 0 8px #f9f9eb, 0 0 0 12px hsl(0, 100%, 50%)"
    font_family "Impress BT"
    background_color "#f5f5dc"



css ".hover-black", ->
    background_color "rgba(0,0,0,0)"
css ".hover-black:hover", ->
    background_color "rgba(0,0,0,.3)"

css ".hover-black-dark", ->
    background_color "rgba(0,0,0,.1)"
css ".hover-black-dark:hover", ->
    background_color "rgba(0,0,0,.4)"

css ".hover-white", ->
    background_color "rgba(255,255,255,0)"
css ".hover-white:hover", ->
    background_color "rgba(255,255,255,.3)"

css ".hover-red", ->
    background_color "rgba(255,0,0,.3)"
css ".hover-red:hover", ->
    background_color "rgba(255,0,0,.7)"


css ".button", ->
    background_color "rgba(255,255,255,.1)"
css ".button:hover", ->
    background_color "rgba(0,0,0,.5)"


css ".menu-button", ->
    background_color "rgba(255,255,255,.1)"
    text_align "left"
    padding 20
    font_size 30
    color "white"
    width "100%"
    border "none"
css ".menu-button:hover", ->
    background_color "rgba(0,0,0,.5)"

css ".hover-fade", ->
    opacity ".2"
css ".hover-fade:hover", ->
    opacity "1"
