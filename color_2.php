<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Color_2</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"  ></script>
<?php
	$c1 = isset($_GET['c1'])?(int)($_GET['c1']):0;
	$c2 = isset($_GET['c2'])?(int)($_GET['c2']):0;
	$c3 = isset($_GET['c3'])?(int)($_GET['c3']):0;

	$c4 = isset($_GET['c4'])?(int)($_GET['c4']):0;
	$c5 = isset($_GET['c5'])?(int)($_GET['c5']):0;
	$c6 = isset($_GET['c6'])?(int)($_GET['c6']):0;

	$c7 = isset($_GET['c7'])?(int)($_GET['c7']):0;
	$c8 = isset($_GET['c8'])?(int)($_GET['c8']):0;
	$c9 = isset($_GET['c9'])?(int)($_GET['c9']):0;

	$c10 = isset($_GET['c10'])?(int)($_GET['c10']):0;
	$c11 = isset($_GET['c11'])?(int)($_GET['c11']):0;
	$c12 = isset($_GET['c12'])?(int)($_GET['c12']):0;
	
	if($c1>255)$c1=255;
	if($c2>255)$c2=255;
	if($c3>255)$c3=255;
	if($c4>255)$c4=255;
	if($c5>255)$c5=255;
	if($c6>255)$c6=255;
	if($c7>255)$c7=255;
	if($c8>255)$c8=255;
	if($c9>255)$c9=255;
	if($c10>255)$c10=255;
	if($c11>255)$c11=255;
	if($c12>255)$c12=255;

	if($c1<0)$c1=0;
	if($c2<0)$c2=0;
	if($c3<0)$c3=0;
	if($c4<0)$c4=0;
	if($c5<0)$c5=0;
	if($c6<0)$c6=0;
	if($c7<0)$c7=0;
	if($c8<0)$c8=0;
	if($c9<0)$c9=0;
	if($c10<0)$c10=0;
	if($c11<0)$c11=0;
	if($c12<0)$c12=0;


	$base_url = "color_2.php?";

	function p( $name ){
		global $c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10,$c11,$c12,$base_url;
		$$name=$$name+5;
		$str = "c1=$c1&c2=$c2&c3=$c3&c4=$c4&c5=$c5&c6=$c6&c7=$c7&c8=$c8&c9=$c9&c10=$c10&c11=$c11&c12=$c12";
		$$name=$$name-5;
		return $base_url.$str;
	}
	function m( $name ){
		global $c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10,$c11,$c12,$base_url;
		$$name=$$name-5;
		$str = "c1=$c1&c2=$c2&c3=$c3&c4=$c4&c5=$c5&c6=$c6&c7=$c7&c8=$c8&c9=$c9&c10=$c10&c11=$c11&c12=$c12";
		$$name=$$name+5;
		return $base_url.$str;
	}
	

?>
<style>
*{
	margin:0;
	padding:0;
	border:0;
}
body{
	padding-top:20px;
}

#wrap , .bu{
	width:1100px;
	height:auto;
	margin:0 auto;

}
 

#left{
	width:500px;
	height:500px;
	float:left;
	background-color:rgb(<?php echo $c1 ?>,<?php echo $c2 ?>,<?php echo $c3 ?>  );
}
#right{
	width:500px;
	height:500px;
	float:right;
	background-color:rgb(<?php echo $c4 ?>,<?php echo $c5 ?>,<?php echo $c6 ?>  );
}
#mid{
	width:200px;
	height:500px;
	float:right;
	background-color:white;
	z-index:11212;
	position:absolute;
	left:570px;
}
#clear{
	clear:both;
}
 #m1, #m2{
	width:150px;
	height:150px;
	margin:10px;
	
 }
 #m1{
	margin-top:100px;
	float:left;
	background-color:rgb(<?php echo $c7 ?>,<?php echo $c8 ?>,<?php echo $c9 ?>  );
 }
 #m2{
	float:right;
	background-color:rgb(<?php echo $c10 ?>,<?php echo $c11 ?>,<?php echo $c12 ?>  );
 }
 .c_{
	width:100px;
	margin:5px auto;
	height:5px;
	background-color:rgb(<?php echo $c7 ?>,<?php echo $c8 ?>,<?php echo $c9 ?>  );

}

.d_{
	width:100px;
	margin:5px auto;
	height:5px;
	background-color:rgb(<?php echo $c10 ?>,<?php echo $c11 ?>,<?php echo $c12 ?>  );

	
}
.first{
	margin-top:100px;
}

a{
	display:inline-block;
	width:30px;
	height:20px;
	background-color:rgb(20,40,60);
	color:white;
	text-align:center;
	text-decoration:none;
}
  .nu a{
	color:black;
	background-color:white;
}
</style>

 

</head>

<body>
	<div id="wrap">
		 
		 <div id="left">
			<div class="c_ first"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
			<div class="c_"></div>
		 </div>
		 <div id="right">
			<div class="d_ first" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
			<div class="d_" ></div>
		 </div>
		 <div id="mid">
			<div id="m1"></div>
			<div id="m2"></div>
		 
		 </div>
		 <div id="clear"></div>
		 
	 
	 

	</div>
	<div class="bu nu">
	<a href="#"  ><?php echo $c1 ?></a>
	<a href="#"  ><?php echo $c2 ?></a>
	<a href="#"  ><?php echo $c3 ?></a>
	<span>--------------------------</span>
	<a href="#"  ><?php echo $c7 ?></a>
	<a href="#"  ><?php echo $c8 ?></a>
	<a href="#"  ><?php echo $c9 ?></a> 
	<span>------------------------</span>
	<a href="#"  ><?php echo $c10 ?></a>
	<a href="#"  ><?php echo $c11 ?></a>
	<a href="#"  ><?php echo $c12 ?></a> 
	
	<span>----------------------------</span>
	<a href="#"  ><?php echo $c4 ?></a>
	<a href="#"  ><?php echo $c5 ?></a>
	<a href="#"  ><?php echo $c6 ?></a>
	</div>


    <div class="bu">
	<a href="<?php echo p('c1') ?>"  >+R</a>
	<a href="<?php echo p('c2') ?>"  >+G</a>
	<a href="<?php echo p('c3') ?>"  >+B</a>

	<span>--------------------------</span>
	<a href="<?php echo p('c7') ?>"  >+R</a>
	<a href="<?php echo p('c8') ?>"  >+G</a>
	<a href="<?php echo p('c9') ?>"  >+B</a>

	<span>------------------------</span>
	<a href="<?php echo p('c10') ?>"  >+R</a>
	<a href="<?php echo p('c11') ?>"  >+G</a>
	<a href="<?php echo p('c12') ?>"  >+B</a>
	<span>----------------------------</span>
	<a href="<?php echo p('c4') ?>"  >+R</a>
	<a href="<?php echo p('c5') ?>"  >+G</a>
	<a href="<?php echo p('c6') ?>"  >+B</a>
	 
	
	</div>


	<div class="bu">
	<a href="<?php echo m('c1') ?>"  >-R</a>
	<a href="<?php echo m('c2') ?>"  >-G</a>
	<a href="<?php echo m('c3') ?>"  >-B</a>

	<span>--------------------------</span>
	<a href="<?php echo m('c7') ?>"  >-R</a>
	<a href="<?php echo m('c8') ?>"  >-G</a>
	<a href="<?php echo m('c9') ?>"  >-B</a>
	
	<span>------------------------</span>
	<a href="<?php echo m('c10') ?>"  >-R</a>
	<a href="<?php echo m('c11') ?>"  >-G</a>
	<a href="<?php echo m('c12') ?>"  >-B</a>
	
	<span>----------------------------</span>
	<a href="<?php echo m('c4') ?>"  >-R</a>
	<a href="<?php echo m('c5') ?>"  >-G</a>
	<a href="<?php echo m('c6') ?>"  >-B</a>
	
	</div>
	<div class="bu">
	
	<br><span>
	Different color may looks alike with diffrerent background color。Let's find them and have fun。	
	</span>
	</div>
	 
</body>