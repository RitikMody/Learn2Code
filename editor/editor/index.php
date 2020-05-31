<?php session_start();
if(!isset($_SESSION['id']))
	{
		header("Location:/login/");
	}?>
<html>
    <head>
        <title>
           Editor
        </title>
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
        <li><a href="/challenge/">Challenges</a></li>
        <li><a class="active" href="/editor/" >Editor</a></li>
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
<div class="sign">
    <link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="editor.css">

    <div class="sign__word">Code,Compile and Run....</div>
        <div class="sign__word1"> L2C gives you an instant IDE to learn, build, collaborate, and host all in one place.</div>
</div>

<div class="content1">

    <p class="lang"><b>LANGUAGES</b></p>
    <a href="c.php" class="brk-btn">C</a><br>
    <a href="c++.php" class="brk-btn">C++</a><br>
    <a href="c1.php" class="brk-btn">C#</a><br>
    <a href="java.php" class="brk-btn">Java</a><br>
    <a href="js.php" class="brk-btn">Javascript</a><br>
    <a href="php.php" class="brk-btn">php</a><br>
    <a href="python.php" class="brk-btn">python</a><br>
    <a href="ruby.php" class="brk-btn">ruby</a><br>
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
    <a class="anchor" href="/courese/">Courses</a><br>
    <a class="anchor" href="/challenge/">Challenges</a><br>
    <a class="anchor" href="/Editor/">Editor</a><br>
    <a class="anchor" href="/discussion/">Discuss</a><br>

  </div>
</div>

</div>
<div class="footer" style="background: rgb(43, 43, 43);;"><hr><p style="padding-bottom: 17px; margin:0;"> Copyright &copy; 2020 | Learn2Code | All Rights Reserved</p></div>
</body>
    </html>
