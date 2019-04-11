# CoffeeScript - documents.coffee

#Load onecup files
eval(onecup.import())

ui.documents = ->
    ui.downloadMenu("Documents", "Documents Navigation", ["files/Interest Meeting Application.docx","files/Robotics Sponsorship Packet.docx","files/GitHub Instructions for Dulles Robotics.docx"], ["Interest Meeting Form","Sponsorship Packet","
GitHub and Android Studio Download Instructions"], window.innerWidth/2-110, 235)
    

