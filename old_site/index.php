<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Michael Avedon, Mike Avedon, Michael Avedon Photography" />
<meta name="description" content="MICHAEL AVEDON PHOTOGRAPHY" />
<title>MICHAEL AVEDON PHOTOGRAPHY</title>

<link rel="stylesheet" href="css/avedon.css" type="text/css" media="screen, projection"/>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<script type="text/javascript" src="js/avedon.js"></script>

<script language="JavaScript">
<!-- Hide the script from old browsers --

img0_on = new Image(175,134);
img0_on.src="images/2a_text.jpg";
img0_off = new Image(175,134);
img0_off.src="images/1a.jpg";
  
img1_on = new Image(175,134);
img1_on.src="images/2b_text.jpg";
img1_off = new Image(175,134);
img1_off.src="images/2b.jpg";

img2_on = new Image(175,134);
img2_on.src="images/2d_text.jpg";
img2_off = new Image(175,134);
img2_off.src="images/2d.jpg";

img6_on = new Image(175,134);
img6_on.src="images/3a_text.jpg";
img6_off = new Image(175,134);
img6_off.src="images/3a.jpg";
 
img3_on = new Image(175,134);
img3_on.src="images/3c_text.jpg";
img3_off = new Image(175,134);
img3_off.src="images/3c.jpg"; 

img4_on = new Image(175,134);
img4_on.src="images/4b_text.jpg";
img4_off = new Image(175,134);
img4_off.src="images/4b.jpg"; 

img5_on = new Image(175,134);
img5_on.src="images/4d_text.jpg";
img5_off = new Image(175,134);
img5_off.src="images/4d.jpg"; 

img7_on = new Image(175,134);
img7_on.src="images/5c_text.jpg";
img7_off = new Image(175,134);
img7_off.src="images/5c.jpg"; 

function over_image(parm_name)
    {
        document[parm_name].src = eval(parm_name + "_on.src");
    }
function off_image(parm_name)
    {
        document[parm_name].src = eval(parm_name + "_off.src");
    }
// --End Hiding Here -->
</script>

</head>

<body>

<div id="maincontent">

<table id="grid">
	<tr>
        <td><a href="artists.php" onmouseover="over_image('img0');" onmouseout="off_image('img0')"><img src="images/1a.jpg" name="img0"/></a></td>
        <td><img src="images/2a.jpg"/></td>
        <td><a href="elizabeth.php" onmouseover="over_image('img6');" onmouseout="off_image('img6')"><img src="images/3a.jpg" name="img6"/></a></td>
        <td><img src="images/4a.jpg"/></td>
        <td><img src="images/5a.jpg"/></td>
    </tr>
    <tr>
    	<td><img src="images/1b.jpg"/></td>
        <td><a href="portraits.php" onmouseover="over_image('img1');" onmouseout="off_image('img1')"><img src="images/2b.jpg" name="img1"/></a></td>
        <td><img src="images/3b.jpg"/></td>
        <td><a href="movement.php" onmouseover="over_image('img4');" onmouseout="off_image('img4')"><img src="images/4b.jpg" name="img4"/></a></td>
        <td><img src="images/5b.jpg"/></td>
    </tr>
    <tr>
    	<td><img src="images/1c.jpg"/></td>
        <td><img src="images/2c.jpg"/></td>
        <td><a href="misc.php" onmouseover="over_image('img3');" onmouseout="off_image('img3')"><img src="images/3c.jpg" name="img3"/></a></td>
        <td><img src="images/4c.jpg"/></td>
        <td><a href="editorial.php" onmouseover="over_image('img7');" onmouseout="off_image('img7')"><img src="images/5c.jpg" name="img7"/></a></td>
    </tr>
    <tr>
    	<td><img src="images/1d.jpg"/></td>
        <td><a href="RVCA.php" onmouseover="over_image('img2');" onmouseout="off_image('img2')"><img src="images/2d.jpg" name="img2"/></a></td>
        <td><img src="images/3d.jpg"/></td>
        <td><a href="bio.php" onmouseover="over_image('img5');" onmouseout="off_image('img5')"><img src="images/4d.jpg" name="img5"/></a></td>
        <td><img src="images/5d.jpg"/></td>
    </tr>
</table>

<div id="bottombar">
        		<p id="collections"></p>
				
                <p id="hide">
                <span class="space">&nbsp;<a href="/elizabeth.php">ELIZABETH</a></span>
                <span class="space"><a href="/fashion.php">FASHION</a></span>
                <span class="space"><a href="/artists.php">ARTISTS</a></span>
                <span class="space"><a href="/portraits.php">PORTRAITS</a></span>
                <span class="space"><a href="/misc.php">MISC.</a></span>
                <span class="space2"><a href="/RVCA.php">RVCA</a></span>
                &nbsp;<span class="space"><a href="/movement.php">MOVEMENT</a></span>
                <span class="space"><a href="/bio.php">BIO</a></span>
                </p>
                
    <a href="/"><p id="logoo"></p></a>
                
 </div>

</div>

</body>
</html>