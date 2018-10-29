<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Start Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/stemPageStart.css" media="screen" rel="stylesheet" type="text/css" media="all" />
		
		<div class="header">
		</div>

		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            		<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="../WebPageCN-N/startCN.php">
            		<button type="submit" formaction = "../WebPageCN-N/stemPageStartCN.php" class="buttontitle" >中文页面</button>
			</form>
		<!---	 prototype help buttion
			<button id="myBtn" class="buttonquestion">?</button>
			<div id="myModal" class="modal">
  				<div class="modal-content">
   					<span class="close">&times;</span>
    					<p>Some text in the Modal</p>
  				</div>
			</div> --->
		</div>	
	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<h1>Click on the buttons to get more information</h1>
		<h3>When ready click on  Continue to next page to begin</h3> 
		<h3>Once you start the test you cant go back</h3>
		<div class="container">
		<P>*Please note: this is only to give you a brief overview of the area of STEM 
			that you might want to look into. Not give you the courses to choose.</p>
		</div>
		
	</div>
		<div class="stembutton">
		<input onclick="ScienceDesc()" type="button" class="sbutton" value="Science" id="sbuttonhome"></input>
		<input onclick="TechnologyDesc()" type="button" class="tbutton" value="Technology" id="tbuttonhome"></input>
		<br/>
		<input onclick="EngineeringDesc()" type="button" class="ebutton" value="Engineering" id="ebuttonhome"></input>
		<input onclick="MathematicsDesc()" type="button" class="mbutton" value="Mathematics" id="mbuttonhome"></input>
		</div>	

	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" class="nextpagebutton" formaction = "stemPage1.php">Continue to Next Page ►</button>
		</form>

	</body>
	
	
	<script>
		function ScienceDesc() {
			var science = document.getElementById("sbuttonhome");
    			if (science.value=="Science") science.value = "Science at AUT covers the natural sciences such as Biology, " +
			"Chemistry and Physics. AUT also covers Conservation, Geology and Physcology among other majors";
    			else science.value = "Science";
		}
		function TechnologyDesc() {
			var technology = document.getElementById("tbuttonhome");
    			if (technology.value=="Technology") technology.value = "Technology at AUT focuses on Analytics, " +
			"Computational Intelligence, Computer Science, IT Service Science, Networks and Security, " +
			"and Software Development";
    			else {
				technology.value = "Technology";
			}
		}
		function EngineeringDesc() {
			var engineering = document.getElementById("ebuttonhome");
    			if (engineering.value=="Engineering") engineering.value = "Engineering at AUT covers both traditional majors " +
			"such as Electrical Engineering and Mechanical Engineering as well as the " +
			"hardware aspects of Technology";
    			else engineering.value = "Engineering";
		}
		function MathematicsDesc() {
			var mathematics = document.getElementById("mbuttonhome");
    			if (mathematics.value=="Mathematics") mathematics.value = "Mathematics at AUT covers Analytics, " + 
			"Applied Mathematics, Astronomy and Computer Science."
    			else mathematics.value = "Mathematics";
		}
		
		// Get the modal
		//var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		//var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		//var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		//btn.onclick = function() {
    		//	modal.style.display = "block";
		//}

		// When the user clicks on <span> (x), close the modal
		//span.onclick = function() {
    		//	modal.style.display = "none";
		//}

		// When the user clicks anywhere outside of the modal, close it
		//window.onclick = function(event) {
    		//	if (event.target == modal) {
        	//		modal.style.display = "none";
   	 	//	}
		//}
	</script>
</html>
