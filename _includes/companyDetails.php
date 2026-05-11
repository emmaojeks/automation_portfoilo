<?php
$companyName = "Emmatech";
$companyEmail = "company.emmatech@gmail.com";
$companyPhone = " +2349063982322";
$companyAddress = "6671 Camino Montego Carlsbad, CA 92009, USA";
$favicon = "assets/img/favicon.png";
$websitetitle = "Web Developer & Automation Expert | Emmatech";


// Metadata for the website
$metaDescription = "Professional web developer in Nigeria specializing in custom websites, UI/UX design, AI automation, and n8n workflows that help businesses work smarter and grow faster.";
// This description is used by search engines and social media platforms to summarize the content of the page
$metaKeywords = "web developer in Nigeria,
professional web developer,
website design for small businesses,
custom website development,
UI/UX designer Nigeria,
AI automation expert,
business automation services,
n8n automation specialist,
workflow automation for businesses,
WhatsApp chatbot developer,
AI agent developer,
PHP developer Nigeria,
JavaScript developer Nigeria,
automation engineer Nigeria,
modern website development,
small business web solutions,
process automation for companies,
digital transformation services
";
$metaAuthor = "{$companyName} Team";
$metaRobots = "index, follow"; // Default robots meta tag
$themeColor = "#007bff"; // Theme color for the website, used in browser address bar and mobile devices
// This meta tag allows search engines to index the page and follow links

//OG Tags
$ogTitle = "Web Developer & Automation Expert | Emma Ojekhide";
$ogDescription = "Custom websites, AI automation, and n8n workflows that help businesses streamline operations and grow faster.";
// This description is used by social media platforms to summarize the content of the page
$ogImage = "https://emmatech.online/assets/img/white-logo.png"; // URL to the image used for social media sharing
$ogUrl = "https://emmatech.online"; // URL of the page
$ogType = "website"; // Type of the Open Graph object
$ogSiteName = "Emma Ojeks Portfolio"; // Name of the website
$ogLocale = "en_US"; // Locale of the Open Graph object
$ogImageAlt = ""; // Alternative text for the Open Graph image
// This is used to specify the language and region of the content

// Twitter Tags
$twitterTitle = "Web Developer & Automation Expert | Emma Ojekhide";
$twitterDescription = "Professional web development, AI automation, and n8n workflow solutions for modern businesses.";
// This description is used by Twitter to summarize the content of the page
$twitterImage = "https://emmatech.online/assets/img/white-logo.png"; // URL to the image used for Twitter sharing
$twitterCard = "summary_large_image"; // Type of Twitter card to use
$twitterSite = removeSpaces($companyName); // Twitter handle of the site

// Function to remove spaces from the middle of a string
$twitterUrl = "https://emmatech.online"; // URL of the page
// This specifies the type of Twitter card to use, such as "summary", "summary_large_image", "app", or "player"
function removeSpaces($string) {
    return str_replace(' ', '', $string);
}