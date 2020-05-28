<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learn 2 Code</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/phplessons/css/style.css">
    <link rel="icon" href="http://localhost/phplessons/images/learn1.png">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <?php session_start(); ?>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img class="bcd" src="http://localhost/phplessons/images/learn1.png">

      <label class="logo">Learn2Code</label>
      <ul>
        <li><a class="active" href="http://localhost/phplessons/home/">Home</a></li>
        <?php
        if (isset($_SESSION['id']))
        {?>
        <li><a href="http://localhost/phplessons/dashboard/">Dashboard</a></li>
      <?php } ?>
        <li><a href="http://localhost/phplessons/course/">Courses</a></li>
        <li><a href="http://localhost/phplessons/challenge/">Challenges</a></li>
        <li><a href="http://localhost/phplessons/discussion/" target="_blank">Discuss</a></li>
        <?php
        if (!isset($_SESSION['id']))
        {?>
        <li><a href="http://localhost/phplessons/login/" >Login/Register</a></li>
      <?php } ?>
      </ul>
    </nav>

          <img class="abc" src="http://localhost/phplessons/images/home_img.png" alt="home_img" height="400" width="400">
          <div class="content" id="courses">
          <p>Join the largest community of coders today!!</p>
          <form action="http://localhost/phplessons/course/">
          <button type="submit" >Start learning now</button>
          </form>
          </div>

          <div class="services-section">
            <div class="inner-width">
              <div class="border"></div>
              <div class="services-container">

                <div class="service-box">
                  <div class="service-icon">
                    <i class="fas fa-money-bill-wave"></i>
                  </div>
                  <div class="service-title">It's free</div>
                  <div class="service-desc">
                    Our courses are free so you <br>have nothing to lose!
                  </div>
                </div>

                <div class="service-box">
                  <div class="service-icon">
                    <i class="fas fa-ribbon"></i>
                  </div>
                  <div class="service-title">Earn Badges</div>
                  <div class="service-desc">
                    Earn badges for your portfolio
                  </div>
                </div>

                <div class="service-box">
                  <div class="service-icon">
                    <i class="fas fa-desktop"></i>
                  </div>
                  <div class="service-title">Expand your <br>knowledge</div>
                  <div class="service-desc">
                    We have courses for all skill levels
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content1" id="editor">
            <p>Code Editing...Redefined</p>
            <form action="http://localhost/phplessons/editor/">
            <button type="submit" >Start Editing now</button></form>
            </div>
              <div class="content12" id="challenges">
                <p>Better Coding Starts Here</p>
                <p style="font-size: 16px;">Improve your coding skills with our library of various challenges</p>
                <form action="challenge.html">
                <button type="submit" >Start Challenge now</button></form>

                </div>
                <div class="content2" id="login">
                  <div class="a">
                  <h1>Real Mastery Requires Practice!</h1>
                  <p class="ready">Ready to get started?</p>
                </div>
                  <form action="http://localhost/phplessons/login/">
                    <button type="submit" >Login/Sign Up</button></form>

                </div>

                <div class="content11" id="discussion">
                  <p>Welcome to the L2C Community</p>
                  <p style="font-size: 16px;">Discussion forum for learning,helping and sharing experiences with people worldwide</p>
                  <form action="http://localhost/phplessons/discussion/">
                  <button type="submit" >Start Discussion now</button>
                </form>
                <div class="row">
                  <div class="column">
                    <img src="http://localhost/phplessons/images/community.png"  style="width:100%">
                  </div>
                  <div class="column">
                    <img src="http://localhost/phplessons/images/community.png"  style="width:100%">
                  </div>
                  <div class="column">
                    <img src="http://localhost/phplessons/images/community.png " style="width:100%">
                  </div>
                </div>
                  </div>

                  <div class="content3">
                    <p>Learn Playing...Play Learning</p>
                    </div>
        <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Learn2Code is an online platform to help the upcoming programmers to improve their coding skills.Learn2Code helps programmers build up concepts in different programming languages that include C, C++, C#, Java, JavaScript, PHP, Python and Ruby.  <a href="#">  Learn More</a></p>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Courses</h6>
              <ul class="footer-links">
                <li><a href="#">C</a></li>
                <li><a href="#">C++</a></li>
                <li><a href="#">C#</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">Ruby</a></li>
              </ul>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="http://localhost/phplessons/about">About Us</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#challenges">Challenges</a></li>
                <li><a href="#discussion">Discuss</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row ">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text" style="text-align: center;position: relative;left:200px">Copyright &copy; 2020 All Rights Reserved by
           <a href="#">Learn2Code</a>.
              </p>
            </div>
          </div>
        </div>
    </footer>


         <!-- <div class="footer">
            <p>Footer</p>
          </div> -->
  </body>
</html>
