<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lesson</title>
	<link rel="stylesheet" href="/css/lesson_style.css">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">


<link rel="icon" href="/images/learn1.png">
</head>
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img class="bcd" src="/images/learn1.png">

      <label class="logo">Learn2Code</label>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a class="active" href="/course/">Courses</a></li>
        <li><a href="/challenge/">Challenges</a></li>
        <li><a href="/editor/" >Editor</a></li>
        <li><a href="/discussion/" >Discuss</a></li>
        <?php
        if (isset($_SESSION['id']))
        {?>
        <li><a href="/dashboard/">Dashboard</a></li>
        <li><a href="/login/logout.php" >Logout</a></li>
      <?php } ?>
        <?php
        if (!isset($_SESSION['id']))
        {?>
        <li><a href="/login/" >Login/Register</a></li>
      <?php } ?>
      </ul>
    </nav>
	<br>
	<div class="np" style="margin-left:200px; margin-right:200px; margin-bottom: 50px;">
	<h2>
		<?php

		$last=$_GET['last'];
		$p=$_GET['id']-1;
		$n=$_GET['id']+1;
		$pl=$_GET['lid']-1;
		$nl=$_GET['lid']+1;
		$total=$_GET['total'];
		if($_GET['lid']==$last+1)
		{
			$last++;
			$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
			$sql="update opts set last=".$last." where uid=".$_SESSION['id']." and cid=(select coid from topic where tid=(select toid from lesson where lid=".$_GET['id']."));";
			$result=mysqli_query($conn,$sql);
		}
		if($_GET['id']==$total)
		{
			$sql="update opts set last=".$total." where uid=".$_SESSION['id']." and cid=(select coid from topic where tid=(select toid from lesson where lid=".$_GET['id']."));";
			$result=mysqli_query($conn,$sql);
		}
			if($_GET['lid']!=1)
			{
				print '<a class="npa" href="/course/lesson.php?id='.$p.'&lid='.$pl.'&total='.$total.'&last='.$last.'">Previous</a>';

			}
			if($_GET['lid']!=$total)
			{
				print'	 <a class="npa" style="float: right;" href="/course/lesson.php?id='.$n.'&lid='.$nl.'&total='.$total.'&last='.$last.'">Next</a></h2>';
			}
	?>

 </div><br>
<?php
$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
$sql1="select notes from lesson where lid='".$_GET['id']."'";
$result1=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result1);
if($resultcheck>0)
{
	while ($row=mysqli_fetch_assoc($result1))
	{
		print $row['notes'];
	}
}

 ?>
 <div class="np" style="margin-left:200px; margin-right:200px;">
 <h2>
	 <?php
	 if($_GET['lid']!=1)
	 {
		 print '<a class="npa" href="/course/lesson.php?id='.$p.'&lid='.$pl.'&total='.$total.'&last='.$last.'">Previous</a>';
	 }
	 if($_GET['lid']!=$total)
	 {
		 print'	 <a class="npa" style="float: right;" href="/course/lesson.php?id='.$n.'&lid='.$nl.'&total='.$total.'&last='.$last.'">Next</a></h2>';
	 }
	 if($_GET['lid']==$total)
	 {
		 print' <a class="npa" style="float: right;" href="/dashboard/#certificates">Get Certificate</a></h2>';
	 }

?>
	 </div>
	 <div class="footer" style="display:flex;">
<div class="row" style="margin-top:20px; display:inline-block;">
  <div class="column1" style="background-color:rgb(43, 43, 43);">
    <h2>About</h2><br>
    <p style="text-align: left;padding-left: 20px;">Learn2Code is an online platform to help the upcoming programmers to improve their coding skills. Learn2Code helps programmers build
      concelts in different programming languages that include C, C++, C#, Java, JavaScript, Python, PHP and Ruby.
      <a class="anchor1" href="/course/">Learn more</a>
    </p>
  </div>
  <div class="column2" style="background-color:rgb(43, 43, 43);">
    <h2>Quick Links</h2>
    <a class="anchor" href="/">Home</a><br>
    <a class="anchor" href="/about/">About Us</a><br>
    <a class="anchor" href="/course/">Courses</a><br>
    <a class="anchor" href="/challenge/">Challenges</a><br>
    <a class="anchor" href="/editor/">Editor</a><br>
    <a class="anchor" href="/discussion/">Discuss</a><br>

  </div>
</div>

</div>
<div class="footer" style="background: rgb(43, 43, 43);display:grid;"><hr><p style="padding-bottom: 17px; margin-top:0;"> Copyright &copy; 2020 | Learn2Code | All Rights Reserved</p></div>
</body>
</html>
