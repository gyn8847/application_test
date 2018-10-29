<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPage5.css" media="screen" rel="stylesheet" type="text/css" media="all" />
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
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		<title>Page 5</title>
	</head>
	<script>
		var creative = 0;
		var convergent = 0;
		function SetCreative()
		{
			++creative;
			SetCookies();
		}
		function SetConvergent()
		{
			++convergent;
			SetCookies();
		}
		function SetCookies()
		{
			document.cookie = "creative= " + creative;
			document.cookie = "convergent= " + convergent;	
		}
	</script>
	<body>	
		<h3>Hover cursor over left and right panel for more info</h3>
		<div class="container">
			<div class="leftCard">
				<div class="leftCardFront">
					<h1>Creative Problem Solver</h1>
					<img src = "../images/question5/creative.jpg" width = "300px" height = "300px">
					<div class="content">
					<p>Are you a creative problem solver? Lets find out!</p>
					</div>
				</div>
				<div class="leftCardBack">
					<h1>Info</h1>
					<p>What does this card mean?</p>
					<p> - Do you look beyond a problem to suggest a variety of solutions</p>
					<p> - "Thinking outside the box"</p>
					<p> - Sherlock Holmes is a good example of this<br /></p></p>
					<form action="results.php" onSubmit="JavaScript:SetCreative()">
            					<button type="submit" formaction = "stemPageResult.php" class="buttontitle" >Continue to next page ►</button>
					</form>
				</div>
			</div>
			<div class="rightCard">
				<div class="rightCardFront">
					<h1>Convergent Problem Solver</h1>
					<img src = "../images/question5/convergent.jpeg" width = "300px" height = "300px">
					<div class="content">
					<p>Or are you a convergent problem solver? Lets see!</p>
					</div>
				</div>
				<div class="rightCardBack">
					<h1>Info</h1>
					<p>What does this card mean?</p>
					<p> - Follow a process that is already defined to find solutions</p>
					<p> - The ability to give the correct answer to tasks that do not require creativity</p>
					<p> - "Thinking inside the box"<br /></p>
					<form action="results.php" onSubmit="JavaScript:SetConvergent()">
            					<button type="submit" formaction = "stemPageResult.php" class="button" >Continue to next page ►</button>
					</form>
				</div>
			</div>
		</div>		
	</body>
</html>
