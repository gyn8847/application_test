<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Start Page-CN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPageStart.css" media="screen" rel="stylesheet" type="text/css"/>
		
		<div class="header">
		</div>

		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            		<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="../WebPage/start.php">
            		<button type="submit" formaction = "../WebPage/stemPageStart.php" class="buttontitle" >English Page</button>
			</form>
		</div>	

	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<h1>点击下列按钮会显示更多信息</h1>
		<h3>当你准备好了点击下一页的按钮</h3> 
		<h3>当你开始了就不能再回来了，做好准备。</h3>
		<p>* 请注意这只是给你一个STEM简短的概述</p>
		
		<input onclick="ScienceDesc()" type="button" class="sbutton" value="Science" id="sbuttonhome"></input>
		<input onclick="TechnologyDesc()" type="button" class="tbutton" value="Technology" id="tbuttonhome"></input>
		<br/>
		<input onclick="EngineeringDesc()" type="button" class="ebutton" value="Engineering" id="ebuttonhome"></input>
		<input onclick="MathematicsDesc()" type="button" class="mbutton" value="Mathematics" id="mbuttonhome"></input>
	
	    	<form action="stemSubjectPreffCN.php">
			<button type="submit" class="nextpagebutton" formaction = "stemPage1CN.php">下一页 ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc() {
			var science = document.getElementById("sbuttonhome");
    			if (science.value=="Science") science.value = "Science 在 AUT 包括自然科学例如：生物 " +
			"化学和物理。 AUT 同样包含农业学, 地理学和物理学等专业。";
    			else science.value = "Science";
		}
		function TechnologyDesc() {
			var technology = document.getElementById("tbuttonhome");
    			if (technology.value=="Technology") technology.value = "Technology在 AUT主攻 分析学,  " +
			"计算机智能化, 计算机科学, 计算机服务, 网络及安全,  " +
			"和软件开发";
    			else {
				technology.value = "Technology";
			}
		}
		function EngineeringDesc() {
			var engineering = document.getElementById("ebuttonhome");
    			if (engineering.value=="Engineering") engineering.value = "Engineering  在 AUT 涵盖 " +
			"电器工程 和 机械工程 等传统专业" +
			"以及硬件技术方面";
    			else engineering.value = "Engineering";
		}
		function MathematicsDesc() {
			var mathematics = document.getElementById("mbuttonhome");
    			if (mathematics.value=="Mathematics") mathematics.value = "Mathematics 在AUT 涵盖了分析学," + 
			"应用数学, 天文学和计算机科学."
    			else mathematics.value = "Mathematics";
		}
	</script>
</html>
