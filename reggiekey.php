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
<div id="reggiekey" class="panel" data-number="8">
    <section class="page-sec">
       <div class="page-inner-top">
            <h1 class="page-h1 rgk-h1">Reggie Key Watson</h1>
            <h3 class="page-headdescription">Branding Case Study</h3>
            <img src="img/reggiekeyswatson/rgk-innertop.jpg" alt="reggiekey-thelatest">
            <p class="description-p">Reggie Key Watson is a professional jazz piano player and we were assigned to make his website to build his personal brand.</p>
            <p class="disclaimer-p">Disclaimer : I used Jamie Foxx images as Reggie himself, and other artists images. The images are used only for educational purposes. The copyrights of all the images are attributed to the original image's creators.</p>
            <p class="tools-p"><i class="fa fa-wrench"></i> : HTML5, CSS3, jQuery, PHP, MySQL, Photoshop, Illustrator</p>
        </div>
    </section>
    <section class="page-sec">
        <div class="page-inner ubc-inner-rc cf">
            <div class="ubc-inner-left">    
                <h2 class="page-h2 rgk-h2">Reggie Key's Profile</h2>
                <ul class="disc-listred rgk-listred">
                    <li><span class="listred-inner">Reggie tours around the world regularly under his up and coming “Reggie’s Keys” jazz trio group name.</span></li>
                    <li><span class="listred-inner">He's a high profile piano player that does extensive touring around the USA, Europe, and Japan.</span></li>
                    <li><span class="listred-inner">Reggie also has an electronic music side to him and he produces house, hip hop, and soulful electronic music as well.</span></li>
                    <li><span class="listred-inner">Reggie has Twitter and Facebook account and they are very active.</span></li>
                </ul>
            </div>
            <div class="ubc-inner-right">    
                <h2 class="page-h2 rgk-h2">Requirement</h2>
                <ul class="disc-listblue rgk-listblue">
                    <li><span class="listblue-inner">He wants things like photos, videos, music tracks, biography, tour dates, and more.</span></li>
                    <li><span class="listblue-inner">The website should be fun, playful, exciting but at the same time business and professional as Reggie does lots of big events such as music festivals, hotel events, private parties, and more.</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-sec bg1 bg-b">
        <div class="page-inner">
            <h2 class="page-h2 rgk-h2">Navigation</h2>
            <p class="inner-p">To represent his multiple talents, I chose different background colors for each navigation menu.</p>
            <img src="img/reggiekeyswatson/navigations.jpg" alt="reggiekey-navigation">
            
        </div>
    </section>
    <section class="page-sec">
        <div class="page-inner">
            <h2 class="page-h2 rgk-h2">The Latest News</h2>
            <p class="inner-p">The latest news is a landing page of the website. It shows the latest posts of each menu in the rectangular areas. Users can easily find his fresh past gigs, upcoming music and live information.</p>
            <img src="img/reggiekeyswatson/thelatest.jpg" alt="reggiekey-thelatest">
        </div>
    </section>
    <section class="page-sec bg2 bg-b">
        <div class="page-inner">
            <h2 class="page-h2 rgk-h2">Live Schedule</h2>
            <p class="inner-p">To show his live schedule, I made it simple design which makes users to purchase tickets.<br>Also, his comments on both Facebook and Twitter can be easily seen and users can check his latest social network activity.<br>His updated exciting gigs attract fans to come to his live shows.</p>
            <img src="img/reggiekeyswatson/schedule.jpg" alt="reggiekey-schedule">
        </div>
    </section>
    <section class="page-sec">
        <div class="page-inner">
            <h2 class="page-h2 rgk-h2">Music</h2>
            <p class="inner-p">Music section shows his discography and provides some of his works. Users can enjoy his sample music on SoundCloud and can purchase his music on Amazon and iTunens</p>
        <img src="img/reggiekeyswatson/music.jpg" alt="reggiekye-music">
        </div>
    </section>
    <section class="page-sec bg1 bg-b">
        <div class="page-inner">
            <h2 class="page-h2 rgk-h2">Podcast</h2>
            <p class="inner-p">Through researching some musician's website, I noticed some of them had his original podcast channel. To give fans more his thoughts and make deep connections with them, I proposed him to make his own podcast channel and he loved the idea.<br> He shares some stories of gigs, recordings, and his life memories. He also interviews some featured musicians and play some live gigs with them.</p>
            <img src="img/reggiekeyswatson/podcast.jpg"  alt="reggiekye-podcast">
        </div>
    </section>
    <section class="page-sec">
        <div class="page-inner">
        <p>There are more pages; Biography, Video, Gallery and Contact page. Please check those pages by visiting the real website.</p>
        </div>
    </section>
    <section class="page-sec cf">
        <div class="page-inner page-viewsite">
            <a href="http://toruinamoto.com/rkwprototype/index.php" class="viewsite" target="_blank">View Site</a>
        </div>
    </section>
</div> 
</div>
<?php
include('footer.php');
}//Close mobile detect