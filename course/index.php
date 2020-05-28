<?php session_start(); ?>
<html>
    <head>
      <title>Courses</title>
        <link rel="icon" href="/images/learn1.png">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/course_style.css">
    </head>
    <body>
        <div><nav>
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
    </nav></div>
        <div class="main">
            <section style="display:block">
            <div class="w3-container w3-center w3-animate-top">
            <center><h1 align="center" animation="top">Courses</h1></center>
            <!--h4 align="center">Select a language to start a course</h4-->
            <br>
            <br>
            <br>
            </div>
          </section>
    <div class="box">
        <div class="card">
          <div class="picture">
            <img class="img-fluid" src="/images/c.png">
          </div>
          <div class="team-content">
            <h3 class="name">C</h3>
            <div class="details">
                <a href="c.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
          </div>
        </div>

      <div class="card">
          <div class="picture">
            <img class="img-fluid" src="/images/c++.png">
          </div>
          <div class="team-content">
            <h3 class="name">CPP</h3>
            <div class="details">
                <a href="c++.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="picture">
              <img class="img-fluid" src="/images/c1.png">
            </div>
            <div class="team-content">
              <h3 class="name">C#</h3>
              <div class="details">
                <a href="c1.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
            </div>
          </div>

          <div class="card">
            <div class="picture">
              <img class="img-fluid" src="/images/java.png">
            </div>
            <div class="team-content">
              <h3 class="name">Java</h3>
              <div class="details">
                <a href="java.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="picture">
              <img class="img-fluid" src="/images/js1.png"  style="background-size: cover;width:130px;
              height:130px;object-fit:cover">
            </div>
            <div class="team-content">
              <h3 class="name">Javascript</h3>
              <div class="details">
                <a href="js.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="picture">
              <img class="img-fluid" src="/images/php1.png" style="background-size: cover;width:130px;
              height:130px;object-fit:cover">
            </div>
            <div class="team-content">
              <h3 class="name">PHP</h3>
              <div class="details">
                <a href="php.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="picture">
              <img class="img-fluid" src="/images/python.png">
            </div>
            <div class="team-content">
              <h3 class="name">Python</h3>
              <div class="details">
              <a href="python.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE" ></a>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="picture">
              <img class="img-fluid" src="/images/ruby.png">
            </div>
            <div class="team-content">
              <h3 class="name">Ruby</h3>
              <div class="details">
                <a href="ruby.php" style="text-decoration: none;"><input type="button" class="button" value="START COURSE"></a>
            </div>
            </div>
          </div>

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
<div class="footer" style="background: rgb(43, 43, 43);;"><hr><p style="padding-bottom: 17px;"> Copyright &copy; 2020 | Learn2Code | All Rights Reserved</p></div>
</body>
  </html>
