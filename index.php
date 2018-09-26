<?php

	$warning='';
	$success='';
	$link=mysqli_connect("localhost","root","","wildlife");
	 if($_POST){
			 $query="select `email` from `emaildirectory` where email='".$_POST['email']."'";
			   $result=mysqli_query($link,$query);
			   if(mysqli_num_rows($result) > 0){
				  $warning="This email id is aleady registered";
			   }else{
			   $query="insert into `emaildirectory` values('".$_POST['email']."')";
				mysqli_query($link,$query);
				$success="Registered successfully";
			   }
	 }
?>


<html>
	<head>
	    <title>JIM CORBETT WILDLIFE SANCTUARY</title>
		  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	
		<style>
			
			.topbarcolor{
				background-color:#c17415 !important;
				
			}
			#buttoncolor{
				background-color:#F8B332;
			}
			.image{
				background-image:url("http://localhost/jumboimage1.jpg");
				
			}
			#moreinfo{
				margin-top:15px;
			}
			#footer{
				width:100%;
				height:200px;
				background-color:#CC8D3D;
				padding:15px;
			}
			#bottombar{
				text-align:center;
			}
			
			
		</style>
	</head>
		
	<body>
	 
	<nav class="navbar navbar-expand-lg fixed-top navbar-light topbarcolor">
           <a class="navbar-brand" href="http://localhost/index.php">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSij7F8_1A1QQznYLJPTOoN-Mlh6T4BtcfZDLscD2nlDqmL-NkO" width="30" height="30" class="d-inline-block align-top" alt="">
		HOME
  </a>		 
		
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="http://localhost/animal.php">Animal <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="http://localhost/tourist.php">Tourist</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link" href="http://localhost/staff.php">Staff</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link" href="http://localhost/stats.php">Statics</a>
			  </li>
			
			</ul>
			<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button id="buttoncolor" class="btn btn-warning my-2 my-sm-0" type="submit">Animal Info</button>
			</form>
		  </div>
		</nav>
		
		
		<div class="jumbotron image">
		
  <h1 class="display-4">JIM CORBETT WILDLIFE SANCTUARY</h1>
  <p class="lead">Conserved and protected by the government of India</p>
	<hr>
 <p>Want to know more, join our mailing list</p>
	 <p class="lead">
   
   
   <form method="post">
  <div class="form-row align-items-center">
			
			<div class="col-sm-3 my-1">
			  <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
			  <div class="input-group">
				<div class="input-group-prepend">
				  <div class="input-group-text">@</div>
				</div>
				<input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter your email">
			  </div>
			</div>
		  
			<div class="col-auto my-1">
			  <button type="submit" class="btn btn-secondary topbarcolor ">Submit</button>
			</div>
		  </div>
		</form>
   
	   
	  </p>
	</div>
	<div><?php
	
	if($warning){
		echo'<div class="alert alert-warning" role="alert">
  '.$warning.'
</div>';
	}
	if($success){
		echo'<div class="alert alert-success" role="alert">
  '.$success.'
</div>';
	}
	
	
	?></div>
	<div class="container" >
		<h2>About</h2>
		<div class="lead">Jim Corbett National Park, which is a part of the larger Corbett Tiger Reserve, a Project Tiger Reserve lies in the Nainital district of Uttarakhand. The magical landscape of Corbett is well known and fabled for its tiger richness. Established in the year 1936 as Hailey National Park, Corbett has the glory of being India's oldest and most prestigious National Park. It is also being honored as the place where Project Tiger was first launched in 1973. This unique tiger territory is best known as the father who gave birth of the Project Tiger in India to protect the most endangered species and the Royal of India called Tigers. 

Spans over an extent of 520 square kilometers, its whole area comprises of hills, marshy depressions, riverine belts, grasslands and large lake. It is among the few tiger reserves in India that allows overnight stays in the lap of the National Park. Nature watch and wildlife viewing in the park is done in an open four wheeler Jeep and on elephant back. Sheltering a healthy population of tigers and rare species like Otters and the endemic fish eating crocodile, the national park is one of the most sought after destinations for the wildlife buffs. Dhikala, situated at the border of the extensive Patil Dun valley, is the most popular destination in Corbett because of its superb location and sheer abundance of wildlife present. 

If you love bird watching then Corbett is virtual haven for such tourists. Corbett and its adjoining area is a home to more than 650 species of residents and migratory birds. Particularly Dhikala is fine place to look for birds of prey, more than over 50 species of raptors alone shows the healthy biodiversity of the area. Their multiplex behavior is intriguing and their varied songs are very much pleasing to the ear. In a nutshell, this finest national park of India is well known for rich and varied wildlife including royal Bengal tiger, elephant, four to five species of deer and rich birdlife. 
	<p id="moreinfo"><a href="https://en.wikipedia.org/wiki/Jim_Corbett_National_Park"> <button id="buttoncolor" class="btn btn-warning my-2 my-sm-0" type="submit">More info</button><a></p>
		</div>
	</div>

	
	<div id="footer" >
	<div id="bottombar" >
	<strong>Rating:</strong><br>
	<img src="http://localhost/stars.png" /> 4.7 - 823 votes
  	      <br>
			<strong>Guest Reviews:</strong><br>     
			   Rated 4.7 / 5 based on 823 reviews <br></p><br>
   
			   <p>&copy; 2018 jimcorbettwildlifesanctuary.com. All rights reserved.</p>   		        
	 </div>

	</div>
		<script>		
		</script>
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>