<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


<!--
general layout:
<body>
  <topic></topic>
  <topic></topic>
  <topic></topic>
  ...
<body>

with:
<topic>
  <h2>big title</h2>
  <topicgroup></topicgroup>
  <topicgroup></topicgroup>
  <topicgroup></topicgroup>
  ...
</topic>

with:
<topicgroup>
  <topicbox></topicbox>
  <topicbox></topicbox>
  <topicbox></topicbox>
  ...
</topicgroup>

with:

<topicbox>
  <h3>sideways title</h3> OR <h4>smaller Sideways title with bullet</h4>
  <text></text>
  <text></text>
  <text></text>
  ...
</topicbox>

level 3 and 4 are both represented as (non cascaded) topicboxes!

<text> can be list of <p>, <ul>, <ol> or <div>
if it contains <img> it has to be inside a div

images:
<img class="[left|right] [|big|small]" src="img/demo.png"/>

topicbox can have difficulty levels set (as classes): ezy, adv, exp:
<div class="topicbox [ezy|ady|exp]" id="_reveal">
if set, it will be hidden by default.
set an id="_SOMENAME"
can be shown using a text decorator i with according id="SOMENAME"

topicbox can be a placeholder for a video:
<div class="topicbox video" data-url="url.to.video"></div>

textdecorators:
<i> general purpose links use like anchors to show add topicboxes
<u> special purpose links, uniquly programmed
<i id="reveal">some words</i>


-->




<!-- START site content -->
<h1>Setup and Usage of Git, Github and Latex</h1>
<p>
  This tutorial explains how to set up and use git and github to contribute to scientific paper.
</p>
<div id='TOC' name='TOC'><p>The following steps are requred in the exact order:</p></div>

<div class="topic">
  <h2>Overview</h2>
  <div class="topicgroup">
    <div class="topicbox">
      <p>
        We will use two tools to work on scientific papers:
        <ul>
          <li><b>Git (and Github): </b>to manage our files, different versions ect.</li>
          <li><b>Latex: </b>To create the document (as opposed to word)</li>
        </ul>
      </p>
      <p>
        We use Git and Github, because it makes collaboratily working on the same document and managing different revisions and versions from different people soo much easier.<br/>
        Latex offers several advantages over other word processors. Very nice looking formulas, automatic layout, table of contents ect to name a few.
      </p>
    </div>
  </div>
</div>

<div class="topic">
  <h2>Git and Github</h2>
  <div class="topicgroup">

    <div class="topicbox">
      <p>
        Overview: we need a system that takes care of revisions and version conflicts.
        Git backend, git frontend, git command line, github, merge tools
      </p>
    </div>


    <div class="topicbox">
      <h3>Git Backend</h3>
      <p>
        Goto <a href="https://github.com/join">GitHub</a> and register a new free account.
        You first need to <i id="getgh">get a Github account.</i>
      </p>
    </div>
    
    <div class="topicbox ezy" id="_getgh">
      <h4>Github Account</h4>
      <p>
        
      </p>      
    </div>
    <div class="topicbox">
      <h3>Get Git</h3>
      <p>
        Goto <a href="https://github.com/join">GitHub</a> and register a new free account.
        You first need to <i id="getgh">get a Github account.</i>
      </p>
    </div>
    <div class="topicbox">
      <h3>Setup Git</h3>
      <p>
        Goto <a href="https://github.com/join">GitHub</a> and register a new free account.
        You first need to <i id="getgh">get a Github account.</i>
      </p>
    </div>
  </div>
</div>


<div class="topic">
  <h2>Latex</h2>
  <div class="topicgroup">
    <div class="topicbox">
      <p>
        Backend and frontend and pdf viewer.
      </p>
    </div>

    <div class="topicbox">
      <h3>Backend: Miktex</h3>
      <p>
        get and install miktex
      </p>      
    </div>

    <div class="topicbox">
      <h3>PDF viewer</h3>
      <p>
        get a pdf viewer.
      </p>
    </div>
    
    <div class="topicbox">
      <h3>Get Frontend</h3>
      <p>
        Goto <a href="https://github.com/join">GitHub</a> and register a new free account.
        You first need to <i id="getgh">get a Github account.</i>
      </p>
    </div>

  </div>
</div>




<!--
<div class="topic">
  <h2>Latex</h2>
  <div class="topicgroup">
    <div class="topicbox">
      <h3>Light</h3>
      <div>
        <p>
          You can consider light as a bunch of moving <i id="particles">particles</i>. Those particles are sent out by a lightsource and travel with the speed of light. They take the path to the observer, that take them the least amount of time, the shortest path <i id="path">(which is often, but not always a straight line)</i>. But they also take paths that are the longest, or saddle points. This will be explained later in details.
        </p>
      </div>
    </div>
    <div class="topicbox exp" id="_particles">
      <h4>Particle vs Wave</h4>
      <div>
        Wave–particle duality postulates that all particles exhibit both wave and particle properties. A central concept of quantum mechanics, this duality addresses the inability of classical concepts like "particle" and "wave" to fully describe the behavior of quantum-scale objects. Standard interpretations of quantum mechanics explain this paradox as a fundamental property of the Universe.[1]<br>
        For this applications it's sufficiant to only look at light as a particle.
      </div>
    </div>
    <div class="topicbox adv" id="_path">
      <h4>Straight Path</h4>
      <p>
        Usually, light does take a straight path through space, because it's the shortest path between two points. If space is curved thou, this straight path becomes a curved path for an outside observer.<br>
        Compare this to a initally flat rubber sheet. The shortest path on this sheet between diagonal edges is a straight line. If you put an heavy object in the middle of the sheet, it's surface gets expanded and forms a hopper. The shortest path between the two points on this curved surface is now a curved line along the outer parts of this hopper, not the straight line throu the hopper.
      </p>
    </div>
  </div>
  <div class="topicgroup">
    <div class="topicbox">
      <h3>General Relativity</h3>
      <p>
        To put is short, General Realitity states that <i id="mass">masses</i> bend <i id="spacetime">space</i>. (...among <a href="http://en.wikipedia.org/wiki/General_relativity">many other things</a>) Almost like a human on a trampoline bends its surface.<br>
        This effect is really tiny, unless you deal with huge masses like stars (for micro lensing) or even galaxies.
      </p>
    </div>
    <div class="topicbox exp" id="_mass">
      <h4>What is mass?</h4>
      <p>
        There is luminous matter in the universe. This is the one that we can see in our everyday life. If we watch throu a telescope, it's the things we can see. Physicists estimate that the universe consitsts of 17% of luminous matter.[2]
      </p>
      <p>
        Then there is dark matter, which is ca. 80% of the matter in the universe. One can't see it direcly (hence DARK matter), but one can see it's effect on luminous matter.
      </p>
      <p>
        For our purpose we don't distinguish between lumnious and dark matter.
      </p>
    </div>

    <div class="topicbox exp" id="_spacetime">
      <h4>space time</h4>
      <div class="topictext">
        Actually, masses curve space AND time. For this reason, physicists often put those two, space and time, together to a single, 4 dimentional constuct called spacetime.
        <img class="left big" src="img/demo.png"/>
      </div>
    </div>
  </div>
  <div class="topicgroup">
    <div class="topicbox">
      <h3>Conclusions</h3>
      <p>
        blabla
      </p>
    </div>
  </div>
</div>
-->
        
        
<!--
[1] wikipedia
[2] Steven Weinberg: Cosmology. Oxford University Press, Oxford 2008, ISBN 9780198526827, S. 356.
  
-->
        
<!-- END site content -->
        
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        -->
    </body>
</html>
