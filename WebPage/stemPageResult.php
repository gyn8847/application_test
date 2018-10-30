<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPageResult.css" media="screen" rel="stylesheet" type="text/css" media="all" />
		
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

        <title>Results Page</title>
	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<div id=result>
			<p>example</p>
		</div>
		<div id=sciencelink>
			<form action="https://www.aut.ac.nz/courses/bachelor-of-science?source=/engineering-computer-and-mathematical-sciences">
            			<button type="submit" formaction = "https://www.aut.ac.nz/courses/bachelor-of-science?source=/engineering-computer-and-mathematical-sciences" class="button" >AUT Science Page</button>
        		</form>
		</div>
		<div id=technologylink>
			<form action="https://www.aut.ac.nz/study/study-options/engineering-computer-and-mathematical-sciences/courses/bachelor-of-computer-and-information-sciences">
            			<button type="submit" formaction = "https://www.aut.ac.nz/study/study-options/engineering-computer-and-mathematical-sciences/courses/bachelor-of-computer-and-information-sciences" class="button" >AUT Technology Page</button>
        		</form>
		</div>
		<div id=engineeringlink>
			<form action="https://www.aut.ac.nz/study/study-options/engineering-computer-and-mathematical-sciences/courses/bachelor-of-engineering-technology">
            			<button type="submit" formaction = "https://www.aut.ac.nz/study/study-options/engineering-computer-and-mathematical-sciences/courses/bachelor-of-engineering-technology" class="button" >AUT Engineering Page</button>
        		</form>
		</div>
		<div id=mathematicslink>
			<form action="https://www.aut.ac.nz/study/study-options/engineering-computer-and-mathematical-sciences/courses/bachelor-of-mathematical-sciences">
            			<button type="submit" formaction = "https://www.aut.ac.nz/study/study-options/engineering-computer-and-mathematical-sciences/courses/bachelor-of-mathematical-sciences" class="button" >AUT Mathematics Page</button>
        		</form>
		</div>
		<div id=scoreTest>
			
		</div>
	</body>
	</div>
</html>

<script>
	var recentCookie = "";
	var scienceResult = 0;
	var technologyResult = 0;
	var engineeringResult = 0;
	var mathematicsResult = 0;
	
	function getCookies() 
	{
		var name = recentCookie;
		var ca = document.cookie.split(';');
		for(var i = 0; i < ca.length; i++) 
		{
			var c = ca[i];
        		while (c.charAt(0) == ' ')
			{
           			c = c.substring(1);
       			}
        		if (c.indexOf(name) == 0) 
			{
            			return c.substring(name.length, c.length);
        		}
   		}
    		return "";
	}
	
	recentCookie = "biology=";	
	var biologyScore = parseInt(getCookies());
	recentCookie = "calculus=";	
	var calculusScore = parseInt(getCookies());
	recentCookie = "chemistry=";	
	var chemistryScore = parseInt(getCookies());
	recentCookie = "physics=";	
	var physicsScore = parseInt(getCookies());
	recentCookie = "statistics=";	
	var statisticsScore = parseInt(getCookies());
	recentCookie = "computer=";	
	var computerScore = parseInt(getCookies());
	recentCookie = "pythagoras=";	
	var pythagorasScore = parseInt(getCookies());
	recentCookie = "cell=";	
	var cellScore = parseInt(getCookies());
	recentCookie = "apple=";	
	var appleScore = parseInt(getCookies());
	recentCookie = "schrodinger=";	
	var schrodingerScore = parseInt(getCookies());
	recentCookie = "scibeaker=";	
	var scibeakerScore = parseInt(getCookies());
	recentCookie = "hammer=";	
	var hammerScore = parseInt(getCookies());
	recentCookie = "gear=";	
	var gearScore = parseInt(getCookies());
	recentCookie = "periodic=";	
	var periodicScore = parseInt(getCookies());
	recentCookie = "inside=";	
	var insideScore = parseInt(getCookies());
	recentCookie = "outside=";	
	var outsideScore = parseInt(getCookies());
	recentCookie = "individual=";	
	var individualScore = parseInt(getCookies());
	recentCookie = "teamwork=";	
	var teamworkScore = parseInt(getCookies());
	recentCookie = "creative=";	
	var creativeScore = parseInt(getCookies());
	recentCookie = "convergent=";	
	var convergentScore = parseInt(getCookies());
	
	var recentCookie = "";
	
	//THE BELOW RESULTS CALCULATE THE SCORE TALLY
	
	//PAGE 1
	
	scienceResult = scienceResult + (biologyScore*2 - 2);
	mathematicsResult = mathematicsResult + (calculusScore*2 - 2);
	engineeringResult = engineeringResult + (calculusScore - 1);
	scienceResult = scienceResult + (chemistryScore*2 - 2);
	scienceResult = scienceResult + (physicsScore - 1);
	engineeringResult = engineeringResult + (physicsScore - 1);
	technologyResult = technologyResult + (physicsScore - 1);
	mathematicsResult = mathematicsResult + (statisticsScore - 1);
	
	//PAGE 2
	
	technologyResult = technologyResult + computerScore*6;
	mathematicsResult = mathematicsResult + pythagorasScore*4;
	engineeringResult = mathematicsResult + pythagorasScore*2;
	scienceResult = scienceResult + cellScore*6;
	scienceResult = scienceResult + appleScore*4;
	engineeringResult = engineeringResult + appleScore*2;
	scienceResult = scienceResult + schrodingerScore*4;
	mathematicsResult = mathematicsResult + schrodingerScore*2;
	scienceResult = scienceResult + scibeakerScore*6;
	engineeringResult = engineeringResult + hammerScore*6;
	engineeringResult = engineeringResult + gearScore*4;
	technologyResult = technologyResult + gearScore*2;
	scienceResult = scienceResult + periodicScore*5;
	mathematicsResult = mathematicsResult + periodicScore;
	
	//PAGE 3
	mathematicsResult = mathematicsResult + individualScore*10;
	scienceResult = scienceResult + individualScore*10;
	engineeringResult = engineeringResult + individualScore*3;
	engineeringResult = engineeringResult + teamworkScore*7;
	technologyResult = technologyResult + teamworkScore*10;
	
	//PAGE 4
	scienceResult = scienceResult + outsideScore*5;
	engineeringResult = engineeringResult + outsideScore*10;
	scienceResult = scienceResult + insideScore*10;
	engineeringResult = engineeringResult + insideScore*5;
	mathematicsResult = mathematicsResult + insideScore*10;
	technologyResult = technologyResult + insideScore*10;
	
	//PAGE 5
	technologyResult = technologyResult + creativeScore*10;
	scienceResult = scienceResult + creativeScore*10;
	mathematicsResult = mathematicsResult + convergentScore*10;
	engineeringResult = engineeringResult + convergentScore*10;
	
	//The results are posted
	if (scienceResult >= technologyResult)
	{
		if (scienceResult >= engineeringResult)
		{	
			if (scienceResult >= mathematicsResult)
			{	
				if (scienceResult == technologyResult &&
				    scienceResult == mathematicsResult &&
				    scienceResult == engineeringResult)
				{
					document.getElementById('result').innerHTML="<p>Sorry, we could not get a clear "
					+ "result from your answers</p><p>Please try again or look at the following "
					+ "pages for more information</p>";
				}
				else if (scienceResult == technologyResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Science or Technology at AUT</p>";
					document.getElementById('engineeringlink').style.display='none';
					document.getElementById('mathematicslink').style.display='none';
				}
				else if (scienceResult == engineeringResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Science or Engineering at AUT</p>";
					document.getElementById('technologylink').style.display='none';
					document.getElementById('mathematicslink').style.display='none';
				}
				else if (scienceResult == mathematicsResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Science or Mathematics at AUT</p>";
					document.getElementById('technologylink').style.display='none';
					document.getElementById('engineeringlink').style.display='none';
				}
				else
				{
					document.getElementById('result').innerHTML="<p>You should look into studying "
					+ "Science at AUT</p>";
					document.getElementById('technologylink').style.display='none';
					document.getElementById('engineeringlink').style.display='none';
					document.getElementById('mathematicslink').style.display='none';
				}
			}
			else
			{	
				document.getElementById('result').innerHTML="<p>You should look into studying "
				+ "Mathematics at AUT</p>";
				document.getElementById('sciencelink').style.display='none';
				document.getElementById('technologylink').style.display='none';
				document.getElementById('engineeringlink').style.display='none';
				
			}
		}
		else if (engineeringResult >= mathematicsResult)
		{
			if (engineeringResult > mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying Engineering at AUT</p>";
				document.getElementById('sciencelink').style.display='none';
				document.getElementById('technologylink').style.display='none';
				document.getElementById('mathematicslink').style.display='none';
			}
			else if (engineeringResult == mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying " 
				+ "Engineering or Mathematics at AUT</p>";
				document.getElementById('sciencelink').style.display='none';
				document.getElementById('technologylink').style.display='none';
			}
		}
		else
		{
			document.getElementById('result').innerHTML="<p>You should look into studying "
			+ "Mathematics at AUT</p>";
			document.getElementById('sciencelink').style.display='none';
			document.getElementById('technologylink').style.display='none';
			document.getElementById('engineeringlink').style.display='none';
		}
	}
	else
	{
		if (technologyResult >= engineeringResult)
		{	
			if (technologyResult >= mathematicsResult)
			{	
				if (technologyResult == engineeringResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Technology or Engineering at AUT</p>";
					document.getElementById('sciencelink').style.display='none';
					document.getElementById('mathematicslink').style.display='none';
				}
				else if (technologyResult == mathematicsResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Technology or Mathematics at AUT</p>";
					document.getElementById('sciencelink').style.display='none';
					document.getElementById('engineeringlink').style.display='none';
				}
				else
				{
					document.getElementById('result').innerHTML="<p>You should look into studying "
					+ "Technology at AUT</p>";
					document.getElementById('sciencelink').style.display='none';
					document.getElementById('engineeringlink').style.display='none';
					document.getElementById('mathematicslink').style.display='none';
				}
			}
			else
			{	
				document.getElementById('result').innerHTML="<p>You should look into studying "
				+ "Mathematics at AUT</p>";
				document.getElementById('sciencelink').style.display='none';
				document.getElementById('technologylink').style.display='none';
				document.getElementById('engineeringlink').style.display='none';
				
			}
		}
		else if (engineeringResult >= mathematicsResult)
		{
			if (engineeringResult > mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying Engineering at AUT</p>";
				document.getElementById('sciencelink').style.display='none';
				document.getElementById('technologylink').style.display='none';
				document.getElementById('mathematicslink').style.display='none';
			}
			else if (engineeringResult == mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying " 
				+ "Engineering or Mathematics at AUT</p>";
				document.getElementById('sciencelink').style.display='none';
				document.getElementById('technologylink').style.display='none';
			}
		}
		else
		{
			document.getElementById('result').innerHTML="<p>You should look into studying "
			+ "Mathematics at AUT</p>";
			document.getElementById('sciencelink').style.display='none';
			document.getElementById('technologylink').style.display='none';
			document.getElementById('engineeringlink').style.display='none';
		}
	}
	
	document.getElementById('scoreTest').innerHTML="<p>Scores:</p><p>Science: " + scienceResult + "</p>" +
	"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
	"<p>Mathematics: " + mathematicsResult + "</p>";
</script>
