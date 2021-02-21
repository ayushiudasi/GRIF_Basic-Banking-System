
<?php
  $db=mysqli_connect("localhost","root","","BankDB");/* servername,usernmae,password,database name*/

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<script type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
	*{
            margin : 0px;
            padding:0px;
          }
	html,body
	{
		height: 100%;
		background-color:#222d32 !important;
		margin:0;
    padding:0;

		
	}
	#b1{
              
                background: #fb743e;
      background-image: -webkit-linear-gradient(top, #fb743e, #fb743e);
      background-image: -moz-linear-gradient(top, #fb743e, #fb743e);
      background-image: -ms-linear-gradient(top, #fb743e, #fb743e);
      background-image: -o-linear-gradient(top, #fb743e, #fb743e);
      background-image: linear-gradient(to bottom, #fb743e, #fb743e);
      -webkit-border-radius: 28;
      -moz-border-radius: 28;
      border-radius: 28px;
      font-family: Georgia;
      color: #ffffff;
      font-size: 20px;
      padding: 10px 20px 10px 20px;
  text-decoration: none;
  border: none;
            }
            #b1:hover {
              
               background: #fb743e;
  background-image: -webkit-linear-gradient(top, #fb743e, #3498db);
  background-image: -moz-linear-gradient(top, #fb743e, #3498db);
  background-image: -ms-linear-gradient(top, #fb743e, #3498db);
  background-image: -o-linear-gradient(top, #fb743e, #3498db);
  background-image: linear-gradient(to bottom, #fb743e, #3498db);
  text-decoration: none;
</style>>
</head>
<body style="background-color: black;">
<nav class="navbar navbar-expand-lg navbar-dark" style=";background-color: #010101;">
     
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
        <button id='b1'style="margin-top:30px;margin-left: 40%" onclick="window.location.href = 'transfer.php';"> Transfer Credit</button></a></td>"
        <div class="abc" style=" background-color: white; opacity: .8;margin:100px;margin-top: 30px">
        	
        	
<?php
        
        $user = "select * from customer ";
        $result=mysqli_query($db,$user);


            echo "<table class='table table-bordered table-hover'>";
    	 	echo "<tr style='background-color:#6db6b9e6;'>";
		    echo "<th style='text-align:center'>"; echo "ID"; echo "</th>";	
		    echo "<th style='text-align:center'>"; echo "Account No."; echo "</th>";
		    echo "<th style='text-align:center'>"; echo "Customer Name"; echo "</th>";
		    echo "<th style='text-align:center'>"; echo "Credit"; echo "</th>";
		    
		    echo "</tr>";

		    while($row = mysqli_fetch_assoc($result))
		    {
		    	echo "<tr>";
		    	   echo "<td style='text-align:center'>"; echo $row['id']; echo "</td>";
		    	   echo "<td style='text-align:center'>"; echo $row['accno']; echo "</td>";
		    	   echo "<td style='text-align:center'>"; echo $row['name']; echo "</td>";
		    	   echo "<td style='text-align:center'>"; echo $row['credit']; echo "</td>";
		    	   
		    	echo "</tr>";
		    }
		    echo "</table>";
		    ?>
		</div>
</body>
</html>