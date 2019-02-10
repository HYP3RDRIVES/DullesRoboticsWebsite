# CoffeeScript - BlogMaker
 
#Load onecup files
eval(onecup.import())

#For CSS see CSS.coffee

#Store Blog Info Globally
window.blog = {}
window.blog.blogPosts = []

#Class to manipulate blogs
class window.BlogMaker 
    #Class to store dates
    class window.Date
        @year = 2019
        @month = 2
        @day = 1

        #Parameter constructor for controlled dates
        constructor: (m, d, y) ->
            @year = y
            @month = m
            @day = d
        toString: ->
            return @month+"/"+@day+"/"+@year

    class window.CustomImage
        @src = "imgs/roboticsstraitjesuit2018-2_d600.png"
        @width = "460"
        @height = "283"

        #Parameter consutrctor for controlled images
        constructor: (s, w, h) ->
            @src = s
            @width = w
            @height = h
             
    #Class to store blogposts
    class window.BlogPost 
        @title = "Blog Number 1"
        @date = new Date()
        #All image sources for images in the blog post
        @imgs = []
        @text = "This is a blog post"
        @author = "Jacob Enerio"

        #Parameter constructor for controlled blog posts
        constructor: (t,d,imgs,text, auth) ->
            @title = t
            @date = d
            @imgs = imgs
            @text = text
            @author = auth
                
    @addBlog: (title, date, imgs, text, author) ->
        window.blog.blogPosts.push (new BlogPost(title, date, imgs, text, author))
        return

    #This shouldn't be used - Only for testing 
    @generateTempBlogPost: ->
        data = "Hey guys! This is our first blogpost! :D

So yesterday at 12/16/18 from 9AM-4PM we went to Strait Jesuit for a FRC workshop since it's our first time doing FRC.

We learned a variety of things like
<!Break>-Try to make the robot specialize in one task rather than many tasks<!>
<!Break>-Reduce the degrees of freedom (Ways the robot can move)<!>
<!Break>-Don't try to make the robot move sideways<!>
<!Break>-Use a tank drive system<!>
<!Break>-Try to minimize having parts outside of the bumper frame<!>

Overall, we really enjoyed the experience!"
        @addBlog("STRAIT JESUIT FRC WORKSHOP", new window.Date(12,17,2018), [new CustomImage("imgs/roboticsstraitjesuit2018-2_d600.jpeg",460,283)], data, "Jacob Enerio")
        #@makePosts()

#---UI RELATED FUNCTIONS---
    
#Display a blog post on the website
ui.makePost = (blogPost) ->
    #console.log("Making post")
    splicedText = ui.spliceText(blogPost.text)
    div ".blogPost", ->
        position "relative"
        top "100px"
        width "500px"
        margin "auto"
        overflow_y "scroll"
        #Title div
        div ->
            position "relative"
            font_style "italic"
            font_weight "bold"
            text_decoration "underline"
            text blogPost.title
        #Date div
        div ->
            font_style "italic"
            position "relative"
            text blogPost.date
        #Image div
        div ->
            position "relative"
            img src:blogPost.imgs[0].src, width:blogPost.imgs[0].width, height:blogPost.imgs[0].height, ->
                display "block"
                margin_left "auto"
                margin_right "auto"
        #Content Div
        for textData,textDataRef in splicedText
            div ->
                text textData.text
        div ->
            position "relative"
            font_style "italic"
            text_decoration "underline"
            text "By "+blogPost.author
                
    #onecup.refresh()

#Make blogs posts - Needs to be changed
ui.makePosts = ->
    for blogPost, i in window.blog.blogPosts
        ui.makePost(blogPost)

#Check blogging status
ui.blogging = ->
    if (window.blog.blogPosts.length == 0)
        window.BlogMaker.generateTempBlogPost()
    #Make blog posts if we are on blogging page

        #console.log("Making blog post")
    ui.makePosts()

#setInterval(ui.blogging,100)
#ui.blogging()
            
    

        



