<html>
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
    
      
      
      
      
     
      
      
      
      
      
      
        <p>
    
      <?php 
echo "Get Textbox Output :". $_GET['textbox']. "<br />";
foreach ($_GET['checkbox'] as $value){
  echo "Get Checkbox Output : ".$value."<br>";
}
echo "Get Dropdown Output : ". $_GET['dropdown']. "<br />";
echo "Get TextArea Output : ". $_GET['textarea']. "<br />";
echo "Get Radio Output : ". $_GET['radio']. "<br />";
      
      ?>
      
</p>

      
      
      
    <form action="/forms.php" method="get" style="color:white;">
      
      
      
      
      
      <fieldset>
      <legend>This fieldset uses the 'get' variable</legend>
      
      
      
      
        <!--Button Input type-->
        <p>Please click one of the buttons that best suits you before you take this survey!!!</p>
        
        <input type="button" onclick="alert('You are a sincere citizen of the world and your contribution can help change the world.')" value="I care about Nuke Proliferation"><br>

        <input type="button" onclick="alert('I do not know why you are in this site anyways!!! GET LOST!!!')" value="Nuke Proliferation is a pathetic topic"><br><br><br><br>
        

        
        
        
        
        
        
        
        
      <!--Text-->
  Your Name:<br>
  <input type="text" name="textbox"><br><br><br>
      
      
      
      
      <!--BulletPoints-->
        
        <p>Why do you think NUKE PROLIFERATION is Important?</p>
      <input type="checkbox" name="checkbox[]" Value="Can lead to DOOMSDAY">Can lead to DOOMSDAY<br>
      <input type="checkbox" name="checkbox[]" Value="People talk about it">People talk about it<br>
      <input type="checkbox" name="checkbox[]" Value="Just wasting my time">Just wasting my time<br>
      <input type="checkbox" name="checkbox[]" Value="My teacher asked">My teacher asked<br>
        
        

      
      
      
      
      
      <!--Dropdown-->
      <br>
        <p> Will Nuke Proliferation lead to the End of the World???
        <select name="dropdown">
          
        <option value="yes">yes</option>
        <option value="no">no</option>

        </select>
        </p>
        <br>
      
        
        
        
        <!--Text Area-->
             <p>How close do you think the world is going to end?</p>

        <textarea name="textarea" rows="10" cols="50">
        
      </textarea>
      
         
        
        
       <!--Checboxes-->
        <p>
        Are you Fascinatied with the idea of NUKE Proliferation??? <br>
        <input type="radio" name="radio" value="yes">YES<br>
        <input type="radio" name="radio" value="maybe">Maybe<br>
        <input type="radio" name="radio" value="no">NO<br>

        </p>
        
        
        <!--Submit-->
              <input type="submit" name="submit" value="submit">

      </fieldset>
</form>
        
      
      
    
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
         <p>
    
      <?php 
echo "Post Textbox Output :". $_POST['textbox']. "<br />";
foreach ($_POST['checkbox'] as $value){
  echo "Post Checkbox Output : ".$value."<br>";
}
echo "Post Dropdown Output : ". $_POST['dropdown']. "<br />";
echo "Post TextArea Output : ". $_POST['textarea']. "<br />";
echo "Post Radio Output : ". $_POST['radio']. "<br />";
      
      ?>
      
</p>

      
      
      
    <form action="/forms.php" method="post" style="color:white;">
      
      
      
      
      
      <fieldset>
      <legend>This fieldset uses the 'post' variable</legend>
      
      
      
      
        <!--Button Input type-->
        <p>Please click one of the buttons that best suits you before you take this survey!!!</p>
        
        <input type="button" onclick="alert('You are a sincere citizen of the world and your contribution can help change the world.')" value="I care about Nuke Proliferation"><br>

        <input type="button" onclick="alert('I do not know why you are in this site anyways!!! GET LOST!!!')" value="Nuke Proliferation is a pathetic topic"><br><br><br><br>
        

        
        
        
        
        
        
        
        
      <!--Text-->
  Your Name:<br>
  <input type="text" name="textbox"><br><br><br>
      
      
      
      
      <!--BulletPoints-->
        
        <p>Why do you think NUKE PROLIFERATION is Important?</p>
      <input type="checkbox" name="checkbox[]" Value="Can lead to DOOMSDAY">Can lead to DOOMSDAY<br>
      <input type="checkbox" name="checkbox[]" Value="People talk about it">People talk about it<br>
      <input type="checkbox" name="checkbox[]" Value="Just wasting my time">Just wasting my time<br>
      <input type="checkbox" name="checkbox[]" Value="My teacher asked">My teacher asked<br>
        
        

      
      
      
      
      
      <!--Dropdown-->
      <br>
        <p> Will Nuke Proliferation lead to the End of the World???
        <select name="dropdown">
          
        <option value="yes">yes</option>
        <option value="no">no</option>

        </select>
        </p>
        <br>
      
        
        
        
        <!--Text Area-->
             <p>How close do you think the world is going to end?</p>

        <textarea name="textarea" rows="10" cols="50">
        
      </textarea>
      
         
        
        
       <!--Checboxes-->
        <p>
        Are you Fascinatied with the idea of NUKE Proliferation??? <br>
        <input type="radio" name="radio" value="yes">YES<br>
        <input type="radio" name="radio" value="maybe">Maybe<br>
        <input type="radio" name="radio" value="no">NO<br>

        </p>
        
        
        <!--Submit-->
              <input type="submit" name="submit" value="submit">

      </fieldset>
</form>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <!--ENDINGS!-->
    <center><p><a href="mailto:dhrubajyotipaul3@gmail.com" class="Contact"> Contact us </a> </p></center>
    <center><br><p style="font-size: 18px;"> Nuke Proliferation &#169; by Dhruba Jyoti Paul at AISD (Baridhara, Dhaka, Bangladesh) </p></br></center>
      
      
      
    
    
    
    
    
          </div>
  </body>
  
  
  
  
  
  
  
  
</html>