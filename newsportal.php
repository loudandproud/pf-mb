<?php
// require_once 'Mobile_Detect.php';
// $detect = new Mobile_Detect;
// if(!$detect->isMobile()){
//     header('location:http://toruinamoto.com', true, 301);
// }else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>DirectMarketingNews - Portfolio</title>
<meta name="keywords" content="web designer,web developer, design, webdesign, web, designer, flat, responsive, smartphone, mobile, template, ui/ux, user interface, user experience, vancouver" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,900,100,100italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.png">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jquery.colorscroll.js"></script>
<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
<div id="pageContent" class="cf">
<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar" id="btn"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> 
<div id="newsportal" class="panel" data-number="5">
        <section class="page-sec">
           <div class="page-inner-top">
                <h1 class="page-h1 nwp-h1">Direct Marketing News</h1>
                <h3 class="page-headdescription">Interface Design and Development for Frontend&amp;Backend </h3>
                <img src="img/newsportal/nwp-innertop2.jpg" alt="directmarketing news home image">
                <p class="description-p">Direct Marketing News is a portal website for programming class. We were assigned to chose one topic and to build a portal website with custom CMS. 
                The fun part of this project was to build dynamic interaction between Frontend and Backend using Ajax. Providing good readibility with any devices was also challenging.</p>
           </div>
        </section>
        <section class="page-sec bg1">
           <div class="page-inner">
            <h2 class="page-h2 nwp-inner-h2">Frontend Functionality</h2>
            <p class="inner-p">Articles show the login form and sign-up link under the graied out shorten content unless users login.</p>
            <img src="img/newsportal/login-front.jpg" alt="backend-login" class="nwp-img">
           </div>
        </section>    
        <section class="page-sec nwp-backend-login">
            <div class="page-inner">
                <h2 class="page-h2 nwp-inner-h2">Backend Functionality</h2>
                <p class="inner-p">Editors and Administrators can login backend with their username and password.</p>
                <div class="nwp-backend-loginform">
                    <p>Direct Marketing News CMS</p>
                    <label>Username</label>
                    <input type="text" diabled="disabled" value="editor" class="nwp-backend-input">
                    <label>Password</label>
                    <input type="text" disabled="disabled" placeholder="Your Password" class="nwp-backend-input">
                    <button class="nwp-backend-send">Login</button>
                </div>

                <p class="inner-p">Articles page on backend simply shows information.</p>
                <img src="img/newsportal/articles-back.png" alt="backend-article-list" class="nwp-img">
                <p class="inner-p">Administrators and Editors can manage sign-up customers</p>
                <img src="img/newsportal/customers.png" alt="newsportal-customers" class="nwp-img">
            </div>
        </section>    

        <section class="page-sec">
            <div class="page-inner page-viewsite">
            <a href="http://toruinamoto.com/dmnprototype/index.php"class="viewsite vs-m" target="_blank">View Site</a>
            </div>
        </section>
</div>
</div> 
</body>
</html>
<?php
// }
?>