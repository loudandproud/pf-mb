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
<div id="wazabibuzz" class="panel" data-number="9">
    <section class="page-sec">
    <div class="page-inner-top">
        <h1 class="page-h1 wzb-h1">WaZabiBuzz</h1>
        <h3 class="page-headdescription">Mobile First Design, Wordpress Integration</h3>
            <img src="img/wazabibuzz/wzb-innertop2.jpg" alt="wazabibuzz-inner-topimage">
        <p class="description-p">WaZabiBuzz is a viral media website for the business class. The concept is to scope out the most interesting and entertaining topics from Japanese web media and share them with people who find this entertaining.
        <br>I made this website mobile-first design because a lot of users check this kind of website with mobile devices.</p>
        <p class="tools-p"><i class="fa fa-wrench"></i> : HTML5, CSS3, jQuery, PHP, MySQL, WordPress, Photoshop, Illustrator</p>
    </div>
    </section>
    <section class="page-sec bg1">
       <div class="page-inner">
        <h2 class="page-h2">Creation Process</h2>
        <p class="inner-p">I took a Progress Enhancement approach to design this website. I made the design for mobile first, and added more content when displayed with desktop and laptop computers. The code also starts for smartphone first.</p>
        <div class="wzb-wfcode cf">
            <img src="img/wazabibuzz/wzb-sketch-wireframe.jpg" alt="wazabibuzz wireframe sketch">
        </div>
        <p class="inner-p">After I coded the basic structure, I made it into custom Wordpress template and integrated with Wordpress.</p>
       		<img src="img/wazabibuzz/wzb-wordpress.jpg" alt="waabibuzz-wordpress">
       </div> 
    </section>
    <section class="page-sec tip bg2" title="Hover <br>The <br>Display">
        <div class="page-inner">
        <h2 class="page-h2">Navigation for mobile device</h2>
            <p class="inner-p">When user touch the navigation button, the menu slides in from the left side. </p>
            <div class="page-smartphone wzb-mobnav">
                <img src="img/wazabibuzz/wzb-innersph-home.jpg" alt="inner-smartphone" class="inner-wzb-sphimg" id="offtip1">
            </div>
        </div>
    </section>
    <section class="page-sec bg1 bg-b">
       <div class="page-inner">
            <h2 class="page-h2">Inner page design for Desktop</h2>
            <p class="inner-p">The website aims to have its content shared by users. It focuses on two social media websites, Facebook and Twitter, of which share buttons are placed on the right top section and the middle of page. </p>
           <img src="img/wazabibuzz/wzb-inner-pagepc.jpg" alt="wazabibuzz-inner-page-pc" class="inner-wzb-pagepc">
       </div>
    </section>    
    <section class="page-sec tip">
       <div class="page-inner">
        <h2 class="page-h2">Inner page design for mobile</h2>
        <p class="inner-p">Please hover the devices to see the whole page.</p>
            <div class="wzb-page-mobile cf">
				<img src="img/wazabibuzz/wzb-tabletandphone2.jpg" alt="wazabibuzz-tablet-and-phone">
            </div>
        </div>
    </section>
    <section class="page-sec cf">
        <div class="page-inner page-viewsite">
            <a href="http://wazabibuzz.com/" class="viewsite" target="_blank">View Site</a>
        </div>
    </section>
</div>
</div>
<?php
include('footer.php');
}//Close mobile detect