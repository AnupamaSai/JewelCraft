<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="ICON.JPG" type="image">
	<title>Earrings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
</style>
</head>
<body>
<?php
include("header.php");
?>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/11.jpeg" alt="Jane" style="width:100% ">
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
      <img src="images/1.jpeg" alt="." style="width:100% ">
      <div class="container">
        <h2>Diamonds</h2>
        <p class="title">Price: 1000</p>
       
        <p><button class="button">Add to cart</button></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/2.jpeg" alt="John" style="width:100% ">
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
      <img src="images/3.jpeg" alt="John" style="width:100% ">
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
      <img src="images/4.jpeg" alt="John" style="width:100% ">
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
      <img src="images/5.jpeg" alt="John" style="width:100% ">
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
      <img src="images/19.jpeg" alt="John" style="width:100% ">
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
      <img src="images/20.jpeg" alt="John" style="width:100% ">
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
      <img src="images/21.jpeg" alt="John" style="width:100% ">
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
      <img src="images/19.jpeg" alt="John" style="width:100% ">
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
      <img src="images/20.jpeg" alt="John" style="width:100% ">
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
      <img src="images/21.jpeg" alt="John" style="width:100% ">
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
      <img src="images/18.jpeg" alt="John" style="width:100% ">
        <div class="container">
          <h2>Jumkas</h2>
          <p class="title">Price:1500</p>
          <p><button class="button">Add to cart</button></p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/22.jpeg" alt="John" style="width:100% ">
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
      <img src="images/23.jpeg" alt="John" style="width:100% ">
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
</body>
</html>