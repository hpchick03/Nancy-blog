<?php
// @todo: will write php to get posts from database
include('classes/table.class.php');
$np = new Post();

$display_p = $np->get_posts_for($_GET['month']); 
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
		<link type="text/css" rel="stylesheet" href="stylesheets/months.css"/>
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
						<li><a href="month.php?month=<?php echo $month; ?>"><?php echo $month; ?></a></li>
						<?php
							}
						?>	
					</ul>
				</div>
			</div> 
			
			<div id="container"> 
				<?php
					foreach($display_p as $excerpt)
					{
				?>
				<div class="excerpt">
					<div class="header">
						<div class="date"><?php echo date('M d, Y', strtotime($excerpt['Date_Created'])); ?></div>
					
						<div class="title"><em><strong><?php echo $excerpt['Title']; ?></strong></em></div>
					</div>					
					
					<div class="text"><?php echo $excerpt['Body']; ?></div>
				</div> 
				<?php
					}
				?>

			</div>


	</body>      
</html>