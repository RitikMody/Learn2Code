<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location:/login/");
	}
$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
	$s="select uid from opts where uid=".$_SESSION['id']." and cid=2";
	$r=mysqli_query($conn,$s);
	if(!mysqli_num_rows($r))
	{
		$sql="insert into opts values(".$_SESSION['id'].",2,0,'NC')";
		$result=mysqli_query($conn,$sql);
	}		?>
<!DOCTYPE html>
<html>
<head>
	<title>Java</title>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="icon" href="/images/learn1.png">
    <link rel="stylesheet" href="/css/coursepage.css">

	    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
	<div class="courseOverview block">
    <img src="/images/java.png" alt="Java Tutorial" class="courseIcon">
    <div class="courseDescription">
        <h1>Java Tutorial</h1>
        <p>Learn2Code's <strong>Learn Java</strong> is a comprehensive guide to one of the most popular programming languages in the world.</p>
<p>The Learn Java lessons are fast, easy, and effective; the tutorial is set up so that you can complete the work in less than five hours. No prior programming experience is needed.</p>
<p>Once you have completed the course, you will have learned <strong>object-oriented Java programming</strong> and have the ability to write clear and valid code in almost no time at all.</p>
<p>So don't hesitate. Begin our step-by-step tutorial today, and learn a new skill!</p>
<p>Become a <strong>Java developer</strong> – start Learn2Code's FREE tutorial today!!</p>
<p>Unlock levels, collect points, and compete with your peers around the world.&nbsp;Learn and have fun with Learn2Code!</p>
    </div>
</div>
  <div class="courseLessons block">
		<?php
		$module=0;
		$lesson=0;
$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
		$sq="select count(*) from lesson where toid IN(select tid from topic WHERE coid=2);";
		$resul=mysqli_query($conn,$sq);
		$total=mysqli_fetch_assoc($resul);
		$sql1="select cid from course where cnm='Java'";
		$result1=mysqli_query($conn,$sql1);
		$resultcheck=mysqli_num_rows($result1);
		if($resultcheck>0)
		{
			$row=mysqli_fetch_assoc($result1);
			$id=$row['cid'];
		}
		$sql2="select * from topic where coid=$id";
		$result2=mysqli_query($conn,$sql2);
		$resultcheck=mysqli_num_rows($result2);
		if($resultcheck>0)
	  {
			$count=0;

	    while ($row=mysqli_fetch_assoc($result2))
	    {
				print "<div class=\"courseModule\">
		        <p><span>Module ".++$module.":</span> ".$row['tnm']."</p>
		    </div>";
				$sql3="select * from lesson where toid=".$row['tid']."";
				$result3=mysqli_query($conn,$sql3);
				$resultcheck1=mysqli_num_rows($result3);
				if($resultcheck1>0)
			  {
					$sql4="select last from opts where uid=".$_SESSION['id']." and cid=2";
					$result4=mysqli_query($conn,$sql4);
					$row4=mysqli_fetch_assoc($result4);
					while ($row1=mysqli_fetch_assoc($result3))
					{
						if ($count<=$row4['last'] and $count==$lesson)
						{
							$lid=$count+1;
							print "<div class=\"courseLesson\">
					        <a href=\"/course/lesson.php?id=".$row1['lid']."&lid=".$lid."&total=".$total['count(*)']."&last=".$row4['last']."\">
					            <div class=\"lessonLeft\">
					                <span style=\"color:#e534eb;\" class=\"lessonNumber\"> ".++$lesson." </span>
					                <span style=\"color:#e534eb;\" class=\"courseLessonTitle\"> ".$row1['lnm']." </span>
					            </div>
					        </a>
					    </div>";
						}
						else
						{
							print "<div class=\"courseLesson\">
					        <a style=\"pointer-events: none; cursor: default;\" href=\"/course/lesson.php?id=".$row1['lid']."\">
																<img class=\"lock\" src=\"/images/lock.png\">
										  <div class=\"lessonLeft\">
					                <span class=\"lessonNumber\"> ".++$lesson." </span>
					                <span class=\"courseLessonTitle\"> ".$row1['lnm']." </span>
					            </div>

					        </a>
					    </div>";
						}
						$count++;
					}
				}
			}
		}
		 ?>
    <!-- <div class="lessonTitle">
        <div class="lessonsCount">
            <p><b>Lessons: <span>10</b></span></p>
        </div>
    </div>
    <div class="courseModule">
        <p><span>Module 1:</span> Basic Concepts</p>
    </div>
    <div class="courseLesson">
        <a href="#">
            <div class="lessonLeft">
                <span class="lessonNumber"> 1 </span>
                <span class="courseLessonTitle"> What is Python? </span>
            </div>
        </a>
    </div>
    <div class="courseLesson">
        <a href="#">
            <div class="lessonLeft">
                <span class="lessonNumber"> 2 </span>
                <span class="courseLessonTitle"> Your First Program </span>
            </div>
        </a>
    </div>
    <div class="courseLesson">
        <a href="#">
            <div class="lessonLeft">
                <span class="lessonNumber"> 3 </span>
                <span class="courseLessonTitle"> Simple Operations </span>
            </div>
        </a>
    </div>
    <div class="courseLesson">
        <a href="#">
            <div class="lessonLeft">
                <span class="lessonNumber"> 4 </span>
                <span class="courseLessonTitle"> Strings </span>
            </div>
        </a>
    </div>
    <div class="courseLesson">
        <a href="python-loops.html">
            <div class="lessonLeft">
                <span class="lessonNumber"> 5 </span>
                <span class="courseLessonTitle"> Loops </span>
            </div>
        </a>
    </div> -->

  </div>

<div class="footer">
<div class="row">
  <div class="column1" style="background-color:rgb(43, 43, 43);">
    <h2>About</h2><br>
    <p style="text-align: left;padding-left: 20px;">Learn2Code is an online platform to help the upcoming programmers to improve their coding skills. Learn2Code helps programmers build
      concelts in different programming languages that include C, C++, C#, Java, JavaScript, Python, PHP and Ruby.
      <a class="anchor1" href="/course/">Learn more</a>
    </p>
  </div>
  <div class="column2" style="background-color:rgb(43, 43, 43);">
    <h2>Quick Links</h2><br>
    <a class="anchor" href="/">Home</a><br>
    <a class="anchor" href="/about/">About Us</a><br>
    <a class="anchor" href="/course/">Courses</a><br>
    <a class="anchor" href="/challenge/">Challenges</a><br>
    <a class="anchor" href="/editor/">Editor</a><br>
    <a class="anchor" href="/discussion/">Discuss</a><br>

  </div>
</div>

</div>
<div class="footer" style="background: rgb(43, 43, 43);;"><hr><p style="padding-bottom: 17px;"> Copyright &copy; 2020 | Learn2Code | All Rights Reserved</p></div>
</body>
</html>
