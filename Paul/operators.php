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

        
    
      
      
      
    
      <p><br><h1><b>  OPERATORS and CONDITIONAL STATEMENTS </b></h1></br></p>
      
      
      

<p>
  
<?php

      $a=$b;
  echo "//This is an example of :".' $a == $b' ;
  echo "<br><br>";
      echo var_dump($a == $b);
  echo "<br><br><br>";
  
  echo "//This is an example of :".' $a === $b' ;
  echo "<br><br>";
      echo var_dump($a === $b);
  echo "<br><br><br>";
  
  echo "//This is an example of :".' $a != $b' ;
  echo "<br><br>";
      echo var_dump($a != $b);
  echo "<br><br><br>";

  
  echo "//This is an example of :".' $a <> $b' ;
  echo "<br><br>";
      echo var_dump($a <> $b);
  echo "<br><br><br>";
  
  echo "//This is an example of :".' $a !== $b' ;
  echo "<br><br>";
      echo var_dump($a !== $b);
  echo "<br><br><br>";
  
  echo "//This is an example of :".' $a < $b' ;
  echo "<br><br>";
      echo var_dump($a < $b);
  echo "<br><br><br>";
  
  echo "//This is an example of :".' $a <= $b' ;
  echo "<br><br>";
      echo var_dump($a <= $b);
  
echo str_repeat("<br>",10);

  
  
  
  
  
  
  
  echo "// This is an example of the IF statement with condition".' $a==$b '.": <br><br>";
  
  if ($a==$b){
    echo "Yay! Variable 'a' equals to variable 'b' !!!";
  }
     
  
  
  
  
  
echo str_repeat("<br>",8);

  
  
  
  
  echo "// This is an example of the IF ELSE with condition".' $a<$b '.": <br><br>";
  if ($a<$b) {
    echo "It shouldn't work!";
} else {
    echo "This is the output of else condition.";
}
    
  
  
  
  
  
echo str_repeat("<br>",8);

  
  
  
  
 
echo "// This is Switch Case!!! <br><br>";
switch ($a) {
    case $b:
        echo "Whoohoo!!! I'm done with my Switch Case!";
        break;
    case $x:
        echo "Your favorite color is blue!";
        break;
    case $y:
        echo "Your favorite color is green!";
        break;
    default:
        echo "No conditions met!";
}
  
echo str_repeat("<br>",8);
  
  
  
      ?>
      
      </p>
      
      
      
      </div>

</body>
      
      
      </html>
