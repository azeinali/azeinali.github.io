<?php
include_once "controllers/connection.php";

$General_info = getGeneralinfo($con);
$EXP = getExperiences($con);
$EDU = getEducations($con);
$SKL = getskills($con);
$AWZ = getAwards($con);
$INT = getInterests($con);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script crossorigin="anonymous" src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?=$General_info['fullname'];?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?=$General_info['profilepic'];?>" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0"><?=$General_info['fullname'];?></h1>
                    <div class="subheading mb-5"><?=$General_info['address'];?> . <?=$General_info['mobile'];?>
                        <a href="mailto:<?=$General_info['email'];?>"><?=$General_info['email'];?></a>
                    </div>
                    <p class="lead mb-5"><?=$General_info['about'];?></p>
                    <div class="social-icons">
                        <?php if($General_info['twitter'] != ''): ?>
                        <a href="<?=$General_info['twitter'];?>">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <?php endif; ?>
                        <?php if($General_info['facebookid'] != ''): ?>
                        <a href="<?=$General_info['facbookid'];?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <?php endif; ?>
                        <?php if($General_info['instagram'] != ''): ?>
                            <a href="<?=$General_info['instagram'];?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
                <div class="w-100">
                    <h2 class="mb-5">Experience</h2>
                   <?php foreach($EXP as $expItem): ?>
                    <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                        <div class="resume-content">
                            <h3 class="mb-0"><?=$expItem['title'];?></h3>
                            <div class="subheading mb-3"><?=$expItem['subtitle'];?></div>
                            <p><?=$expItem['content'];?></p>
                            <a href="<?=$expItem['link'];?>"><?=$expItem['link'];?>
                            </a>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="text-primary"><?=$expItem['fromDate'];?> - <?=$expItem['toDate'];?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </section>

            <hr class="m-0">
            <!-- education-->
            <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
                <div class="w-100">
                    <h2 class="mb-5">education</h2>
                    <?php foreach($EDU as $eduItem): ?>
                        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                            <div class="resume-content">
                                <h3 class="mb-0"><?=$eduItem['tile'];?></h3>
                                <div class="subheading mb-3"><?=$eduItem['subTitle'];?></div>
                                <p><?=$eduItem['content'];?></p>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="text-primary"><?=$eduItem['fromDate'];?> - <?=$eduItem['toDate'];?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </section>
            <hr class="m-0" />
            <!--skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">skills</h2>
                    <ul class="fa-ul mb-0">
                        <?php foreach($SKL as $sklItem): ?>
                            <li>
                                <i class="fa-li fa fa-check"></i>
                              <?=$sklItem['title'];?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

            </section>
            <hr class="m-0" />

            <!-- Interests-->
                </div>
                <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="interests">
                    <div class="w-100">
                        <h2 class="mb-5">Interests</h2>
                        <?php foreach($INT as $intItem): ?>
                            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                                <div class="resume-content">
                                    <h3 class="mb-0"><?=$intItem['tile'];?></h3>
                                    <div class="subheading mb-3"><?=$intItem['subTitle'];?></div>
                                    <p><?=$intItem['content'];?></p>
                                </div>
                                <div class="flex-shrink-3000">

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <?php foreach($AWZ as $awzItem): ?>
                            <?php
                        $className = 'fa fa-trophy';
                        $classColor = 'orange';
                              if($awzItem['type'] != 'award'){
                                  $className = 'fa fa-certificate';
                                  $classColor = 'red';
                              }
                             ?>
                            <li>
                                <i style="color: <?=$classColor;?> !important;" class="fa-li fa <?=$className;?> text-warning"></i>
                                <?=$awzItem['tile'];?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
