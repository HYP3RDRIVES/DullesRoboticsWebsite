<!DOCTYPE html>
<html style="height:100%;">

<head>
  <title>Web Dev Basics - Dulles Robotics</title>
  <?php include '../res/head.php'; ?>
  <?php
    include '../res/nav.php';
  ?>

<link href="theme.css" rel="stylesheet" />
</head>

<body>
  <style>
  html{
    font-family: -system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,'Helvetica Neue Bold',Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;

  }
  @font-face {
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: normal;
    src: url("../fonts/HelveticaNeueBold.woff") format("woff");
  }

  ::-moz-selection {
    background: rgba(196, 0, 255, 1);
    font-style: italic;
    color:white;
  }

  ::selection {
    background: rgba(196, 0, 255, 1);
    color:white;
  }
  </style>

  <div class="container-fluid text-center" style="height:100%;">
    <div class="container">
    <div class="row"><p><a class="text-light"href="/resources.php">Resources</a> > <a class="text-light" href="/articles/webdev.php">Web Dev</a></div>
</div>
      <div class="card-light post-card text-left animated fadeInUp" style="min-width:30vw;min-height:27vh; max-width:1000px;margin-top:20px;margin-bottom:20px;padding:0px;">

        <div class="card-header" style="margin:0px;padding:40px;">
          <h1>Intro to Web Development</h1>
          <p>Zain Ahmed | 12/12/2019</p>
      </div>
      <div class="card-body" style="padding:40px;">
            <h2>Preface</h2>
            <p>If you are reading this, you've either stumbled upon this article, or show an interest in Website Development. In this article, I will go over the absolute basics for website development, and will go more in-depth in a series of YouTube videos.</p>
            <h2>Setting Up</h2>
            <p>The setup process can vary between workspaces, operating systems, and even languages.</p>
            <p>In the case of the Dulles Robotics Website, which is written in PHP, I personally use WSL (Windows Subsystem for Linux) to run the preview. You can use <span class="code-block-dark"> php -S 0.0.0.0:80</span> to run a site preview in any directory, and it isn't limited just for PHP files. It can run on directories with HTML files only as well. You don't have to use WSL to run the php command, there are other ways such as running a python command <span class="code-block-dark">python -m SimpleHTTPServer 8080</span> for the preview. </p>
            <p>Now for editing the code itself.</p>
            <p> I myself use 3 different text editors, and switch between them depending on what project I am working on. I work on this website mostly in <a class="text-success" href="https://atom.io/" target="_blank">Atom</a>, a free and open-source text editor. There are other alternatves such as <a class="text-primary" href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a> or a paid option: <a class="text-danger" href="https://www.jetbrains.com/phpstorm/" target="_blank">PhpStorm</a> (although you can get it for free from GitHub Student Dev Pack).</p>
            <h2>Building the Site</h2>
            <p>For this demo site that we are building, we will create two files within the same directory (folder), name one <span class="code-block-dark">index.html</span> and the other <span class="code-block-dark">custom.css</span>. The main website code will be in the html file and styling in the css file.</p>
            <p>This section will be divided into 2 parts. </p>
              <ul>
                <li>HTML</li>
                <li>CSS</li>
              </ul>
              <h4>Writing HTML</h4>
              <p>We start HTML files, regardless of whether we are writing in PHP or not, more or less the same way</p>
                  <pre><p style="color:white;font-style:bold;font-family:'Helvetica Neue';font-size:15px;">HTML</p>
                    <code class="language-html">
                  &lt;head&gt;
                    &lt;title&gt;Title Here&lt;/title&gt;
                    &lt;meta name=&quot;description&quot; content=&quot;Write the page description here&quot; /&gt;

                    &lt;!-- This is linking the CSS file into the HTML file --&gt;
                    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/css/custom.css&quot;&gt;

                  &lt;/head&gt;
                  &lt;body&gt;
                  &lt;/body&gt;
                  </code></pre>
                <figcaption class="figure-caption">In the above code block, I wrote the head segment for a basic website with a css file</figcaption>

                   <p>The head is where you can link CSS, JavaScript, and put all of your Meta tags. Meta tags allow you to specify things like the page description</p>

                   <p>Within the body tags go the general elements, such as text and images. For this we use tags such as &lt;h1&gt; or &lt;p&gt; to put text, as well as &lt;img&gt; for images.</p>

                   <pre><p style="color:white;font-style:bold;font-family:'Helvetica Neue';font-size:15px;">HTML</p>
                     <code class="language-html">
                     &lt;img src=&quot;w.png&quot; width=&quot;50&quot; height=&quot;50&quot;&gt;

                     &lt;p&gt;a line of text&lt;/p&gt;
                   </code></pre>
                   <figcaption class="figure-caption">Shown above are examples of writing text with a paragraph tag (&lt;p&gt;) and embedding an image with the img tag.</figcaption>

                   <p>With basic tags, we can begin to write an HTML page, althoguh without CSS.</p>

                   <h5>Example Code:</h5>

                   <pre><p style="color:white;font-style:bold;font-family:'Helvetica Neue';font-size:15px;">HTML</p>
                     <code class="language-html">
                     &lt;!DOCTYPE html&gt;
                  &lt;head&gt;
                    &lt;title&gt;Title Here&lt;/title&gt;
                    &lt;meta name=&quot;description&quot; content=&quot;Write the page description here&quot; /&gt;

                    &lt;!-- This is linking the CSS file into the HTML file --&gt;
                    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/custom.css&quot;&gt;

                  &lt;/head&gt;
                  &lt;body&gt;
                       &lt;h1&gt;Basic HTML Page&lt;/h1&gt;
                     &lt;img src=&quot;w.png&quot; width=&quot;50&quot; height=&quot;50&quot;&gt;

                     &lt;p&gt;a line of text within paragraph tags&lt;/p&gt;

                  &lt;/body&gt;
                </code></pre>


                <h4>Writing CSS</h4>
                <p>Once we write an HTML page, it is now time to link up CSS, which stands for Cascading Style Sheets. CSS allows you to specify styling information for different HTML elements, by using class, id or even element identifiers.</p>
                <p>For the purpose of this article, I will only go through the basics of CSS, and go more advanced in the youtube series.</p>

                <P>Since we already have linked a CSS file at the location <span class="code-block-dark">/custom.css</span> with <span class="code-block-dark">/</span> being the root <b>relative</b> directory. At this point we can begin defining styling for different HTML elements.</p>

                <pre><p style="color:white;font-style:bold;font-family:'Helvetica Neue';font-size:15px;">CSS</p>
                  <code class="language-css">
                  body{
                    background-color:black;
                    color:white;
                  }
                </code></pre>
                <figcaption class="figure-caption">Shown above are example defintions for anything within the &lt;body&gt; tags (basically almost everything visible). More explained below.</figcaption>

                <p style="margin-top:10px;">In the example above, I defined the body "element", with <span class="code-block-dark">background-color</span> setting the colour for the background, and <span class="code-block-dark">color</span> setting the colour for the text itself. Now that we have set our general styling, we can go further and define individual divs. CSS uses classes and Div id's to define divs. You can denote a class vs id with a period <span class="code-block-dark">.classname</span> and id's with <span class="code-block-dark">#idname</span></p>

              </div>
            </div>
          </div>
        </div>
      </div>
  <footer style="position: absolute: bottom;">
    <script type="text/javascript">
      document.getElementById('nav-bar-resource').setAttribute('class', 'active dropdown-item text-white');
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>
    <?php
      include '../res/footer.php';
    ?>
    <?php
      include '../res/cdn.php';
    ?>
    <script type="text/javascript">
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </footer>
</body>
</html>
