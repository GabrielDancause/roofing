<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="jeu., 03 oct. 2013 19:34:09 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<meta charset=utf-8 />
<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  <style>

 body {
  padding-top: 50px;

}

img{

   
}
#loadimg
{
max-height:50px;
 max-width:50px;  
}
#tips {
	margin-top:10px;
    min-height:150px;
    font-size:20px;

}
.box {
	margin-bottom:10px;


}


  </style>

    <title>Interlock Roofing</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.lfhs.ca/roofing/">Interlock Roofing</a>
        </div>
      </div>
    </div>
<div class="container">
 <div class="row-fluid">	
 	
	<div class="alert alert-info" id="tips">Please wait while the images are created<img src="loading.gif" class="loadimg" id="loadimg" align='top' alt=""></div> 
 </div> 
</div>
<?php



//$message = "Please wait while this task completes, it may take up to a minute or two";
//echo "<script type='text/javascript'>alert('$message');</script>";


error_reporting(E_ERROR | E_PARSE);

	
//Créer l'array des couleurs

$couleur = array("color1","color2","color4","color5","color6","color7","color8");

foreach ($couleur as $value) {
	

	
// Aller chercher le data et décoder url image
	$queryimg = $_GET["imgtrav"];
	$queryimgdecoded = urldecode($queryimg);
	$queryang = $_GET["chosedangle1"];
	$querypente = $_GET["chosedpen1"];
	$queryang2 = $_GET["chosedangle2"];
	$querypente2 = $_GET["chosedpen2"];
	$queryang3 = $_GET["chosedangle3"];
	$querypente3 = $_GET["chosedpen3"];
	$queryang4 = $_GET["chosedangle4"];
	$querypente4 = $_GET["chosedpen4"];
	$queryang5 = $_GET["chosedangle5"];
	$querypente5 = $_GET["chosedpen5"];
	$queryang6 = $_GET["chosedangle6"];
	$querypente6 = $_GET["chosedpen6"];

//Définir l'image de derrière versant 1

//test
//$test = imagecreatefrompng("'/images/'.$couleur[0].'/1.png'");
//$test2 = imagecreatefrompng("images/1.png");
//$test3 = imagecreatefrompng("1.png");

//$queryimgdecoded2 = ("images/".$value."/1.png");
//$queryimgdecoded3 = ("images/'$couleur[0]'/1.png");
//$queryimgdecoded4 = ("images/'$couleur[0]'/1.png");
//$queryimgdecoded5 = ("images/'$couleur[0]'/1.png");
//$queryimgdecoded6 = ("images/'$couleur[0]'/1.png");
		
if ($queryang == 1 && $querypente == 1) {
	$imback = imagecreatefromjpeg("images/".$value."/1.jpg");
} 

elseif ($queryang == 1 && $querypente == 2) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang == 1 && $querypente == 3) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang == 1 && $querypente == 4) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang == 1 && $querypente == 5) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang == 2 && $querypente == 1) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 2 && $querypente == 2) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 2 && $querypente == 3) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 2 && $querypente == 4) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 2 && $querypente == 5) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 3 && $querypente == 1) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 3 && $querypente == 2) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 3 && $querypente == 3) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 3 && $querypente == 4) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang == 3 && $querypente == 5) {
	    $imback = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

else {

}

//Définir l'image de derrière versant 2

if ($queryang2 == 1 && $querypente2 == 1) {
	$imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
} 

elseif ($queryang2 == 1 && $querypente2 == 2) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang2 == 1 && $querypente2 == 3) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang2 == 1 && $querypente2 == 4) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang2 == 1 && $querypente2 == 5) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang2 == 2 && $querypente2 == 1) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 2 && $querypente2 == 2) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 2 && $querypente2 == 3) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 2 && $querypente2 == 4) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 2 && $querypente2 == 5) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 3 && $querypente2 == 1) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 3 && $querypente2 == 2) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 3 && $querypente2 == 3) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 3 && $querypente2 == 4) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang2 == 3 && $querypente2 == 5) {
	    $imback2 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

else {

	
}

//Définir l'image de derrière versant 3

if ($queryang3 == 1 && $querypente3 == 1) {
	$imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
} 

elseif ($queryang3 == 1 && $querypente3 == 2) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang3 == 1 && $querypente3 == 3) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang3 == 1 && $querypente3 == 4) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang3 == 1 && $querypente3 == 5) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang3 == 2 && $querypente3 == 1) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 2 && $querypente3 == 2) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 2 && $querypente3 == 3) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 2 && $querypente3 == 4) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 2 && $querypente3 == 5) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 3 && $querypente3 == 1) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 3 && $querypente3 == 2) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 3 && $querypente3 == 3) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 3 && $querypente3 == 4) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang3 == 3 && $querypente3 == 5) {
	    $imback3 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

else {

	
}

//Définir l'image de derrière versant 4

if ($queryang4 == 1 && $querypente4 == 1) {
	$imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
} 

elseif ($queryang4 == 1 && $querypente4 == 2) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang4 == 1 && $querypente4 == 3) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang4 == 1 && $querypente4 == 4) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang4 == 1 && $querypente4 == 5) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang4 == 2 && $querypente4 == 1) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 2 && $querypente4 == 2) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 2 && $querypente4 == 3) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 2 && $querypente4 == 4) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 2 && $querypente4 == 5) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 3 && $querypente4 == 1) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 3 && $querypente4 == 2) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 3 && $querypente4 == 3) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 3 && $querypente4 == 4) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang4 == 3 && $querypente4 == 5) {
	    $imback4 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

else {

	
}

//Définir l'image de derrière versant 5

if ($queryang5 == 1 && $querypente5 == 1) {
	$imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
} 

elseif ($queryang5 == 1 && $querypente5 == 2) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang5 == 1 && $querypente5 == 3) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang5 == 1 && $querypente5 == 4) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang5 == 1 && $querypente5 == 5) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang5 == 2 && $querypente5 == 1) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 2 && $querypente5 == 2) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 2 && $querypente5 == 3) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 2 && $querypente5 == 4) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 2 && $querypente5 == 5) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 3 && $querypente5 == 1) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 3 && $querypente5 == 2) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 3 && $querypente5 == 3) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 3 && $querypente5 == 4) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang5 == 3 && $querypente5 == 5) {
	    $imback5 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

else {

	
}

//Définir l'image de derrière versant 6

if ($queryang6 == 1 && $querypente6 == 1) {
	$imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
} 

elseif ($queryang6 == 1 && $querypente6 == 2) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang6 == 1 && $querypente6 == 3) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang6 == 1 && $querypente6 == 4) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang6 == 1 && $querypente6 == 5) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
} 

elseif ($queryang6 == 2 && $querypente6 == 1) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 2 && $querypente6 == 2) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 2 && $querypente6 == 3) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 2 && $querypente6 == 4) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 2 && $querypente6 == 5) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 3 && $querypente6 == 1) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 3 && $querypente6 == 2) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 3 && $querypente6 == 3) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 3 && $querypente6 == 4) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

elseif ($queryang6 == 3 && $querypente6 == 5) {
	    $imback6 = imagecreatefromjpeg("images/".$value."/1.jpg");
	
}

else {

	
}		



// Création versant 1
    ini_set("gd.jpeg_ignore_warning", 1);

	$imori = imagecreatefromjpeg($queryimgdecoded);
	
	
$wori = imagesx( $imori ); 
$hori = imagesy( $imori ); 
$wnew =  $_GET["imgsizeX"];
$hnew =  $_GET["imgsizeY"];

$im = imagecreatetruecolor($wnew, $hnew);
imagecopyresized($im, $imori, 0, 0, 0, 0, $wnew, $hnew, $wori, $hori);
imageantialias($imback, true);
imageantialias($im, true);
if ($queryang2 != '') {
	imageantialias($imback2, true);
} else {
	
}

if ($queryang3 != '') {
	imageantialias($imback3, true);
} else {
	
}
if ($queryang4 != '') {
	imageantialias($imback4, true);
} else {
	
}
if ($queryang5 != '') {
	imageantialias($imback5, true);
} else {
	
}
if ($queryang6 != '') {
	imageantialias($imback6, true);
} else {
	
}

$querypos1 = $_GET["chosedposition1"];
$querypos1 = str_replace("pos.", "", $querypos1);
$position1 = (explode('.', $querypos1, 200));

$numberarray = count($position1)/2;


$X1 = ($position1[0]+$position1[2]+$position1[4]+$position1[6]+$position1[8]+$position1[10]+$position1[12]+$position1[14]+$position1[16]+$position1[18]+$position1[20]+$position1[22]
+$position1[24]+$position1[26]+$position1[28]+$position1[30]+$position1[32]+$position1[34]+$position1[36]+$position1[38]+$position1[40]+$position1[42]+$position1[44]
+$position1[46]+$position1[48]+$position1[50]+$position1[52]+$position1[54]+$position1[56]+$position1[58]+$position1[60]+$position1[62]+$position1[64]
+$position1[66]+$position1[68]+$position1[70]+$position1[72]+$position1[74]+$position1[76]+$position1[78]+$position1[80]+$position1[82]+$position1[84]+$position1[86]
+$position1[88]+$position1[90]+$position1[92]+$position1[94]+$position1[96]+$position1[98]+$position1[100])/$numberarray;
$Y1 = ($position1[1]+$position1[3]+$position1[5]+$position1[7]+$position1[9]+$position1[11]+$position1[13]+$position1[15]+$position1[17]+$position1[19]+$position1[21]+$position1[23]
+$position1[25]+$position1[27]+$position1[29]+$position1[31]+$position1[33]+$position1[35]+$position1[37]+$position1[39]+$position1[41]+$position1[43]+$position1[45]
+$position1[47]+$position1[49]+$position1[51]+$position1[53]+$position1[55]+$position1[57]+$position1[59]+$position1[61]+$position1[63]+$position1[65]
+$position1[67]+$position1[69]+$position1[71]+$position1[73]+$position1[75]+$position1[77]+$position1[79]+$position1[81]+$position1[83]+$position1[85]+$position1[87]
+$position1[89]+$position1[91]+$position1[93]+$position1[95]+$position1[97]+$position1[99]+$position1[101])/$numberarray;




	//$wnew =  $_GET["imgsizeX"];
   // $hnew =  $_GET["imgsizeY"];
	//$imori = imagecreatefromjpeg($queryimgdecoded);

	//imagecopyresampled($im, $imori, 0, 0, 0, 0, $wnew, $hnew, $wori, $hori);
//	$im = imagecopyresized($im, $imori, 0, 0, 0, 0, $wnew, $hnew, $wori, $hori);



$fuchia = imagecolorallocate($im, 173, 255, 47);
$black = imagecolorallocate($im, 105, 105, 105);


$w = imagesx( $im ); 
$h = imagesy( $im ); 
$wcentre = $w/2;
$hcentre = $h/2;
$wback = imagesx( $imback ); 
$hback = imagesy( $imback ); 
$wcrop1 = $wcentre-round($X1);
$hcrop1 = $hcentre-round($Y1);
$querydist1 = $_GET["choseddistan1"];
$dest_w1 = round((($wback-$w)/2)+$wcrop1);
$dest_h1 = (round(((($hback-$h)/2)+$hcrop1)-$querydist1));

$newwidth = $w;
$newheight = $h;
$width = $w;
$height = $h;
$thumb = imagecreatetruecolor($newwidth, $newheight);



imagecopyresized($thumb, $imback, 0, 0, $dest_w1, $dest_h1, $newwidth, $newheight, $width, $height);
imagefilledpolygon($im, $position1, $numberarray, $fuchia);
imagecolortransparent($im, $fuchia);
imagecopymerge($thumb, $im, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb, true);
imagepolygon($thumb, $position1, $numberarray, $black);

//Vérification si versant 2 existe et création versant 2

$querypos2 = $_GET["chosedposition2"];

if (empty($querypos2)) {
	imagepng($thumb, $value.$queryimgdecoded);
	  
}

else{
$querypos2 = str_replace("pos.", "", $querypos2);
$position2 = (explode('.', $querypos2, 200));

$numberarray2 = count($position2)/2;

$X2 = ($position2[0]+$position2[2]+$position2[4]+$position2[6]+$position2[8]+$position2[10]+$position2[12]+$position2[14]+$position2[16]+$position2[18]+$position2[20]+$position2[22]
+$position2[24]+$position2[26]+$position2[28]+$position2[30]+$position2[32]+$position2[34]+$position2[36]+$position2[38]+$position2[40]+$position2[42]+$position2[44]
+$position2[46]+$position2[48]+$position2[50]+$position2[52]+$position2[54]+$position2[56]+$position2[58]+$position2[60]+$position2[62]+$position2[64]
+$position2[66]+$position2[68]+$position2[70]+$position2[72]+$position2[74]+$position2[76]+$position2[78]+$position2[80]+$position2[82]+$position2[84]+$position2[86]
+$position2[88]+$position2[90]+$position2[92]+$position2[94]+$position2[96]+$position2[98]+$position2[100])/$numberarray2;
$Y2 = ($position2[1]+$position2[3]+$position2[5]+$position2[7]+$position2[9]+$position2[11]+$position2[13]+$position2[15]+$position2[17]+$position2[19]+$position2[21]+$position2[23]
+$position2[25]+$position2[27]+$position2[29]+$position2[31]+$position2[33]+$position2[35]+$position2[37]+$position2[39]+$position2[41]+$position2[43]+$position2[45]
+$position2[47]+$position2[49]+$position2[51]+$position2[53]+$position2[55]+$position2[57]+$position2[59]+$position2[61]+$position2[63]+$position2[65]
+$position2[67]+$position2[69]+$position2[71]+$position2[73]+$position2[75]+$position2[77]+$position2[79]+$position2[81]+$position2[83]+$position2[85]+$position2[87]
+$position2[89]+$position2[91]+$position2[93]+$position2[95]+$position2[97]+$position2[99]+$position2[101])/$numberarray2;

$fuchia = imagecolorallocate($thumb, 173, 255, 47);
$black = imagecolorallocate($thumb, 0, 0, 0);

$wcrop2 = $wcentre-round($X2);
$hcrop2 = $hcentre-round($Y2);

$querydist2 = $_GET["choseddistan2"];
$dest_w2 = round((($wback-$w)/2)+$wcrop2);
$dest_h2 = (round(((($hback-$h)/2)+$hcrop2)-$querydist2));

$thumb2 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb2, $imback2, 0, 0, $dest_w2, $dest_h2, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb, $position2, $numberarray2, $fuchia);
imagecolortransparent($thumb, $fuchia);
imagecopymerge($thumb2, $thumb, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb2, true);
imagepolygon($thumb2, $position2, $numberarray2, $black);


}

//Vérification si versant 3 existe et création versant 3

$querypos3 = $_GET["chosedposition3"];

if (empty($querypos3) && ($querypos2 != '') ) {
	imagepng($thumb2, $value.$queryimgdecoded);
}	
	
else if (empty($querypos3) && empty($querypos2) ) {
    imagepng($thumb, $value.$queryimgdecoded);


}	
else {
$querypos3 = str_replace("pos.", "", $querypos3);
$position3 = (explode('.', $querypos3, 200));

$numberarray3 = count($position3)/2;

$X3 = ($position3[0]+$position3[2]+$position3[4]+$position3[6]+$position3[8]+$position3[10]+$position3[12]+$position3[14]+$position3[16]+$position3[18]+$position3[20]+$position3[22]
+$position3[24]+$position3[26]+$position3[28]+$position3[30]+$position3[32]+$position3[34]+$position3[36]+$position3[38]+$position3[40]+$position3[42]+$position3[44]
+$position3[46]+$position3[48]+$position3[50]+$position3[52]+$position3[54]+$position3[56]+$position3[58]+$position3[60]+$position3[62]+$position3[64]
+$position3[66]+$position3[68]+$position3[70]+$position3[72]+$position3[74]+$position3[76]+$position3[78]+$position3[80]+$position3[82]+$position3[84]+$position3[86]
+$position3[88]+$position3[90]+$position3[92]+$position3[94]+$position3[96]+$position3[98]+$position3[100])/$numberarray3;
$Y3 = ($position3[1]+$position3[3]+$position3[5]+$position3[7]+$position3[9]+$position3[11]+$position3[13]+$position3[15]+$position3[17]+$position3[19]+$position3[21]+$position3[23]
+$position3[25]+$position3[27]+$position3[29]+$position3[31]+$position3[33]+$position3[35]+$position3[37]+$position3[39]+$position3[41]+$position3[43]+$position3[45]
+$position3[47]+$position3[49]+$position3[51]+$position3[53]+$position3[55]+$position3[57]+$position3[59]+$position3[61]+$position3[63]+$position3[65]
+$position3[67]+$position3[69]+$position3[71]+$position3[73]+$position3[75]+$position3[77]+$position3[79]+$position3[81]+$position3[83]+$position3[85]+$position3[87]
+$position3[89]+$position3[91]+$position3[93]+$position3[95]+$position3[97]+$position3[99]+$position3[101])/$numberarray3;

$fuchia = imagecolorallocate($thumb2, 173, 255, 47);
$black = imagecolorallocate($thumb2, 0, 0, 0);

$wcrop3 = $wcentre-round($X3);
$hcrop3 = $hcentre-round($Y3);
$querydist3 = $_GET["choseddistan3"];
$dest_w3 = round((($wback-$w)/2)+$wcrop3);
$dest_h3 = (round(((($hback-$h)/2)+$hcrop3)-$querydist3));

$thumb3 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb3, $imback3, 0, 0, $dest_w3, $dest_h3, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb2, $position3, $numberarray3, $fuchia);
imagecolortransparent($thumb2, $fuchia);
imagecopymerge($thumb3, $thumb2, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb3, true);
imagepolygon($thumb3, $position3, $numberarray3, $black);	
	
}

//Vérification si versant 4 existe et création versant 4

$querypos4 = $_GET["chosedposition4"];
if (empty($querypos4) && ($querypos3 != '') ) {
	imagepng($thumb3, $value.$queryimgdecoded);
}	
	
else if (empty($querypos4) && empty($querypos3) && empty($querypos2)) {
    imagepng($thumb, $value.$queryimgdecoded);


}	

else if (empty($querypos4) && empty($querypos3) && ($querypos2 != '')) {
    imagepng($thumb2, $value.$queryimgdecoded);


}		
else{
$querypos4 = str_replace("pos.", "", $querypos4);
$position4 = (explode('.', $querypos4, 200));

$numberarray4 = count($position4)/2;

$X4 = ($position4[0]+$position4[2]+$position4[4]+$position4[6]+$position4[8]+$position4[10]+$position4[12]+$position4[14]+$position4[16]+$position4[18]+$position4[20]+$position4[22]
+$position4[24]+$position4[26]+$position4[28]+$position4[30]+$position4[32]+$position4[34]+$position4[36]+$position4[38]+$position4[40]+$position4[42]+$position4[44]
+$position4[46]+$position4[48]+$position4[50]+$position4[52]+$position4[54]+$position4[56]+$position4[58]+$position4[60]+$position4[62]+$position4[64]
+$position4[66]+$position4[68]+$position4[70]+$position4[72]+$position4[74]+$position4[76]+$position4[78]+$position4[80]+$position4[82]+$position4[84]+$position4[86]
+$position4[88]+$position4[90]+$position4[92]+$position4[94]+$position4[96]+$position4[98]+$position4[100])/$numberarray4;
$Y4 = ($position4[1]+$position4[3]+$position4[5]+$position4[7]+$position4[9]+$position4[11]+$position4[13]+$position4[15]+$position4[17]+$position4[19]+$position4[21]+$position4[23]
+$position4[25]+$position4[27]+$position4[29]+$position4[31]+$position4[33]+$position4[35]+$position4[37]+$position4[39]+$position4[41]+$position4[43]+$position4[45]
+$position4[47]+$position4[49]+$position4[51]+$position4[53]+$position4[55]+$position4[57]+$position4[59]+$position4[61]+$position4[63]+$position4[65]
+$position4[67]+$position4[69]+$position4[71]+$position4[73]+$position4[75]+$position4[77]+$position4[79]+$position4[81]+$position4[83]+$position4[85]+$position4[87]
+$position4[89]+$position4[91]+$position4[93]+$position4[95]+$position4[97]+$position4[99]+$position4[101])/$numberarray4;

$fuchia = imagecolorallocate($thumb3, 173, 255, 47);
$black = imagecolorallocate($thumb3, 0, 0, 0);

$wcrop4 = $wcentre-round($X4);
$hcrop4 = $hcentre-round($Y4);
$querydist4 = $_GET["choseddistan4"];
$dest_w4 = round((($wback-$w)/2)+$wcrop4);
$dest_h4 = (round(((($hback-$h)/2)+$hcrop4)-$querydist4));

$thumb4 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb4, $imback4, 0, 0, $dest_w4, $dest_h4, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb3, $position4, $numberarray4, $fuchia);
imagecolortransparent($thumb3, $fuchia);
imagecopymerge($thumb4, $thumb3, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb4, true);
imagepolygon($thumb4, $position4, $numberarray4, $black);


}	

//Vérification si versant 5 existe et création versant 5

$querypos5 = $_GET["chosedposition5"];
if (empty($querypos5) && ($querypos4 != '')) {
	imagepng($thumb4, $value.$queryimgdecoded);
}	

else if (empty($querypos5) && empty($querypos4) && empty($querypos3) && empty($querypos2)) {
    imagepng($thumb, $value.$queryimgdecoded);


}	

else if (empty($querypos5) && empty($querypos4 )&& empty($querypos3) && ($querypos2 != '')) {
    imagepng($thumb2, $value.$queryimgdecoded);


}

else if (empty($querypos5) && empty($querypos4 ) && ($querypos3 != '')) {
    imagepng($thumb3, $value.$queryimgdecoded);


}
	
else{
$querypos5 = str_replace("pos.", "", $querypos5);
$position5 = (explode('.', $querypos5, 200));

$numberarray5 = count($position5)/2;

$X5 = ($position5[0]+$position5[2]+$position5[4]+$position5[6]+$position5[8]+$position5[10]+$position5[12]+$position5[14]+$position5[16]+$position5[18]+$position5[20]+$position5[22]
+$position5[24]+$position5[26]+$position5[28]+$position5[30]+$position5[32]+$position5[34]+$position5[36]+$position5[38]+$position5[40]+$position5[42]+$position5[44]
+$position5[46]+$position5[48]+$position5[50]+$position5[52]+$position5[54]+$position5[56]+$position5[58]+$position5[60]+$position5[62]+$position5[64]
+$position5[66]+$position5[68]+$position5[70]+$position5[72]+$position5[74]+$position5[76]+$position5[78]+$position5[80]+$position5[82]+$position5[84]+$position5[86]
+$position5[88]+$position5[90]+$position5[92]+$position5[94]+$position5[96]+$position5[98]+$position5[100])/$numberarray5;
$Y5 = ($position5[1]+$position5[3]+$position5[5]+$position5[7]+$position5[9]+$position5[11]+$position5[13]+$position5[15]+$position5[17]+$position5[19]+$position5[21]+$position5[23]
+$position5[25]+$position5[27]+$position5[29]+$position5[31]+$position5[33]+$position5[35]+$position5[37]+$position5[39]+$position5[41]+$position5[43]+$position5[45]
+$position5[47]+$position5[49]+$position5[51]+$position5[53]+$position5[55]+$position5[57]+$position5[59]+$position5[61]+$position5[63]+$position5[65]
+$position5[67]+$position5[69]+$position5[71]+$position5[73]+$position5[75]+$position5[77]+$position5[79]+$position5[81]+$position5[83]+$position5[85]+$position5[87]
+$position5[89]+$position5[91]+$position5[93]+$position5[95]+$position5[97]+$position5[99]+$position5[101])/$numberarray5;

$fuchia = imagecolorallocate($thumb4, 173, 255, 47);
$black = imagecolorallocate($thumb4, 0, 0, 0);

$wcrop5 = $wcentre-round($X5);
$hcrop5 = $hcentre-round($Y5);
$querydist5 = $_GET["choseddistan5"];
$dest_w5 = round((($wback-$w)/2)+$wcrop5);
$dest_h5 = (round(((($hback-$h)/2)+$hcrop5)-$querydist5));

$thumb5 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb5, $imback5, 0, 0, $dest_w5, $dest_h5, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb4, $position5, $numberarray5, $fuchia);
imagecolortransparent($thumb4, $fuchia);
imagecopymerge($thumb5, $thumb4, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb5, true);
imagepolygon($thumb5, $position5, $numberarray5, $black);


}

//Vérification si versant 6 existe et création versant 6

$querypos6 = $_GET["chosedposition6"];
if (empty($querypos6) && ($querypos5 != '')) {
	imagepng($thumb5, $value.$queryimgdecoded);
}	

else if (empty($querypos6) && empty($querypos5) && empty($querypos4) && empty($querypos3) && empty($querypos2)) {
    imagepng($thumb, $value.$queryimgdecoded);


}	

else if (empty($querypos6) && empty($querypos5) && empty($querypos4 )&& empty($querypos3) && ($querypos2 != '')) {
    imagepng($thumb2, $value.$queryimgdecoded);


}

else if (empty($querypos6) && empty($querypos5) && empty($querypos4 ) && ($querypos3 != '')) {
    imagepng($thumb3, $value.$queryimgdecoded);


}	

else if (empty($querypos6) && empty($querypos5) && ($querypos4 != '')) {
    imagepng($thumb4, $value.$queryimgdecoded);


}
else{
$querypos6 = str_replace("pos.", "", $querypos6);
$position6 = (explode('.', $querypos6, 200));

$numberarray6 = count($position6)/2;

$X6 = ($position6[0]+$position6[2]+$position6[4]+$position6[6]+$position6[8]+$position6[10]+$position6[12]+$position6[14]+$position6[16]+$position6[18]+$position6[20]+$position6[22]
+$position6[24]+$position6[26]+$position6[28]+$position6[30]+$position6[32]+$position6[34]+$position6[36]+$position6[38]+$position6[40]+$position6[42]+$position6[44]
+$position6[46]+$position6[48]+$position6[50]+$position6[52]+$position6[54]+$position6[56]+$position6[58]+$position6[60]+$position6[62]+$position6[64]
+$position6[66]+$position6[68]+$position6[70]+$position6[72]+$position6[74]+$position6[76]+$position6[78]+$position6[80]+$position6[82]+$position6[84]+$position6[86]
+$position6[88]+$position6[90]+$position6[92]+$position6[94]+$position6[96]+$position6[98]+$position6[100])/$numberarray6;
$Y6 = ($position6[1]+$position6[3]+$position6[5]+$position6[7]+$position6[9]+$position6[11]+$position6[13]+$position6[15]+$position6[17]+$position6[19]+$position6[21]+$position6[23]
+$position6[25]+$position6[27]+$position6[29]+$position6[31]+$position6[33]+$position6[35]+$position6[37]+$position6[39]+$position6[41]+$position6[43]+$position6[45]
+$position6[47]+$position6[49]+$position6[51]+$position6[53]+$position6[55]+$position6[57]+$position6[59]+$position6[61]+$position6[63]+$position6[65]
+$position6[67]+$position6[69]+$position6[71]+$position6[73]+$position6[75]+$position6[77]+$position6[79]+$position6[81]+$position6[83]+$position6[85]+$position6[87]
+$position6[89]+$position6[91]+$position6[93]+$position6[95]+$position6[97]+$position6[99]+$position6[101])/$numberarray6;

$fuchia = imagecolorallocate($thumb5, 173, 255, 47);
$black = imagecolorallocate($thumb5, 0, 0, 0);

$wcrop6 = $wcentre-round($X6);
$hcrop6 = $hcentre-round($Y6);
$dest_w6 = round((($wback-$w)/2)+$wcrop6);
$dest_h6 = round((($hback-$h)/2)+$hcrop6);

$querydist6 = $_GET["choseddistan6"];
$dest_w6 = round((($wback-$w)/2)+$wcrop6);
$dest_h6 = (round(((($hback-$h)/2)+$hcrop6)-$querydist6));

$thumb6 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb6, $imback6, 0, 0, $dest_w6, $dest_h6, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb5, $position6, $numberarray6, $fuchia);
imagecolortransparent($thumb5, $fuchia);
imagecopymerge($thumb6, $thumb5, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb6, true);
imagepolygon($thumb6, $position6, $numberarray6, $black);

imagepng($thumb6, $value.$queryimgdecoded);
}
}
?>

<!-- affichage de l'image -->


<div class="container jumbotron"> 
	<div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

 <div class="row-fluid">	
  <div class="box" id="box">			
  <img src="<?php echo 'color1'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>
  	<div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

   <div class="row-fluid">	
  <div class="box" id="box">
  <img src="<?php echo 'color2'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>

    
    <div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

   <div class="row-fluid">	
  <div class="box" id="box">
  <img src="<?php echo 'color4'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>
  
  <div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

   <div class="row-fluid">	
  <div class="box" id="box">
  <img src="<?php echo 'color5'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>
  
  <div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

   <div class="row-fluid">	
  <div class="box" id="box">
  <img src="<?php echo 'color6'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>
  
  <div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

   <div class="row-fluid">	
  <div class="box" id="box">
  <img src="<?php echo 'color7'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>

  	<div class ="row-fluid titre" id="titre"><h3><span class="label label-success">Model X, Color X : </h3></span></div>

 <div class="row-fluid">	
  <div class="box" id="box">			
  <img src="<?php echo 'color8'.$queryimgdecoded ?>" class="imgfinal" id="testimg"/>
  </div>
  </div>
</div>


<script>
$(document).ready(function() {

$("#tips").empty();	
   $("#tips").append("Congratulation you can now visualize the roof with each of the color and model of Interlock roofing product. To create another roof or to start again just press the Interlock Roofing button in the top bar."); 
  });
</script>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
  </body>
</html>