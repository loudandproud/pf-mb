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
<div id="ubcbaja" class="panel" data-number="5">
        <section class="page-sec cf">
            <div class="page-inner-top">
                <h1 class="page-h1 ubc-h1">UBC Baja Website Contest</h1>
                <h3 class="page-headdescription">Interface Design &amp; HTML&amp;CSS Coding</h3>
                <img src="img/ubcbaja/ubc-home2.jpg" alt="ubc-wireframe" class="ubc-home3d">
                <p class="description-p">UBC Baja is an engineering student team that designs, builds, and races a single seat, all terrain off-road vehicle in the Baja SAE Series. 
                They had a competition to renew their website's design in December 2013. All students in Web Development class at Vanarts were assigned to participate in the competition. 
                We had to submit two graphic designs of their webpage. I was really happy to be chosen as the winner.</p>
                <p class="tools-p"><i class="fa fa-wrench"></i> : HTML5, CSS3, jQuery, Photoshop, Illustrator</p>
            </div>
        </section>
        <section class="page-sec">
            <div class="page-inner ubc-inner-rc cf">
                <div class="ubc-inner-left">    
                    <h2 class="page-h2 ubc-h2">Requirements</h2>
                    <ul class="disc-listred">
                        <li><span class="listred-inner">Design of website layout and one sub page layout</span></li>
                        <li><span class="listred-inner">Feature high quality photographs</span></li>
                        <li><span class="listred-inner">Connecting with Facebook page</span></li>
                        <li><span class="listred-inner">Blog roll while maintaining high visibility of sponsor logos</span></li>
                        <li><span class="listred-inner">Clean design, rich images, showing serious style that convinces sponsorship its worthy partnering</span></li>
                    </ul>
                </div>
                <div class="ubc-inner-right">    
                    <h2 class="page-h2 ubc-h2">Concept</h2>
                    <ul class="disc-listblue">
                        <li><span class="listblue-inner">Featured big ad space that will benefit the sponsorships</span></li>
                        <li><span class="listblue-inner">Clean, Stylish, Car-Racing feeling that also look serious</span></li>
                        <li><span class="listblue-inner">Easy to navigate, well-organized Information Architecture</span></li>
                        <li><span class="listblue-inner">+Fully responsive webdesign</span></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page-sec bg1 bg-b">
            <div class="page-inner">
                <h2 class="page-h2 ubc-h2">Home page Wireframe and Feature</h2>
                <div class="cf ubc-homewf">
                    <ol class="wfdescription ubc-wf">
                        <li>Big product image featuring </li>
                        <li>2 different sized sponsorship banner advertising spaces on body</li>
                        <li>Big featured video area</li>
                        <li>Featured blog roll with high quality photos</li>
                        <li>Easy to click social media icons</li>
                    </ol>
                    <img src="img/ubcbaja/ubcbaja-homewireframe.jpg" class="ubc-homewf-img">
                </div>
            </div>
        </section>
        <section class="page-sec">
            <div class="page-inner">
                <h3 class="page-h2 ubc-h2">Home page Mockup</h3>
                <img src="img/ubcbaja/ubc-home2.jpg" alt="ubc-wireframe" class="ubc-home3d">
            </div>
        </section>
        <section class="page-sec bg2 bg-b">
            <div class="page-inner">
            <h2 class="page-h2 ubc-h2">Sponsorship page Wireframe and Feature</h2>
                <p class="ubc-sps-p">The Sponsorship price chart on their former website was a bit of confusing.<br>So I reorganize to make it more simple.</p>
                <div class="sps-img cf">
                	<div class="sps-before">
                        <img src="img/ubcbaja/sponsorship-before.jpg" alt="ubc-sponsorship-before" class="sps-before-img">
                    </div>
                	<div class="sps-arrow">
                        <img src="img/ubcbaja/arrow.png" alt="ubc-spponsorship-arrow">             
                    </div>
                	<div class="sps-after">
                        <img src="img/ubcbaja/sponsorship-after.jpg" alt="ubc-sponsorship-after" class="sps-after-img">         
                	</div>
                </div>
            </div>
        </section>
        <section class="page-sec cf">
            <div class="page-inner">
                <h2 class="page-h2 ubc-h2">Mobile Layout</h2>
                <div class="ubc-mobile cf">
                	<img src="img/ubcbaja/ubc-spsr-tabletandphone.jpg" alt="ubcbaja-sponsorship-smartphone">
                </div>
            </div>
        </section>    
        <section class="page-sec cf">
            <div class="page-inner">
                <h2 class="page-h2 ">What they had to say...</h2>
                <div class="tstmnl cf">
                	<div class="ubc-tstmnl-left">
                    	<img src="img/ubcbaja/sean.jpg" alt="ubc-baja-testmimonial" class="ubc-tstmnl-left-img">
                    </div>
                    <div class="ubc-tstmnl-right">
                    	<p class="ubc-tstmnl">The timelines of Toru's work and innate skill to capture our needs were huge factors to the success of our project. Eager, bright, and organized; I couldn't recommend anyone else!</p>
                    	<span class="tstmnl-spn">Sean Hudson, UBC Baja Engineering Design Team</span>
                	</div>
                </div>
            </div>
        </section>
        <section class="page-sec cf">
            <div class="page-inner page-viewsite">
                <a href="http://toruinamoto.com/ubcbajaprototype/index.html" class="viewsite" target="_blank">View Site</a>
			</div>
		</section>
</div>
</div>
<?php
include('footer.php');
}//Close mobile detect