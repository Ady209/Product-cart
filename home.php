<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>

     <div class="container">
         <header>
             <h1>Your Shopping Cart</h1>
             <div class="shopping">
                 <img src="image/shopping.svg">
                 <span class="quantity">0</span>
             </div>
         </header>

         <div class="list">

         </div>
     </div>
     <div class="card">
         <h1>Card</h1>
         <ul class="listCard">
         </ul>
         <div class="checkOut">
             <div class="total">0</div>
             <div class="closeShopping">Close</div>
         </div>
     </div>

     <script src="app.js"></script>

</body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
