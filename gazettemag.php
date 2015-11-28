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
<div id="gazettemag" class="panel ckpanel" data-number="4">
    <section class="page-sec cf">
        <div class="page-inner-top">
            <h1 class="page-h1 gzt-h1">Gazette Magazine</h1>
            <h3 class="page-headdescription">Core Concept, Magazine Layout, Deep customized Wordpress theme</h3>
            <img src="img/gazettemag/gazettemag-home2.jpg" alt="ubc-wireframe" class="ubc-home3d">
            <p class="description-p">
            Gazette Magazine is a local art, culture, and news magazine. 
            The magazine started in Gastown two years ago online. It featured local events, underground arts, music, fashion, and people living in Gastown. 
            The first hard-copy edition was successfully published last January, and the second issue will come out soon.
            </p>
            <p class="tools-p"><i class="fa fa-wrench"></i> : HTML5, CSS3, SASS, Gulp, jQuery, Ajax, PHP, MySQL, Wordpress, Photoshop, Illustrator</p>
        </div>
    </section>

    <section class="page-sec gzt-b1" id="gzt-concept">
        <div class="page-inner">
            <div class="gzt-cards-sec">
                <h2 class="page-h2 ubc-h2">It started from concept making</h2>
                <p>When I got down to working on Gazette's website, the first thing that I realized was that it was lacking any sort of concept. I believe giving people inspiration is essential for a media company, 
                    and concept is a core factor which affects all the branding and content strategy. <br>
                    An enthusiastic email explaining the importance of having a concept was sent to all the core members. 
                    The talents gathered, and a brainstorming meeting took place. After much discussion and debate, a strapline emerged:
                     <i>"Evolve together."</i></p>
                <img src="img/gazettemag/cards2.png" class="gzt-cards">
            </div>
        </div>
    </section>
    <section class="page-sec gzt-b2 bg-b">
        <div class="page-inner cf">
            <h2 class="page-h2 gzt-h2">It dramatically shows featured images</h2>
            <div class="gzt-right">
                <p class="gzt-ftimg-p">The beautiful images were used in the entire website. Some editorials talk about heart-felt stories of local people, artists, and community.</p>
                    <p>The concept "Evolove together." inspired me to dramatically layout images so that they would resonate with the stories and the readers.
                </p>
            </div>
            <img src="img/gazettemag/pc-home.jpg" class="gzt-left">
        </div>
    </section>
    <section class="page-sec gzt-b3" id="gzt-ads">
        <div class="page-inner">
            <div class="gzt-adclicks">
                <h2 class="page-h2 gzt-h2">Doubled the number of  ad-clicks</h2>
                <p class="gzt-ad-p">Banners are not merely ads, it also gives the layout rhythm. Banner areas are carefully decided to match the layout. 
                It also rotates other banners on each ad-area every ten seconds. The ad revenue is a key engine of a media business. 
                The new layout doubled the number of banner-clicks, and increased advertising revenues which was huge for a media company.
                </p>
            </div>
            <div class="gzt-ads">
                <img src="img/gazettemag/gzt-ads.jpg" lass="gzt-ads-img"></img>
            </div>
        </div>
    </section> 
    <section class="page-sec cf" id="gzt-circ">
        <div class="page-inner">
            <div class="cf">
                <div class="gzt-circulation">
                    <h2 class="page-h2 gzt-h2">Circulation matters... and branding too</h2>
                    <p class="gzt-sps-p">Users can smoothly move to the next post by scrolling. 
                    Related posts are placed under each post and on the sidebar of the desktop. That enhances the user′s circulation.
                    </p>
                    <p class="gzt-sps-p">You might also notice that the brand slogan; "Evolve together." is placed under the content area of each post with their logo.
                    That helps to link the user's feelings with the content, and ties various stories into one concept.
                    </p>
                    <img src="img/gazettemag/circ-post.jpg" class="gzt-sp-post"></img>
                </div>
            </div>
        </div>
    </section>            
<!--     <section class="page-sec cf tip">
        <div class="page-inner">
            <h2 class="page-h2 ">What they had to say...</h2>
            <div class="tstmnl cf">
            	<div class="tstmnl-left">
                	<img src="img/gazettemag/dani.jpg" alt="ubc-baja-testmimonial" class="">
                </div>
                <div class="tstmnl-right">
                	<p class="">Toru is second to none.</p>
                	<span class="tstmnl-spn">Dani Kremeniuk, Art Director</span>
            	</div>
            </div>
        </div>
    </section> -->
    <section class="page-sec cf">
        <div class="page-inner page-viewsite">
            <a href="https://gazettemag.com" class="viewsite" target="_blank">View Site</a>
		</div>
	</section>
</div>
</div>
<?php
include('footer.php');
}//Close mobile detect