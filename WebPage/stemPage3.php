<!DOCTYPE html>



<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Third Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPage3.css" media="screen" rel="stylesheet" type="text/css" media="all" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			
			var individual = 0;
			var teamwork = 0;
		function SetIndividual()
		{
			++individual;
			SetCookies();
		}
		function SetTeamwork()
		{
			++teamwork;
			SetCookies();
		}
		function SetCookies()
		{
			document.cookie = "teamwork= " + teamwork;
			document.cookie = "individual= " + individual;	
			
			getCookies();
		}
		function getCookie() 
		{
		//var name = "biology";
			alert("get cookies " );
			var name = "individual";
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
				
		</script>
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

	</head>
	<div class="framedefinition">
	
		
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<div class="container">
			
			<div class="split left">
				<h1><span>Individual</span></h1>
				
				
					<div class="imageindividual">				
					<img src="../images/question3/individual.jpg" alt="Avatar" style="width:60%;height:30%; object-fit:contain">
					<div class="textindividual">
					<p>You like to work by yourself, directed by yourself or by the
						direction of someone else. This includes some 
						research projects and theory work.</p>
					</div>
					</div>
				
				<form action="fourth.php" onSubmit="JavaScript:SetIndividual()">
				<button type="submit" formaction="stemPage4.php" object-fit:contain>Choose this option</button>
				</form>					
				
			</div>
			<div class="split right">
				<h1><span>Team work</span></h1>
				<div class= "imageteam">
					<img src="../images/question3/teamwork.jpg" alt="Avatar" style="width:60%;height:60%; object-fit:contain">
				         <div class="textteam">	
			       		 <p> You like to work with a team. Examples of this are software development and engineering projects. </p>
					</div>
				</div>
				
				<form action="fourth.php" onSubmit="JavaScript:SetTeamwork()">
				<button type="submit" formaction="stemPage4.php" object-fit:contain>Choose this option</button>
				</form>
			</div>	
		</div>
		</body>
	</div>
</html>
