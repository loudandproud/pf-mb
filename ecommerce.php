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
<div id="ecommerce" class="panel" data-number="7">
    <section class="page-sec cf">
       <div class="page-inner-top">
            <h1 class="page-h1 ecm-h1">SNOW FREAK</h1>
            <h3 class="page-headdescription">User Interface Design</h3>
            <img src="img/ecommerce/ecm-innertop.jpg" alt="ecommerce-productpage-mockup" class="">
            <p class="description-p">Snow Freak was an e-commerce interface design project. Students were assigned to design two pages of whatever product they chose for Home&amp;Product page.
             I chose snow-gear as a theme and researched over 20 snow-gear e-commerce websites, and found some common points for successful e-commerce website design.</p>
            <p class="tools-p"><i class="fa fa-wrench"></i> : Photoshop, Illustrator</p>
       </div>
    </section>
    <section class="page-sec">
       <div class="page-inner">
            <h2 class="page-h2 ecm-h2">Product page Wireframe and Feature</h2>
            <div class="ecm-wfpd-wrap cf">
                <ol class="wfdescription ecm-wf-pd">
                        <li>Featured product image is zoomed in when users hover</li>
                        <li>Three different image taken from different angles</li>
                        <li>Detailed video</li>
                        <li>Showing the quantity of remaining products</li>
                        <li>Clearly showing products that are on sale</li>
                        <li>Easy to select size</li>

                        <li>Vivid orange color &quot;add to cart&quot; button</li>
                        <li>Support services right beside content area</li>
                        <li>Showing size and specs in charts</li>
                        <li>Concise descriptions</li>
                        <li>Customer reviews</li>
                        <li>Related products that other customers viewed</li>
                </ol>
            </div>
       </div>
    </section>
    <section class="page-sec bg2">
       <div class="page-inner ecm-wfpd">
                <img src="img/ecommerce/ecm-prd-wf.png" alt="ecommerce-wireframe" class="ecm-productwf-img">
       </div>
    </section>
    <section class="page-sec bg1 bg-b">
       <div class="page-inner">
             <h2 class="page-h2 ecm-h2">Product page Mockup</h2>
            <img src="img/ecommerce/ecm-prd-mockup.jpg" alt="ecommerce-productpage-mockup" class="ecm-productmu-img">
        </div>                
    </section>
    <section class="page-sec">
       <div class="page-inner">
            <h2 class="page-h2 ecm-h2">Homepage Wireframe and Feature</h2>
            <div class="cf">
                <ol class="wfdescription ecm-wf-home">
                    <li>Easy to find telephone number in header</li>
                    <li>Easily accessible search bar in header</li>
                    <li>Add to cart button on the right corner</li>
                    <li>Large featured product image</li>
                    <li>Other featured products</li>
                </ol>
            <img src="img/ecommerce/ecm-home-wf.png" alt="ecommerce-homepage-wireframe" class="ecm-homewf-img">
            </div>
       </div>
    </section>
    <section class="page-sec">
       <div class="page-inner ecm-last">
            <h2 class="page-h2 ecm-h2">Homepage page Mockup</h2>
            <img src="img/ecommerce/ecm-home-mockup.png" alt="ecommerce-homepage-mockup" class="ecm-homemu-img">
        </div>
    </section>
</div>
</div> 
<?php
include('footer.php');
}//Close mobile detect