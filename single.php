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
					<div id="title">My First Blog <span class="date">6.17.2014</span></div>
				</div>
				<div class="blog-body">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a mattis orci. In molestie ligula at purus suscipit, vitae consectetur leo cursus. Integer et nibh eget massa pharetra ullamcorper. Etiam est erat, tincidunt at nisi id, commodo facilisis urna. Duis dictum arcu at nulla congue, id aliquet ipsum imperdiet. Donec vitae metus neque. Nulla facilisi. Maecenas vitae massa sit amet odio tristique tempus. Fusce in erat aliquam, sagittis erat sed, lacinia dui. Fusce non pellentesque dui, id commodo tellus.
					In quis erat venenatis, dignissim massa vel, aliquet lorem. Integer et neque purus. Sed at dolor tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam tincidunt ultricies mi in vehicula. Integer nisi mi, tincidunt sed iaculis ac, auctor id orci. Nam sit amet rhoncus magna. Fusce facilisis turpis lectus, in ultricies dui gravida et. Integer non urna dolor. Quisque viverra non felis vel tristique. Nam at convallis lectus, sit amet molestie arcu.
					Donec nec lectus luctus quam semper mattis a at lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent consequat elementum porttitor. Phasellus tincidunt arcu quis lacus semper posuere. Nam consequat congue posuere. Pellentesque rutrum justo ut ipsum semper, at varius eros cursus. Morbi fringilla quis mauris at molestie. Nulla at augue id neque tempor tristique et sit amet tellus. Duis ac tellus elementum, tincidunt dolor vel, lacinia massa. Maecenas ut consequat leo. Etiam vitae pharetra elit, in tincidunt tortor. Curabitur pellentesque sapien augue. Nullam auctor molestie facilisis. Nullam laoreet mollis mattis. Praesent ut venenatis diam, ac convallis urna.
					Proin imperdiet placerat ante at euismod. Vestibulum eget libero cursus, suscipit massa sit amet, eleifend eros. Vestibulum scelerisque ac mi id tincidunt. Etiam faucibus ligula et consequat malesuada. Aenean ornare enim ut turpis commodo, ac hendrerit massa suscipit. Mauris id sapien mollis, auctor nisl at, sagittis lacus. Curabitur vulputate massa enim, id vehicula nunc placerat non. Vestibulum ac porttitor massa. Sed id cursus dui. Maecenas sed erat vehicula, aliquam tellus ac, blandit libero. Aliquam eget turpis sed urna ullamcorper placerat sit amet sit amet dolor. Sed ac nisi eget mauris placerat sodales vitae dapibus lorem. Maecenas volutpat bibendum scelerisque. Aenean varius felis nisl, sed dignissim nunc mollis in. Aliquam erat volutpat.
					Cras magna sem, lacinia et faucibus at, porta ut leo. Quisque fringilla dignissim nulla, sed elementum ligula fringilla vitae. Donec quis velit et neque volutpat ultricies. Etiam suscipit elit neque, eu facilisis lorem ultricies non. Proin ullamcorper, felis et aliquam tempus, dolor urna fermentum eros, eu laoreet quam purus sed ante. Donec vel mattis arcu. Sed vulputate dolor non diam accumsan placerat. Quisque elit elit, varius eu urna quis, pulvinar placerat eros. Aliquam laoreet dapibus mi quis varius. Vestibulum facilisis interdum mi nec tincidunt. Nulla vitae tincidunt lectus, a malesuada quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus eu massa vel metus ultrices scelerisque. Cras nec augue aliquam est suscipit egestas at a elit. Nulla rutrum, purus id blandit venenatis, purus ipsum rutrum tellus, mollis imperdiet libero nisi a augue. Mauris luctus et est vitae molestie.
					Pellentesque euismod, risus non pharetra feugiat, tortor ligula accumsan lorem, non convallis eros lacus nec risus. Nam id gravida enim. Donec et molestie mi, vel dictum augue. Nulla ut lacinia leo. Morbi venenatis lorem sem, sed tincidunt turpis sollicitudin a. Vestibulum sagittis tellus nec nisi tempus, ullamcorper auctor dolor accumsan. Sed ac facilisis leo, vel laoreet mi.
					Generated 6 paragraphs, 569 words, 3791 bytes of Lorem Ipsum
				</div>
			</div>
		</div>
	</body>

</html>		
