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
<div id="typography" class="panel" data-number="10">
    <div class="cf eas-content">
        <section class="page-sec">
            <div class="page-inner-top">
                <h1 class="page-h1 eas-h1">East Asian Serif</h1>
                <h3 class="page-headdescription">Original Typeface</h3>
                <img src="img/eastasianserif/specimen.png" alt="eastasianserif-specimen">
                <p class="description-p">East Asian Serif is an original typeface created in Typography class. I noticed that most of all the typeface having Asian style were script fonts.
                I decided to try to make a typeface having both serif and Asian style by giving them East Asian calligraphy feature. 
                </p>
                <p class="tools-p"><i class="fa fa-wrench"></i> : Illustrator</p>               
            </div>
        </section>
        <section class="page-sec">
            <div class="page-inner eas-clg">
                <h2 class="page-h2 eas-h2">Feature Point of East Asian Calligraphy</h2>
                <p class="eas-fp">I applied some common characteristics of East Asian calligraphy. Here's how they work.</p>
                <img src="img/eastasianserif/eas-point.png" class="eas-points">
           </div>
        </section>
        <section class="page-sec">
           <div class="page-inner">
                <h2 class="page-h2 eas-h2">Creation Process</h2>
                <p class="eas-cp">As you may know, creating font usually takes a couple of years. It was really too difficult to make a decent serif font in two months,
                so I used two existing fonts, Optima and Kozuka Mincho to make the process faster. I started from copy optima as basic shape for my font,
                and cut some parts of Kozuka Mincho characters and mixed and tweaked them to look nice by using Adobe Illustrator.</p>
                <img src="img/eastasianserif/creationprocess.png" alt="process1" class="easprocess-img">
            </div>
        </section>
        <section class="page-sec">
           <div class="page-inner">
                <h2 class="page-h2 showcase-h2">Show Case</h2>
                <img src="img/eastasianserif/businesscard.jpg" alt="businesscard" class="showcase">
                <img src="img/eastasianserif/zensushi.jpg" alt="zensushi-menu" class="showcase">
                <img src="img/eastasianserif/matcha.jpg" alt="machaparty-poster" class="showcase">
            </div>
        </section>
    </div>
</div>  
</div> 
<?php
include('footer.php');
}//Close mobile detect