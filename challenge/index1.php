<!DOCTYPE html>
<html>
<head>
	<title>Challenges</title>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="/css/challenge.css">
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
        <li><a href="/course/">Courses</a></li>
        <li><a class="active" href="/challenge/">Challenges</a></li>
        <li><a href="/editor/" >Editor</a></li>
        <li><a href="/discussion/">Discuss</a></li>
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
    <div class="container">
			<?php
			$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
			$sql="SELECT * FROM challenge WHERE chid=".$_GET['id']."";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
				print "<div class=\"heading\"><h1>".$row['chnm']."</h1></div>";
			}
			?>
    </div>
    <div class="title1">
    	Problem
    </div>
    <div class="block">
			<?php
			// $conn=mysqli_connect('127.0.0.1','root','','miniproject');
			$sql="SELECT * FROM challenge WHERE chid=".$_GET['id']."";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result))
			{
				print($row['body']);
				$input=$row['input'];
				$output=$row['output'];
			}
			?>
		</div>
		<br><br>
		<form align='center' method="post" action='/challenge/test.php'>
			<textarea rows = "10" cols = "60" name = "code" placeholder="Enter Code..."></textarea><br>
			<input type="hidden" name="cid" value="<?php echo $_GET['id']; ?>" />
			<input type="hidden" name="input" value="<?php echo $input; ?>" />
			<input type="hidden" name="output" value="<?php echo $output; ?>" />
			<select name="lang">
				<option value="PYTHON">Python</option>
				<option value="C">C</option>
				<option value="JAVA">Java</option>
				<option value="CPP">CPP</option>
				<option value="PHP">PHP</option>
			</select>
			<input type="submit" name="" value="Submit Code">
		</form>
		<div class="footer">
<div class="row">
  <div class="column1" style="background-color:rgb(43, 43, 43);">
    <h2>About</h2>
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
<div class="footer" style="background: rgb(43, 43, 43);;"><hr><p style="padding-bottom: 17px; margin:0;"> Copyright &copy; 2020 | Learn2Code | All Rights Reserved</p></div>
</body>
</html>
