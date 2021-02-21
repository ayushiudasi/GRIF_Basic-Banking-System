<?php
  $db=mysqli_connect("localhost","root","","bankdb");/* servername,usernmae,password,database name*/

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style type="text/css">
	html,body
	{
		height: 100%;
		background-color:#222d32 !important;
		font-family: "Roboto", sans-serif; 
	}
	.global-container
	{
		height: 100%;
		display:flex;
		align-items: center;
		justify-content:center;
		color:#0db8de;
	}
	form
	{
		padding-top: 10px;
		font-size:14px;
		margin-top:30px;
	}
	.login-form
	{
		width:380px;
		height:450px;
		margin: 20px;
		background: #1a2226;
		border-radius: 10px !important;
	}
	.abc
	{   color: white;
		background: #1a2226;
		border:2px solid #0db8de;
		border-radius: 10px;
		margin-bottom: 25px;
	}
	.abc:focus
	{    color: white:;
		outline: none;
		border:none;
		background: #1a2226;
		margin: 0;
	}
	.card-title
	{
		font-weight:900;
		padding-top: 20px;
	}
	.btn
	{
		background: #0db8de;
		font-size: 14px;
		transform: translateY(10px);
		border-radius: 10px !important;
	}
	.signup
	{
		text-align: center;
		padding-top: 25px;
	}
</style>>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark  " style="margin-top: 0px;background-color: #010101;">
     
            <a  class="navbar-brand"href="index.php">&nbsp;SPARKS BANK</a>
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="viewcustomer.php">ALL CUSTOMERS</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="transfer.php">TRANSFER MONEY</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="history.php">VIEW HISTORY</a>
          </li>
              </ul>        
          </div>
        </nav>

	<div class="global-container">
		<div class="card login-form">
			<div class="card-body">
				<h1 class="card-title text-center">Transfer Money</h1>

				<form action="abc.php" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">From</label>
     <?php
              $user = "select * from customer ";
              $result=mysqli_query($db,$user);
              $rc=mysqli_num_rows($result);

 	 ?>
   				<select name="send" class="form-control form-control-sm abc" id="exampleInputEmail1" required="">
   	<?php
   			  for($i=1;$i<=$rc;$i++)
              {
                $row=mysqli_fetch_array($result);
               
                $s_name = $row['name'];
   	?>   
   	           <option> <?php echo $s_name?></option>
   	<?php
              } 
                  
    ?>
      </select>
    
				

			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">To</label>
  <?php
              $user = "select * from customer ";
              $result=mysqli_query($db,$user);
              $rc=mysqli_num_rows($result);

 	 ?>
   				<select name="receive" class="form-control form-control-sm abc" id="exampleInputEmail1" required="">
   	<?php
   			  for($i=1;$i<=$rc;$i++)
              {
                $row=mysqli_fetch_array($result);
                
                $r_name = $row['name'];
   	?>   
   	           <option > <?php echo $r_name?></option>
   	<?php
              } 
                  
    ?>
      </select>

				
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Amount</label>
				<input type="number" name="amount" class="form-control form-control-sm abc" id="exampleInputEmail1" required="">
			</div>
				<button type="submit" class="btn btn-primary btn-block" name="submit1">Transfer Money</button>

				</form>

			</div>
			
		</div>
		
	</div>
	
</body>
</html>