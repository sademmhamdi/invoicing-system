<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary SEO -->
    <meta name="description" content="<?= isset($meta_description) ? $meta_description : 'برنامج الفواتير والمحاسبة في الإمارات — متوافق مع الهيئة الاتحادية للضرائب/إمارة تاكس، ثنائي اللغة (عربي/إنجليزي)، جاهز لضريبة القيمة المضافة 5%. إنشاء فواتير، تذكير تلقائي للدفع، إدارة الفواتير المتكررة والتقويم، تقارير ضريبة القيمة المضافة، وقبول المدفوعات عبر الإنترنت عبر Stripe وPayTabs وTelr. مصمم للشركات الصغيرة والمتوسطة والمؤسسات في جميع أنحاء دولة الإمارات.' ?>">
    <meta name="keywords" content="برنامج فواتير الإمارات، برنامج الفوترة الإلكترونية، برنامج فواتير ضريبة القيمة المضافة، نظام فوترة سحابي، برنامج فواتير عربي إنجليزي، برنامج فواتير للشركات الصغيرة، الفوترة الإلكترونية الإمارات 2026، إصدار فاتورة ضريبية في الإمارات">
    <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">

    <!-- ========== Page Title ========== -->
    <title><?= isset($page_title) ? $page_title : 'برنامج الفواتير والمحاسبة في الإمارات | متوافق مع الهيئة الاتحادية للضرائب | عربي‑إنجليزي' ?></title>

    <!-- Canonical & Hreflang (edit URLs to your live routes) -->
    <link rel="canonical" href="<?= base_url('ar/') ?>">
    <link rel="alternate" href="<?= base_url() ?>" hreflang="en">
    <link rel="alternate" href="<?= base_url('ar/') ?>" hreflang="ar">
    <link rel="alternate" href="<?= base_url() ?>" hreflang="x-default">

    <!-- Open Graph -->
    <meta property="og:title" content="برنامج الفواتير والمحاسبة في الإمارات | متوافق مع الهيئة الاتحادية للضرائب | عربي‑إنجليزي">
    <meta property="og:description" content="نظام فوترة ثنائي اللغة في دولة الإمارات مع توافق ضريبة القيمة المضافة 5%، تذكيرات تلقائية، فواتير متكررة، تقارير ضريبة القيمة المضافة وبوابات دفع محلية.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= base_url('ar/') ?>">
    <meta property="og:image" content="<?= base_url('assets/img/og-cover.jpg') ?>">
    <meta property="og:locale" content="ar_AE">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="برنامج الفواتير والمحاسبة في الإمارات | متوافق مع الهيئة الاتحادية للضرائب">
    <meta name="twitter:description" content="فوترة عربي/إنجليزي، ضريبة القيمة المضافة 5%، جاهز لإمارة تاكس، تذكيرات تلقائية، فواتير متكررة وتقارير ضريبة القيمة المضافة.">
    <meta name="twitter:image" content="<?= base_url('assets/img/og-cover.jpg') ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png') ?>" type="image/x-icon">
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
    <link href="<?= base_url('assets/css/rtl.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/arabic.css') ?>" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- Add RTL support -->
    <style>
        body[dir="rtl"] {
            direction: rtl;
            text-align: right;
            font-family: 'Open Sans', 'Arial', sans-serif;
        }
        
        body[dir="rtl"] .navbar-brand {
            float: right;
        }
        
        body[dir="rtl"] .navbar-nav {
            float: right;
        }
        
        body[dir="rtl"] .attr-right {
            float: left;
        }
        
        body[dir="rtl"] .language-toggle {
            left: 20px;
            right: auto;
        }
        
        body[dir="rtl"] .f-item.contact-widget ul.social {
            text-align: right;
        }
        
        body[dir="rtl"] .footer-bottom .text-start {
            text-align: right !important;
        }
        
        body[dir="rtl"] .footer-bottom .link ul {
            justify-content: flex-end;
        }
        
        body[dir="rtl"] .f-item img {
            display: block;
            margin-bottom: 25px;
            max-width: 150px;
        }
        
        @media only screen and (max-width: 767px) {
            body[dir="rtl"] .language-toggle {
                left: 10px;
                right: auto;
            }
        }
    </style>

    <!-- JSON-LD: Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "أمازيفيرس للفوترة",
      "url": "<?= base_url('ar/') ?>",
      "logo": "<?= base_url('assets/img/logo1.png') ?>",
      "sameAs": [
        "https://www.facebook.com/yourbrand",
        "https://www.linkedin.com/company/yourbrand",
        "https://x.com/yourbrand"
      ]
    }
    </script>

    <!-- JSON-LD: Product + SoftwareApplication -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
        "@type": "Product",
        "name": "برنامج الفواتير والمحاسبة في الإمارات",
        "image": "<?= base_url('assets/img/og-cover.jpg') ?>",
        "description": "برنامج فوترة متوافق مع الهيئة الاتحادية للضرائب/إمارة تاكس لدولة الإمارات مع فواتير عربي/إنجليزي، ضريبة القيمة المضافة 5%، تذكيرات دفع تلقائية، فواتير متكررة، تقارير ضريبة القيمة المضافة، وبوابات دفع محلية.",
        "brand": {"@type": "Brand", "name": "أمازيفيرس"},
        "sku": "INV-UAE-SaaS-AR",
        "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "AED",
          "url": "<?= base_url('ar/#pricing') ?>",
          "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "reviewCount": "112"
        }
      },
      {
        "@type": "SoftwareApplication",
        "name": "أمازيفيرس للفوترة (الإمارات)",
        "operatingSystem": "ويب، iOS، أندرويد",
        "applicationCategory": "BusinessApplication",
        "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "AED"
        }
      }]
    }
    </script>

    <!--[if lte IE 9]>
        <p class="browserupgrade">أنت تستخدم متصفح <strong>قديم</strong>. يرجى <a href="https://browsehappy.com/">ترقية متصفحك</a> لتحسين تجربتك وأمانك.</p>
    <![endif]-->
</head>

<body dir="rtl">
    <!-- Start Preloader 
    ============================================= -->
    <div id="preloader">
        <div id="softing-preloader" class="softing-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="ف" class="letters-loading">ف</span>
                    <span data-text-preloader="و" class="letters-loading">و</span>
                    <span data-text-preloader="ا" class="letters-loading">ا</span>
                    <span data-text-preloader="ت" class="letters-loading">ت</span>
                    <span data-text-preloader="ي" class="letters-loading">ي</span>
                    <span data-text-preloader="ر" class="letters-loading">ر</span>
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
                        <i class="fa fa-bars" aria-hidden="true"></i><span class="sr-only">فتح القائمة</span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('ar/') ?>" aria-label="أمازيفيرس للفوترة الصفحة الرئيسية">
                        <img src="<?= base_url('assets/img/logo1.png') ?>" class="logo" alt="شعار برنامج الفوترة في الإمارات (متوافق مع الهيئة الاتحادية للضرائب/إمارة تاكس)">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <img src="<?= base_url('assets/img/logo1.png') ?>" alt="علامة أمازيفيرس للفوترة التجارية">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">إغلاق القائمة</span>
                    </button>
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a class="smooth-menu" href="<?= base_url('ar/') ?>">الرئيسية</a></li>
                        <li><a class="smooth-menu" href="#features">المميزات</a></li>
                        <li><a class="smooth-menu" href="#overview">نظرة عامة</a></li>
                        <li><a class="smooth-menu" href="#pricing">التسعير</a></li>
                        <li><a class="smooth-menu" href="#blog">المدونة</a></li>
                        <li><a class="smooth-menu" href="#contact">اتصل بنا</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Attribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button">
                                <a href="#pricing" aria-label="ابدأ التجربة المجانية">ابدأ التجربة المجانية</a>
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
        <div class="flag uk" id="languageFlag" title="Switch Language"></div>
    </div>
    <!-- End Language Toggle -->
