<!DOCTYPE html>
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
<style>

#a{
height:20px;
width:40px;
border:1px solid white;	
background:#F0F0F0;
}
#aa{
height:20px;
width:40px;
border:white;	
}

#a:hover
    {
       opacity: 0.6;
      filter: alpha(opacity=30);
    }
</style>
<?php
session_start();
?>
</head>
<body>
<?php include('db.php');?>
<?php include('top.php'); ?>
<!--/sticky-->

<br>
<br>
<br>
<div style="height:50px"></div>
	<div style="width:1000px; margin:auto" >


		<div style="width:200px; float:left; margin-top:40px;">
			<?php 
			$busid=$_POST['postid'];
			$_SESSION['bbid']=$busid;
			$query = "SELECT * FROM ticket inner join seat on ticket.seat_id=seat.seat_id where bus_id='$busid'";
			$data=array();
			
                    $search_query = mysqli_query($connection,$query);

                    if(!$search_query) {
                        die("Query Failed" . mysqli_error($connection));
                    }

                    $count = mysqli_num_rows($search_query);
                    if($count == 0) {
                        echo "<h4>All seat Available!!</h4>";
                    }
                    else { 
						
                        while($row = mysqli_fetch_assoc($search_query)) {
							$data[]=$row['seat_num'];
							
						}
					}	
					$ii=count($data);
						
								
							
			?>
		<div class="container-fluid" style="border:1px solid black; padding-left:20px;">
			<div style="margin:10px;">
				<h4 style="color:Green">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Seat Chart</h4>
			<div class="row">
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="A"){?>style="background-color:lightblue"<?php }}?>>
					A
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="B"){?>style="background-color:lightblue" <?php }}?> >
					B
				</div>
				<div class="col-md-3" id="aa">	
				</div>
				<div class="col-md-3" id="aa">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" id="aa">	
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="1"){?>style="background-color:lightblue"<?php }}?>>
					1
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="2"){?>style="background-color:lightblue"<?php }}?>>	
					2
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="3"){?>style="background-color:lightblue"<?php }}?>>
					3
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="6"){?>style="background-color:lightblue"<?php }}?>>
					6
				</div>
				<div class="col-md-3" id="aa">
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="5"){?>style="background-color:lightblue"<?php }}?>>	
					5
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="4"){?>style="background-color:lightblue"<?php }}?>>
					4
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="7"){?>style="background-color:lightblue"<?php }}?>>
					7
				</div>
				<div class="col-md-3" id="aa">
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="8"){?>style="background-color:lightblue"<?php }}?>>	
					8
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="9"){?>style="background-color:lightblue"<?php }}?>>
					9
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="13"){?>style="background-color:lightblue"<?php }}?>>
					13
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="12"){?>style="background-color:lightblue"<?php }}?>>
					12
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="11"){?>style="background-color:lightblue"<?php }}?>>
					11
				</div>
				<div class="col-md-3" id="a" <?php for($i=0;$i<$ii;$i++){
				if($data[$i]=="10"){?>style="background-color:lightblue"<?php }}?>>
					10
				</div>
			</div>
			</div>
			<p style="color:Blue">Blue:Booked</p><p style="color:Grey">Grey:Available</p>
		</div>
		</div>

		<div style="width:500px; float:left;">
				<div class="container">
				<form action="ticket.php" method="post">
				<div class="form-group">
				<label for="fname">Name</label>
				<input required type="text" class="form-control" id="fname" placeholder="Enter name" name="fname">
				</div>
				<div class="form-group">
				<label for="age">Age:</label>
				<input required type="number" class="form-control" id="age" placeholder="Age" name="age">
				</div>
				<div class="form-group">
					<label for="contact">Contact number:</label>
					<input required type="number" class="form-control" id="cnum" placeholder="Phone number" name="cnum">
				</div>
				<div class="form-group">
					<label for="gender">Gender:</label>
					<input type="radio" value="Male" name="gender" checked>&nbspMale
					<input type="radio" value="Female" name="gender">&nbspFemale
				</div>
				<div class="form-group">
				<label for="seat">Seat:</label>
				<select required name="seatnum">
				<?php
				 $query = "SELECT *from seat";							
                 $search_query = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($search_query)) {
									$seat_id=$row['seat_id'];
									$seat_num=$row['seat_num'];
				?>
				<option value="<?php echo $seat_id; ?>"><?php echo $seat_num;?></option>
				<?php								
						}
				?>
				</select>
				</div>
				<div class="form-group">
					<label for="payment">Method of Payment:</label>
					<select name="pmt">
						<option value="Online">Online</option>
						<option value="Cash">Cash</option>
					</select>
				</div>
				<div class="checkbox">
				<label><input type="checkbox" name="remember"> I agree the terms and condition.</label>
				</div>
				<?php echo $_SESSION['bbid'];?>
				<input type="hidden" class="form-control" value="<?php echo $_SESSION['bbid'];?>" name="buss">
				<button type="submit" class="btn btn-default">Submit</button>
				<br>
				<br>
				</form>
			</div>

		</div>

	</div>

</div>

	<div style="clear:both"></div>
<?php include('bottom.php'); ?>
</body>
</html>