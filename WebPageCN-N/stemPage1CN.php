<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>First Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="../CSS/stemPage1.css" media="screen" rel="stylesheet" type="text/css"/>
	    
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
	    
	<script type="text/javascript">
		
	var biologyPage1 = 0;
	var calculusPage1 = 0;
	var chemistryPage1 = 0;
	var physicsPage1 = 0;
	var statisticsPage1 = 0;
	
	function change(id)
  	{
		if(document.getElementById(id+"_hidden").value == 5)
		{
			document.getElementById("bio5").src="../images/question1/staroff.png";
			document.getElementById("cal5").src="../images/question1/staroff.png";
			document.getElementById("che5").src="../images/question1/staroff.png";
			document.getElementById("phy5").src="../images/question1/staroff.png";
			document.getElementById("sta5").src="../images/question1/staroff.png";
		}
    		var cname=document.getElementById(id).className;
    		var ab=document.getElementById(id+"_hidden").value;
    		document.getElementById(cname+"rating").innerHTML=ab;
    		for(var i=ab;i>=1;i--)
   		{
    			document.getElementById(cname+i).src="../images/question1/staron.png";
    		}
    		var id=parseInt(ab)+1;
   		for(var j=id;j<=5;j++)
   		{
   			document.getElementById(cname+j).src="../images/question1/staroff.png";
   		}
  	}
	</script>
</head>
<div class="framedefinition">
<body>
	<img src="../images/STEMblur.png" alt="stem" class="logo">
	<h1>请对你喜欢的学科进行评级从一颗星到5颗</h1>
	<h3>5颗星星是你最喜欢的一个学科（限定一个选择）</h3>
	<h5>现在来点击星星来确定你的选择吧，点击 下一页 来继续</h5>
<div class="dropdown">

<button onclick="biologyDropdown()" class="dropbtn">Biology</button>
	  <input type="hidden" id="bio1_hidden" value="1">
	  <img src="../images/question1/staron.png" onclick="change(this.id);" id="bio1" class="bio">
	  <input type="hidden" id="bio2_hidden" value="2">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="bio2" class="bio">
	  <input type="hidden" id="bio3_hidden" value="3">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="bio3" class="bio">
	  <input type="hidden" id="bio4_hidden" value="4">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="bio4" class="bio">
	  <input type="hidden" id="bio5_hidden" value="5">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="bio5" class="bio">
	
  <div id="myDropdown1" class="dropdown-content">
    <p>生物学是研究生命和生物有机体的自然科学，包括它们的物理结构，
       化学过程，分子相互作用，生理机制，发展和进化。</p>
  </div>

</br>

<button onclick="calculusDropdown()" class="dropbtn">Calculus</button>
	  <input type="hidden" id="cal1_hidden" value="1">
	  <img src="../images/question1/staron.png" onclick="change(this.id);" id="cal1" class="cal">
	  <input type="hidden" id="cal2_hidden" value="2">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="cal2" class="cal">
	  <input type="hidden" id="cal3_hidden" value="3">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="cal3" class="cal">
	  <input type="hidden" id="cal4_hidden" value="4">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="cal4" class="cal">
	  <input type="hidden" id="cal5_hidden" value="5">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="cal5" class="cal">
  <div id="myDropdown2" class="dropdown-content">
    <p>微积分是连续变化的数学研究，就像几何学是对形状和代数的研究一样,是研究
	算术运算的概括。
	它有两个主要分支，微积分和积分微积分;这两个分支是基本相互关联的
	微积分定理。</p>
  </div>
	
</br>

<button onclick="chemistryDropdown()" class="dropbtn">Chemistry</button>
	  <input type="hidden" id="che1_hidden" value="1">
	  <img src="../images/question1/staron.png" onclick="change(this.id);" id="che1" class="che">
	  <input type="hidden" id="che2_hidden" value="2">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="che2" class="che">
	  <input type="hidden" id="che3_hidden" value="3">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="che3" class="che">
	  <input type="hidden" id="che4_hidden" value="4">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="che4" class="che">
	  <input type="hidden" id="che5_hidden" value="5">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="che5" class="che">
  <div id="myDropdown3" class="dropdown-content">
    <p>化学是涉及由原子，即元素和分子组成的化合物的科学学科，即原子的组合：它们的组成，结构，性质，行为以及它们在与其他化合物反应过程中所经历的变化</p>	 

  </div>

</br>

<button onclick="physicsDropdown()" class="dropbtn">Physics</button>
	  <input type="hidden" id="phy1_hidden" value="1">
	  <img src="../images/question1/staron.png" onclick="change(this.id);" id="phy1" class="phy">
	  <input type="hidden" id="phy2_hidden" value="2">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="phy2" class="phy">
	  <input type="hidden" id="phy3_hidden" value="3">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="phy3" class="phy">
	  <input type="hidden" id="phy4_hidden" value="4">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="phy4" class="phy">
	  <input type="hidden" id="phy5_hidden" value="5">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="phy5" class="phy">
  <div id="myDropdown4" class="dropdown-content">
	  <p>物理学是通过空间和时间研究物质及其运动和行为的自然科学，它研究能量和力量的相关实体。物理学是最基础的科学学科之一，其主要目标是了解宇宙的运行方式。 </p>
  </div>

</br>

<button onclick="statisticsDropdown()" class="dropbtn">Statistics</button>
	<input type="hidden" id="sta1_hidden" value="1">
	  <img src="../images/question1/staron.png" onclick="change(this.id);" id="sta1" class="sta">
	  <input type="hidden" id="sta2_hidden" value="2">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="sta2" class="sta">
	  <input type="hidden" id="sta3_hidden" value="3">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="sta3" class="sta">
	  <input type="hidden" id="sta4_hidden" value="4">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="sta4" class="sta">
	  <input type="hidden" id="sta5_hidden" value="5">
	  <img src="../images/question1/staroff.png" onclick="change(this.id);" id="sta5" class="sta">
  <div id="myDropdown5" class="dropdown-content">
    <p>统计学是数学的一个分支，处理数据的收集，组织，分析，解释和呈现。例如，将统计数据应用于科学，工业或社会问题，
	通常以统计人口或统计模型过程开始研究。</p>
  </div>

  <input type="hidden" name="biorating" id="biorating" value="1">
  <input type="hidden" name="calrating" id="calrating" value="1">
  <input type="hidden" name="cherating" id="cherating" value="1">
  <input type="hidden" name="phyrating" id="phyrating" value="1">
  <input type="hidden" name="starating" id="starating" value="1">

</div>

</br>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function biologyDropdown() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function calculusDropdown() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function chemistryDropdown() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
function physicsDropdown() {
    document.getElementById("myDropdown4").classList.toggle("show");
}
function statisticsDropdown() {
    document.getElementById("myDropdown5").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function SetCookies()
{
	if(document.getElementById("bio1").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++biologyPage1;
	}
	if(document.getElementById("bio2").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++biologyPage1;
	}
	if(document.getElementById("bio3").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++biologyPage1;
	}
	if(document.getElementById("bio4").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++biologyPage1;
	}
	if(document.getElementById("bio5").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++biologyPage1;
	}
	if(document.getElementById("cal1").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++calculusPage1;
	}
	if(document.getElementById("cal2").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++calculusPage1;
	}
	if(document.getElementById("cal3").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++calculusPage1;
	}
	if(document.getElementById("cal4").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++calculusPage1;
	}
	if(document.getElementById("cal5").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++calculusPage1;
	}
	if(document.getElementById("che1").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++chemistryPage1;
	}
	if(document.getElementById("che2").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++chemistryPage1;
	}
	if(document.getElementById("che3").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++chemistryPage1;
	}
	if(document.getElementById("che4").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++chemistryPage1;
	}
	if(document.getElementById("che5").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++chemistryPage1;
	}
	if(document.getElementById("phy1").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++physicsPage1;
	}
	if(document.getElementById("phy2").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++physicsPage1;
	}
	if(document.getElementById("phy3").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++physicsPage1;
	}
	if(document.getElementById("phy4").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++physicsPage1;
	}
	if(document.getElementById("phy5").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++physicsPage1;
	}
	if(document.getElementById("sta1").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++statisticsPage1;
	}
	if(document.getElementById("sta2").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++statisticsPage1;
	}
	if(document.getElementById("sta3").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++statisticsPage1;
	}
	if(document.getElementById("sta4").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++statisticsPage1;
	}
	if(document.getElementById("sta5").src=="https://stemapplactiontest.herokuapp.com/images/question1/staron.png")
	{
		++statisticsPage1;
	}
	
	document.cookie = "biology= " + biologyPage1;
	document.cookie = "calculus= " + calculusPage1;
	document.cookie = "chemistry= " + chemistryPage1;
	document.cookie = "physics= " + physicsPage1;
	document.cookie = "statistics= " + statisticsPage1;
}

function getCookie() 
{
	//var name = "biology";
	var name = "physics";
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

<form action="thingsOrIdeas.php" onSubmit="JavaScript:SetCookies()">
	<button type="submit" formaction = "stemPage2CN.php" style="margin-bottom: 100px 0px">下一页 ►</button>
</form>

 </body>
</div>
</html>
