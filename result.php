<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>


<?php
	error_reporting(0);

	if ($_POST)
	{
		
		$SKUCode = $_POST['SKUCode'];
		echo $SKUCode."<br>";
		
		$PalletsInTheVehicle = $_POST['PalletsInTheVehicle'];
		$CostOfTheVehicle = $_POST['CostOfTheVehicle'];
		$MaximumLayerForPallet = $_POST['MaximumLayerForPallet'];
		$DesiredProductNumbers = $_POST['DesiredProductNumbers'];
		$mn=$_POST['NumberOfLayersForBox'];
		
		$warning = 'You are all set !';
		
		if (empty($PalletsInTheVehicle) || empty($CostOfTheVehicle) || empty($MaximumLayerForPallet) || empty($DesiredProductNumbers) || empty($mn))
		{
			$warning = 'You have empty data!';
		} 
		else
		{
				$hn=1.1;
				$an=1.2;
				$bn=1.3;
				$cn=1.4;
				$fn=1.6;
				$sonuc=0.0;
				
				switch ($SKUCode)
				{
					case '444930':				
					$hn=87.06;
					$an=0.38;
					$bn=2.53;
					$cn=0.86;
					$fn=12.0;
					break;
					
					case '444934':				
					$hn=87.05;
					$an=0.38;
					$bn=2.53;
					$cn=0.87;
					$fn=12.0;
					break;
					
					case '445098':				
					$hn=95.08;
					$an=0.23;
					$bn=2.53;
					$cn=0.86;
					$fn=24.0;
					break;
					
					case '448229':				
					$hn=90.09;
					$an=0.35;
					$bn=5.2;
					$cn=2.09;
					$fn=10.0;
					break;
					
					case '448279':				
					$hn=170.13;
					$an=0.78;
					$bn=6.02;
					$cn=2.11;
					$fn=9.0;
					break;
					
					case '448280':				
					$hn=123.88;
					$an=0.4;
					$bn=6.02;
					$cn=2.11;
					$fn=11.0;
					break;
					
					case '448947':				
					$hn=100.01;
					$an=0.23;
					$bn=2.53;
					$cn=0.86;
					$fn=22.0;
					break;
					
					case '448948':				
					$hn=85.07;
					$an=0.48;
					$bn=5.2;
					$cn=2.08;
					$fn=16.0;
					break;
					
					case '449340':				
					$hn=70.06;
					$an=0.48;
					$bn=3.61;
					$cn=0.72;
					$fn=10.0;
					break;
					
					case '449341':				
					$hn=95.07;
					$an=0.55;
					$bn=3.61;
					$cn=0.72;
					$fn=10.0;
					break;
					
					case '449346':				
					$hn=90.07;
					$an=0.6;
					$bn=4.04;
					$cn=1.21;
					$fn=10.0;
					break;
					
					case '449347':				
					$hn=125.1;
					$an=8.82;
					$bn=6.71;
					$cn=2.35;
					$fn=10.0;
					break;
					
					case '449363':				
					$hn=103.09;
					$an=0.7;
					$bn=4.04;
					$cn=1.21;
					$fn=10.0;
					break;
					
					case '449821':				
					$hn=185.14;
					$an=0.31;
					$bn=6.71;
					$cn=2.35;
					$fn=10.0;
					break;
					
					case '450183':				
					$hn=140.11;
					$an=0.61;
					$bn=6.02;
					$cn=2.11;
					$fn=9.0;
					break;
					
					case '451194':				
					$hn=95.07;
					$an=0.54;
					$bn=3.61;
					$cn=0.72;
					$fn=10.0;
					break;
					
					case '451197':				
					$hn=105.08;
					$an=0.69;
					$bn=6.71;
					$cn=2.34;
					$fn=10.0;
					break;
					
					case '451198':				
					$hn=70.07;
					$an=0.29;
					$bn=3.54;
					$cn=1.06;
					$fn=16.0;
					break;
					
					case '451202':				
					$hn=105.08;
					$an=0.6;
					$bn=6.71;
					$cn=2.35;
					$fn=10.0;
					break;
					
					case '453584':				
					$hn=95.08;
					$an=0.29;
					$bn=4.09;
					$cn=1.4;
					$fn=15.0;
					break;
					
					case '454354':				
					$hn=70.07;
					$an=0.31;
					$bn=3.54;
					$cn=1.06;
					$fn=15.0;
					break;
				}
				
				$MaxBoxOnPallet=($MaximumLayerForPallet/$hn)*$fn;
				$BoxUpgradingCost=$cn*$bn*$DesiredProductNumbers;
				$BoxOnTheOldPallet=$mn*$fn;
				$Pallet=$DesiredProductNumbers/$BoxOnTheOldPallet;
				$x=($Pallet/$PalletsInTheVehicle)*$CostOfTheVehicle;
				$OldBoxCost=$bn*$DesiredProductNumbers;
				$New=(($DesiredProductNumbers/$MaxBoxOnPallet)/$PalletsInTheVehicle)*$CostOfTheVehicle;
				
				$NewBoxCost=$OldBoxCost+$BoxUpgradingCost;
				
				$TotalOldCost=$x+$OldBoxCost;
				$NewCost=$New+$NewBoxCost;
			}
			
		}

	

?>

<html lang="en">
    <head>
    <title>Cost Analysis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/navbar.css">
    <link rel="stylesheet" href="Styles/result.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    
    <script>  
    $("document").ready(function(){
        $(".btn1").click(function(){
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
                <li id = navBar_listLitem><a id = navBar_link href="calculator.php" style="text-decoration: none;"> Calculate </a></li>
				<li id = navBar_listLitem><a id = navBar_link href="home.php" style="text-decoration: none;"> Home </a></li>
            </div>
            <div class="navBar_text_BoxifyLogo"><h2>Boxify</h2></div>
         </ul>
        <!-- end of navbar -->
    </div>
    </div>
    

    <img src="images/warehouseClip.png" style="width:100%;border-radius: 10px;">

    <div class="header">

    <div id="h-content">
    <h1>Cost Analysis</h1>
    </div>
    </div>

<canvas id="costChart" style="margin: 0 auto; margin-top: 50px; margin-right:55%; width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Old Cost", "New Cost"];
var yValues = [<?php echo (int)$NewCost?>, <?php echo (int)$TotalOldCost?>];
var barColors = ["rgba(247,160,0,1)","rgba(247,185,0,1)"];

new Chart("costChart", {
  type: "horizontalBar",
  data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
  options: {
    legend: {display: false },
    title: {
      display: true
    },
    scales: {
      xAxes: [{ticks: {min: 10}}]
    }
  }
});
</script>
<div align="center">
    <h3><?php echo $warning?></h3>
    
    <div class="container">
        <div class="box"><img id="box1" src="images/box1.png"></div>
        <div class="box stack-top""><img id="box3" src="images/box3.png"class="hidden"></div>
        <div class="box stack-top""> <img id="box4" src="images/box4.png"class="hidden"></div>
    </div>

    <button class="btn1">READY TO PACK</button>
</div>
<div align="center">
    <br>
    <a href="calculator.php"><button class="btn">GO BACK</button></a>
</div>


    </body>
</html>