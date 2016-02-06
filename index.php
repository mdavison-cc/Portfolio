<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="PageSlide/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link href='https://fonts.googleapis.com/css?family=Droid+Sans:700,400|Fascinate+Inline|Passion+One:400,700,900' rel='stylesheet' type='text/css'>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="PageSlide/vendors/jquery.easings.min.js"></script>
<script type="text/javascript" src="PageSlide/vendors/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="PageSlide/jquery.fullPage.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#f2f2f3', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
				menu: '#menu',
				scrollingSpeed: 1000
			});
		});
	</script>
	
	
<title>Michael Davison</title>
</head>
<body>

<ul id="menu">
	<li data-menuanchor=""><a href="#firstPage"></a></li>
	<li data-menuanchor=""><a href="#secondPage"></a></li>
	<li data-menuanchor=""><a href="#3rdPage"></a></li>
	<li data-menuanchor=""><a href="#4thpage"></a></li>
</ul>


<div id="fullpage">
	<div class="section " id="section0">
		<div id="profile">
		<img id="profilepicture" src="profile.png" height="350px" width="350px">
		<h1>Michael Brandon Davison</h1>
		<p>Software Engineering Intern</p>
		</div>
		
	
	
	</div>
	<div class="section" id="section1">
	<section id>
	</section>
	</div>
	<div class="section" id="section2">
		
	</div>
	<div class="section" id="section3">
	<section id="resume">
	<img class="resume" src="resume1.png" height="60%" width="30%">
	<img class="resume" src="resume2.png" height="60%" width="30%">
	</section>
	</div>
</div>

</body>
</html>