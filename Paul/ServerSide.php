<htmL>
    <center>
  
      
            <head>
              
              
                    <title>NUKE PROLIFERATION</title>
                <link rel="icon" type="image/jpg" sizes="16x16" href="Image/NukeBlast.jpg">

    <!--meta tags-->
     <meta name="author" content="Dhruba Jyoti Paul">
   <meta name="keywords" content="nuke proliferation, Nuke, The end of the earth, History of Nukes, Modern Nukes">
     <meta name="description" content="What is Nuke Proliferation? Why should we care about it? And what are some possible consequences of it?">
           
        <!--External CSS-->
        <link rel="stylesheet" type="text/css" href="style.css"/>

        
      </head>  

      <body>
        
        <!--Include File for Tracking Site-->
    <?php include_once("analyticstracking.php") ?>
        
        
    
        <!--Include File for Navigation-->
        <? include("Include_Files/include.php"); ?>
        
        
        
        
        
        
        
        
        <!--New Division to leave include file unaffected by body css-->
    <div id="sub_body_for_nav_bar">
      
      
      <h1>SERVER SIDE VARIABLES</h1>

        
      <p>
Server Side variable holds information about headers, paths, and script locations. It gives me information about the user, which
I can use to make my content more relevant for the user. We can advertise according to which region it best fits to. For example, I
can't put a Japanese advertisement for Bangladeshis. I could also save myself from being hacked in some ways. If I didn't have the tracking
services google offers, I could used my server variables to know which browser provides me with the most traffic.
        
        
This is also useful to the user because they are likely to get more relevent content. For example, I could
leave a message in Bangla, for a Bangladeshis visiting my site only. We can even echo out some information for them which they might find useful, like I did below!
        
      </p>
      
      
      
      <h3>Examples :</h3>
    <p>
      <?
      
echo "This is my HTTP_REFERER server side variable : ".$_SERVER['HTTP_REFERER'];
echo "<br>"."<br>";
echo "This is my HTTP_USER_AGENT server side variable : ".$_SERVER['HTTP_USER_AGENT'];
echo "<br>"."<br>";
echo "This is my SCRIPT_NAME server side variable : ".$_SERVER['SCRIPT_NAME'];

          
    ?>
      </p>  

      

      
      
      
      </div>

</body>
      
      
      </html>
