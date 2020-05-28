<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<style>
	 body{
	 	background: url("/images/bg1.jpg");
		background-size: cover;
	 }
	</style>

	<body>
<?php
$demo=rawurlencode($_POST['code']);
$input=rawurlencode($_POST['input']);
$output=rawurlencode($_POST['output']);
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.hackerearth.com/v3/code/run/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "async=0&format=json&time_limit=10&memory_limit=262144&client_secret=".$api_key."&input=".$input."&source=".$demo."&lang=".$_POST['lang'],
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$json_array=json_decode($response,true);
$out=$json_array['run_status']['output'];
// print_r $json_array['run_status'];
if ($err) {
	echo "cURL Error #:" . $err;
}
else
{
	if((double)$output==$out or (int)$output==$out)
	{

		$conn=mysqli_connect('localhost','id13830470_root','Hh6seV>N2Ny?o-q~','id13830470_miniproject');
		$sql="select count(*) from user_challenges where uid=".$_SESSION['id']."";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0){
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['count(*)']==0)
				{
					$sql1="insert into badges values(".$_SESSION['id'].",0,0,0)";
					$result1=mysqli_query($conn,$sql1);
				}
			}
		}

		$sql="select count(*) from user_challenges where uid=".$_SESSION['id']." and cid=".$_POST['cid']."";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0){
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['count(*)']==0)
				{
					$sql="insert into user_challenges values(".$_SESSION['id'].",".$_POST['cid'].")";
					$result=mysqli_query($conn,$sql);
				}
			}
}
		print '<audio id="audio" src="/CompletitionAudio.mp3"></audio>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mathusummut/confetti.js/confetti.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript">
		function confet(color)
		{
		  confetti.start();

		  swal({
		    title: "Correct!",
		    text: "Congrats!You received the "+color+" badge!",
		    imageUrl: "/images/"+color+".png",
		    imageWidth: 350,
		    imageHeight: 500,
		    imageAlt: color+" badge",
		    showCancelButton: false,
		    confirmButtonText: "OK",
		    confirmButtonColor: "#aa74aa",
		  });
		  setTimeout(function () {confetti.stop()}, 3000);
		  x=document.getElementById("audio")
		  x.play();
		  x.loop = false;
		};

		</script>';
		$gold=0;
		$silver=0;
		$bronze=0;
		$flag=0;
		$sql="select * from badges where uid=".$_SESSION['id']."";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$sql1="select count(*) from user_challenges where uid=".$_SESSION['id']." and cid =ALL(select c.chid from challenge c where c.chid>=1 and c.chid<=5)";
				$result1=mysqli_query($conn,$sql1);
				$resultcheck1=mysqli_num_rows($result1);
				if($resultcheck1>0)
				{
					while($row1=mysqli_fetch_assoc($result1))
					{
						if($row['bronze']==0 and $row1['count(*)']==5)
						{
							print "Bronze";
						}
					}
				}

				$sql1="select count(*) from user_challenges where uid=".$_SESSION['id']." and cid =ALL(select c.chid from challenge c where c.chid>=6 and c.chid<=7)";
				$result1=mysqli_query($conn,$sql1);
				$resultcheck1=mysqli_num_rows($result1);
				if($resultcheck1>0)
				{
					while($row1=mysqli_fetch_assoc($result1))
					{
						if($row['silver']==0 and $row1['count(*)']==2)
						{
							print "Silver";
						}
					}
				}

				$sql1="select count(*) from user_challenges where uid=".$_SESSION['id']." and cid =8";
				$result1=mysqli_query($conn,$sql1);
				$resultcheck1=mysqli_num_rows($result1);
				if($resultcheck1>0)
				{
					while($row1=mysqli_fetch_assoc($result1))
					{
						// print $row['gold'];
						if($row['gold']==0 and $row1['count(*)']==1)
						{
							print "<script>confet('Gold')</script>";
							$flag=1;
							$sql2="update badges set gold=1 where uid=".$_SESSION['id']."";
							$result2=mysqli_query($conn,$sql2);
						}
					}
				}

			}
		}
		if($flag==0)
		{
			print '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
			pop();
			function pop()
			{
			  swal("Good Job!", "Your solution is correct!", "success").then(function() {
	    window.location = "/challenge/";
	});
			};

			</script>';
		}

	}
	else
	{
		print '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
		pop();
		function pop()
		{
		  swal("Oops!", "Your solution is incorrect!", "error").then(function() {
    window.location = "/challenge/index1.php?id='.$_POST['cid'].'";
});
		};

		</script>';
	}
	// print(gettype($json_array['run_status']['output_html']));
}
?>
</body>
</html>
