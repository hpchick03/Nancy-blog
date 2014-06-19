<?php
// @todo: will write php to get posts from database
include('classes/table.class.php');
$np2 = new Post();

$blog_ID = $_GET['blog_id'];
//pulls the array with blog information from 
//the mysql database for whatever value is assigned to $blog_ID key and puts it in $post.
$post = $np2->get_single_post($blog_ID);

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
		<link href='http://fonts.googleapis.com/css?family=Arvo|Lobster' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="stylesheets/stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="stylesheets/months.css"/>
		<link type="text/css" rel="stylesheet" href="stylesheets/single.css"/>
	</head>

	<body>
		<div id="page">

			<div id="header"> 
				<h1 id="heading" class="heading-colors">Nancy, I Am</h1> 
				<h3 id="heading-space" class="heading-colors">A blog by Nancy for Nancy about Nancy</h3> 
				<div class="menu">
					<ul>
						<li><a href="/">Home</a></li>
						<?php
							foreach($months as $month)
							{
						?>
						<li><a <?php if($month === $_GET['month']) { ?>class="active"<?php } ?> href="month.php?month=<?php echo $month; ?>"><?php echo $month; ?></a></li>
						<?php
							}
						?>	
					</ul>
				</div>
			</div> 
			
		<div id="container">
			<div class="blog-space">
				<div class="blog-heading">
					<div class="enclose-img" id="colorfly"><img src="images/bluefly.jpg"></div>
					<div id="title"><?php echo $post['Title']; ?> <span class="date"><?php echo $post['Date_Created']; ?></span></div>
				</div>
				<div class="blog-body">
					<?php
						echo $post['Body'];
					?>
				</div>
			</div>
		</div>
	</body>

</html>		
