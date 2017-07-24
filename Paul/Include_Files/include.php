<div id="socialbanner" style="background-color:;">
	<center>		
	</center>
</div>
  



<!--HYPERLINKED-->
    <div id="NavigationBar">
<img style="float:right; padding:15px 20px 0px 0px;"src="Image/socialbanner (1).png"  height="60" width="600">

			<center>
			<ul> <a href="http://paul.byethost14.com/operators.php">Operators </a></ul>	
			<ul> <a href="http://paul.byethost14.com/ServerSide.php">Server Side </a></ul>	
      <ul> <a href="http://paul.byethost14.com">Home </a></ul>
      <ul> <a href="http://paul.byethost14.com/log.php">Log </a></ul>
      <ul> <a href="http://paul.byethost14.com/content.php">Content </a></ul>
      <ul> <a href="http://paul.byethost14.com/about.php">About </a></ul>
      <ul> <a href="http://paul.byethost14.com/contact.php">Contact </a></ul>
      <ul> <a href="http://paul.byethost14.com/variable.php">Variable </a></ul>
			<ul> <a href="http://paul.byethost14.com/forms.php">Forms </a></ul>

			</center>
    </div>


<?php

echo str_repeat("<br>",8);


 //Session Variable
  session_start();
  
  if(isset($_SESSION['count']))
	{
		echo "<center><p>Page Views: ".$_SESSION['count']."<br /></p></center>";
		$_SESSION['count']++;
	}
	else
	{
		$_SESSION['count'] = 1;
		echo "<center><p>Session does not exist</p></center>";
	}
 

?>





<div id="NavigationBar2">

      <ul> <a href="http://paul.byethost14.com/movie.php">Watch a Movie!!! </a></ul>
	
</div>


