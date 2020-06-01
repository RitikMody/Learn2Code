<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link rel="icon" href="/images/learn1.png">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background: url('/images/bg1.jpg');
  background-size: cover;

}

html {
  box-sizing: border-box;
}
nav{
  background: #0a0a0a;
  height: 80px;
  width: 100%;
  font-family:"Dosis",san-serif;
}
label.logo{
  color: white;
  font-size: 30px;
  line-height: 80px;
  padding-top: 10px ;
  padding-bottom: 20px;
  font-weight: bold;
  position: relative;
  bottom: 20px;
  left: 30px;
}
.bcd{
  height:75px;
  width: 75px;
  position: relative;
  left: 20px;
}
nav ul{
    margin-top: 0;
  float: right;
  margin-right: 40px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a {
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    text-decoration:none;
}
nav a.active,nav a:hover{
  background: #c25cbdd8;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 20px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 900px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 900px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 15px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background:none;
    color: #ac45ac;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background: white;
}

.about-section {
  padding: 20px;
  text-align: center;
  background-color: #aa74aa;
  color: white;
  font-family: 'Dosis';
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.anchor{
  padding-bottom:10px;
text-decoration: none;
color: rgb(177, 177, 177) ;
}
.anchor:hover{
  color: rgb(162, 55, 177);
  transition: 0.5s;
}
.anchor1{
  text-decoration: none;
  margin:5px;
color: rgb(177, 177, 177) ;
}
.anchor1:hover{
  text-decoration: underline;
  color: rgb(162, 55, 177);
  transition: 0.5s;
}
hr{
  padding:0px;
  height:1px ;
  background-color: rgb(177, 177, 177);
  border: none;
  margin: 0px;
}
.footer {
  /* position: absolute;
  left: 0;   */
  width: 100%;
  color: rgb(177, 177, 177);
  text-align: center;
  font-family:"Dosis",san-serif;
}
/* Create two equal columns that floats next to each other */
.column1 {
  box-sizing: border-box;
  float: left;
  width: 60%;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

.column2 {
  box-sizing: border-box;
  float: left;
  width: 40%;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
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
<div class="about-section">
  <h1>About Us</h1>
  <h2>Here is the developer team of Learn2Code</h2>
</div>

<h2 style="text-align:center">Meet the Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/images/ojasvi.jpg" alt="Ojasvi" style="width:435px;height:520px">
      <div class="container">
        <h2>Ojasvi Naik</h2>
        <p class="title">Front-end Developer</p>
        <p>ojasvi.naik@somaiya.edu</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/images/ritik.jpg" alt="Ritik" style="width:435px;height:520px">
      <div class="container">
        <h2>Ritik Mody</h2>
        <p class="title">Back-end Developer</p>
        <p>ritik.mody@somaiya.edu</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/images/debu.jpg" alt="Debdatta" style="width:435px;height:520px">
      <div class="container">
        <h2>Debdatta Kundu</h2>
        <p class="title">Front-end Developer</p>
        <p>debdatta.k@somaiya.edu</p>
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
</body>

<div class="footer" style="background: rgb(43, 43, 43);;"><hr><p style="padding-bottom: 17px; margin:0;"> Copyright &copy; 2020 | Learn2Code | All Rights Reserved</p></div>

</html>
