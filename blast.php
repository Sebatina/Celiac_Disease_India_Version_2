<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>SWI/SNF InfoBase</title>
<meta name="description" content="he SWI/SNF Infobase is a comprehensive database of SWI/SNF (SWItch/Sucrose Non-Fermentable) family of remodeling factors.">
<meta name="author" content="Suma Mohan, Udayakumar M.">

<!-- Favicons-->

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

				    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/megamenu.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" >
<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.4">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->


<!-- Support media queries for IE8 -->
<script src="js/respond.min.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="js/modernizr.custom.17475.js"></script>

<!--[if IE 7]>
  <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->

</head>

<body>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]--> <!-- Border radius fixed IE10-->



<nav>
<div class="megamenu_container">
<a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->
    
	<!-- Begin Mega Menu Container -->
	<ul class="megamenu">
		<!-- Begin Mega Menu -->
		<li><a href="index.php" class="drop-down">Home</a>
		<!-- Begin Item -->
		
		</li><!-- End Item -->
        
	    
		<li><a href="search.php" class="drop-down">Search</a>
		<!-- Begin Item -->
		
		<li><a href="browse.php" class="drop-down">Taxonomy Browser</a>
		<!-- Begin Item -->
	
		</li><!-- End Item -->
		<li><a href="blast.php" class="drop-down">BLAST</a>
		<!-- Begin Item -->
	
		</li><!-- End Item -->
        
		<li><a href="download.php" class="drop-down">Download</a>
		<!-- Begin Item -->
		
		</li><!-- End Item -->
        
		<li><a href="help.php" class="drop-down">Help</a>
		<li><a href="contact.php" class="drop-down">Contacts</a>
		<!-- Begin Item -->
		
		</li><!-- End Item -->
		<li style="padding:0;float:right;">
		<img src="img/sastra.jpg" height=100px width=200px></li>
	</ul><!-- End Mega Menu -->
</div>
</nav>




<header style="height:110px;">
	<table  width=100% border=0px   style=" background-image:url('img/uk.png');
	background-repeat:no-repeat;background-position: right ;		">  
		
		<tr><tD width=10%>&nbsp;</td><td    valign=top>
		<img src="img/design.png"  width=50%  alt="Logo"  >
		</td>
		
<td>
		        
        	
            
           
<td>
					
				
					
					
					</td></tr></table>
	<div class="container" style="height:100px; ">
   	  <div class="row">
    	<div class="span4" id="logo" style="width:600px;">
		
 <img src="img/sub1.png"  alt="Logo" >
</a></div>
        
        
        	
            
           
           
                <li>
				 <div id="menu-top">
				
			</li>
			
                </ul>
				
			
            </div>

			
        </div><!-- End span8-->
		
        </div><!-- End row-->
		
    </div><!-- End container-->
	
</header><!-- End Header-->



<!-- =========================Start Col left section ============================= -->
<aside class="span4" style="width:95%;margin:10">
	<div class="col-left">
		<div class="sidebar">
        
            
			<div class="widget">
		
</div>
			
            
			<div class="widget">
				
					
			
   
   
</head>

				
         <center>
			
			
			<table  width=100%  border=0
style="background: url('img/pattern.jpg') repeat;    font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;    color: #555;    -webkit-font-smoothing: antialiased !important"
			border=0  style="   color: #8a6d3b;       border-color: #faebcc;"> 
				<tr> <td >
				
				
				
				
<pre><h3 style="font-size:22px;"><b><font color=blue style="font-family: 'Open Sans'	, sans-serif;
    font-size: 18px;
    line-height: 1.8;">SWI/SNF  BLAST Submission Form</font></h3></pre>

  <form action="blastres.php" method="POST">
 	
 <table width=100% border=0 style="border-radius:20px;">
 <tr><Td>Paste the Sequence </td> <Td valign=top width=90%><textarea  name=seq style="width:600px;" rows="10" cols="100"></textarea>
 <br><b><font color=red>Note :</font><font color=blue>Paste only the sequence in PDB BLAST</font>
 </td></tr>
<Td>eCutOff </td><Td><input type=text name=ecut>  </td></tr>
 <tr><Td>Matrix </td><Td><input type=text list=matrix name=mat><datalist id=matrix><option value="BLOSUM62">
 <option value="BLOSUM50"><option value="BLOSUM45"></datalist></td></tr>
 <tr><Td>Choose The Database </td><td>
 <input type=radio  name=db value="PDB Database">PDB Database
 <input type=radio  name=db value="celiac Database">celiac Database
 
 </td></tr>
 <tr><Td colspan=2>  <button type="submit" class="button_medium" >Search</button>
					<button type="reset" class="button_medium" >Reset</button>
 </tD></tr>
 </table>
 
 
</tD>
</tr>
			
</table>
				
				
				
				</div>
				    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>

</script>





















				</ul>
			</div><!-- End widget -->
            
			
			
            
		</div><!-- end siedebar  -->
	</div><!-- end  col left -->
  
  </aside>
 

  </div><!-- end row-->
  </div> <!-- end container-->
  
     <footer>
  <div id="toTop">Back to Top</div>
  <div class="container" style="height:100px;">
  	<div class="row">
    	<table border=0 width=100%> <tr><tD width=30%>
 
            </td>
        
        
		<tD width=50% align=center>
        	<h5 ><b>Copyright © 2017. Department of Bioinformatics,	SASTRA University</p></h5>
			</td><tD width=20%>Powered by
         
               <img src="pow.jpg" width=50%></tD></tr></table>
       
            
        	
        
    </div>
	
	
  </div>

  </footer><!-- End footer-->
<div id="toTop">Back to Top</div>

<!-- MEGAMENU --> 
<script src="js/jquery.easing.js"></script>
<script src="js/megamenu.js"></script>

<!-- OTHER JS -->    
<script src="js/bootstrap.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

 <!-- FANCYBOX -->
<script  src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="js/fancy_func.js" type="text/javascript"></script> 

</body>
</html>