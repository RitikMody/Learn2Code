<?php session_start();
if(!isset($_SESSION['id']))
	{
		header("Location:/login/");
	}?>
<html>
    <head><title>JavaScript Editor</title>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
            <link href="page.css" rel="stylesheet">
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
            <div id="first">
                <iframe height="600px" width="100%" src="https://repl.it/repls/BothAvariciousSyndrome?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>        </body>

            </div>
            <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
            <div id="second" style="height: 40px;width: 200px; background: black;position: absolute; right:0px; top:96px">
                <link rel="icon" href="/images/learn1.png">
                <img class="bcd" src="/images/learn1.png" style="height:30px;
                width: 30px;
                position: relative;
                left: 10px;bottom: 17px;">
               <label style="color: white;font-size: 30px;
                line-height: 80px;
                padding-top: 10px ;
                padding-bottom: 20px;
                font-weight: bold;
                position: relative;
                bottom: 20px;
                left: 10px;font-family:Dosis;"> Learn 2 Code</label>
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
