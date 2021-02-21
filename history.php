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
<style type="text/css">
  html,body
  {
    height: 100%;
    background-color:#222d32 !important;
    font-family: "Roboto", sans-serif; 
  }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark" style="margin-top: 0px;background-color: #010101;">
     
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



        <div class="container">
        <h2 class="text-center pt-4" style="color:#0db8de;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm abc" style=" background-color: white; opacity: .8; margin:10px;margin-top: 10px">
        
        <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr  style="background-color:#6db6b9e6;">
                <th style="text-align:center" class="text-center">S.No.</th>
                <th style="text-align:center" class="text-center">Sender</th>
                <th style="text-align:center" class="text-center">Receiver</th>
                <th style="text-align:center" class="text-center">Amount</th>
                <th style="text-align:center" class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

           
            $sql ="select * from transaction";

            $query =mysqli_query($db, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;text-align:center">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

</body>
</html>
