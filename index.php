<!DOCTYPE html>
<html>
<head>



<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/custom.css" />
<link rel="stylesheet" type="text/css" href="qtip/jquery.qtip.css" />
<link rel="stylesheet" type="text/css" href="popup/jquery.popup.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="imagemaps/jQuery.rwdImageMaps.js"></script>
<script src="maphi/jQuery.maphilight.js"></script>
<script src="qtip/jquery.qtip.js"></script>
  <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.11/jquery.popupoverlay.js"></script>

<script>

$(document).ready(function(e) {
	

	$('img[usemap]').maphilight();
	$('img[usemap]').rwdImageMaps();
	

	$('#mypopup').popup({
		opacity: 0.3,
		transition: 'all 0.3s',
		pagecontainer: '.well'
	});
	
		$('#mypopup1').popup({
		opacity: 0.3,
		transition: 'all 0.3s',
		pagecontainer: '.well'
	});
	
	
	$('#coffee').qtip({
		    style: {
        classes: 'qtip-default'
		
    },
    content: {
        text: 'I LOVE COFFEE!'
    },
    position: {
			at: 'top right'
			
    }
	});
	
	
		$('#laptop').qtip({
		    style: {
		   classes: 'qtip-default'

		
    },
    content: {
        text: 'About Me'
    },
    position: {
			at: 'middle'
			
    }
	});
	
	
		$('#notepad').qtip({
		    style: {
        classes: 'qtip-default'

		
    },
    content: {
        text: 'Resume'
    },
    position: {
			at: 'middle'
			
    }
	});
	
	
		$('#phone').qtip({
		    style: {
      classes: 'qtip-default'

		
    },
    content: {
        text: 'My Projects'
    },
    position: {
			at: 'top right'
			
    }
	});

	
	$('#laptop').on('click', function() {
		$('#mypopup').popup('toggle');
	});
	
	$('#phone').on('click', function() {
		$('#mypopup1').popup('toggle');
	});
	
	
	$( window ).resize(function() {
		$('img[usemap]').maphilight();
	});
	

});

</script>
	
	
<title>Michael Davison</title>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <p class="navbar-text">Michael Davison</p>
	<ul id="menu">
	<li data-menuanchor=""><a href="#firstPage"></a></li>
	<li data-menuanchor=""><a href="#secondPage"></a></li>
	<li data-menuanchor=""><a href="#3rdPage"></a></li>
	<li data-menuanchor=""><a href="#4thpage"></a></li>
</ul>
  </div>
</nav>





<img class="img-responsive" id="main" src="main.png" border="0" width="5472" height="3648" orgWidth="5472" orgHeight="3648" usemap="#mymap" alt="" />

<map id="mymap" name="mymap">
<area id="coffee" name="coffee"shape="poly" alt="" title="" data-maphilight='{"stroke":false,"fillColor":"ffffff","fillOpacity":0.2}' coords="438,1584,575,1685,736,1780,956,1918,1008,1947,1062,1966,1124,1968,1195,1947,1227,1921,1268,1887,1300,1841,1304,1760,1299,1705,1277,1667,958,1112,917,1055,867,1014,775,979,700,975,624,983,542,1006,467,1039,393,1091,335,1151,284,1226,261,1312,264,1386,278,1447,348,1546,414,1578"  target="" item="coffee" />
<area id="phone" name="phone"shape="poly" alt="" title="" data-maphilight='{"stroke":false,"fillColor":"ffffff","fillOpacity":0.2}' coords="712,3092,719,3099,726,3108,737,3111,754,3112,1032,3111,1044,3109,1052,3102,1065,3092,1072,3079,1081,3024,1101,2909,1118,2794,1151,2583,1175,2406,1186,2355,1184,2338,1177,2323,1172,2316,1159,2310,1147,2309,894,2309,875,2313,860,2321,845,2340,826,2434,719,2997,711,3036,708,3058,707,3075,707,3076"  target="" item="phone"/>
<area id="laptop" name="laptop"shape="poly" alt="" title="" data-maphilight='{"stroke":false,"fillColor":"ffffff","fillOpacity":0.2}' coords="938,278,952,264,966,256,978,254,1016,252,1054,252,1744,242,3698,234,3730,234,3760,246,3780,262,3790,286,3786,338,3524,1556,3514,1574,3484,1586,3446,1584,1460,1598,1432,1586,1420,1564,1408,1534,1262,1196,960,398,940,336,932,298,938,282"  target="" item="laptop"/>
<area id="notepad" href="resume.pdf" name="notepad" shape="poly" alt="" title="" data-maphilight='{"stroke":false,"fillColor":"ffffff","fillOpacity":0.2}' coords="3840,1580,4213,1604,4781,1614,4803,1617,4830,1630,4839,1646,4848,1665,4856,1701,5109,2902,5152,3084,5154,3105,5151,3121,5139,3134,5123,3142,5094,3148,5058,3147,3905,3142,3899,3142,3892,3138,3843,3136,3805,3139,3670,1581,3685,1569,3710,1563,3744,1560,3757,1569,3758,1577,3759,1580,3759,1583,3777,1579,3780,1579"  target="" item="notepad"/>
</map>
	


  <!-- Add content to the popup -->
  <div id="mypopup">
	
	<div class="well">
		
			<h1 class="header">Michael Davison</h1>
			<img id="profile" src="profile.png" width="300px" height="300px" />
			<h3 class="header">Software Engineering Intern</h3>
			<p class="about">Hello there! My name is Michael Davison. Im a 20 year old male living in Southern Ontario. 
			I am graduating the Software Engineering Technician program at Conestoga College located in Kitchener, Ontario. 
			My main passion or focus in software is Game/Mobile and Web Development. I am currently looking to fulfill an internship in any of those areas for Spring/2016.
			I have worked on various projects pertaining those specific areas. I am currently working on a social media type mobile app for Conestoga College and
			my capstone project.
			Beyond the software world, I love fashion/design, playing music, exercising, and most of all <b>drinking coffee!</b></p>
	
	</div>

	</div>
	


    <div id="mypopup1">
	
	<div class="well">
	
	<h3>My Projects</h3>

    <div class="thumbnail">
      <img src="whaleshot.png " width="260px"  alt="...">
      <div class="caption">
        <h3>Wonder Whale - Android Game</h3>
        <p class="about">2015</p>
        <p><a href="https://play.google.com/store/apps/details?id=com.mygdx.game.wonderwhale&hl=en" class="btn btn-primary" role="button">Play Store</a>
      </div>
    </div>
  



	

    <div class="thumbnail">
      <img src="taptherightcolorshot.png" width="300px"  alt="...">
      <div class="caption">
        <h3>Tap The Right Color - Android Game</h3>
        <p class="about">2014</p>
        <p><a href="https://play.google.com/store/apps/details?id=com.piixel.TapTheRightColor&hl=en" class="btn btn-primary" role="button">Play Store</a>
      </div>
    </div>

  
</div>
	
</div>
	
	
	

	



  
</body>
</html>