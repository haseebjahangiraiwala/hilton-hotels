<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Hilton Hotels Clone</title>
  <style>
    body {font-family: Arial, sans-serif; margin:0; padding:0; background:#f9f9f9;}
    header {background:#00264d; color:white; padding:20px; text-align:center;}
    .search-box {display:flex; justify-content:center; padding:20px; gap:10px; background:white; box-shadow:0 2px 6px rgba(0,0,0,0.2);}
    input {padding:10px; border-radius:5px; border:1px solid #ccc;}
    button {background:#0066cc; color:white; border:none; padding:10px 20px; border-radius:5px; cursor:pointer;}
    button:hover {background:#004c99;}
    .featured {padding:40px; text-align:center;}
    .hotel-card {background:white; display:inline-block; width:250px; margin:15px; border-radius:12px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.1);} 
    .hotel-card img {width:100%; height:150px; object-fit:cover;}
    .hotel-card h3 {margin:10px;}
  </style>
  <script>
    function redirectSearch(){
      let loc = document.getElementById('location').value;
      let ci  = document.getElementById('checkin').value;
      let co  = document.getElementById('checkout').value;
      window.location.href = "listings.php?location="+encodeURIComponent(loc)+"&checkin="+ci+"&checkout="+co;
    }
  </script>
</head>
<body>
<header><h1>Hilton Hotels Clone</h1></header>
<div class="search-box">
  <input type="text" id="location" placeholder="Enter destination">
  <input type="date" id="checkin">
  <input type="date" id="checkout">
  <button onclick="redirectSearch()">Search</button>
</div>
<div class="featured">
  <h2>Featured Hotels</h2>
  <div class="hotel-card">
    <img src="https://picsum.photos/250/150?hotel1">
    <h3>Hilton Downtown</h3>
    <p>$200 per night</p>
  </div>
  <div class="hotel-card">
    <img src="https://picsum.photos/250/150?hotel2">
    <h3>Hilton Beach Resort</h3>
    <p>$350 per night</p>
  </div>
</div>
</body>
</html>
 
