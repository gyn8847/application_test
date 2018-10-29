<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="../CSS/stemPage5.css" media="screen" rel="stylesheet" type="text/css"/>
		<div class="header">
		</div>
		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            			<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="start.php">
            			<button type="submit" formaction = "stemPageStartCN.php" class="buttontitle" >起始页</button>
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
		<h2>移动鼠标在左侧或右侧来看更多信息</h2>
		<div class="container">
			<div class="leftCard">
				<div class="leftCardFront">
					<h1>创意问题解决者</h1>
					<img src = "../images/question5/creative.jpg" width = "300px" height = "300px">
					<div class="content">
					<p>你是否是个问题解决者， 试试看</p>
					</div>
				</div>
				<div class="leftCardBack">
					<h1>信息</h1>
					<p>后面</p>
					<p>* 你是否是能够快速的解决各种问题？</p>
					<p>* 不会被框架限制的思想</p>
					<p>* 福尔摩斯就是个很好的例子<br /></p></p>
					<form action="resultsCN.php" onSubmit="JavaScript:SetCreative()">
            					<button type="submit" formaction = "stemPageResultCN.php" class="buttontitle" >下一页 ►</button>
					</form>
				</div>
			</div>
			<div class="rightCard">
				<div class="rightCardFront">
					<h1>全能的问题解决者</h1>
					<img src = "../images/question5/convergent.jpeg" width = "300px" height = "300px">
					<div class="content">
					<p>你是否是个全能问题解决者， 试试看</p>
					</div>
				</div>
				<div class="rightCardBack">
					<h1>信息</h1>
					<p>后面</p>
					<p>* 照着已有的方案去解决问题</p>
					<p>* 可以回答不需要创造思维的问题</p>
					<p>* 在规章制度内去考虑问题<br /></p>
					<form action="resultsCN.php" onSubmit="JavaScript:SetConvergent()">
            					<button type="submit" formaction = "stemPageResultCN.php" class="buttontitle" >下一页 ►</button>
					</form>
				</div>
			</div>
		</div>		
	</body>
</html>
