<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bank</title>
    <link rel="stylesheet" href="css/transfer_money_css.css">
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
           </ul>
       </div>
    </nav>
     
    <main class="form-signin">
      <form  action="transfer_money_check.php" method="POST">
      
      <label for="inputName" class="visually-hidden"><b>Senders Name</b></label>
      <select type="text" name="sname"  class="form-control" placeholder="Senders Name" required autofocus>
      <option value="John Fernandes">John Fernandes</option>
      <option value="Vijay Talekar">Vijay Talekar</option>
      <option value="Rohit Naik">Rohit Naik</option>
      <option value="Prasad Kednekar">Prasad Kednekar</option>
      <option value="Ianal Paul">Ianal Paul</option>
      <option value="Maria Cruz">	Maria Cruz</option>
      <option value="Mark Fernandes">Mark Fernandes</option>
      <option value="Josh Pereira">Josh Pereira</option>
      <option value="Rohan Kaur">	Rohan Kaur</option>
      <option value="Sarita Ghadge">Sarita Ghadge</option>
      </select>

      <br>
      <label for="inputName" class="visually-hidden"><b>Receivers name</b></label>
      <select type="text" name="rname" class="form-control" placeholder="Receivers name" required autofocus>
      <option value="John Fernandes">John Fernandes</option>
      <option value="Vijay Talekar">Vijay Talekar</option>
      <option value="Rohit Naik">Rohit Naik</option>
      <option value="Prasad Kednekar">Prasad Kednekar</option>
      <option value="Ianal Paul">Ianal Paul</option>
      <option value="Maria Cruz">	Maria Cruz</option>
      <option value="Mark Fernandes">Mark Fernandes</option>
      <option value="Josh Pereira">Josh Pereira</option>
      <option value="Rohan Kaur">	Rohan Kaur</option>
      <option value="Sarita Ghadge">Sarita Ghadge</option>
      </select>

      <br>
      <label for="inputAmount" class="visually-hidden"><b>Amount</b></label>
      <input type="number" name="amount" class="form-control" placeholder="Amount" required autofocus>
      <br>
      <button class="w-100 btn btn-lg btn-secondary" type="submit">Transfer Amount</button>
     </form>
    </main>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>