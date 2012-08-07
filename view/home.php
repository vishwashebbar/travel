<!DOCTYPE HTML>
<html>

<head>
  <title>Xplore Udupi</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
  <script src="js/jquery-1.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/imageHover.css" />
  
<script>
$("li").click(function () {
    $(this).toggleClass('current');
  });

$(document).ready(function() {

	//move the image in pixel
	var move = -15;
	
	//zoom percentage, 1.2 =120%
	var zoom = 1.2;

	//On mouse over those thumbnail
	$('.item').hover(function() {
		
		//Set the width and height according to the zoom percentage
		width = $('.item').width() * zoom;
		height = $('.item').height() * zoom;
		
		//Move and zoom the image
		$(this).find('img').stop(false,true).animate({'width':width, 'height':height, 'top':move, 'left':move}, {duration:200});
		
		//Display the caption
		$(this).find('div.caption').stop(false,true).fadeIn(200);
	},
	function() {
		//Reset the image
		$(this).find('img').stop(false,true).animate({'width':$('.item').width(), 'height':$('.item').height(), 'top':'0', 'left':'0'}, {duration:100});	

		//Hide the caption
		$(this).find('div.caption').stop(false,true).fadeOut(200);
	});

});
</script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
         <h1 id="site-title">Xplore<a href="#"> Udupi</a></h1>
        <!-- <div class="slogan">Cool slogan goes here!</div> -->
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li class="current"><a href="index.php" >Home</a></li>
          <li><a href="attractions.php">Attractions</a></li>
          <li><a href="page.html">Reach</a></li>
          <li><a href="another_page.html">Hotels</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>What's the News?</h4>
        <h5>1st July 2011</h5>
        <p>Put your latest news item here, or anything else you would like in the sidebar!<br /><a href="#">Read more</a></p>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Weather Update</h3>
          <h4>Current weather - 32 &deg C</h4>
          <p>Summer(Mar - May): 32 - 37&degC <br/>
          Rainy(Jun - Sept): 26 - 32&degC <br/>
          Winter(Oct - Feb): 24 - 30&degC <br/>
          </p>
          <!--  <form method="post" action="#" id="subscribe">
            <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
          </form>-->
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Latest Blog</h3>
          <h4>Website Goes Live</h4>
          <h5>1st July 2011</h5>
          <p>We have just launched our new website. Take a look around, we'd love to know what you think.....<br /><a href="#">read more</a></p>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to Xplore Udupi</h1>
        <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
        <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
        <p>You can view more free HTML5 web templates <a href="http://www.html5webtemplates.co.uk">here</a>.</p>
        <p>This template is a fully functional 5 page website, with an <a href="examples.html">examples</a> page that gives examples of all the styles available with this design.</p>
        
        <div>
       <!-- Begin: adBrite, Generated: 2012-07-22 3:40:06  
		<script type="text/javascript">
		var AdBrite_Title_Color = '3D81EE';
		var AdBrite_Text_Color = '000000';
		var AdBrite_Background_Color = 'FFFFFF';
		var AdBrite_Border_Color = 'CCCCCC';
		var AdBrite_URL_Color = 'F2984C';
		try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
		</script>
		<span style="white-space:nowrap;"><script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=2187382&zs=3732385f3930&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
		
		<a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=2187382&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-leaderboard.gif" style="background-color:#CCCCCC;border:none;padding:0;margin:0;" alt="Your Ad Here" width="14" height="90" border="0" /></a></span>
		-->
		<!-- End: adBrite -->
		</div>
        
        <h2>Major Attractions</h2>
        <p>This template has been tested in the following browsers:</p>
        <div style="padding-left:50px" float="left">
			<div class="item" >
				<a href="#"><img src="images/Attractions/udupi_beaches.jpg" alt="Cycliner" title="" width="180" height="180"/></a>
				<div class="caption">
					<a href="">Beaches</a>
					<p>Explore some awesome beaches and islands in udupi. St Mary's Island is around 10 km from Malpe, 
					which is an excellent picnic spot.</p>
				</div>
			</div>
			<div class="item">
				<a href="#"><img src="images/Attractions/udupi_landscapes.jpg" alt="Banana Moon" title="" width="180" height="180"/></a>
				<div class="caption">
					<a href="">Landscapes</a>
					<p></p>	</div>
			</div>
			<div class="item">
				<a href="#"><img src="images/Attractions/udupi-krishna-temple.jpg" alt="Cycliner" title="" width="180" height="180"/></a>
				<div class="caption">
					<a href="">Temples</a>
					<p>Udupi has many temples also known as temple town. To name a few Krishna Temple in Udupi, Vinayaka Temple - Aneguddi, Mukambika Temple - Kollur </p>
				</div>
			</div>
		</div>
		
		<div style="padding-left:30px">
		<a href="">More..</a>
		</div>
      </div>
       
    </div>
    <div id="footer">
      <p>Copyright &copy; Xplore.com  | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
<script>

/*	 // The first item is automatically deselected when another is clicked
   $('li').click(function() { // should be better selector than just li
  $('li').removeClass('current'); // remove all active classes
  $(this).addClass('current'); // add active class to element clicked
});
*/

</script>
</html>
	