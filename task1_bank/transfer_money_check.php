<?php
	   
    $sname = filter_input(INPUT_POST, 'sname');
    $rname = filter_input(INPUT_POST, 'rname');
	$amount = filter_input(INPUT_POST, 'amount');
   
   
    $servername = "localhost";
	$username = "root";
	$password = "";
	$db = "bank";
    
	// Create connection
	$db= new PDO('mysql:host=localhost; dbname=bank', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   try 
   {
       $db->beginTransaction();
   
       $sh = $db->prepare("INSERT INTO transaction (sender, receiver, amount) VALUES ('$sname', '$rname', '$amount')");
       $sh->execute([$sname, $rname, $amount]);
   
       $sh = $db->prepare("UPDATE account_holders SET Money=Money-'$amount' WHERE Name='$sname'");
       $sh->execute([$amount, $sname]);
       
       $sh = $db->prepare("UPDATE account_holders SET Money=Money+'$amount' WHERE Name='$rname'");
       $sh->execute([$amount, $rname]);

       $db->commit();
       include 'details.php';
   } 
   catch ( Exception $e ) 
   {
       $db->rollBack();
   }

	
?>	