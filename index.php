<?php
  
    require "includes/connection.inc.php";

    if(isset($_POST["submit"]))
    {
        

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        
    $sql = "INSERT INTO contact(name, subject, email, message) VALUES ('$name', '$subject', '$email', '$message')";

    $conn->query($sql);
 
        echo "<script>alert('Message submission successfull')</script>";
    }
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
<!-- Mirrored from demo.deviserweb.com/cv/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Aug 2021 08:07:05 GMT -->
<head>
        <meta charset="utf-8">
        
        <!-- TITLE OF SITE-->
        <title> Richard Nwonah </title>
        
        <!-- META TAG -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CV, Portfolio, Resume">
        <meta name="author" content="Md. Siful Islam, Desiver Web">
        
        <!-- FAVICON -->
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon-76x76.html">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">

        <!-- ========================================
                Stylesheets
        ==========================================--> 
        
        <!-- MATERIALIZE CORE CSS -->
        <link href="assets/css/materialize.min.css" rel="stylesheet">
        

        <!-- ADDITIONAL CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
        

        <!--FONTAWESOME CSS-->
        <link href="assets/icons/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
        

        <!-- CUSTOM STYLE -->
        <link href="assets/css/style.css" rel="stylesheet">
        

        <!-- RESPONSIVE CSS-->
        <link href="assets/css/responsive.css" rel="stylesheet">

        <!-- COLORS -->        
        <link rel="alternate stylesheet" href="assets/css/colors/red.css" title="red">
        <link rel="alternate stylesheet" href="assets/css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="assets/css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="assets/css/colors/green.css" title="green">
        <link rel="stylesheet" href="assets/css/colors/lime.css" title="lime">

        
        <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
        <link rel="stylesheet" href="assets/css/demo.css">
        
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif] -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <!-- Start Container-->
        <div class="container">
            <!-- row -->
            <div class="row">
            <!-- =========================================
                           SIDEBAR   
            ==========================================-->
                <!-- Start Sidebar -->
                <aside class="col l4 m12 s12 sidebar z-depth-1" id="sidebar">
                    <!--  Sidebar row -->
                    <div class="row">                      
                        <!--  top section   -->
                        <div class="heading">                            
                            <!-- ====================
                                      IMAGE   
                            ==========================-->
                            <div class="feature-img">
                                <a href="index-2.html"><img src="assets/images/profile-img.jpg" class="responsive-img" alt=""></a> 
                            </div>                            
                            <!-- =========================================
                                       NAVIGATION   
                            ==========================================-->
                            <div class=" nav-icon">
                                <nav>
                                    <div class="nav-wrapper">
                                      <ul id="nav-mobile" class="side-nav">                                  
                                        <li><a href="index-2.html">Resume</a></li>                                        
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="cover-latter.html">Cover Latter</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                      </ul>
                                      <a href="#" data-activates="nav-mobile" class="button-collapse  "><i class="mdi-navigation-menu"></i></a>
                                    </div>
                                </nav>
                            </div>                            
                            <!-- ========================================
                                       NAME AND TAGLINE
                            ==========================================-->
                            <div class="title col s12 m12 l9 right  wow fadeIn" data-wow-delay="0.1s">   
                                <h2>Richard Nwonah</h2> <!-- title name -->
                                <span>Software Developer</span>  <!-- tagline -->
                            </div>                         
                        </div>
                         <!-- sidebar info -->
                        <div class="col l12 m12 s12 sort-info sidebar-item">
                            <div class="row">                               
                                <div class="col m12 s12 l3 icon"> <!-- icon -->
                                   <i class="fa fa-user"></i>
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a1" data-wow-delay="0.1s" > <!-- text -->
                                    <div class="section-item-details">
                                        <p>I am a WEB / SOFTWARE Developer ( PHP, C#, Dart, SQL, JavaScript 
                                        ) with experience of working on a variety of web and software development projects.</p>
                                    </div>             
                                </div>
                            </div>         
                        </div>
                        <!-- MOBILE NUMBER -->
                        <div class="col l12 m12 s12  mobile sidebar-item">
                            <div class="row">                                
                                <div class="col m12 s12 l3 icon">
                                    <i class="fa fa-phone"></i> <!-- icon -->
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a2" data-wow-delay="0.2s" >
                                    <div class="section-item-details">
                                        <div class="personal">
                                            <h4><a href="tel:+234-816-272-3338">+234-816-272-3338</a></h4> <!-- Number -->             
                                            <span>mobile</span> 
                                        </div>
                                        <div class="work">
                                            <h4><a href="tel:+234-816-272-3338">+234-816-272-3338</a></h4> <!-- Number -->
                                            <span>work</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>             
                        </div>
                        <!--  EMAIL -->
                        <div class="col l12 m12 s12  email sidebar-item ">
                            <div class="row">                                
                                <div class="col m12 s12 l3 icon">
                                    <i class="fa fa-envelope"></i> <!-- icon -->
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a3" data-wow-delay="0.3s">
                                    <div class="section-item-details">
                                        <div class="personal">                                    
                                            <h4><a href="mailto:someone@example.com">nwonahr@gmail.com</a></h4> <!-- Email -->
                                            <span>personal</span> 
                                        </div>
                                        <div class="work">                                 
                                            <h4><a href="mailto:someone@example.com">richardnwonah@outlook.com</a></h4> <!-- Email -->
                                            <span>work</span> <br>
                                        </div>
                                    </div>
                                </div> 
                            </div>          
                        </div>
                        <!-- ADDRESS  -->
                        <div class="col l12 m12 s12  address sidebar-item ">
                            <div class="row">                                
                                <div class="col l3 m12  s12 icon">
                                    <i class="fa fa-home"></i> <!-- icon -->
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a4" data-wow-delay="0.4s">
                                    <div class="section-item-details">
                                        <div class="address-details"> <!-- address  -->
                                            <h4>Lagos <span>Ijegun</span><br>
                                            
                                            <span>Chief Opogah Street</span></h4> 
                                        </div>                         
                                    </div>
                                </div>
                            </div>            
                        </div>
                        <!-- SKILLS -->
                        <div class="col l12 m12 s12  skills sidebar-item" >
                            <div class="row">
                                <div class="col m12 l3 s12 icon">
                                    <i class="fa fa-calendar-o"></i> <!-- icon -->
                                </div>
                                 <!-- Skills -->
                                <div class="col m12 l9 s12 skill-line a5 wow fadeIn" data-wow-delay="0.5s">
                                    <h3>Professional Skills </h3>
                                    
                                    <span>C# & Dotnet</span>                                    
                                    <div class="progress">
                                        <div class="determinate"> 80% </div>
                                    </div>
                                    
                                    <span>PHP & Laravel</span>
                                    <div class="progress">
                                        <div class="determinate"> 95%</div>
                                    </div>
                                    
                                    <span>Go Lang</span>
                                    <div class="progress">
                                        <div class="determinate">90%</div>
                                    </div>

                                    <span>SQL</span>
                                    <div class="progress">
                                        <div class="determinate">85%</div>
                                    </div>

                                    <span>Dart & Flutter</span>
                                    <div class="progress">
                                        <div class="determinate">70%</div>
                                    </div>

                                    <span>HTML & CSS</span>
                                    <div class="progress">
                                        <div class="determinate">90%</div>
                                    </div>
                                    <span> Javescript & Jquery</span>
                                    <div class="progress">
                                        <div class="determinate">50%</div>
                                    </div>
                                    <span>Figma</span>
                                    <div class="progress">
                                        <div class="determinate">50%</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>   <!-- end row -->
                </aside><!-- end sidebar -->

                <!-- =========================================
                   Work experiences
                ==========================================-->

                <section class="col s12 m12 l8 section">
                    <div class="row">
                        <div class="section-wrapper z-depth-1">                            
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s">
                                <h2>Work Experience</h2>

                                <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="0.2s">
                                    <h3>Back End Developer <span>@Erbaver</span></h3>
                                    <span>May 2019 - PERSENT </span>
                                    <p>Building and deploying server side apps(REST APIs and Web sites) for clients with ASP.NET core and C#. </p>
                                </div>
                                <div class="custom-content-wrapper wow fadeIn a3" data-wow-delay="0.3s">
                                    <h3>Ambassabor <span>@DotVVM</span></h3>
                                    <span>JAN 2020 - PERSENT </span>
                                    <p>Support and spreading the dotVVM design pattern and promoting the community. </p>
                                </div>
                                <div class="custom-content-wrapper wow fadeIn a4" data-wow-delay="0.4s">
                                    <h3>Full Stack Developer <span>@Ovid Inquire</span></h3>
                                    <span>DEC 2020 - PRESENT </span>
                                    <p>Building and deployment of Ovid communication platform. </p>
                                </div>
                            </div>                            
                        </div>

                        <!-- ========================================
                         Education 
                        ==========================================-->

                        <div class="section-wrapper z-depth-1">
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s" >
                                <h2>Education </h2>
                                
                                <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="0.2s" >
                                    <h3>A-Level Certificate <span>@Wellspring University</span></h3>
                                    <span>SEP 2018 - SEP SEP 2019 </span>
                                    <p>Recived my JUPEB certificate through Wellspring University, Edo State, Nigeria . </p>
                                </div>
                                <div class="custom-content-wrapper wow fadeIn a3" data-wow-delay="0.3s" >
                                    <h3>In View BSC Computer Science <span>@Lorem</span></h3>
                                    <span>SEP 2019 - DEC 2022 </span>
                                    <p>Currently Studing Computer Science in Wellspring University, Edo State, Nigeria . </p>
                                </div>
                                
                            </div>
                        </div>

                        <!-- ========================================
                              Intertests 
                        ==========================================-->

                        <div class="section-wrapper z-depth-1">                           
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-plane"></i>
                            </div>
                            <div class="interests col s12 m12 l10 wow fadeIn" data-wow-delay="0.1s"> 
                                <h2>Interestes </h2>
                                <ul> <!-- interetsr icon start -->
                                    <li><i class="fa fa-camera-retro tooltipped" data-position="top" data-delay="50" data-tooltip="Photography"></i></li>
                                    <li><i class="fa fa-glass tooltipped" data-position="top" data-delay="50" data-tooltip="Drinking"></i></li>
                                    <li><i class="fa fa-headphones tooltipped" data-position="top" data-delay="50" data-tooltip="Music"></i></li>
                                    <li><i class="fa fa-comments tooltipped" data-position="top" data-delay="50" data-tooltip="Chatting"></i></li>
                                    <li><i class="fa fa-coffee tooltipped" data-position="top" data-delay="50" data-tooltip="Coffee"></i></li>
                                </ul> <!-- interetsr icon end -->
                            </div>                          
                        </div>
                        <div class="section-wrapper z-depth-1">                            
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s">

                                 <!--=======================================
                         Contact
                        ==========================================-->
                                
                                <h2>Contact</h2>                                
                                <div class="contact-form" id="contact">   
                                    <div class="row">                                   
                                        <form role="form"  action="" method="POST">
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="input-field col s12">
                                                <label for="name" class="h4">Name *</label>
                                                <input type="text" class="form-control validate" name="name" id="name" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="input-field col s12">
                                                <label for="email" class="h4">Email *</label>
                                                <input type="email" class="form-control validate" name="email" id="email"  email>                
                                            </div>
                                            <div class="input-field col s12">
                                                <label for="email" class="h4">Subject *</label>
                                                <input type="text" class="form-control validate" name="subject" id="name" required>                
                                            </div>
                                            <div class="input-field col s12">
                                                <label for="message" class="h4 ">Message *</label>
                                                <textarea name="message" id="message" class="form-control materialize-textarea validate" required></textarea>           
                                            </div>
                                            <input  name="submit" type="submit" id="form-submit"id="submit" class="btn btn-success" value="submit">
                                            <div class="clearfix"></div>                                
                                        </form>                                     
                                    </div> 
                                </div>
                            </div>                            
                         </div>
                        
                        <!-- =======================================
                          portfolio Website
                        ==========================================-->

                        <div class="section-wrapper z-depth-1 wow fadeIn" data-wow-delay="0.1s">                            
                            <div class="col s12 m12 l10 website right" >
                                <div class="row">
                                    <div class="col s12 m12 l6">
                                       <span><a href="#">www.richardnwonah.herokuapp.com</a></span>
                                    </div>
                                    <div class="col col s12 m12 l6">
                                        <span><a href="#">www.dribble.com/rtralrayhan</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </section><!-- end section -->
            </div> <!-- end row -->
        </div>  <!-- end container -->
        
 <!--=====================
                JavaScript
        ===================== -->
        <!-- Jquery core js-->
        <script src="assets/js/jquery.min.js"></script>
        
        <!-- materialize js-->
        <script src="assets/js/materialize.min.js"></script>
        
        <!-- wow js-->
        <script src="assets/js/wow.min.js"></script>
        
        <!-- Map api -->
        <script src="http://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        
        <!-- Masonry js-->
        <script src="assets/js/masonry.pkgd.js"></script>

        <script src="assets/js/validator.min.js"></script>
        
        <!-- Customized js -->
        <script src="assets/js/init.js"></script>
    
        <!-- =========================================================
            STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
        ===========================================================-->
        
        <!-- Style switter js -->
        <script src="assets/js/styleswitcher.js"></script>
        
        <div class="cv-style-switch" id="switch-style">
            <a id="toggle-switcher" class="switch-button icon_tools"> <i class="fa fa-cogs"></i></a>
            <div class="switched-options">                
                <div class="config-title">
                    Colors :
                </div>
                <ul class="styles">
                    <li><a href="index-2.html#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
                    <div class="red"></div>
                    </a></li>                    
                    
                    <li><a href="index-2.html#" onclick="setActiveStyleSheet('purple'); return false;" title="purple">
                    <div class="purple"></div>
                    </a></li>

                    <li><a href="index-2.html#" onclick="setActiveStyleSheet('orange'); return false;" title="orange">
                    <div class="orange"></div>
                    </a></li>
                    
                    <li><a href="index-2.html#" onclick="setActiveStyleSheet('green'); return false;" title="green">
                    <div class="green"></div>
                    </a></li>
                    
                    <li><a href="index-2.html#" onclick="setActiveStyleSheet('lime'); return false;" title="lime">
                    <div class="lime"></div>
                    </a></li>

                    <li class="p">
                        ( NOTE: Pre Defined Colors. You can change colors very easily )
                    </li>
                </ul>
            </div>
        </div>

    </body>

<!-- Mirrored from demo.deviserweb.com/cv/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Aug 2021 08:07:23 GMT -->
</html>
