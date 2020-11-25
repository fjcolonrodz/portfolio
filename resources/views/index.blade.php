<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Full Stack Developer Portfolio | Francisco Colón</title>
    <meta name="description" content="I am a Fullstack developer specialized in PHP and Laravel. I have 5+ years of development experience building fullstack products from scratch, developing and integrating APIs and working with databases. Fast and self teachable learner in all areas of technology. Fluent in Spanish and English.">
    <meta name="author" content="Francisco Colón">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ mix('css/base.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ mix('js/scripts.js') }}"></script>

    <!-- favicons
     ================================================== -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75611143-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-75611143-2');
    </script>

</head>

<body id="top">

<!-- header
================================================== -->
<header>
    <div class="row">

        <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
                <a href="{{ route('home') }}" style="font-family: 'italic-font';">Francisco Colón</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation">
                    <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="">About</a></li>
                    <li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
                    <li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
                    <li><a class="smoothscroll"  href="#services" title="">Services</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>
                </ul>
            </nav>
        </div> <!-- /top-bar -->

    </div> <!-- /row -->
</header> <!-- /header -->

<!-- intro section
================================================== -->
<section id="intro">

    <div class="intro-overlay"></div>

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <h5>Hello, World.</h5>
                <h1>I'm Francisco Colón.</h1>

                <p class="intro-position">
                    <span>Hello I am a freelance full stack web developer in Orlando, FL.</span>
                    <br>
                    <span> Welcome to my portfolio !</span>
                </p>

                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

            </div>

        </div>
    </div> <!-- /intro-content -->

    <ul class="intro-social">
        <li><a href="https://www.facebook.com/fjcolonrodz"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/fjcolonrodz"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/fjcolonrodz/"><i class="fa fa-instagram"></i></a></li>
    </ul> <!-- /intro-social -->

</section> <!-- /intro -->


<!-- about section
================================================== -->
<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">

                <img src="{{ asset('images/profile-pic.jpg') }}" alt="Profile Picture">

                <p class="lead">
                    Hi there! I am a Fullstack developer specialized in PHP and Laravel.
                    I have 5+ years of development experience building fullstack products from scratch,
                    developing and integrating APIs and working with databases. Fast and self teachable
                    learner in all areas of technology. Fluent in Spanish and English.
                </p>
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>Francisco Colón</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>October 18</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>FULLSTACK Developer, Digital Media Designer</span>
                </li>
                <li>
                    <strong>Website:</strong>
                    <span>www.fjcolon.com</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>fjcolon@kmilemedia.com</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent100"></div>
                    <strong>PHP</strong>
                </li>
                <li>
                    <div class="progress percent100"></div>
                    <strong>Laravel</strong>
                </li>
                <li>
                    <div class="progress percent100"></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent100"></div>
                    <strong>CSS3</strong>
                </li>
                <li>

                    <div class="progress percent100"></div>
                    <strong>Vue.js</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="#" title="Download CV" class="button button-primary">Download CV</a>
        </div>
    </div>

</section> <!-- /process-->


<!-- resume Section
================================================== -->
<section id="resume" class="grey-section">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Resume</h5>
            <h1>More of my credentials.</h1>

        </div>
    </div> <!-- /section-intro-->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Work Experience</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h4>TravelClick, an Amadeus Company</h4>
                        <p>Jan 2019 - Present</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Digital Media Designer</h4>

                        <strong>Achievements</strong>
                        <ul>
                            <li>Implement high-end technologies such as booking mask, dynamic pricing, carousel, interactivity, and star rating into digital display ads.</li>
                            <li>Optimization of internal project management processes by automating task using Office 365 tools such as MS Forms and MS Power Automate.</li>
                            <li>Development of a web-based reporting tool used by the Media Creative Manager to track SLA’s performance.</li>
                            <li>Development of the Media Creative Portfolio website.</li>
                        </ul>

                        <strong>Responsibilities</strong>
                        <ul>
                            <li>Create interactive visual content from conceptualization, review, and implementation, including translating precise content requirements into effective and accurate visual communications with subject matter experts, content teams, and engineering staff for a variety of technologies and platforms.</li>
                            <li>Work closely with Media Creative Manager, designers, media designers and production to produce cutting edge, effective and timely learning content, develop and maintain best production practices.</li>
                        </ul>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h4>Kmile Media Designs</h4>
                        <p>Jan 2013 - Present</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Software Analyst / Developer, Owner</h4>
                        <p>Design and develop Laravel/PHP and MySQL websites for a range of SMEs, educational establishments, sports events and charitable organisations. Hosting, maintenance and on-going support.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h4>University of Puerto Rico, Mayagüez Campus</h4>
                        <p>Dec 2015 - Jan 2019</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Software Analyst / Developer</h4>

                        <strong>Achievements</strong>
                        <ul>
                            <li>Design and develop a web-based solution that allowed to gather precise data on farmers receiving technical assistance from the Agricultural Extension Service. Also, it allows to document their production, sales and farm inventory. This solution has dramatically reduced the waiting time for essential reports that measures agents performance and improvement opportunities.</li>
                        </ul>

                        <strong>Responsibilities</strong>
                        <ul>
                            <li>Analyze operational procedures to develop web-based solutions through the use of electronic systems.</li>
                            <li>Design flowcharts, context diagrams, ERD's, and any other document required in the development process.</li>
                            <li>Conduct interviews to determine deficiencies in data processing or to simplify daily tasks.</li>
                            <li>Configure, deploy and maintain servers to be used by the developed solutions.</li>
                            <li>Recommend hardware changes and improvements to meet the needs of users. Prepare estimates of time, cost and economic evaluations for the proposed changes and improvements.</li>
                        </ul>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h4>Academia de la Inmaculada Concepción</h4>
                        <p>Jun 2013 - Oct 2016</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Technological Affairs and Information Systems Officer</h4>
                        <p>Provide technical support for both hardware and software. Support LANs, WANs, network segments, Internet, and intranet systems. Daily monitoring of systems and respond immediately to security threats or usability concerns.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Education</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h4>University of Puerto Rico, Mayagüez Campus</h4>
                        <p>Graduated Jun 2016</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Bachelor of Business Administration (B.B.A), Management Information Systems</h4>
                        <p>&nbsp;</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

</section> <!-- /features -->



<!-- services Section
================================================== -->
<section id="services">

    <div class="overlay"></div>

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Services</h5>
            <h1>What Can I Do For You?</h1>

        </div>
    </div> <!-- /section-intro -->

    <div class="row services-content">

        <div id="owl-slider" class="owl-carousel services-list">

            <div class="service">

                <span class="icon"><i class="fa fa-code fa-stack-1x fa-inverse"></i></span>

                <div class="service-content">

                    <h3>Web Application Development</h3>

                    <p class="desc">
                        Fast, responsive and engaging apps that bring your ideas to life.
                    </p>

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="fa fa-cogs fa-stack-1x fa-inverse"></i></span>

                <div class="service-content">

                    <h3>API Integration & Development</h3>

                    <p class="desc">
                        REST API integrations and development with PHP and Laravel.
                    </p>

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="fa fa-database fa-stack-1x fa-inverse"></i></span>

                <div class="service-content">

                    <h3>Database Design</h3>

                    <p class="desc">
                        Database architectures in MySQL, always aiming for performance, scale and stability.
                    </p>

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="fa fa-dollar fa-stack-1x fa-inverse"></i></span>

                <div class="service-content">

                    <h3>Payment Gateway Integration</h3>

                    <p class="desc">
                        Integration with the most popular Payment Gateways such as Paypal, Stripe and ATH Móvil.
                    </p>

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="fa fa-cloud fa-stack-1x fa-inverse"></i></span>

                <div class="service-content">

                    <h3>Cloud Integration</h3>

                    <p class="desc">
                        Deployment of Laravel apps and databases to leading cloud platforms such as DigitalOcean and Amazon AWS.
                    </p>

                </div>

            </div> <!-- /service -->

        </div> <!-- /services-list -->

    </div> <!-- /services-content -->

</section> <!-- /services -->

<!-- Portfolio Section
================================================== -->
<section id="portfolio">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Portfolio</h5>
            <h1>Check Out Some of My Works.</h1>

        </div>
    </div> <!-- /section-intro-->

    <div class="row portfolio-content">

        <div class="col-twelve">

            <!-- portfolio-wrapper -->
            <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/tc.jpg') }}" alt="TravelClick">
                        <a href="#modal-01" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">TravelClick</h3>
                                    <span class="folio-types">
                                        Media Creative Portfolio Website
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/wonderens.jpg') }}" alt="Wonderens Foods">
                        <a href="#modal-02" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Woonderens Foods</h3>
                                    <span class="folio-types">
		     					       	  	Corporate Website & Custom Online Store
		     					      	</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/panawest.jpg') }}"alt="Panawest">
                        <a href="#modal-03" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Panawest</h3>
                                    <span class="folio-types">
		     					       	  Brand Website
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/uprm.jpg') }}" alt="UPRM">
                        <a href="#modal-04" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">University of Puerto Rico, Mayagüez Campus</h3>
                                    <span class="folio-types">
                                        PagriWEB platform, Agricultural Extension Website <br> & Extensionist Portal
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/5kcandelcoop.jpg') }}" alt="5kCandelCoop">
                        <a href="#modal-05" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">5kCandelCoop</h3>
                                    <span class="folio-types">
                                        Events Management System
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <!-- modal popups - begin
                ============================================================= -->

                <div id="modal-01" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/tc.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>TravelClick, an Amadeus Company</h4>
                        <p>Development of the Media Creative Portfolio website.</p>

                        <div class="categories">HTML5, CSS3, Vue.js</div>
                    </div>

                    <div class="link-box">
                        <a href="http://clients.tci.travelclick.net/creative_solutions/" target="_blank">Visit website</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-01 -->

                <div id="modal-02" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/wonderens.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Wonderens Foods</h4>
                        <p>Design and develop the corporate website and a custom online store.</p>

                        <div class="categories">HTML5, CSS3, PHP, Laravel, MySQL, Payment Gateway Integration</div>
                    </div>

                    <div class="link-box">
                        <a href="https://wonderens.com" target="_blank">Visit website</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-02 -->

                <div id="modal-03" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/panawest.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Panawest</h4>
                        <p>Design and develop the informative website for the Panawest brand.</p>

                        <div class="categories">HTML5, CSS3, PHP</div>
                    </div>

                    <div class="link-box">
                        <a href="http://panawestpr.com" target="_blank">Visit website</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-03 -->

                <div id="modal-04" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/uprm.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>University of Puerto Rico, Mayagüez Campus</h4>
                        <p>
                            Design and develop multiple websites and tools including: <br>
                            - Agricultural Extension Website <br>
                            - pagriWEB: Data gathering and reporting tool from the agricultural activity in Puerto Rico. <br>
                            - Extensionist Portal: Employee portal with different tools used in a daily basis.
                        </p>

                        <div class="categories">HTML5, CSS3, Vue.js, PHP, Laravel, MySQL, WordPress</div>
                    </div>

                    <div class="link-box">
                        <a href="https://www.uprm.edu/sea/" target="_blank">Visit website</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-04 -->

                <div id="modal-05" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/5kcandelcoop.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>5k CandelCoop</h4>
                        <p>Design and develop an events management system focused in pedestrian races (5k's, 10k's). The system handles the registration process (including payment processing), athlete management, and data exports to be used in time tracking systems.</p>

                        <div class="categories">HTML5, CSS3, PHP, Laravel, MySQL, Payment Gateway Integration</div>
                    </div>

                    <div class="link-box">
                        <a href="https://5kcandelcoop.com" target="_blank">Visit website</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-05 -->

                <!-- modal popups - end
             ============================================================= -->

            </div> <!-- /portfolio-wrapper -->

        </div>  <!-- /twelve -->

    </div> <!-- /portfolio-content -->

</section> <!-- /portfolio -->

<!-- contact
================================================== -->
<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

        </div>
    </div> <!-- /section-intro -->

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="{{ route('message.store') }}">
                <fieldset>
                    @csrf
                    @honeypot
                    <div class="form-field">
                        <input name="name" type="text" id="name" placeholder="Name" value="" minlength="2" required="">
                    </div>
                    <div class="form-field">
                        <input name="email" type="email" id="email" placeholder="Email" value="" required="">
                    </div>
                    <div class="form-field">
                        <input name="subject" type="text" id="subject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="message" id="message" placeholder="message" rows="10" cols="50" required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Submit</button>
                        <div id="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div> <!-- /col-twelve -->

    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>
                Orlando, Florida
            </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>
                fjcolon@kmilemedia.com
            </p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>
                Phone: (787) 241-0507
            </p>

        </div>

    </div> <!-- /contact-info -->

</section> <!-- /contact -->


<!-- footer
================================================== -->

<footer>
    <div class="row">

        <div class="col-six tab-full pull-right social">

            <ul class="footer-social">
                <li><a href="https://www.facebook.com/fjcolonrodz"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/fjcolonrodz"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/fjcolonrodz/"><i class="fa fa-instagram"></i></a></li>
            </ul>

        </div>

        <div class="col-six tab-full">
            <div class="copyright">
                <span>© 2016 - {{ now()->year }} Francisco Colón</span>
            </div>
        </div>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
        </div>

    </div> <!-- /row -->
</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="{{ mix('js/javascript.js') }}"></script>

</body>

</html>
