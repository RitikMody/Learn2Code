<?php
if(!empty($_POST['unm']))
{
  $dbServername="localhost";
  $dbUsername="id13830470_root";
  $dbPassword="Hh6seV>N2Ny?o-q~";
  $dbName="id13830470_miniproject";

  $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
  $sql='select * from users;';
  $result=mysqli_query($conn,$sql);
  $resultcheck=mysqli_num_rows($result);
  $f=1;
  if($resultcheck>0)
  {
    while ($row=mysqli_fetch_assoc($result))
    {
      if($row['unm']==$_POST['unm'] && $row['psw']==$_POST['psw'])
        {
          $f=0;
          session_start();
          $_SESSION['nm']=$row['unm'];
          $_SESSION['id']=$row['uid'];
          header('Location:/');
        }
    }
    if($f==1)
    {
      print "<script>alert(\"Password or User id entered is wrong!\");</script>";
      // header('Location:/login/?error=password or userid entered is wrong');
    }
  }
}
else {
  print "<script>alert(\"Some fields are  missing!\");</script>";  
}

?>
