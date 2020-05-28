
<html>
<head>
<title>Sign up</title>
<link rel="icon" href="/images/learn1.png">
    <link rel="stylesheet" type="text/css" href="/css/sign_up_style.css">
<body>
    <div class="loginbox">
        <h1>Sign up</h1>
        <form method="post" action=<?php echo $_SERVER['PHP_SELF']; ?>>
            <p>First Name</p>
            <input type="text" name="fnm" placeholder="Enter First Name">
            <p>Last Name</p>
            <input type="text" name="lnm" placeholder="Enter Last Name">
            <p>Email id</p>
            <input type="email" name="email" placeholder="Enter Email id">
            <p>Username</p>
            <input type="text" name="unm" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="psw" placeholder="Enter Password">
            <input type="submit" name="submit" value="Sign up">

        </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
      $conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
      $sql1="insert INTO users(fnm,lnm,unm,psw,email) VALUES ('".$_POST['fnm']."','".$_POST['lnm']."','".$_POST['unm']."','".$_POST['psw']."','".$_POST['email']."')";
      $sql2="select count(unm) FROM users WHERE unm='".$_POST['unm']."'";
      $result=mysqli_query($conn,$sql2);
      $resultcheck=mysqli_num_rows($result);
      $f=0;
      if($resultcheck>0)
      {
        while ($row=mysqli_fetch_assoc($result))
        {
          if($row['count(unm)']>0)
          {
            $f=1;
            print "<script>alert(\"Username unavailable!\");</script>";
          }
        }
      }
      if($f==0)
      {
        $result=mysqli_query($conn,$sql1);
        if($result)
        {
            print('<script> window.location="/login/"; </script>');
          // print('Successful');
        //   header('Location:/login/index.php');
        }
      }
    }
     ?>
</body>
</head>
</html>
