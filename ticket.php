<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>
</head>
<?php session_start(); ?>
<body>
<?php include('db.php');?>
<?php include('top.php'); ?>

<!--/sticky-->
<br>
<br>
<br>

<div style="height:50px"></div>
	<div style="width:1000px; margin:auto" >
		<div style="width:600px;float:center; border:1px solid black">
			<?php 
$name=$_POST['fname'];
$age=$_POST['age'];
$cnum=$_POST['cnum'];
$gender=$_POST['gender'];
$seatnumber=$_POST['seatnum'];
$paymethod=$_POST['pmt'];
$bid=$_POST['buss'];
echo $name;
echo $age;
echo $cnum;
echo $gender;
echo $seatnumber;
echo $paymethod;
echo $bid;
?>
			
		</div>
	</div>

<div style="clear:both"></div>
<?php include('bottom.php'); ?>
</body>
</html>