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

<!--/js-->
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

<div style="width:200px; float:left">
<div class="well">
                    <h4>Bus Search</h4>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input name="source" type="text" class="form-control" placeholder="Source">
                            <input name="destination" type="text" class="form-control" placeholder="Destination" style="margin-top: 10px;">
                            <input type="date" style="margin-top: 10px;" min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 29 days'));?> name="date" class="form-control" id="date" placeholder="dd/mm/yyyy" >
                            
                            <button class="btn btn-primary" name="submit" style="margin-left: 130px; margin-top: 10px;">Search</button>
                        
                    </form>
                    <!-- /.input-group -->
</div>
				


</div>

<div style="width:500px; float:left; padding-left:25px;">
<table cellpadding="0px" cellspacing="0" width="900px" border="1px">
<tr style="
  vertical-align: inherit;
  font-weight: bold;
  text-align: center;">
<td>Source</td><td>Destination</td><td>Bus Number</td><td>Max Seat</td><td>Available Seat</td><td>Date</td><td>Category</td><td></td></tr>
</tr>

<?php 

                if(isset($_POST['submit'])) {
                    $source = $_POST['source'];
                    $destination = $_POST['destination'];
                    $date = $_POST['date'];

                    if ($source=="" || $destination=="") {
                        echo "<h2>*Source And Destination Fields Are Mandatory To Fill</h2>";
                    }
                    else {


                    //echo $date;
                    $query = "SELECT * FROM bus WHERE post_via LIKE '%$source%$destination%' AND travel_date='$date'";

                    $search_query = mysqli_query($connection,$query);

                    if(!$search_query) {
                        die("Query Failed" . mysqli_error($connection));
                    }

                    $count = mysqli_num_rows($search_query);
                    if($count == 0) {
                        echo "<h1>NO RESULT</h1>";
                    }
                    else { 

                        while($row = mysqli_fetch_assoc($search_query)) {
							$post_id=$row['bus_id'];
                            $post_source= $row['bus_source'];
                            $post_date=$row['travel_date'];
                            $post_destination=$row['bus_destination'];
                            $post_mseat=$row['max_seat'];
							$post_category=$row['bus_category'];
							$post_bnum=$row['bus_num'];
							?>
						<tr style="
						vertical-align: inherit;
						text-align: center;">
				<td><?php echo  $post_source;?></td>
				<td><?php echo  $post_destination ;?></td>
				<td><?php echo $post_bnum;?></td>
				<td><?php echo  $post_mseat;?></td>
				<td><?php echo "11"; ?></td>
				<td><?php echo $post_date;?></td>
				<td><?php echo $post_category; ?></td>
				<td><form action="bnow.php" method="POST">
					<input type="hidden" value="<?php echo $post_id;?>" name="postid">
					<input type="Submit" value="Book Now!!">
					</form>
				</td>
				</tr>
				
                            
                        <?php }
						}
                    }
				}
				
                ?>
				</table>
</table>
</div>
</div>
</div>
<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>