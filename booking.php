<?php include 'db.php'; $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
<title>Book Hotel</title>
<style>
 body{font-family:Arial; background:#f9f9f9; display:flex; justify-content:center; align-items:center; height:100vh;}
 form{background:white; padding:30px; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); width:300px;}
 input{width:100%; padding:10px; margin:10px 0; border-radius:8px; border:1px solid #ccc;}
 button{background:#0066cc; color:white; padding:10px; border:none; border-radius:8px; cursor:pointer; width:100%;}
 button:hover{background:#004c99;}
</style>
</head>
<body>
<form method="post">
  <h2>Booking Form</h2>
  <input type="text" name="name" placeholder="Full Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="number" name="guests" placeholder="Guests" required>
  <button type="submit" name="book">Confirm Booking</button>
</form>
<?php
 if(isset($_POST['book'])){
   $name=$_POST['name']; $email=$_POST['email']; $guests=$_POST['guests'];
   $conn->query("INSERT INTO bookings (hotel_id,name,email,guests) VALUES ($id,'$name','$email',$guests)");
   echo "<script>alert('🎉 Booking Confirmed!'); window.location.href='confirm.php';</script>";
 }
?>
</body>
</html>
 
