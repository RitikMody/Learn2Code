<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location:/login/");
	}
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Challenges</title>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <!-- <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'> -->
    <link rel="stylesheet" href="/css/challenges.css">
    <link rel="icon" href="/images/learn1.png">
	<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
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
    <div class ="head block1" style="width:70%;height:200px">
     <p><img src="/images/ci1.png" style="float:right;width:300px;">
      <div class="chalTitle">Challenges</div>
     </p>
    </div>
    <div class="block" style="width:70%;">
      <div class="courseModule m1">
        <p><span>EASY</span></p>
      </div>
			<?php
                $conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
				$sql="SELECT * FROM challenge WHERE diff='Easy'";
				$result=mysqli_query($conn,$sql);
			  while ($row=mysqli_fetch_assoc($result)) {
			    print '<div class="courseLesson">
	          <a href="/challenge/index1.php?id='.$row['chid'].'">
	              <div class="lessonLeft">
	                  <span class="lessonNumber"> '.$row['chid'].' </span>
	                  <span class="courseLessonTitle">'.$row['chnm'].'</span>
	              </div>
	          </a>
	        </div>';
			  }
			 ?>
<!-- <a href="http://localhost/phplessons/challeng/index1.php?id='.$row['chid'].'> -->
      <div class="courseModule m2">
        <p><span>MEDIUM</span></p>
      </div>
			<?php
			$sql="SELECT * FROM challenge WHERE diff='Medium'";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
				print '<div class="courseLesson">
					<a href="/challenge/index1.php?id='.$row['chid'].'">
							<div class="lessonLeft">
									<span class="lessonNumber"> '.$row['chid'].' </span>
									<span class="courseLessonTitle"> '.$row['chnm'].' </span>
							</div>
					</a>
				</div>';
			}
			 ?>
      <div class="courseModule m3">
        <p><span>HARD</span></p>
      </div>
			<?php
			$sql="SELECT * FROM challenge WHERE diff='Hard'";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
				print '<div class="courseLesson">
					<a href="/challenge/index1.php?id='.$row['chid'].'">
							<div class="lessonLeft">
									<span class="lessonNumber"> '.$row['chid'].' </span>
									<span class="courseLessonTitle"> '.$row['chnm'].' </span>
							</div>
					</a>
				</div>';
			}
			 ?>
    </div>
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
