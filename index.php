<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if(!$detect->isMobile()){
    header('location:http://toruinamoto.com', true, 301);
}else{
    include('header.php');
?>
    <div id="pageContent" class="pageContent cf">
        <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn" id="btn"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> 
            <div id="index" class="ckpanel">
                <div id="home" class="panel" data-number="1">
                    <div class="home">
                        <h1 class="headline">Hi! I'm Toru, <br> a Web Designer <br>/ Web Developer <br> based in Vancouver.<br>Find out how <br> I can help you.</h1>
                        <a href="#about" class="nav aboutme">
                            <img src="img/arrow-u.png" alt="about-mobile" class="aboutme-img">
                        </a>
                    </div>
                </div>
                <div id="about" class="panel" data-number="2">
                    <div class="about">
                    <section class="about-lead-sec" id="about-top">
                        <h1 class="about-h1">I create simple, clean, and well-organized User Interface and delightful User Experience, and bring ideas to life with solid engineering skills.</h1>
                        <div class="about-offer">
                            <h2 class="about-h2">I can offer...</h2>
                            <ul class="about-offer-ul1 cf">
                                <li>
                                    <i class="fa fa-check"></i>Well structured information architecture
                                    <img src="img/about/structured.svg" alt="structured information architecture" class="about-svg">
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Clean feeling user interface
                                    <img src="img/about/cleanfeeling.svg" alt="Clean feeling user interface" class="about-svg">
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Positive impact for user experience
                                    <img src="img/about/userexperience.svg" alt="Positive impact for user experience"  class="about-svg">
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Mobile friendly responsive websites
                                    <img src="img/about/mobilefriendly.svg" alt="Mobile friendly websites"  class="about-svg">
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Concise and organized coding
                                    <img src="img/about/organizedcoding.svg" alt="Concise and organized coding"  class="about-svg">
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Beautiful design with detail and precision
                                    <img src="img/about/detailprecision.svg" alt="Beautiful design with detail and precision"  class="about-svg">
                                </li>
                            </ul>
                            <h3 class="about-h3-lead">I also can do if you need...</h3>
                            <ul class="about-offer-ul2">
                                <li>Wordpress Integration</li>
                                <li>Joomla Integration</li>
                                <li>Tailored Content Management System</li>
                            </ul>
                        </div>
                    </section>    
                        <section class="about-bottom about-bg1" id="about-bottom">
                            <div class="panel-profile cf">
                                <div class="about-profile">
                                    <h3 class="about-h3">A little about myself. . .</h3>
                                    <p class="about-biography">
                                        &ldquo;I'm Toru. I've been told, I'm a &#9734; web designer/developer because I engage every client mindfully.
                                        I wanna feel, intuitively comprehend along with understanding of what are each project requirements. My action-steps cater to each client individually which leads to creating an experience--effective solutions, evocative designs.
                                    </p>
                                    <p class="showmore about-biography" id="show">Show More</p>
                                    <div class="about-hide" id="abbr">
                                        <p class="about-biography">
                                            I love samba percussion ensemble of Batucada and music ranging from jazz to hip hop to house to Hawaiian raggae and more. Just like I create music notes from piano imitating film soundtrack compilations from The Legend of 1900, I let the rhythm and groves and beat inspire coding, conjure up design and resolve tech challenges to deliver clear messages in design. The rhythms also aid in keeping time, my timing is on-time mode. I finish and deliver protects on time.
                                        </p>
                                        <p class="about-biography">
                                            Wanna work on a project with me??&rdquo; 
                                        </p>
                                    </div>
                                </div>
                                <img src="img/about/about.png" alt="profile-picture" class="about-myself">
                            </div>
                            <a href="#portfolio" class="nav seemywork">
                                <img src="img/arrow-u.png" alt="about-mobile" class="seemywork-img">
                            </a>
                        </section>
                    </div><!--about-->
                </div>
                <div id="portfolio" class="panel" data-number="3">
                    <div class="portfolio">
                        <section class="portfolio-gzt" id="portfolio-gzt" data-background="http://toruinamoto.com/img/gazettemag/gazettemag-bg.jpg">
                            <a class="cf left-gzt" href="gazettemag.php">
                                <h1 class="portfolio-h1">Gazette Magazine</h1>
                                <h3 class="portfolio-h3">Art &amp; Culture Web magazine design renewal</h3>
                                <i class="portfolio-i">Interface Design &amp; Frontend/Wordpress Development</i>
                            </a>
                            <div class="gzt-underleft">
                                <a href="gazettemag.php" class="pf-nextmob-w pf-next-gzt">
                                   View Project
                                </a>
                            </div>
                        </section>
                        <section class="portfolio-ubc" id="portfolio-ubc" data-background="http://toruinamoto.com/img/ubcbaja/ubctop-bg.jpg">
                            <a class="cf left-ubc" href="ubcbaja.php">
                                <h1 class="portfolio-h1">UBC BAJA Website Contest</h1>
                                <h3 class="portfolio-h3">University of British Columbia Racing Car Club&rsquo;s Webdesign</h3>
                                <i class="portfolio-i">Interface Design &amp; HTML&amp;CSS Coding</i>
                            </a>
                            <div class="cf">
                                <div class="pf-left ubc-underleft">
                                    <img src="img/winner.png" alt="winner-banner" class="ubc-winner">
                                    <a href="ubcbaja.php" class="pf-nextmob-w pf-next-ubc">
                                       View Project
                                    </a>
                                </div>    
                                <div class="pf-right ubc-underright cf">
                                    <img src="img/ubcbaja/ubc-top-pc.jpg" alt="ubcbaja-top-pc" class="ubc-top-pc">
                                </div>
                            </div>   
                        </section>
                        <section class="portfolio-nwp" id="portfolio-nwp" data-background="http://toruinamoto.com/img/newsportal/nwptop-bg.jpg">
                            <a class="cf left-nwp" href="newsportal.php">
                                <h1 class="portfolio-h1">Direct Marketing News</h1>
                                <h3 class="portfolio-h3">Design,Custom CMS</h3>
                                <i class="portfolio-i">Interface Design &amp; Frontend/Backend Development</i>
                            </a>
                            <div class="cf">
                                <div class="pf-left nwp-underleft">
                                    <a href="newsportal.php" class="pf-nextmob-w pf-next-nwp">
                                       View Project
                                    </a>
                                </div>    
                                <div class="pf-right nwp-underright cf">
                                    <img src="img/newsportal/nwp-top2.png" alt="newspoprtal" class="nwp-topimg">
                                </div>
                             </div>   
                        </section>
                        <section class="portfolio-ecm" id="portfolio-ecm" data-background="http://toruinamoto.com/img/ecommerce/ecmtop-bg.jpg">
                            <a href="ecommerce.php" class="cf left-ecm">
                                <h1 class="portfolio-h1">Snow Freak</h1>
                                <h3 class="portfolio-h3">E-commerce</h3>
                                <i class="portfolio-i">User Interface Design</i>
                            </a> 
                            <div class="cf">
                                <div class="pf-left ecm-underleft">
                                    <a href="ecommerce.php" class="pf-nextmob pf-next-ecm">
                                       View Project
                                    </a>
                                </div>
                                <div class="pf-right ecm-underright cf">
                                    <img src="img/ecommerce/ecm-top.png" alt="ecommerce" class="ecm-topimg">
                                </div>
                             </div>   
                        </section>
                        <section class="portfolio-rgk cf" id="portfolio-rgk" data-background="">
                            <div class="left-rgk">
                                <a href="reggiekey.php" class="rgkleft-inner">
                                    <h1 class="portfolio-h1">Reggie <span class="rgkh1-c1">Key </span><span class="rgkh1-c2">Watson</span></h1>
                                    <h3 class="portfolio-h3">Branding Case Study</h3>
                                    <i class="portfolio-i">Interface Design &amp; Frontend/Backend Development</i>
                                </a>
                                <div class="cf">
                                    <div class="pf-left rgk-underleft">
                                        <a href="reggiekey.php" class="pf-nextmob-w pf-next-rgk">
                                           View Project
                                        </a>
                                    </div>    
                                    <div class="pf-right rgk-underright cf">
                                        <img src="img/reggiekeyswatson/rgk-top.jpg" alt="reggiekeywatson" class="rgk-topimg">
                                    </div>
                                </div>   
                            </div>
                        </section>
                        <section class="portfolio-wzb cf" id="portfolio-wzb" data-background="http://toruinamoto.com/img/wazabibuzz/wzbtop-bg.jpg">
                            <a href="wazabibuzz.php" class="cf left-wzb">
                                <h1 class="portfolio-h1">WaZabiBuzz</h1>
                                <h3 class="portfolio-h3">Mobile First Design, Wordpress Integration</h3>
                                <i class="portfolio-i">Interface Design &amp; Frontend/Wordpress Development</i>
                            </a>
                            <div class="cf">
                                <div class="pf-left wzb-underleft">
                                    <a href="wazabibuzz.php" class="pf-nextmob-w pf-next-wzb">
                                       View Project
                                    </a>
                                </div>    
                                <div class="pf-right wzb-underright cf">
                                    <img src="img/wazabibuzz/wzb-topmobile.png" alt="wazabibuzz-top-mobile" class="wzb-topimg">
                                </div>
                            </div>   
                        </section>        
                        <section class="portfolio-eas" id="portfolio-eas" data-background="http://toruinamoto.com/img/eastasianserif/eastop-bg.jpg">
                            <a href="typography.php" class="cf left-eas">
                                <h1 class="portfolio-h1">East Asian Serif</h1>
                                <h3 class="portfolio-h3">Original Typeface</h3>
                            </a>   
                            <a href="typography.php" class="pf-nextmob-w pf-next-eas">
                               View Project
                            </a>
                        </section>
                    </div><!--portfolio-->
                </div>
                <div id="contact" class="panel" data-number="11">
                    <div class="contact">
                        <section class="cf">
                            <h2 class="contact-h2">Thank you for seeing my portfolio. <br> I'm looking forward to <br> working with you.</h2>
                            <form id="contact-form" method="post" action="mailer.php" class="contact-form">
                                <label class="contact-label">Name</label>
                                <input type="text" id="name" name="name"  class="contact-input"required>
                                <label class="contact-label">Email</label>
                                <input type="email" id="email" name="email" class="contact-input" required>
                                <label class="contact-label">Message</label>
                                <textarea id="message" name="message" class="contact-txtarea" required></textarea>
                                  <div id="form-messages" class="form-messages"></div>
                                <button type="submit" class="submit">Send</button>
                            </form>
                        </section>
                        <div id="sending">Sending...</div>
                    </div>
                </div>
            </div>
    </div>
<?php
include('footer.php');
}//Close mobile detect