<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		html, body {
		  height: 100%;
		  background-color: #e0e0e0;
		}
		@font-face {
			font-family: IU;
			src: url(19280.otf);
		}
		.text {
			font-family: IU;
		}
		.header-area {
		  width: 100%;
		  height: auto;
		  position: relative;
		  top: 0;
		  left: 0;
		  background-color: #ffffff;
		  box-shadow: 0 6px 4px -4px rgba(0, 0, 0, .2);
		}
		.conteiner {
		  margin-left: auto;
		  margin-right: auto;
		  width: 60%;
		  height: auto;
		  position: relative;
		}
		.menu-main ul {
		  list-style: none;
		  margin: 0; 
		  padding-left: 0;
		  display: flex;
		}
		.font-m1 {
		  text-decoration: none;
		  display: block;
		  font-family: my-font;
		  color: black;
		  font-size: 40px;
		}
		li {
		  display: inline-block;
		  margin-left: 10%;
		}
		@font-face{
		  src:url(19360.ttf);
		  font-family: my-font;
		}
		.main-photo {
		  background-image: url(88.jpeg);
		  height: 100%;
		  width: 80%;
		  margin-left: auto;
		  margin-right: auto;
		  background-size: 100% 100%;
		  padding-top: 10%;
		  border-radius: 3%;
		  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
		}
		.home-photo {
		  border-color: white;
		  border: 10;
		  border-radius: 50%;
		  background-image: url(5.jpg);
		  background-size: 100% 100%;
		  height: 45%;
		  width: 20%;
		  margin-right: auto;
		  margin-left: auto;
		  border: solid 10px white;
		}
		@import url(https://fonts.googleapis.com/css?family=Open+Sans);

		.area {
		  text-align: center;
		  font-size: 5.5em;
		  color: #fff;
		  letter-spacing: -7px;
		  font-weight: 700;
		  text-transform: uppercase;
		  animation: blur .75s ease-out infinite;
		  text-shadow: 0px 0px 5px #fff, 0px 0px 7px #fff;
		}

		@keyframes blur {
		  from {
		    text-shadow:0px 0px 10px #fff,
		      0px 0px 10px #fff, 
		      0px 0px 25px #fff,
		      0px 0px 25px #fff,
		      0px 0px 25px #fff,
		      0px 0px 25px #fff,
		      0px 0px 25px #fff,
		      0px 0px 25px #fff,
		      0px 0px 50px #fff,
		      0px 0px 50px #fff,
		      0px 0px 50px #7B96B8,
		      0px 0px 150px #7B96B8,
		      0px 10px 100px #7B96B8,
		      0px 10px 100px #7B96B8,
		      0px 10px 100px #7B96B8,
		      0px 10px 100px #7B96B8,
		      0px -10px 100px #7B96B8,
		      0px -10px 100px #7B96B8;
		  }}
		  .home-body {
			  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
			  width: 80%;
			  height: auto;
			  margin-left: auto;
			  margin-right: auto;
			  background-color: white;
			  border-radius: 5%;
			  margin-top: 3%;
			}
			.home-conteiner {
			  height: auto;
			  padding-top: 3%;
			}
	</style>
</head>
<body class="text">
	<header>
		<div class="header-area">
			<div class="conteiner">
				<nav class="menu">
				    <ul class="menu-main">
					<li><a href="index.php" class="font-m1">Home</a></li>
					<li><a href="" class="font-m1" style=" font-size: 55px;">My Soul Shop</a></li>
					<li><a href="admin.php" class="font-m1">Admin</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div style="height: 100%;">
		<div class="main-photo">
				<div class="home-photo"></div>
				<div class="area">IU Shop</div>
		</div>
	</div>

	<div class="home-body">
		<div class="col-10 mx-auto ">
			<div class="row">
				<div class="col-4" >
				<?php
					$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
					$text_zaprosa =  "SELECT * FROM items";
					$zapros = mysqli_query($connect, $text_zaprosa);


					$result1 = $zapros->fetch_assoc();
					$result2 = $zapros->fetch_assoc();
					$result3 = $zapros->fetch_assoc();
					$result4 = $zapros->fetch_assoc();
					$result5 = $zapros->fetch_assoc();
					$result6 = $zapros->fetch_assoc();
					$result7 = $zapros->fetch_assoc();
					$result8 = $zapros->fetch_assoc();
					$result9 = $zapros->fetch_assoc();
					$result10 = $zapros->fetch_assoc();
					$result11 = $zapros->fetch_assoc();
					$result12 = $zapros->fetch_assoc();

					echo "<img class='w-100 h-75' src='". $result1["img"]."'>";			
				?>
				<h4>
					<?php
						echo $result1["title"];
					?>
				</h4>
				<p>
					<?php
						echo $result1["des"];
					?>
				</p>
				<h5>
					<?php
						echo $result1["price"];
					?>
				</h5>
				</div>
				<div class="col-4">
					<?php
						echo "<img class='w-100 h-75' src='". $result2["img"]."'>";
					?>
					<h4>
					<?php
						echo $result2["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result2["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result2["price"];
						?>
					</h5>
				</div>
				<div class="col-4" >
					<?php
						echo "<img class='w-100 h-75' src='". $result3["img"]."'>";
					?>
					<h4>
					<?php
						echo $result3["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result3["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result3["price"];
						?>
					</h5>
				</div>
			</div>
		</div>
		<div class="col-8 mx-auto  pt-2">
			<div class="row">
				<div class="col-4" >
					<?php
						echo "<img class='w-100 h-50' src='". $result4["img"]."'>";
					?>
					<h4>
					<?php
						echo $result4["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result4["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result4["price"];
						?>
					</h5>
				</div>
				<div class="col-4">
					<?php
						echo "<img class='w-100 h-50' src='". $result5["img"]."'>";
					?>
					<h4>
					<?php
						echo $result5["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result5["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result5["price"];
						?>
					</h5>
				</div>
				<div class="col-4 " >
					<?php
						echo "<img class='w-100 h-50' src='". $result6["img"]."'>";
					?>
					<h4>
					<?php
						echo $result6["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result6["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result6["price"];
						?>
					</h5>
				</div>
			</div>
		</div>
		<div class="col-10 mx-auto pt-2">
			<div class="row">
				<div class="col-4" >
					<?php
						echo "<img class='w-100 h-75' src='". $result7["img"]."'>";
					?>
					<h4>
					<?php
						echo $result7["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result7["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result7["price"];
						?>
					</h5>
				</div>
				<div class="col-4">
					<?php
						echo "<img class='w-100 h-75' src='". $result8["img"]."'>";
					?>
					<h4>
					<?php
						echo $result8["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result8["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result8["price"];
						?>
					</h5>
				</div>
				<div class="col-4 " >
					<?php
						echo "<img class='w-100 h-75' src='". $result9["img"]."'>";
					?>
					<h4>
					<?php
						echo $result9["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result9["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result9["price"];
						?>
					</h5>
				</div>
			</div>
		</div>
		<div class="col-8 mx-auto  pt-2">
			<div class="row">
				<div class="col-4" >
					<?php
						echo "<img class='w-100 h-50' src='". $result10["img"]."'>";
					?>
					<h4>
					<?php
						echo $result10["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result10["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result10["price"];
						?>
					</h5>
				</div>
				<div class="col-4">
					<?php
						echo "<img class='w-100 h-50' src='". $result11["img"]."'>";
					?>
					<h4>
					<?php
						echo $result11["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result11["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result11["price"];
						?>
					</h5>
				</div>
				<div class="col-4 " >
					<?php
						echo "<img class='w-100 h-50' src='". $result12["img"]."'>";
					?>
					<h4>
					<?php
						echo $result12["title"];
					?>
					</h4>
					<p>
						<?php
							echo $result12["des"];
						?>
					</p>
					<h5>
						<?php
							echo $result12["price"];
						?>
					</h5>
				</div>
			</div>
		</div>

	</div>
	
</body>
</html>