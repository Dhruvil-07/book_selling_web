<?php

	session_start();
	
	$user = $_SESSION["username"];
?>

<html>
<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
	integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
	crossorigin="anonymous">
	
	<link rel="stylesheet" href="prd.css">
	
</head>
<body>

<!-- nav bar start -->

<div class="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> Online Book Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="prd.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php"> About Us</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="deleteac.php"> Delete Account </a>
      </li> 
	   
    </ul>
    <form class="form-inline my-2 my-lg-0" action="logout.php">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="lg"> Log out </button>
    </form>

  </div>
</nav>
</div>

<!-- navbar end -->

<!-- 1st row -->
<div class="containercard">
	<div class="row">
	
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;" >
		<img src="c++.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> The C++ Book </h5> 
		<p class="card-text">  The Ultimate Crash Course to Learning C++ (from basics to advanced) 
								  guide,C Programming, HTML, Javascript, Programming,all,internet, Coding, CSS, Java, PHP Book 2</p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :-  Vinay Raj</li>
		<li class="list-group-item">Price :- $40 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="python.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> The Python Book </h5> 
		<p class="card-text"> The Python Book: The ultimate guide to coding with Python , Python is an incredibly versatile, expansive language which, due to its similarity to everyday language, is surprisingly easy to learn.</p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- Rupam Sharma</li>
		<li class="list-group-item">Price :- $35 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="php.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> The Php Book </h5> 
		<p class="card-text">  A Comprehensive Intermediate Guide To Learn The Concept of PHP Programming, one of the best for php learing. (basic to advance concept of php language and database connectivity) </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- Tanish Shah</li>
		<li class="list-group-item">Price :- $45 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
	</div>
</div>
<!-- 1st row end-->



<!-- 2nd row -->
<div class="containercard">
	<div class="row">
	
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="rdpd.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> Rich Dad Poor Dad  </h5> 
		<p class="card-text">  It's been nearly 25 years since Robert Kiyosaki’s Rich Dad Poor Dad first made waves in the Personal Finance arena. 
								  It has since become the #1 Personal Finance book of all time.. </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- Robert T. Kiyosaki </li>
		<li class="list-group-item">Price :- $60 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="wbw.jpg" class="card-img-top2" alt="...">
		<div class="card-body">
		<h5 class="card-title"> The Warren Buffett Way  </h5> 
		<p class="card-text">  The Workbook follows The Warren Buffett Way, 3e, providing a combination of multiple choice and essay questions for each chapter in the core book. </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :-  Robert Hagstrom</li>
		<li class="list-group-item">Price :- $60 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="pofi.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> The Psychology of Investing </h5> 
		<p class="card-text">  This book has some interesting parts but overall the writing is very condescending and patronising.  the author felt himself superior to all around him.</p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- John R. Nofsinger </li>
		<li class="list-group-item">Price :- $60 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
	</div>
</div>
<!-- 2nd row end-->


<!-- 3rd row-->
<div class="containercard">
	<div class="row">
	
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="cn2.jpg" class="card-img-top2" alt="...">
		<div class="card-body">
		<h5 class="card-title"> Sampurna Chanakya Niti </h5> 
		<p class="card-text">  Each chapters and each word said by chanakya has very deep meaning.  Book is very simple and perfectly balanced. </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- Aacharaya Vishnu Gupta Chankaya </li>
		<li class="list-group-item">Price :- $50 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="charak.jpg" class="card-img-top2" alt="...">
		<div class="card-body">
		<h5 class="card-title"> Charaka Samhita </h5> 
		<p class="card-text">  This book highlights the important slokas with meaning for useful for all ug and pg students , Every concept written in this book is very clear and easy to understand</p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :-  Aacharaya Charaka </li>
		<li class="list-group-item">Price :- $45 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="mahabhart.jpg" class="card-img-top2" alt="...">
		<div class="card-body">
		<h5 class="card-title">  Mahabharat Book </h5> 
		<p class="card-text"> This book contains the last 6 volumes of the Mahabharata in a single, convenient, high quality, and extremely low-priced ebook volume! </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- Vedavyasa </li>
		<li class="list-group-item">Price :- $100 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
	</div>
</div>
<!-- 3rd row end-->


<!-- 4th row-->
<div class="containercard">
	<div class="row">
	
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="harry.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> Harry Potter part 7 </h5> 
		<p class="card-text">  The seventh and final installment in the Harry Potter series opens with a dark scene at the Malfoys', where Voldemort is awaiting Snape's report on Harry's whereabouts. </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :-  J. K. Rowling </li>
		<li class="list-group-item">Price :- $20 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="horror.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title"> Revenge of the Ghost </h5> 
		<p class="card-text">  This is a english horor story book , story of small vilage of london , it was famous for paranormal activity.    
								  describe all about vilage peranormal activity in thi book , one of gratest horror story book </p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :-  Chandra, Siddhen</li>
		<li class="list-group-item">Price :- $25 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
		
		
		<div class="col-sm-4">
		<div class="card" style="width: 18rem;">
		<img src="vb.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		<h5 class="card-title">  Vikram-Betal Stories </h5> 
		<p class="card-text">  Sawan Vikram-Betal stories is a store-house of most fabulous and popular stories. Each tale in the book has been written in a very lucid language6 , it is best story bbok for children</p>
		</div>
		<ul class="list-group list-group-flush">
		<li class="list-group-item">Author :- kunwar Anil Kumar </li>
		<li class="list-group-item">Price :- $10 </li>
		</ul>
		<div class="card-body">
		<a href="payment.php" class="btn btn-primary"> Buy </a>
		</div>
		</div>
		</div>
	</div>
</div>
<!-- 4th row end-->




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" 
integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
 crossorigin="anonymous"></script>

</body>
</html>