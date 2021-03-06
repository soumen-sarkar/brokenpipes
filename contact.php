<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact &ndash; Broken Pipes Canada</title>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<!-- Bootstrap CSS-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="css/global-style.css" rel="stylesheet" type="text/css">
<!-- Media queries CSS -->
<link href="css/media-queries.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- Wrapper start -->
<div class="wrapper">

<!-- Header start -->
    <div class="headerWide">
        <div class="header containerHeader">
            <div class="row">
            	<div class="col-sm-4">
                	<div class="logo">
                    	<a href="index"><img src="img/logo.png" alt="Broken Pipes Logo" title="Broken Pipes Canada" class="img-responsive"/></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                    	<div class="col-sm-12">
                        	<div class="headerContact">
                            	<h5>647-693-8471<span> | </span>1-800-693-0935</h5>
                            </div>
                        </div>
                    	<div class="col-sm-12">
                            <div class="navigation navbar-default">
                                <div class="navbar-header">                            
                                    <button data-target="#navbar" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                        
                                <div class="collapse navbar-collapse" id="navbar">
                                    <ul class="navbar">                            	
                                        <li><a href="index">Home</a></li>
                                        <li><a href="broken-pipe">Broken pipes</a></li>
                                        <li><a href="frozen-pipes">Frozen pipes</a></li>
                                        <li><a href="sewage-backup">Sewage backup</a></li>
                                        <li><a href="drain-backup">Drain backup</a></li>
                                        <li class="active"><a href="contact">Contact</a></li>                                          
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Header end -->


<!-- Content start -->
    <div class="contentWide">
        <div class="container content">            
            <div class="row text-center">
               <?php
               	if(@$_POST['submit']){
					$receiver_email = 'info@brokenpipe.ca'; //receiver email. change this  info@rocketthought.com | info@brokenpipe.ca | druscigno@gmail.com
					$your_name = $_POST['your_name'];
					$your_phone = $_POST['your_phone'];
					$your_email = $_POST['your_email'];
					$your_subject = $_POST['your_subject'];
					$your_message = $_POST['your_message'];
					$ultimate_msg = "Hi there! ".$your_name." wants to contact you regarding: ".$your_subject."\n\n".
									$your_message."\n\n"."Name: ".$your_name."\n"."Phone: ".$your_phone."\n"."Email: ".$your_email;
					
					if(mail($receiver_email,$your_subject,$ultimate_msg)){
						?>
						<img src="img/paper_plane.png" alt="mail sent" title="Email sent succesfully!" style="display: inline-block;">
                        <p>Mail sent successfully!</p>
                        <p><a href="contact.html">&larr;Go Back</a></p>
						<?php
					}
					else{
						?>
						<img src="img/sadface.jpg" alt="mail not sent" title="Email not sent!" style="display: inline-block;">
                        <p>Sorry! There was some problem sending you Email!</p>
                        <p><a href="contact.html">&larr; Please try again!</a></p>
						<?php
					}
				}
			   ?>
            </div>
        </div>
    </div>
<!-- Content end -->

<!-- Our Process start -->
    <div class="processWide">
        <div class="container">
        <div class="process">
            <div class="row">
            	<div class="col-lg-6 col-md-12 col-sm-12">                	
                    <div class="ourProcess equal">
                        <h2 class="hvMiddle"><span>Our</span><br> Process</h2>
                    </div>                    
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 equal">
                	<ul class="ourProcessList row">
                    	<li class="col-lg-12 col-md-6 col-sm-6">
                        	<div class="processIcon whiteBackground fullRound">
                            	<img src="img/call.png" alt="Call Icon" title="Call us" class="img-responsive hvMiddle"/>
                            </div>
                            <h4>Call Us 24/7</h4>
                            <p>Day or night, we are ready to take your call. We have crews on standby 24 hours a day, 7 days a week - all fully certified.</p>
                        </li>
                        <li class="col-lg-12 col-md-6 col-sm-6">
                        	<div class="processIcon whiteBackground fullRound">
                            	<h5 class="hvMiddle">45 min</h5>
                            </div>
                            <h4>45 Minute Response Time</h4>
                            <p>Moisture, water, and dampness can compromise building materials, create odour, and produce bacteria and mold. We can be at your house in under 45 minutes to mitigate the losses.</p>
                        </li>
                        <li class="col-lg-12 col-md-6 col-sm-6">
                        	<div class="processIcon whiteBackground fullRound">
                            	<img src="img/cleanup.png" alt="Repair Icon" title="Repair &amp; Cleanup" class="hvMiddle"/>
                            </div>
                            <h4>Repair &amp; Cleanup</h4>
                            <p>Our reputation has been built on a foundation  of quality work and excellent customer service.</p>
                        </li>
                        <li class="col-lg-12 col-md-6 col-sm-6">
                        	<div class="processIcon whiteBackground fullRound">
                            	<img src="img/insurance.png" alt="Insurance Icon" title="We Bill Insurance" class="hvMiddle"/>
                            </div>
                            <h4>We Bill Insurance</h4>
                            <p>We can bill your insurance company directly and will assist in the payment of part or all of your deductible.</p>
                        </li>
                    </ul>                          
                </div>
            </div>
        </div>
        </div>
    </div>
<!-- Our Process end -->

<!-- Areas we serve start -->
    <div class="areaServeWide">
        <div class="container">
        	<div class="areaServe">
            <div class="row">
            	<div class="col-md-5 col-sm-12">
                	<h3>Areas we serve</h3>
                    <ul class="areaServeList clearfix">
                    	<li><ul><li>Ajax</li> <li>Aurora</li></ul></li>
                        <li><ul><li>Barrie</li> <li>Brampton</li></ul></li>
                        <li><ul><li>Caledon</li> <li>Durham Region</li></ul></li>
                        <li><ul><li>Etobicoke</li> <li>King City</li></ul></li>
                        <li><ul><li>Maple</li> <li>Mississauga</li></ul></li>
                        <li><ul><li>Newmarket</li> <li>North York</li></ul></li>
                        <li><ul><li>Oakville</li> <li>Oshawa</li></ul></li>
                        <li><ul><li>Pickering</li> <li>Richmond Hill</li></ul></li>
                        <li><ul><li>Scarborough</li> <li>Toronto</li></ul></li>
                        <li><ul><li>Vaughan	</li> <li>Whitby</li></ul></li>
                        <li><ul><li>Woodbridge</li> <li>And everywhere in between</li></ul></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-7 col-sm-12">
                	<img src="img/mapSmall.jpg" alt="Area we Serve Map" title="Area We Serve" class="img-responsive areaMap center-block"/>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- Areas we serve end -->

<!-- Testimonials start -->
    <div class="testimonialsWide">
        <div class="container">
        	<div class="testimonials">
            <div class="row">
            	<div class="col-sm-12">
                	<div class="whyChoose">
                        <h2>WHY Choose Us</h2>
                        <p>30+ Years Experience</p>
                        <p>Hundreds of happy customers</p>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-sm-12">
                	<div class="testimonialSliderHolder">
                        <div id="testimonialSlider" class="testimonialSlider" data-pause="fulse">                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                            	<div class="col-sm-10 col-xs-10 center-block">
                            	<p><em>&quot;We found Broken Pipes Canada’s approach to be professional and reliable. They have been able to assist us in many ways and we will be calling upon them for future projects. In particular, their cleaning crew were detailed and conscientious with their approach.&quot;</em></p><br/>
                                <p> – <strong>Vivian Risi,</strong><em><small> Broker, Owner Royal Lepage</small></em></p>
                                </div>
                            </div>
                            <div class="item">
                            	<div class="col-sm-10 col-xs-10 center-block">
                                <p><em>&quot;I have been employing Broken Pipes Canada for both for my personal property and those of many of my clients for over 15 years. The response time, the efficiency and quality of work has been tremendous. I continue to use Broken Pipes Canada for my home and listings and would not hesitate to recommend them&quot;</em></p><br/>
                                <p> – <strong>Vesna Kolenc, </strong><em><small> Premier Sales Agent Re/Max Excellence Realty</small></em></p>
                                </div>
                            </div>
                            <div class="item">
                            	<div class="col-sm-10 col-xs-10 center-block">
                                <p><em>&quot;Broken Pipes Canada has provided a multitude of services for clients of mine for many years. I have used them for my personal projects and would not ever hesitate to recommend them. They provide a one stop shopping service, which is swift and organized.&quot;</em></p><br/>
                                <p>– <strong>Lillian Alexander, </strong><em><small> Sales Agent Coldwell Bankers</small></em></p>
                                </div>
                            </div>
                            <div class="item">
                            <div class="col-sm-10 col-xs-10 center-block">
                                <p><em>&quot;Broken Pipes Canada has always provided Simerra Management with excellent service in many capacities. They have provided emergency services and have ensured that our properties are well maintained. I recommend them highly. Especially for any general cleaning, electrical, plumbing and painting&quot;</em></p><br/>
                                <p> – <strong>Robin Rudolph, </strong><small></em> Property Manager Simerra Property Management Inc.</small></em></p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                        	<span class="fa fa-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                        	<span class="fa fa-chevron-right" aria-hidden="true"></span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- Testimonials end -->

</div>
<!-- Wrapper end -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<!-- Script equal height -->
<script src="js/equal-height.js"></script>
<!-- Script for custom -->
<script src="js/custom-script.js"></script>

</body>
</html>
