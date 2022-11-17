<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Gallery </title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
<style type="text/css">

body
{
 background:#fff;
}
img
{
 width:300px;
 box-shadow:0px 0px 20px #cecece;
 -moz-transform: scale(0.7);
 -moz-transition-duration: 0.6s; 
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.7);
 
 -ms-transform: scale(0.7);
 -ms-transition-duration: 0.6s; 
}
img:hover
{
  box-shadow: 20px 20px 20px #dcdcdc;
 -moz-transform: scale(0.8);
 -moz-transition-duration: 0.6s;
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.8);
 
 -ms-transform: scale(0.8);
 -ms-transition-duration: 0.6s;
 
}
</style>
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="logo/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link " href="index.html">Home</a></li>
						<li><a class="nav-link" href="mainftree.html">Tree</a></li>
<!--                        
						<li class="nav-item dropdown" >
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Tree
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
								<a class="dropdown-item" href="mainftree.html">Vajjula</a>
								<a class="dropdown-item" href="ftree.html">SubbaRayudu</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Seetharamayya</a>
								</div>
							</div>
						</li>
-->
                        <li>
                            <a class="nav-link active" href="gallery.php">Gallery</a>
                        </li>
                        <li>
                             <a class="nav-link" href="treeimage.html">Tree Image</a>
                        </li>
                        <li><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
	<div id="family" class="about-box" style="padding-top: 200px; padding-bottom: 0">
	 <div class="about-a1">
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12">
	<div class="title-box">
	   <h2>Gallery</h2>
	</div>
	
<div class="gallery-box">
	 
	
<?php
$folder_path = 'images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
			 
            <?php
			
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
</div>

</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>