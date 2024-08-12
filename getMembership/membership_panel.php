<?php include('../header.php');

?>

<div class="all">

<h1 class="stroke-text">
    Choose Your Membership plans
</h1>

<div class="main-container">




<div class="card c1">
  <img src="beginner.webp" alt="1 month" style="width:100%">
  <h2>One Month Plan</h2>
  <p class="price">Rs. 2500</p>
  <p>Beginner Friendly</p>
  
  <p><button >
  <a href="success.php">

  Buy Now
  </a>  
  </button></p>
</div> 


<div class="card c2">
  <img src="pro.webp" alt="Denim Jeans" style="width:100%">
  <h2>Six Months Plan</h2>
  <p class="price">Rs. 10000</p>
  <p>yeah... pretty decent</p>
  <p><button >
  <a href="success.php">

  Buy Now
  </a>  
  </button></p>
</div> 

<div class="card c3">
  <img src="ronnie.jpg" alt="Denim Jeans" style="width:100%">
  <h2>One Year Plan</h2>
  <p class="price">Rs. 180000</p>
  <p>Youll be an absolute beast</p>

  <p><button >
  <a href="success.php">

  Buy Now
  </a>  
  </button></p>
</div> 


</div>

</div>



<style>

a{
  text-decoration: none;
  color:white;
}

@media (min-width: 800px) {
    body {
        overflow-y:hidden;
    }
}


.stroke-text {
  text-shadow: 0 0 20px gray;
  text-align: center;
margin-top: 50px;
  -webkit-text-stroke: 1px white; /* Thicker stroke width and color */
  color: transparent; /* Make the inside of the text invisible */
  font-size: 36px; /* Larger font size */
  font-weight: 900; /* Heavier font weight */
  text-transform: uppercase; /* Optional: Make the text uppercase for a bolder look */
  letter-spacing: 2px; /* Optional: Add some spacing between letters */
}


h2{
  margin-top: 10px;
}

body{
 background-image: url('https://i.pinimg.com/736x/eb/4c/ef/eb4cefe0c24c3e3010394ae4bfd3c9b8.jpg');
 background-repeat: no-repeat;
 background-size: cover;
 background-position: center;

  }

.main-container{
    display: flex;
    flex-direction: row;
    margin: 100px;
    flex-wrap: wrap;
    gap: 20px;
}
.card {
    padding: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}


</style>

