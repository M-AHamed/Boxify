<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Calculator</title>
    <link rel="icon" type="image/x-icon" href="images\logo.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/navbar.css">
    <link rel="stylesheet" href="Styles/blog.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    <script>
        
    $("document").ready(function(){
        $("button").click(function(){
            $("#box4").hide(1);
            $("#box1").fadeIn(1).fadeOut(500);
            $("#box3").delay(500).fadeIn(500).fadeOut(500);
            $("#box4").delay(900).fadeIn(600);

      });
    });
    
    
    </script>
    </head> 
 
<body style="overflow-x:hidden; background-image:url(images/warehouse.png) ">
    
    <div id = "navbar">
        <ul id = navBar_unorderdList>
            <div class="navbar1">
            <li id = navBar_listLitem><a id = navBar_link href="logout.php" style="text-decoration: none;"> Log Out </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="blog.php" style="text-decoration: none;"> Blog </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="result.php" style="text-decoration: none;"> Cost Analysis </a></li>
                <li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Home </a></li>

            </div>
            <div class="navBar_text_BoxifyLogo"><h2>Boxify</h2></div>
         </ul>
        <!-- end of navbar -->
    </div>
    

    <img src="images/warehouseClip.png" style="width:100%;border-radius: 10px;">

    <div class="header">

    <div id="h-content">
    <h1>Calculator</h1>
    </div>
    </div>


	
<div align="center">
    <br>
<br>
<br>
	
	

	<form method="POST" action="result.php">
		<table width="90%" border="0" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; text-align: center;" width="98%">
			<tr style="background-color: orange; font-size: 14px; color: #f9f9f9;">
      <td width="12%"><strong>SKU Code</strong></td>
      <td width="11%"><strong>Box Type</strong></td>
      <td width="10%"><strong>n</strong></td>
      <td width="11%"><strong>Height of Box</strong></td>
      <td width="13%"><strong>Weight of Empty Box</strong></td>
      <td width="13%"><strong>Current Cost of Box</strong></td>
      <td width="13%"><strong>Price per KG for Box</strong></td>
      <td width="17%"><strong>Number of Boxes in One Layer of the Pallet</strong></td>
    </tr>
    <tr>
      <td><input type="radio" name="SKUCode" value="444930" checked="checked">444930</td>
      <td>1961</td>
      <td>1</td>
      <td>87,06</td>
      <td>0,38</td>
      <td>2,53</td>
      <td>0,86</td>
      <td>12</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="444943">
        444943</td>
      <td>1957</td>
      <td>2</td>
      <td>87,05</td>
      <td>0,38</td>
      <td>2,53</td>
      <td>0,87</td>
      <td>12</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="445098">
        445098</td>
      <td>3775</td>
      <td>3</td>
      <td>95,08</td>
      <td>0,23</td>
      <td>2,53</td>
      <td>0,86</td>
      <td>24</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="448229">
        448229</td>
      <td>2677</td>
      <td>4</td>
      <td>90,09</td>
      <td>0,35</td>
      <td>5,2</td>
      <td>2,09</td>
      <td>10</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="448279">
        448279</td>
      <td>2686</td>
      <td>5</td>
      <td>170,13</td>
      <td>0,78</td>
      <td>6,02</td>
      <td>2,11</td>
      <td>9</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="448280">
        448280</td>
      <td>2682</td>
      <td>6</td>
      <td>123,88</td>
      <td>0,40</td>
      <td>6,02</td>
      <td>2,11</td>
      <td>11</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="448947">
        448947</td>
      <td>3749</td>
      <td>7</td>
      <td>100,01</td>
      <td>0,23</td>
      <td>2,53</td>
      <td>0,86</td>
      <td>22</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="448948">
        448948</td>
      <td>3443</td>
      <td>8</td>
      <td>85,07</td>
      <td>0,48</td>
      <td>5,2</td>
      <td>2,08</td>
      <td>16</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="449340">
        449340</td>
      <td>1887</td>
      <td>9</td>
      <td>70,06</td>
      <td>0,48</td>
      <td>3,61</td>
      <td>0,72</td>
      <td>10</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="449341">
        449341</td>
      <td>1837</td>
      <td>10</td>
      <td>95,07</td>
      <td>0,55</td>
      <td>3,61</td>
      <td>0,72</td>
      <td>10</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="449346">
	  449346</td>
      <td>1819</td>
      <td>11</td>
      <td>90,07</td>
      <td>0,60</td>
      <td>4,04</td>
      <td>1,21</td>
      <td>10</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="449347">
	  449347</td>
      <td>2993</td>
      <td>12</td>
      <td>125,1</td>
      <td>0,82</td>
      <td>6,71</td>
      <td>2,35</td>
      <td>10</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="449363">
	  449363</td>
      <td>1828</td>
      <td>13</td>
      <td>103,09</td>
      <td>0,70</td>
      <td>4,04</td>
      <td>1,21</td>
      <td>10</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="449821">
	  449821</td>
      <td>2751</td>
      <td>14</td>
      <td>185,14</td>
      <td>0,31</td>
      <td>6,71</td>
      <td>2,35</td>
      <td>10</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="450183">
	  450183</td>
      <td>3523</td>
      <td>15</td>
      <td>140,11</td>
      <td>0,61</td>
      <td>6,02</td>
      <td>2,11</td>
      <td>9</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="451194">
	  451194</td>
      <td>2934</td>
      <td>16</td>
      <td>95,07</td>
      <td>0,54</td>
      <td>3,61</td>
      <td>0,72</td>
      <td>10</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="451197">
	  451197</td>
      <td>2935</td>
      <td>17</td>
      <td>105,08</td>
      <td>0,69</td>
      <td>6,71</td>
      <td>2,34</td>
      <td>10</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="451198">
	  451198</td>
      <td>3517</td>
      <td>18</td>
      <td>70,07</td>
      <td>0,29</td>
      <td>3,54</td>
      <td>1,06</td>
      <td>16</td>
    </tr>
	
			<tr>
      <td><input type="radio" name="SKUCode" value="451202">
	  451202</td>
      <td>2933</td>
      <td>19</td>
      <td>105,08</td>
      <td>0,60</td>
      <td>6,71</td>
      <td>2,35</td>
      <td>10</td>
    </tr>
			<tr style="background-color: #333333; opacity:0.6; color: #f9f9f9;">
      <td><input type="radio" name="SKUCode" value="453584">
	  453584</td>
      <td>3850</td>
      <td>20</td>
      <td>95,08</td>
      <td>0,29</td>
      <td>4,09</td>
      <td>1,40</td>
      <td>15</td>
    </tr>
			<tr>
      <td><input type="radio" name="SKUCode" value="454354">
	  454354</td>
      <td>3187</td>
      <td>21</td>
      <td>70,07</td>
      <td>0,31</td>
      <td>3,54</td>
      <td>1,06</td>
      <td>15</td>
    </tr>
		
</table><br>
<br>

    <input type="text" name="PalletsInTheVehicle" placeholder="Pallets In The Vehicle" style="background-color: transparent; font-size: 18px;">
		<input type="text" name="CostOfTheVehicle" placeholder="Cost Of The Vehicle"  style="background-color: transparent; font-size: 18px;">
		<input type="text" name="MaximumLayerForPallet" placeholder="Maximum Layer For Pallet" style="background-color: transparent; font-size: 18px;">
		<input type="text" name="DesiredProductNumbers" placeholder="Desired Product Numbers" style="background-color: transparent; font-size: 18px;">
		<input type="text" name="NumberOfLayersForBox" placeholder="Number Of Layers For Box" style="background-color: transparent; font-size: 18px;">
		<br>
<br>

		<input type="submit" value="Calculate" class="btn">
</form>

    
    <br>
    <br>

</div>

<div class=footer-nav>
        <ul class = footer_unorderedList>
            <li id = footer_listItem><a id = footer-text href="aboutus.html" style="text-decoration: none;"> About Us </a></li>
            <li id = footer_listItem><a id = footer-text href="privacy.html" style="text-decoration: none;"> Privacy </a></li>
            <li id = footer_listItem><a id = footer-text href="blog.php" style="text-decoration: none;"> Blog </a></li>
        </ul>

        <div class= footer-text>
             <p>C 2022. All Rights Reserved | Design by Boxify inc</p>
        </div>

    </div>

    </body>
</html>
