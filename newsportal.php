<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if(!$detect->isMobile()){
    header('location:http://toruinamoto.com', true, 301);
}else{
    include('header.php');
?>
<div id="pageContent" class="cf">
<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar" id="btn"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> 
<div id="newsportal" class="panel" data-number="6">
        <section class="page-sec">
           <div class="page-inner-top">
                <h1 class="page-h1 nwp-h1">Direct Marketing News</h1>
                <h3 class="page-headdescription">Interface Design and Development for Frontend&amp;Backend </h3>
                <img src="img/newsportal/nwp-innertop2.jpg" alt="directmarketing news home image">
                <p class="description-p">Direct Marketing News is a portal website for programming class. We were assigned to chose one topic and to build a portal website with custom CMS. 
                The fun part of this project was to build dynamic interaction between Frontend and Backend using Ajax. Providing good readability with any devices was also challenging.</p>
                <p class="tools-p"><i class="fa fa-wrench"></i> : HTML5, CSS3, jQuery, Ajax, PHP, MySQL, Photoshop, Illustrator</p>
           </div>
        </section>
        <section class="page-sec bg1">
           <div class="page-inner">
            <h2 class="page-h2 nwp-inner-h2">Frontend Functionality</h2>
            <p class="inner-p">Unless users login, articles show the login form and sign-up link under the grayed out content.</p>
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

                <p class="inner-p">Articles page on backend simply shows information. Editors can create, edit, delete posts.</p>
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
<?php
include('footer.php');
}//Close mobile detect