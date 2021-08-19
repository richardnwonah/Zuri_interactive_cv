
<?php

    require "includes/connection.inc.php";

    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        
    $sql = "INSERT INTO contact(name, email, message) VALUES ('$name', '$email', '$message')";

    $conn->query($sql);

        echo "<div id='messageBox'>Message submission successfull</div>";
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Richard Nwonah's Demo cv</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side">
                        <div class="profile-info">
                            <img src="assets/images/profile.jpg" alt="">
                            <h3>Richard Nwonah</h3>
                            <span>Software Developer</span>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                                +234 816 272 3338 <br>
                                +234 803 747 8545 
                            </div>
                        </div>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div class="detail">
                                nwonahr@gmail.com <br>
                                www.richardnwonah.heroku.com
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                First Floor,Vincent Plaza, Toranto, Canada
                            </div>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <ul class="row social-link no-margin">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-github"></i></li>
                        </ul>
                        <h4 class="ltitle">Referencess</h4>

                        <div class="refer-cov">
                            <b>Jonney Smith</b>
                            <p>CEO Casinocarol</p>
                            <span>p +00 890 1232 8767</span>
                        </div>
                        <div class="refer-cov">
                            <b>Jonney Smith</b>
                            <p>System Administrator</p>
                            <span>p +00 890 1232 8767</span>
                        </div>
                        <h4 class="ltitle">Hobbies</h4>
                        <ul class="hoby row no-margin">
                            <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                            <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                            <li><i class="fas fa-futbol"></i> <br> Football</li>
                            <li><i class="fas fa-film"></i><br> Movies</li>
                            <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                            <li><i class="fas fa-gamepad"></i> <br> Games</li>
                        </ul>

                        <div style="height: 430px;"></div>
                    </div>
                </div>
                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                        <div class="hotkey">
                            <h1 class="">Richard Nwonah </h1>
                            <small>Software Developer</small>
                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Profile</h2>
                        <div class="about">
                            <p>I am a WEB / SOFTWARE Developer ( PHP, MySQL, JavaScript, Angular JS, JQuery, Bootstrap, CSS, SQL Server, HTML, 
Java, C, C++, Python) with experience of working on a variety of web and software development projects. I work on 
all aspects of the development life cycle, applying my knowledge of OO PHP and MVC principles. Excellent 
communication skills and able to work alongside support. My past work includes building user-focused, dynamic, 
innovative and functional WEB/MOBILE AND WINDOWS softwares using responsive / adaptive / mobile-first design 
and development</p>
                            <div class="btn-ro row no-margin">
                                <ul class="btn-link">
                                    <li>
                                        <a href=""><i class="fas fa-paper-plane"></i> Contact Me</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Work Experiance</h2>
                        <div class="work-exp">
                            <h6>Junior Software Developer <span>2008-2011</span></h6>
                            <i>Microsoft / United States</i>
                            <ul>
                                <li><i class="far fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                <li><i class="far fa-hand-point-right"></i> Sorem dolor sit amet, consectetur. </li>
                                <li><i class="far fa-hand-point-right"></i> Porem ipsum sit amet, consectetur adipiscing </li>
                            </ul>
                        </div>
                        <div class="work-exp">
                            <h6>Junior Software Developer <span>2008-2011</span></h6>
                            <i>Microsoft / United States</i>
                            <ul>
                                <li><i class="far fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                
                                <li><i class="far fa-hand-point-right"></i> Sed cursus augue risus, ac semper est consectetur vitae </li>
                            </ul>
                        </div>
                        <div class="work-exp">
                            <h6>Junior Software Developer <span>2008-2011</span></h6>
                            <i>Microsoft / United States</i>
                            <ul>
                                <li><i class="far fa-hand-point-right"></i> Praesent consequat metus sit amet rhoncus luctus.

                                </li>
                                <li><i class="far fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur. </li>
                                
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6"><span>2018-2019</span> <br>
                                    A Level Certificate - Wellspring University</li>
                                <li class="col-md-6"><span>2019-2021</span> <br>
                                    In View B.S.C. - Wellspring University</li>
                               
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Skills</h2>
                        <div class="profess-cover row no-margin">
                            <div class="col-md-6">
                                <div class=" prog-row row">
                                    <div class="col-sm-6">
                                        DotNet & C#
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Laravel & PHP
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Web Design
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Dart & Flutter
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                           </div>
                                    <div>
                                    <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Contact Me</h2>
                                              <form action="" method="post"><br><br>
                                                <input name="name"  class="form-control m-0" placeholder="Company/Individual Name" type="text" required/><br><br>
                                                    <input name="email"   class="form-control m-0" placeholder="E-mail" type="text" email/><br><br>
                                                <textarea  placeholder="Messages"  class="form-control m-0" name="message" required></textarea><br><br>
                                                <input name="submit" value="submit" type="submit" class="btn btn-secondary btn-lg btn-block"/>
                                             </form>                                       
                                
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>





<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>
