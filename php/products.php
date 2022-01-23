<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<!-- <link rel="stylesheet" type="text/css" href="../w3.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!-- <script src="../script.js"></script> -->
</head>
<body>

<div class="navbar-expand sticky-top">
<ul class="navbar-nav nav-tabs bg-secondary">
	<a href="#nav" onclick="navOpen()" class="text-white">Home</a>
	<a class="nav-link text-white"href="products.php">Products</a>
	<a class="nav-link text-white" href="dashboard.php">Home</a>
	<div class="text-center">
		<input class="rounded-pill text-right"type="text" name="search" placeholder="Search....">
	</div>	
</ul>
</div>
<!-- SIDE NAVIGATION BAR -->
<nav class="animate-left" style="position: absolute; left: 0;top: 38px; width: 140px; display:none;"id="nav">
	<a class="w3-bar w3-button w3-text-white" href="javascript:void(0)" onclick="navClose()">Close <span style="position: absolute;right: 0;color: red">X</span></a>
	<a class="w3-bar w3-button w3-text-white" href="#electronics">Electronics</a>
	<a class="w3-bar w3-button w3-text-white" href="#electronics">Electronics</a>
</nav>
<h1 class="text-center">WELCOME TO YOSATA SUPERMAKET</h1>
<div class="container">
<div class="row">
<div class="col-4">
	
	<img src="../imgs/How to Buy a Motherboard_ A Guide for 2021.jpg" style="width: 100%;">
	<p>All about our culture resources</p>
</div>
<div class="col-4">
	<img src="../imgs/How to Buy a Motherboard_ A Guide for 2021.jpg" style="width: 100%;">
	<p>Shuka for Bed cases</p>
</div>
<div class="col-4">
	<img src="../imgs/How to Buy a Motherboard_ A Guide for 2021.jpg" style="width: 100%;">
	<p>Rubega for wearing, covering body</p>
</div>
<div class="col-4">
	<img src="../imgs/How to Buy a Motherboard_ A Guide for 2021.jpg" style="width: 100%;">
	<p>Products offered</p>
</div>
<div class="col-4">
	<img src="../imgs/CompTIA A+ _ Microsoft MTA O_S_ CPU sockets - ASM , Rockville , Maryland.jpg" style="width: 100%;">
	<p>Rubega for wearing, covering body</p>
</div>
<div class="col-4">
	<img src="../imgs/CompTIA A+ _ Microsoft MTA O_S_ CPU sockets - ASM , Rockville , Maryland.jpg" style="width: 100%;">
	<p>Rubega for wearing, covering body</p>
</div>
<div class="col-4">
	<img src="../imgs/CompTIA A+ _ Microsoft MTA O_S_ CPU sockets - ASM , Rockville , Maryland.jpg" style="width: 100%;">
	<p>Rubega for wearing, covering body</p>
</div>
</div>
</div>

<script>
	function navOpen() {
	document.getElementById('nav').style.display="block";
	}
	function navClose() {
		document.getElementById('nav').style.display="none";
	
	}
</script> 
</body>
</html>