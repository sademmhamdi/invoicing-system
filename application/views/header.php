<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary SEO -->
    <meta name="description" content="<?= isset($meta_description) ? $meta_description : 'UAE invoicing & billing software — FTA/EmaraTax‑compliant, bilingual (Arabic/English), VAT 5% ready. Create invoices, automate payment reminders, manage recurring billing & calendar, run VAT reports, and accept online payments via Stripe, PayTabs, Telr. Built for SMBs and enterprises across the UAE.' ?>">
    <meta name="keywords" content="e-invoicing UAE, UAE invoicing software, VAT billing software UAE, FTA compliant invoicing, EmaraTax UAE, bilingual billing software, UAE VAT invoice system, invoicing software for SMEs in UAE">
    <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">

    <!-- ========== Page Title ========== -->
    <title><?= isset($page_title) ? $page_title : 'UAE Invoicing & Billing Software | FTA/EmaraTax Compliant | Arabic‑English' ?></title>

    <!-- Canonical & Hreflang (edit URLs to your live routes) -->
    <link rel="canonical" href="<?= base_url() ?>">
    <link rel="alternate" href="<?= base_url() ?>" hreflang="en">
    <link rel="alternate" href="<?= base_url('ar/') ?>" hreflang="ar">
    <link rel="alternate" href="<?= base_url() ?>" hreflang="x-default">

    <!-- Open Graph -->
    <meta property="og:title" content="UAE Invoicing & Billing Software | FTA/EmaraTax Compliant | Arabic‑English">
    <meta property="og:description" content="Bilingual UAE invoicing system with VAT 5% compliance, automated reminders, recurring billing, VAT reports & local payment gateways.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:image" content="<?= base_url('assets/img/og-cover.jpg') ?>">
    <meta property="og:locale" content="en_AE">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="UAE Invoicing & Billing Software | FTA/EmaraTax Compliant">
    <meta name="twitter:description" content="Arabic/English invoicing, VAT 5%, EmaraTax ready, automated reminders, recurring billing & VAT reports.">
    <meta name="twitter:image" content="<?= base_url('assets/img/og-cover.jpg') ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/apple-touch-icon.png') ?>">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/elegant-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/flaticon-set.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.theme.default.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/animate.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/helper.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/validnavs.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/flags.css') ?>" rel="stylesheet" />
    
    <!-- ========== End Stylesheet ========== -->

    <!-- JSON-LD: Comprehensive Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "LocalBusiness",
          "@id": "https://invoicing.amaziverse.io/#organization",
          "name": "Amaziverse Invoicing UAE",
          "url": "https://invoicing.amaziverse.io/",
          "logo": "https://invoicing.amaziverse.io/logo.png",
          "description": "Amaziverse is a UAE-based software company offering a bilingual cloud invoicing platform compliant with FTA (EmaraTax) requirements.",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dubai",
            "addressCountry": "AE"
          },
          "telephone": "+971-52-556-6168",
          "email": "info@amaziverse.ae",
          "areaServed": "AE",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "sales",
            "telephone": "+971-52-556-6168",
            "email": "support@amaziverse.io",
            "areaServed": ["AE"],
            "availableLanguage": ["en", "ar"]
          }
        },
        {
          "@type": "SoftwareApplication",
          "@id": "https://invoicing.amaziverse.io/#product",
          "name": "Amaziverse Invoicing UAE",
          "applicationCategory": "BusinessApplication",
          "applicationSubCategory": "Invoicing Software",
          "operatingSystem": "Web",
          "description": "Amaziverse Invoicing UAE is a bilingual (Arabic/English) cloud-based billing software tailored for UAE businesses. It automates 5% VAT calculations, ensures FTA compliance, supports recurring invoices, and integrates with local payment gateways for seamless e-invoicing.",
          "provider": {
            "@id": "https://invoicing.amaziverse.io/#organization"
          },
          "offers": {
            "@type": "Offer",
            "url": "https://invoicing.amaziverse.io/pricing",
            "priceCurrency": "AED",
            "price": "99",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "price": "99",
              "priceCurrency": "AED",
              "billingDuration": "P1M",
              "unitCode": "MON"
            },
            "availability": "https://schema.org/InStock"
          }
        }
      ]
    }
    </script>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
</head>

<body>
    <!-- Start Preloader 
    ============================================= -->
    <div id="preloader">
        <div id="softing-preloader" class="softing-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="I" class="letters-loading">I</span>
                    <span data-text-preloader="N" class="letters-loading">N</span>
                    <span data-text-preloader="V" class="letters-loading">V</span>
                    <span data-text-preloader="O" class="letters-loading">O</span>
                    <span data-text-preloader="I" class="letters-loading">I</span>
                    <span data-text-preloader="C" class="letters-loading">C</span>
                    <span data-text-preloader="I" class="letters-loading">I</span>
                    <span data-text-preloader="N" class="letters-loading">N</span>
                    <span data-text-preloader="G" class="letters-loading">G</span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars" aria-hidden="true"></i><span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url() ?>" aria-label="Amaziverse Invoicing Home">
                        <img src="<?= base_url('assets/img/logo1.png') ?>" class="logo" alt="UAE invoicing software logo (FTA/EmaraTax compliant)">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <img src="<?= base_url('assets/img/logo1.png') ?>" alt="Amaziverse Invoicing brand mark">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">Close navigation</span>
                    </button>
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a class="smooth-menu" href="<?= base_url() ?>">Home</a></li>
                        <li><a class="smooth-menu" href="#features">Features</a></li>
                        <li><a class="smooth-menu" href="#overview">Overview</a></li>
                        <li><a class="smooth-menu" href="#pricing">Pricing</a></li>
                        <li><a class="smooth-menu" href="#blog">Blog</a></li>
                        <li><a class="smooth-menu" href="#contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Attribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button">
                                <a href="#pricing" aria-label="Start free trial">Start Free Trial</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Attribute Navigation -->
                </div>
                <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Language Toggle -->
    <div class="language-toggle" id="languageToggle">
        <div class="flag uae" id="languageFlag" title="Switch Language"></div>
    </div>
    <!-- End Language Toggle -->
