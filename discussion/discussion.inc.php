<?php
session_start();

$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
if(isset($_POST['submit']))
  {
    $sql1="insert into questions(usid,question) values((select uid from users where unm='".$_SESSION['nm']."'),'<pre>".$_POST['message']."</pre>')";
    $result1=mysqli_query($conn,$sql1);
    if($result1)
    {
        header('Location:/discussion/');
    }
  }
 ?>
