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

        
    
      
      
      
    
      <p><br><h1><b>  Variables in PHP  </b></h1></br></p>
      
      
      


<?php
  
  
  //Simple Function
  
  function simplefunction(){
    echo "<p>This is my simple function, Mr. Page!!! <br><b>//simple function</b></p>";
  }
  
  
  simplefunction();
  
  
  
  
  
    echo "<br><br><br>";

  
  
  
  
  
  
  //local scope
  
  function gradethis(){
    $x="Grade this with Mercy, Mr. Page";
      echo "<p>Variable x inside function is: $x <br><b>//local scope</b></p>";
  }
  
  gradethis();

  
  
  
  echo "<br><br><br>";
  
  
  
  
  //Global Scope
  //With Global Keyword
  $y="Whoohoo! I'm half way through my 'Variable in PHP' assignment!!!";
  
  function halfwaythrough(){
    global $y;
    echo "<p>Variable y outside function is: $y <br><b>//global scope applied within a function with the global keyword</b></p>";
  }
  
  halfwaythrough();
  
  
  
  
    echo "<br><br><br>";

  
  
  
  
  
  //Static Variable
  function myTest() {
    static $f = 0;
    static $g = a;
    echo "<p>Variable f and g inside function is: $f and $g <b>//static variable</b></p>";
    $f++;
    $g++;
}

myTest();
myTest();
myTest();
  
  
  
  ?>
      
    
      
      
      
      </div>

</body>
      
      
      </html>
