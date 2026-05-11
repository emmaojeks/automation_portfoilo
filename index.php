<?php
$assetsPath = '';
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
        <!-- Hero Section -->
        <section class="hero-sect d-flex align-items-center justify-content-center text-center">
            <div class="hero-bg-anim"></div>
            <div class="container position-relative z-1">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="mt-5"> AI & Automation Specialist</h1>
                        <p class="hero-value" data-wow-delay="0.1s">
                            I design AI systems that remove operational bottlenecks and prevent revenue leakage.
                        </p>
                        <div class="d-flex justify-content-center gap-3" data-wow-delay="0.2s">
                            <a href="#projects" class="premium-btn">Explore My Work <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="creative-core-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <span class="text-white">About me section <i class="fa-solid fa-arrow-right ms-2"></i></span>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="display-4 mb-5">Inside My <span class="text-white-50">Creative Core</span></h2>
                        <p class="text-white mb-4 fs-5">
                            I design <span class="highlight-box">AI automation systems</span> that remove operational
                            friction and protect revenue.
                            <br>
                            I help businesses replace fragile, manual workflows with reliable systems that capture
                            leads, follow up automatically, and keep operations running without constant intervention.
                            <br>
                            My focus isn’t tools, it’s building systems that work in real-world conditions.
                        </p>
                        <p class="text-white mb-5">
                            I enjoy <span class="highlight-box text-dark bg-warning">collaborating with teams</span>,
                            <span class="highlight-box text-dark bg-white">solving real-world</span> challenges, and
                            transforming complex ideas into intelligent systems and visually compelling experiences.
                        </p>
                        <a href="about" class="premium-btn mb-5">See more<i
                                class="fa-solid fa-right-long"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <span class="text-white">What I do <i class="fa-solid fa-arrow-right ms-2"></i></span>
                    </div>
                </div>
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="service-block">
                            <h3>1. AI Automation & Workflows</h3>
                            <ul>
                                <li>Business process automation using n8n, Make.com, and Zapier</li>
                                <li>Workflow design with error handling, real-time monitoring & analytics</li>
                                <li>API Integrations, webhooks & CRM connectivity (HubSpot, GHL, Pipedrive)</li>
                                <li>Intelligent assistants & chatbots powered by OpenAI / LangChain</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-block">
                            <h3>2. AI Engineering & System Design</h3>
                            <ul>
                                <li>Building and deploying LLM powered automation systems and chat assistants</li>
                                <li>Experimenting with prompt engineering and fine-tuning generative AI models</li>
                                <li>Integrating REST APIs, vector databases, and LangChain pipelines</li>
                                <li>Developing scalable architectures for real-time processing and data flow</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none">
                        <div class="service-block">
                            <h3>3. AI Filmmaking & Creative Media</h3>
                            <ul>
                                <li>Cinematic storytelling using Runway Gen-2/3, LumaLabs AI, Pika Labs</li>
                                <li>Creative direction & scoring with Udio, Suno AI, and Play.ht</li>
                                <li>Script-to-screen pipelines combining voice, motion, and scene generation</li>
                                <li>Photorealistic film production for advertising and branded content</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tools & Certifications Section -->
        <section class="tools-certs p-5 bg-black">
            <div class="container">
                <div class="row">
                    <!-- Tools -->
                    <div class="col-lg-7">
                        <span class="text-white mb-4 d-block">My Toolset <i
                                class="fa-solid fa-arrow-right ms-2"></i></span>

                        <div class="tool-grid">
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <img src="assets/img/n8n-color.svg" alt="n8n" style="height: 25px;">
                                </div>
                                <span class="tool-name">n8n</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <span style="font-weight: 900; color: #fff;">M</span>
                                </div>
                                <span class="tool-name">Make.com</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <span class="tool-name">Custom Code</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <i class="fa-brands fa-js"></i>
                                </div>
                                <span class="tool-name">JavaScript</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <i class="fa-brands fa-python"></i>
                                </div>
                                <span class="tool-name">Python</span>
                            </div>
                        </div>
                        <div class="tool-grid">
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <i class="fa-brands fa-slack"></i>
                                </div>
                                <span class="tool-name">Slack</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <img src="assets/img/openai.svg" alt="n8n" style="height: 25px;">
                                </div>
                                <span class="tool-name">Chatgpt</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <i class="fa-solid fa-robot"></i>
                                </div>
                                <span class="tool-name">Runway ML</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <img src="assets/img/claude-color.svg" alt="n8n" style="height: 25px;">
                                </div>
                                <span class="tool-name">Claude</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <span class="tool-name">GitHub</span>
                            </div>
                            <div class="tool-item">
                                <div class="tool-icon">
                                    <img src="assets/img/gemini-color.svg" alt="n8n" style="height: 25px;">
                                </div>
                                <span class="tool-name">Gemini</span>
                            </div>
                        </div>
                    </div>

                    <!-- Certifications -->
                    <div class="col-lg-4 offset-lg-1 mt-5 mt-lg-0">
                        <span class="text-white mb-4 d-block">Achievements & Awards <i
                                class="fa-solid fa-arrow-right ms-2"></i></span>

                        <h4 class="mb-4">Certificates & Recognition</h4>

                        <div class="cert-list">
                            <div class="cert-item">
                                <span class="cert-name">Oracle Generative AI Certification</span>
                                <span class="cert-year">2023</span>
                            </div>
                            <div class="cert-item">
                                <span class="cert-name">Career Essentials in Generative AI</span>
                                <span class="cert-year">2023</span>
                            </div>
                            <div class="cert-item">
                                <span class="cert-name">Introduction to Artificial Intelligence</span>
                                <span class="cert-year">2024</span>
                            </div>
                            <div class="cert-item">
                                <span class="cert-name">AI & Filmmaking Recognition</span>
                                <span class="cert-year">2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include_once "_includes/footer.inc.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>