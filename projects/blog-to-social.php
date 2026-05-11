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

    <title>Cold Email Automation - <?php echo $websitetitle; ?></title>

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
        <section class="project-details py-5">
            <div class="container">
                <div class="row mt-5 pt-5 mb-5">
                    <div class="col-lg-12">
                        <a href="../" class="premium-btn secondary-btn mb-4">
                            <i class="fa-solid fa-arrow-left"></i> Back to Automations
                        </a>
                        <h1 class="display-4 mb-3 wow animate__animated animate__fadeInUp">News to Social Posts</h1>
                        <p class="lead text-white wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                            A powerful tool that helps you create engaging social media posts from news articles.
                        </p>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="project-showcase mb-5 wow animate__animated animate__fadeInLeft">
                            <img src="<?= WEB_ROOT ?>assets/img/automation/cold-email.png" class="img-fluid rounded-4 shadow-lg border border-secondary" alt="Cold Email Automation Interface">
                        </div>

                        <div class="project-description wow animate__animated animate__fadeInUp">
                            <h3 class="mb-4">Overview</h3>
                            <p>This workflow helps you create engaging social media posts from news articles. It pulls each news article from the RSS feed, summarizes it using <strong>LLM</strong>, and creates a social media post from it. It saves the record in Airtable with the post status and message.</p>

                            <h3 class="mb-4 mt-5">Key Features</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>RSS Feed:</strong> Pulls each news article from the RSS feed.
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>Summarize using AI:</strong> Summarizes the news article using AI.
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>Generate Social Post:</strong> Generates a social media post from the summarized news article using AI.
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>Save to Airtable:</strong> Saves the record in Airtable with the post status and message.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="glass-card p-4 wow animate__animated animate__fadeInRight">
                            <h4 class="mb-4">Project Details</h4>

                            <div class="mb-4">
                                <h6 class="text-white text-uppercase small mb-2">Category</h6>
                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2">Automation</span>
                            </div>

                            <div class="mb-4">
                                <h6 class="text-white text-uppercase small mb-2">Technologies</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="skill-pill m-0">n8n</span>
                                    <span class="skill-pill m-0">LLM</span>
                                    <span class="skill-pill m-0">Wordpress</span>
                                    <span class="skill-pill m-0">Gemini API</span>
                                    <span class="skill-pill m-0">Airtable API</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="text-white text-uppercase small mb-2">Status</h6>
                                <div class="d-flex align-items-center gap-2 text-success">
                                    <i class="fa-solid fa-circle small"></i> Active
                                </div>
                            </div>

                            <hr class="border-secondary my-4">

                            <a href="#" class="premium-btn w-100 justify-content-center">
                                View Demo <i class="fa-solid fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once WEB_ROOT . "_includes/footer.inc.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>