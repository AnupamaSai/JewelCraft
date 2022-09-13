<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="ICON.JPG" type="image">
	<title>Earrings</title>
</head>
<style type="text/css">
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.image{
  height: 300px;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php 
include("header.php");
?>
<!-- <div class="row">
  <div class="column">
    <div class="card">
      <img src="images/c1.jpeg" alt="Jane" style="width:100% ">
      <div class="container">
        <h2>Pearls</h2>
        <p class="title">Price:500</p>
        <p><button class="button">Add to cart</button></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/c2.jpeg" alt="." style="width:100% ">
      <div class="container">
        
        <p class="title">Price: 1000</p>
       
        <p><button class="button">Add to cart</button></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div> -->
  
  <div class="column">
    <div class="card">
      <img src="images/c3.jpeg" alt="John" style="width:100% " class="image">
        <div class="container">
         
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/c4.jpeg" alt="John" style="width:100% " class="image">
        <div class="container">
         
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/c5.jpeg" alt="John" style="width:100% "class="image"class="image">
        <div class="container">
         
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/c6.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/c22.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:100</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/c23.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:120</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="iamges/c24.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1100</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/c8.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:100</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/c29.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:120</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/c28.jpeg" alt="John" style="width:100% " class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1100</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/c29.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
         
          <p class="title">Price:1500</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/c15.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/c15.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/c29.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/c30.jpeg" alt="John" style="width:100% "class="image">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1200</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

 
  <?php 
  include("footer.php");
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
  
</body>
</html>