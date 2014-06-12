<?php 
	$months = ['January',
		   'February',
		   'March',
		   'April',
		   'May',
		   'June',
		   'July',
		   'August',
		   'September',
		   'October',
		   'November',
		   'December'];
?>
<!DOCTYPE html> 

<html> 
	<head> 
		<title>Nancy's Blog</title> 
		<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="stylesheets/stylesheet.css"/>
	</head> 
	
	<body>
		<div id="page">

			<div id="header"> 
				<h1 id="heading" class="heading-colors">Nancy, I Am</h1> 
				<h3 id="heading-space" class="heading-colors">A blog by Nancy for Nancy about Nancy</h3> 
			</div> 
			
			<div id="container"> 
				
				<div id="content"> 
					<div class="bubble-container" id="chilly">
						<div class="bubble-main">
							<div class="hide">
								<img src="images/jalapeno_peppers.jpg"/>
							</div>
						</div> 
					</div>			

				<div class="bubble-container" id="books">
					<div class="bubble-main">
						<div class="bubble-iii"></div>
						<div class="hide">
							<img src="http://www.culturalweekly.com/wp-content/uploads/2011/08/img_7378-stack-of-books-q75-1055x1740.jpg"/>
						</div>
					</div>
				</div>
					
					<div class="bubble-container" id="shakespeare">
						<div class="bubble-main">
							<div class="hide">
								<img src="http://media1.shmoop.com/images/subject_homes/featured/william-shakespeare-biography.jpg"/>
							</div>
						</div>
					</div>
					
					<div class="bubble-container" id="pen">
						<div class="bubble-main">
							<div class="bubble-iii"></div>
							<div class="hide">
								<img src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=37601819"/>
							</div>
						</div>
					</div>
					<div id="sidebar"> 
						
						<ul>
							<li><a href="/">Home</a></li>
							<?php
								foreach($months as $month)
								{
							?>
							<li><a href="month.php?month=<?php echo $month; ?>"><?php echo $month; ?></a></li>
							<?php
								}
							?>	
						</ul>
					</div>	
					<div id="pro-pic"><img src="images/me.png"/> </div>
					<div class="p-text">
					    <p>
			  			    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			  			    Fusce nec velit lectus. Sed auctor mi magna, ac ultricies metus semper ut. 
			  			    Nullam ultrices eros in volutpat aliquam. Ut facilisis, sem eget 
			  			    sodales lacinia, sapien ante bibendum est, quis dignissim nibh sem non risus. 
			  			    Phasellus risus nisi, dapibus in ipsum a, pulvinar aliquam massa. 
			  			    Praesent id gravida ante. Nulla lectus augue, dictum ac erat ut, aliquet rutrum odio. 
				  			Nulla sed ultrices felis. Nunc purus tortor, pharetra eu aliquet eu, tempor at eros. 
				  			Cras ut augue cursus, viverra erat at, imperdiet eros. Nunc elementum ipsum dolor, 
				  			eu semper purus ullamcorper ac. Donec laoreet augue non ante mollis, et vulputate lacus adipiscing. 
				  			Donec fringilla euismod urna, sed commodo purus luctus eu. Proin eget venenatis metus. 
				  			Etiam vel accumsan nibh.
						</p>
						<p>
							Etiam eget neque vel risus tempor pretium ac sodales leo. Suspendisse lacus elit, 
							vulputate non vulputate sit amet, accumsan non risus. Donec faucibus sed tortor quis vestibulum. 
							Proin nec pulvinar diam, in lacinia sapien. Cras vitae neque vitae erat ullamcorper convallis. 
							In eget tellus eros. Aliquam tincidunt orci magna, ut venenatis neque euismod vel.
					   </p> 
				 </div>	   
			   </div> 
			</div>

	</body>      
</html>