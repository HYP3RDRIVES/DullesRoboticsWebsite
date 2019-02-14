# CoffeeScript - CSS

#Load onecup files
eval(onecup.import())

#CSS - See onecup for more
css ".navBar", ->
    border_radius "10px"
    border_bottom "4px solid #ffffff"
    padding "10px"
    font_family "Quango"
    color "#008080"

css ".navMenu", ->
    border_radius "10px"
    border_bottom "4px solid #ffffff"
    border_top "4px solid #ffffff"
    padding "10px"
    font_family "Quango"
    color "#008080"

css ".navTitle:hover", ->
    text_shadow "0 0 10px #3333ff;"


css ".navButton", ->
    font_family "Quango"
    top "50px"
    width "110px"
    height "25px"
    color "#008080"
    position "absolute"
    display "inline-block"
    margin "auto"
    text_align "center"

css ".navButton:hover", ->
    box_shadow "0 0 0 4px #ccffff, 0 0 0 6px #006666"
    text_shadow "0 0 10px #3333ff"

css ".dullesButton", ->
    font_family "Quango"
    top "50px"
    width "110px"
    height "45px"
    color "#008080"
    position "absolute"
    display "inline-block"
    margin "auto"
    text_align "center"

css ".dullesButton:hover", ->
    box_shadow "0 0 0 4px #ccffff, 0 0 0 6px #006666"
    text_shadow "0 0 10px #3333ff"

css ".blogPost", ->
    border "4px solid #008080"
    padding "10px"
    box_shadow "0 0 0 8px #ccffff, 0 0 0 12px #006666"
    font_family "Quango"
    background_color "#F0F0F0"

css ".about", ->
    border "4px solid #008080"
    padding "10px"
    box_shadow "0 0 0 8px #ccffff, 0 0 0 12px #006666"
    font_family "Quango"
    background_color "#F0F0F0"



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
