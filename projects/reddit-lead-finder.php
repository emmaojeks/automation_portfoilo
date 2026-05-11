<?php
$assetsPath = "../";
const WEB_ROOT = "../";
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

    <title>Reddit Lead Qualification Automation - <?php echo $websitetitle; ?></title>

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
                        <h1 class="display-4 mb-3 wow animate__animated animate__fadeInUp">Reddit Lead Qualification Automation</h1>
                        <p class="lead text-white wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                            A powerful tool to streamline your Reddit lead qualification.
                        </p>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="project-showcase mb-5 wow animate__animated animate__fadeInLeft">
                            <img src="<?= WEB_ROOT ?>assets/img/automation/reddit-lead-finder.png" class="img-fluid rounded-4 shadow-lg border border-secondary" alt="Reddit Lead Qualification Automation Interface">
                            <img src="<?= WEB_ROOT ?>assets/img/automation/reddit-lead-finder-proof.png" class="img-fluid mt-3 rounded-4 shadow-lg border border-secondary" alt="Reddit Lead Qualification Automation Interface">
                        </div>

                        <div class="project-description wow animate__animated animate__fadeInUp">
                            <h3 class="mb-4">Overview</h3>
                            <p>This n8n workflow automatically monitors Reddit for new discussions about <strong>n8n</strong> and identifies <strong>potential leads</strong> using AI.</p>

                            <p>It classifies each post based on how well it matches the target customer profile for AI automation services, then saves results into Google Sheets for follow-up.</p>

                            <h3 class="mb-4 mt-5">Key Features</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>Fetch Latest Posts:</strong> Calls Reddit’s <code>/r/n8n/new.json</code> endpoint to collect the 10 newest posts in the n8n community.
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>Extract Data:</strong> Extracts key profile details such as name, title, company, and location.
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start gap-3">
                                    <i class="fa-solid fa-check text-primary mt-1"></i>
                                    <div>
                                        <strong>AI Evaluation (LLM Chain):</strong> Uses an LLM chain to evaluate each post based on how well it matches the target customer profile for AI automation services.
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
                                    <!-- <span class="skill-pill m-0">Python</span> -->
                                    <span class="skill-pill m-0">Reddit API</span>
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