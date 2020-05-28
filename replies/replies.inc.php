<?php
    session_start();
  $conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
  if(isset($_GET['submit']))
  {
    $sql1="insert into replies(qsid,urid,reply) values(".$_GET['id'].",(select uid from users where unm='".$_SESSION['nm']."'),'<pre>".$_GET['message']."</pre>')";
    $result1=mysqli_query($conn,$sql1);
    if($result1)
    {
      header("Location:/replies/?id=".$_GET['id']."");
    // print('<script> window.location="/replies/?id='.$_GET['id'].'; </script>');
    }
  }
 ?>
