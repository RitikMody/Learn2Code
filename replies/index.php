<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
      header("Location:/login/");
    }
      ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Replies</title>
    <link rel="stylesheet" href="/css/p.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="icon" href="/images/learn1.png">
    <style>
    div.text{
    border-style: solid;
    width: 500px;
    position: relative;
    left:200px;}
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
        <li><a href="/editor/">Editor</a></li>
        <li><a class="active" href="/discussion/">Discuss</a></li>
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
  <form method="get" action="replies.inc.php">
    <input type="hidden" name="id" value=<?=$_GET['id']?>>
    <div class="row">

      <div class="col-75">
        Name:<?php echo $_SESSION['nm']; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-75">
        <textarea  name="message" placeholder="Enter message" style="height:100px;font-family: Arial"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Send">
    </div>
  </form>
  </div>
    <?php
    $conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
    $sql1="select count(reply) from replies where replies.qsid=".$_GET['id']."";
    $row1=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
    if($row1['count(reply)']>0)
    {
      $sql="select replies.reply,users.unm FROM replies,users where replies.urid=users.uid and replies.qsid=".$_GET['id']." order by replies.dt DESC";
      $result=mysqli_query($conn,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck>0)
      {
        while ($row=mysqli_fetch_assoc($result))
        {
          print "<div class=\"dialogbox\">
                <div class=\"body2\">

                  <div class=\"message\">
                      <p>".$row['unm']."</p>
                      <hr ><br>
                    <span>".$row['reply']."</span><br>
                  </div>
                </div>
              </div>
            </div><br>";
        }
      }
    }
    else {
      {
        print "<div class=\"dialogbox \"><div class=\"body1\">Be the first to reply.</div></div>";
      }
    }
    ?>
  </body><br><br>
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
</html>
