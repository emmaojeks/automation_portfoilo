<?php
require_once "_includes/companyDetails.php";
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
    <link rel="shortcut icon" href="<?= $favicon ?>">

    <?php include_once "_includes/jsonLd.php"; ?>

    <title><?php echo $websitetitle; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include_once "_includes/header.inc.php" ?>

    <main>
        <section class="my-intro py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-me">
                            <h2 class="mb-1 wow animate__animated animate__fadeInUp">About Me</h2>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Little Brief About
                                Myself</p>
                            <hr class="my-5 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mission-intro wow animate__animated animate__fadeInLeft">
                            <h2>My mission is to build solutions for businesses.</h2>
                            <div
                                class="about-img-1 position-relative wow animate__animated animate__fadeInUp rounded-circle">
                                <img src="assets/img/author.png" class="img-fluid h-100 w-100"
                                    style="object-fit: cover; border-radius: 5px" alt="">
                                <div class="me-pill left-pill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mission-intro wow animate__animated animate__fadeInRight">
                            <p>Most growing businesses don’t have an automation problem, they have a reliability
                                problem.
                                <br>
                                Leads get missed. Follow-ups break. Data gets duplicated. APIs fail silently. And small
                                operational issues slowly turn into lost revenue.
                                <br>
                                I design AI automation systems that remove these operational bottlenecks and protect
                                revenue.
                                <br>
                                Instead of building fragile workflows, I focus on creating fault-tolerant, self-running
                                systems that handle lead capture, qualification, notifications, follow-ups, and internal
                                operations, even when tools or APIs misbehave.
                                <br class="mt-1">
                                I work best with business owners who:</p>
                            <ul>
                                <li>Are already getting leads or customers</li>
                                <li>Are tired of manual processes and tool chaos</li>
                                <li>Want systems that scale without hiring more staff</li>
                            </ul>
                            <p>My approach is simple:</p>
                            <ul>
                                <li>Understand where revenue or time is being lost</li>
                                <li>Design a system that removes human dependency</li>
                                <li>Build it in a way that won’t break under real-world conditions</li>
                            </ul>
                            <p>If you’re looking for someone to “set up a few automations,” I’m probably not a fit.
                                If you want reliable AI systems that quietly run your operations, we should talk.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-none">
                    <div class="col-lg-5 d-flex">
                        <div
                            class="about-img-1 position-relative wow animate__animated animate__fadeInUp rounded-circle">
                            <img src="assets/img/author.png" class="img-fluid" alt="">
                            <div class="me-pill left-pill"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex">
                        <div class="about-img-1 position-relative wow animate__animated animate__fadeInUp"
                            data-wow-delay="0.2s">
                            <img src="assets/img/Vector.png" class="w-100" style="object-fit: cover;" alt="">
                            <div class="me-pill bottom-pill"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-social-links py-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-4">Follow me on:</h3>
                        <div class="d-flex justify-content-between wow animate__animated animate__fadeInUp">
                            <a href="https://x.com/emmaojeks">Twitter</a>
                            <a href="https://www.instagram.com/emmaojekstech/">Instagram</a>
                            <a href="https://www.linkedin.com/in/emmaojeks/">LinkedIn</a>
                            <a href="https://www.tiktok.com/@emmaojekstech">Tiktok</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once "_includes/footer.inc.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>