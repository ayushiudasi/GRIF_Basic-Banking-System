<?php
  $db=mysqli_connect("localhost","root","","bankdb");/* servername,usernmae,password,database name*/

?>
<?php
	if(isset($_POST['submit1']))
	{
		
		$from = $_POST['send'];
		$to = $_POST['receive'];
		$amount = $_POST['amount'];
         // echo $from;
         // echo $to;
         // echo $amount;

		$sql = "SELECT * from customer where name like '$from'";
        $query = mysqli_query($db,$sql);
        $sql1 = mysqli_fetch_array($query);

        // echo $sql1['credit'];
		// $q=mysqli_query($db,"SELECT * from customer where name like '%$_POST[to]%' ");
        $sql = "SELECT * from customer where name like '$to'"; 
    	$query = mysqli_query($db,$sql);
    	$sql2 = mysqli_fetch_array($query);

       if (($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")'; 
        echo '</script>';
    }
    else if($amount > $sql1['credit']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    else if($amount == 0)
    {

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
     else
     {
     	        $newbalance = $sql1['credit'] - $amount;
                $sql = "UPDATE customer set credit=$newbalance where name like '$from'";
                mysqli_query($db,$sql);

                $newbalance = $sql2['credit'] + $amount;
                $sql = "UPDATE customer set credit=$newbalance where name like '$to' ";
                mysqli_query($db,$sql);



                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount');";
                $query=mysqli_query($db,$sql);

                if($query)
                {
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
     }

	}


	?>