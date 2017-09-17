<?php
session_start();
//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    if(!isset($_SESSION['loggedin']) || (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true))
	{
		header("location:index.php");
	} 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NPTEL - Web and Video Courses</title>
<head>
<style>
#linked
{
	color:#000;
	text-decoration:none;
}
table { 
  width: 100%; 
  border-collapse: collapse; 
}
a:hover{
    background-color: blue;
}

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}



#type1
{
	
	
	color:rgb(0,0,0);
	font-family:"Times New Roman", Times, serif;
	width:100px;
	
	cursor:pointer;
	font-weight:bold;
	
	
	
	

}

#type1:hover
{
	color:#036;

}

#courselink
{
	text-decoration:none;
	margin-right:15px;
	font-size:18px;
	color:#03C;
	font-weight:bold;
	float:right;
}
#courselink:hover
{
	color:#F00;
}


#top
{
	height:60px;
	background-color:#FFF;
	padding-top:5px;
	padding-bottom:5px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>

<div>
 <center><div id="center" style="position:absolute; width:100%; height:100%">
	<img src="images12345.png">
	</div></center>
  
	<div id="right" style="float: right">
	<a href="logout.php" class="button">Logout</a>
	</div>


<br />
<br />
<br /><br /><br />
<br /><hr>
<div align="center"><p style="font-size:21px; font-family:'Times New Roman', Times, serif; font-weight:bold; text-decoration:underline;">Discipline-Wise Listing</p></div>

<table width="100%">

  <tr>

    <td><a href="aer1.php" id="linked"  target="_blank">Aerospace Engineering</a></td>

    <td><a href="atmospheric.php" id="linked"  target="_blank">Atmospheric Science</a></td>

    <td><a href="basic_courses.html" id="linked"  target="_blank">Basic courses(Sem 1 and 2)</a></td>

    <td><a href="biotech.html" id="linked"  target="_blank">Biotechnology</a></td>

  </tr>

  <tr>

    

    <td><a href="chemical.html" id="linked" target="_blank">Chemical Engineering</a></td>

    <td><a href="chem_bioichem.html" id="linked" target="_blank">Chemistry and Biochemistry</a></td>

    <td><a href="civil.html" id="linked" target="_blank">Civil Engineering</a></td>

    <td><a href="css.html" id="linked" target="_blank">Computer Science and Engineering</a></td>

  </tr>

  <tr>

    

    <td><a href="electrical.html" id="linked" target="_blank">Electrical Engineering</a></td>

    <td><a href="ece.html" id="linked" target="_blank">Electronics & Communication Engineering</a></td>

    <td><a href="engg_design.html" id="linked" target="_blank">Engineering Design</a></td>

     <td><a href="enviorm.html" id="linked" target="_blank">Environmental Science </a></td>

  </tr>

  <tr>

   

    <td><a href="general.html" id="linked" target="_blank">General</a></td>

    <td><a href="HSS.html" id="linked" target="_blank">Humanities and Social Sciences</a></td>

    <td><a href="management.html" id="linked" target="_blank">Management</a></td>

     <td><a href="maths.html" id="linked" target="_blank">Mathematics</a></td>

  </tr>

  <tr>

   

    <td><a href="mechanical.html" id="linked" target="_blank">Mechanical Engineering</a></td>

    <td><a href="metallurgy.html" id="linked" target="_blank">Metallurgy and Material Science </a></td>

    <td><a href="mining.html" id="linked" target="_blank">Mining Engineering</a></td>

     <td><a href="nano.html" id="linked" target="_blank">Nanotechnology</a></td>

  </tr>

  <tr>

   

    <td><a href="ocean.html" id="linked" target="_blank">Ocean Engineering</a></td>

    <td><a href="physics.html" id="linked" target="_blank">Physics</a></td>

    <td><a href="textile.html" id="linked" target="_blank">Textile Engineering </a></td>

  </tr>




</table>

   <style>ul{
	   
	   font-family:"Times New Roman", Times, serif;
	   }
	   ul li{
		   font-size:17px;
		   font-weight:none;
	   }
       </style>
    </div>
    <div>
    <ul>
    <li><strong>Instructions</strong>
    <ul>
     <li>Please read the Readme.txt for details on how to setup the NPTEL Index.</li>
    <li>This index has been provided to refer the NPTEL Web and Video course contents.</li>
    <li>Click on the Discipline to view list of courses</li>
    <li>The NPTEL index list may be modified by the institute, as required.</li>
    </ul>
    </li>
    </ul>
    </div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<hr><center><font size="4" color="green"><b> DEVELOPED BY - Praveenraj.M.S - CSE - BATCH 2014 - 2018<b></font></center></hr>
	<hr></hr>
	</br>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    
$(window).unload(function(){
    $.ajax({
        type: 'POST',
        url: 'logout.php',
        async:false,
        data: {key_leave:"289583002"}
    });
});	
	
   
</script>

</body>
</html>

