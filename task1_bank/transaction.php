<!DOCTYPE html>
<html>
<head>
<title>Bank</title>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" href="css/transaction_css.css">

</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
              <li class="nav-item">
                 <a class="nav-link" href="index.php"><b>HOME</b></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="transaction.php"><b>TRANSACTION HISTORY</b></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="transfer_money.php"><b>TRANSFER MONEY</b></a>
              </li>
           </ul>
       </div>
    </nav>


   <table>
      <tr>
         <th>Senders Name</th>
         <th>Receivers Name</th>
         <th>Amount</th>
         <th>Date and Time</th>
      </tr>
      <?php
         $conn = mysqli_connect("localhost", "root", "", "bank");
         // Check connection

        if ($conn->connect_error) 
        {
           die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT sender, receiver, amount, time FROM transaction";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
           // output data of each row
           while($row = $result->fetch_assoc()) 
           {
              echo "<tr><td>" . $row["sender"]. "</td><td>" . $row["receiver"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["time"] ."</td></tr>";
           }
           echo "</table>";
        } 
        else 
        { 
        	echo "0 results"; 
        }
        $conn->close();
       ?>
   </table>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>