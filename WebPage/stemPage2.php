<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPage2.css" media="screen" rel="stylesheet" type="text/css" media="all" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<div class="header">
		</div>

		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            			<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="start.php">
            			<button type="submit" formaction = "stemPageStart.php" class="buttontitle" >Start Page</button>
			</form>
		</div>	
		
 		<style>
			.error {color: #FF0000;}

			.border {
				border: 2 px solid lightblue;
				padding: 10;
  				border-radius:50px 20px;
			}
		</style>

 		<title>Second Page</title>
	</head>
	<div class="framedefinition">
		<body>
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Things or Ideas </h1>
			<h3>What tools do you prefer to work with:</h3>
			<h3> When finished click Continue to next page to continue</h3>
			
			<h5>To unselect your option click the button again *you can only choose three options</h5>
			
			
			<p>Click on the button for more information on the picture</p>
			
			<div id="ComputerDIV">
		
			<img onclick="changeImage1()" id="image" src="../images/question2/computerO.png">
			<img onclick="changeImage2()" id="image2" src="../images/question2/pythagorasO.png">
			<img onclick="changeImage3()" id="image3" src="../images/question2/cellO.png">
			</div>
			<div id="div2">
			<img onclick="changeImage4()" id="image4" src="../images/question2/appleO.png">
			<img onclick="changeImage5()" id="image5" src="../images/question2/schrodingerO.png">
			<img onclick="changeImage6()" id="image6" src="../images/question2/scibeakerO.png">
			</div>
			<div id="div3">
			<img onclick="changeImage7()" id="image7" src="../images/question2/hammerO.png">
			<img onclick="changeImage8()" id="image8" src="../images/question2/gearO.png">
			<img onclick="changeImage9()" id="image9" src="../images/question2/periodicO.png">
			</div>
			<div id="desctext" class="bottomtext">
				<p>Select an option for its description</p>
			</div>
			<script type="text/javascript">
				/*function showdes1(){
					var x = document.getElementById("ComputerDIV");
					if (x.innerHTML === " ") {
   	    			 		x.innerHTML = "";
   	 				} else {
    	    				x.innerHTML = " description computer";
   	 				}
				}*/
				
				var computerPage2 = 0;
				var pythagorasPage2 = 0;
				var cellPage2 = 0;
				var applePage2 = 0;
				var schrodingerPage2 = 0;
				var scibeakerPage2 = 0;
				var hammerPage2 = 0;
				var gearPage2 = 0;
				var periodicPage2 = 0;
				
				var buttonNumber = 0;
				function changeImage1()
				{
					//showdes1();
					if($("#image").attr("src")=="../images/question2/computerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image").attr("src",'../images/question2/computerI.png');
							++buttonNumber;
							++computerPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Computers (Hardware)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Computers</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image").attr("src",'../images/question2/computerO.png');
						--buttonNumber;
						--computerPage2;
					}
				}
				function changeImage2()
				{
					//showdes1();
					if($("#image2").attr("src")=="../images/question2/pythagorasO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image2").attr("src",'../images/question2/pythagorasI.png');
							++buttonNumber;
							++pythagorasPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Pythagorean Theorem (Math)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Pythagorean Theorem</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image2").attr("src",'../images/question2/pythagorasO.png');
						--buttonNumber;
						--pythagorasPage2;
					}
				}
				function changeImage3()
				{
					if($("#image3").attr("src")=="../images/question2/cellO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image3").attr("src",'../images/question2/cellI.png');
							++buttonNumber;
							++cellPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Microscopic Organisms (Biology)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Microscopic Organisms</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image3").attr("src",'../images/question2/cellO.png');
						--buttonNumber;
						--cellPage2;
					}
				}
				function changeImage4()
				{
					if($("#image4").attr("src")=="../images/question2/appleO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image4").attr("src",'../images/question2/appleI.png');
							++buttonNumber;
							++applePage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Laws of Gravity (Physics)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Laws of Gravity</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image4").attr("src",'../images/question2/appleO.png');
						--buttonNumber;
						--applePage2;
					}
				}
				function changeImage5()
				{
					if($("#image5").attr("src")=="../images/question2/schrodingerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image5").attr("src",'../images/question2/schrodingerI.png');
							++buttonNumber;
							++schrodingerPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Schrodinger's Cat (Theory)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Schrodinger's Cat</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image5").attr("src",'../images/question2/schrodingerO.png');
						--buttonNumber;
						--schrodingerPage2;
					}
				}
				function changeImage6()
				{
					if($("#image6").attr("src")=="../images/question2/scibeakerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image6").attr("src",'../images/question2/scibeakerI.png');
							++buttonNumber;
							++scibeakerPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Lab Equipment (Chemistry)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Lab Equipment</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image6").attr("src",'../images/question2/scibeakerO.png');
						--buttonNumber;
						--scibeakerPage2;
					}
				}
				function changeImage7()
				{
					if($("#image7").attr("src")=="../images/question2/hammerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image7").attr("src",'../images/question2/hammerI.png');
							++buttonNumber;
							++hammerPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Field Equipment (Engineering Outdoors)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Field Equipment</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image7").attr("src",'../images/question2/hammerO.png');
						--buttonNumber;
						--hammerPage2;
					}
				}
				function changeImage8()
				{
					if($("#image8").attr("src")=="../images/question2/gearO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image8").attr("src",'../images/question2/gearI.png');
							++buttonNumber;
							++gearPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Gears, Nuts & Bolts (Engineering Mechanical)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Gears, Nuts & Bolts</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image8").attr("src",'../images/question2/gearO.png');
						--buttonNumber;
						--gearPage2;
					}
				}
				function changeImage9()
				{
					if($("#image9").attr("src")=="../images/question2/periodicO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image9").attr("src",'../images/question2/periodicI.png');
							++buttonNumber;
							++periodicPage2;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Periodic Table (Chemistry)</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Periodic Table</p><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image9").attr("src",'../images/question2/periodicO.png');
						--buttonNumber;
						--periodicPage2;
					}
				}
				function SetCookies()
				{
					document.cookie = "computer= " + computerPage2;
					document.cookie = "pythagoras= " + pythagorasPage2;
					document.cookie = "cell= " + cellPage2;
					document.cookie = "apple= " + applePage2;
					document.cookie = "schrodinger= " + schrodingerPage2;
					document.cookie = "scibeaker= " + scibeakerPage2;
					document.cookie = "hammer= " + hammerPage2;
					document.cookie = "gear= " + gearPage2;
					document.cookie = "periodic= " + periodicPage2;	
				}	
				
				function getCookie() 
				{
				    	var name = "physics";
  				  	var ca = document.cookie.split(';');
				    	for(var i = 0; i < ca.length; i++) {
       				 	var c = ca[i];
        					while (c.charAt(0) == ' ') {
           					c = c.substring(1);
       						}
        						if (c.indexOf(name) == 0) {
            						return c.substring(name.length, c.length);
        					}
   				}
    					return "";
				}
			</script>
		</form>

		
		<form action="third.php" onSubmit="JavaScript:SetCookies()">
			<button type="submit" formaction = "stemPage3.php">Continue to next page ►</button>
			
		</form>

		</body>
	</div>
</html>
