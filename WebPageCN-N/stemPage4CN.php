<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Fourth Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPage4.css" media="screen" rel="stylesheet" type="text/css"/>
		
		
		<div class="header">
		</div>

		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            			<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="startCN.php">
            			<button type="submit" formaction = "stemPageStartCN.php" class="buttontitle" >起始页</button>
			</form>
		</div>	

	</head>
	<script>
		var inside = 0;
		var outside = 0;
		function SetInside()
		{
			++inside;
			SetCookies();
		}
		function SetOutside()
		{
			++outside;
			SetCookies();
		}
		function SetCookies()
		{
			document.cookie = "inside= " + inside;
			document.cookie = "outside= " + outside;	
		}
	</script>
	<div class="framedefinition">
	
		
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		<h3>选择你喜欢的工作环境<h3>
		<div class="container">
			<div class="split left">
				<h1><span>室外</span></h1>
				<image class="imageoutside" src="../images/question4/enviroment.png" ;>
				
				<p>你喜欢在室外工作么？</p>
				
				<form action="fifthCN.php" onSubmit="JavaScript:SetOutside()">
				<button type="submit" formaction="stemPage5CN.php" align="middle">选择</button>
				</form>		
			</div>
			<div class="split right">
				<h1><span>室内</span></h1>
				<image class="imageinside" src="../images/question4/webwxgetmsgimg.jpg" ;>
				<p>你喜欢室内工作么？</p>
					
				<form action="fifthCN.php "onSubmit="JavaScript:SetInside()">
				<button type="submit" formaction="stemPage5CN.php" align="middle">选择</button>
				</form>	
			</div>
		</div>
	</body>
	</div>
</html>
