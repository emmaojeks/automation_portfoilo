<?php
const WEB_ROOT = "../";
$assetsPath = "../";
require_once WEB_ROOT . "_includes/companyDetails.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <meta name="author" content="<?= $metaAuthor ?>">
    <meta name="keywords" content="<?= $metaKeywords ?>">

    <!-- OG Tags -->
    <meta property="og:title" content="<?= $ogTitle ?>">
    <meta property="og:description" content="<?= $ogDescription ?>">
    <meta property="og:type" content="<?= $ogType ?>">
    <meta property="og:site_name" content="<?= $ogSiteName ?>">
    <meta property="og:url" content="<?= $ogUrl ?>">
    <meta property="og:image" content="<?= $ogImage ?>">
    <meta property="og:image:alt" content="<?= $ogImageAlt ?>">

    <!-- Twitter Tags -->
    <meta name="twitter:title" content="<?= $twitterTitle ?>">
    <meta name="twitter:description" content="<?= $twitterDescription ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@<?= $twitterSite ?>">
    <meta name="twitter:url" content="<?= $twitterUrl ?>">
    <meta name="twitter:image" content="<?= $twitterImage ?>">

    <meta name="theme-color" content="<?= $themeColor ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= WEB_ROOT . $favicon ?>">

    <?php include_once WEB_ROOT . "_includes/jsonLd.php"; ?>
    
    <title><?php echo $websitetitle; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= WEB_ROOT ?>assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?= WEB_ROOT ?>assets/css/style.css">
</head>

<body>
    <?php include_once WEB_ROOT . "_includes/header.inc.php" ?>

    <main>
        <section class="my-intro py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="about-me">
                                <h2 class="mb-1 wow animate__animated animate__fadeInUp">My Work</h2>
                                <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Showcase About Works</p>
                            </div>
                            <div class="text-lg-end text-start">
                                <!-- <a href="../my-works.php" style="transform: translateY(45px);" class="premium-btn secondary-btn d-inline-block">View My Automations <i class="fa-solid fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                        <hr class="mb-5 mt-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    </div>
                </div>
                <div class="row mt-0">
                    <!-- Project 1 -->
                    <div class="col-lg-6">
                        <div class="project-card automation">
                            <div class="project-img">
                                <img src="<?= WEB_ROOT ?>assets/img/automation/linkedin-scraper.png" alt="Borrands">
                                <div class="project-overlay"></div>
                            </div>
                            <div class="project-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="project-meta">Automation</span>
                                    <a href="linkedin-search" target="_blank" rel="noopener noreferrer">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
                                    </a>
                                </div>
                                <h4>LinkedIn Search Automation</h4>
                                <p class="project-description">Lead generation</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-lg-6" data-wow-delay="0.1s">
                        <div class="project-card automation">
                            <div class="project-img">
                                <img src="<?= WEB_ROOT ?>assets/img/automation/reddit-lead-finder.png" alt="Toss Engineering">
                                <div class="project-overlay"></div>
                            </div>
                            <div class="project-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="project-meta">Automation</span>
                                    <a href="reddit-lead-finder" target="_blank" rel="noopener noreferrer">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
                                    </a>
                                </div>
                                <h4>Reddit Lead Finder</h4>
                                <p class="project-description">Lead generation</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-lg-6">
                        <div class="project-card automation">
                            <div class="project-img">
                                <img src="<?= WEB_ROOT ?>assets/img/automation/cold-email.png" alt="Cold Email">
                                <div class="project-overlay"></div>
                            </div>
                            <div class="project-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="project-meta">Automation</span>
                                    <a href="cold-email" target="_blank" rel="noopener noreferrer">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
                                    </a>
                                </div>
                                <h4>Cold Email</h4>
                                <p class="project-description">Cold Email System</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="col-lg-6">
                        <div class="project-card automation">
                            <div class="project-img">
                                <img src="<?= WEB_ROOT ?>assets/img/automation/web-tech-scanner.png" alt="Richesforever">
                                <div class="project-overlay"></div>
                            </div>
                            <div class="project-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="project-meta">Automation</span>
                                    <a href="website-tech-scanner" target="_blank" rel="noopener noreferrer">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
                                    </a>
                                </div>
                                <h4>Website Technology Scanner</h4>
                                <p class="project-description">Website Technology Scanner</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="project-card automation">
                            <div class="project-img">
                                <img src="<?= WEB_ROOT ?>assets/img/automation/blog-social.png" alt="Blog to Social">
                                <div class="project-overlay"></div>
                            </div>
                            <div class="project-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="project-meta">Automation</span>
                                    <a href="blog-to-social" target="_blank" rel="noopener noreferrer">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
                                    </a>
                                </div>
                                <h4>News to Social</h4>
                                <p class="project-description">Converts News articles to Social Posts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once WEB_ROOT . "_includes/footer.inc.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>