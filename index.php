<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>Responsive navigation bar - Bedimcode</title>
</head>

<body>

    <?php $currentPage =basename($_SERVER['REQUEST_URI']);
    
    
    ?>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    LOGAI
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>



            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#" class="nav__link"></a>
                    </li>


                    <!-- drop -->

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <!--  -->

                                <span class="dropdown__title"></span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">


                                <span class="dropdown__title">Lattice Solutions</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Command & Control</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Mission Autonomy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </li>



                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">


                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">


                                    <span class="dropdown__title">FORCE PROTECTION</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Counter USA</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Command & Control</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Maritime Counter Intrusion</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title"></span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title">A family of autonomous <br>systems, powered by
                                        <br>Lattice, that provides<br> integrated, persistent <br>awareness and security
                                        <br>across land, sea and air -- all <br>at the tactical edge.</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>






                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Project <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">


                                    <span class="dropdown__title"> Project selling </span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">fullstack</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">AI&ml</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Data Science& Data Analytics</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title"></span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title">Discover Our IT Project Solutions, <br> Powered by
                                        Lattice.
                                        <br> Our autonomous systems provide <br> integrated, persistent awareness and
                                        security
                                        <br> across land, sea, and air, <br> tailored for tactical applications. <br>
                                        Elevate your technology initiatives with our expert offerings!</span>




                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <!-- <div class="dropdown__icon">
                                            <i class=""></i>
                                        </div> -->

                                    <span class="dropdown__title"></span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <!-- <div class="dropdown__icon">
                                            <i class="ri-pen-nib-line"></i>
                                        </div>
     -->
                                    <span class="dropdown__title">Website Development</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="ARTIFICIAL_INTILIGENCE.php" class="dropdown__link">Artificial
                                                Intelligence </a>
                                        </li>
                                        <li>
                                            <a href="Hosting_service.php" class="dropdown__link">Hosting</a>
                                        </li>
                                        <li>
                                            <a href="data_analysis.php" class="dropdown__link"> Data Analytics</a>
                                        </li>
                                        <li>
                                            <a href="database.php" class="dropdown__link">Database Management</a>
                                        </li>
                                        <li>
                                            <a href="web_design.php" class="dropdown__link"> Web Design </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <!-- <div class="dropdown__icon">
                                            <i class="ri-apps-2-line"></i>
                                        </div>
     -->
                                    <span class="dropdown__title">Freelance Solutions for Autonomous Air Systems <br>
                                        Connected and Controlled by Lattice. <br> I offer expertise in <br>
                                        developing and implementing <br> intelligence, surveillance, <br> and
                                        reconnaissance mission
                                        <br> profiles tailored to your needs.</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- <li>
                            <a href="#" class="nav__link">Underwater Vehicles </a>
                        </li> -->

                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Booking/Appointment <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">


                                    <span class="dropdown__title">
                                    </span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <!-- <li>
                                                <a href="#" class="dropdown__link">Premium templates</a>
                                            </li> -->
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title">Booking/Appointment</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Set Up an Appointment</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title">Most reliable and flexible <br>, tailor made for
                                        littoral<br> and deep-water survey, <br>inspection & ISR, applicable <br>to a
                                        wide range of defense<br> and commercial mission sets.</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!--=============== DROPDOWN 3 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Contact <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">


                                    <span class="dropdown__title">Contact

                                    </span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="form.php" class="dropdown__link">More Option</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <!-- <div class="dropdown__icon">
                                            <i class="ri-shield-line"></i>
                                        </div> -->

                                    <span class="dropdown__title"></span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">

                                    <span class="dropdown__title">Log Ai is a full-service, high-<br>volume Tech
                                        Services of<br> conventional and next-<br>generation new techniques.</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            About Us<i class=" dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">


                                    <span class="dropdown__title">Abouts Us

                                    </span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Company Overview</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Future Goals</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Contact Information</a>
                                        </li>
                                        <li></li>
                                        <a href="#" class="dropdown__link">History and Founding </a>
                    </li>
                </ul>
            </div>

            <div class="dropdown__group">
                <!-- <div class="dropdown__icon">
                                                <i class="ri-shield-line"></i>
                                            </div> -->

                <span class="dropdown__title"></span>

                <ul class="dropdown__list">
                    <li>
                        <a href="#" class="dropdown__link"></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown__link"></a>
                    </li>
                </ul>
            </div>

            <div class="dropdown__group">

                <span class="dropdown__title">Thinkers and doers working <br>interdependently. We bring <br>the
                    brightest minds and<br> best-in-class talent together <br>with veterans who have lived <br>the
                    problems of our <br>warfighters.</span>

                <ul class="dropdown__list">
                    <li>
                        <a href="#" class="dropdown__link"></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown__link"></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown__link"></a>
                    </li>
                </ul>
            </div>
            </div>
            </div>
            </li>


            </ul>
            </div>
        </nav>
    </header>
    <!-- img page start-->
    <style>
    /* Image Container Styling */
    .img-cont {
        height: 110vh;
        position: relative;
        overflow: hidden;
    }

    .img-cont img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Service Page Styling */
    .GE_a2uY2 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .ywHkNWsV {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin: 10px;
        padding: 15px;
        width: calc(33.333% - 20px);
        text-decoration: none;
        color: #333;
        transition: box-shadow 0.3s ease;
    }

    .ywHkNWsV:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    ._4xxaauR6 {
        font-size: 1.25em;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .wXe03MBa {
        font-size: 0.9em;
        color: #666;
        margin-bottom: 15px;
    }

    ._2McXanW0 {
        font-weight: bold;
        color: #007BFF;
        display: flex;
        align-items: center;
    }

    svg {
        margin-left: 5px;
        fill: currentColor;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .ywHkNWsV {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 480px) {
        .ywHkNWsV {
            width: 100%;
        }
    }
    </style>
    <!-- Image Page Start -->
    <div class="call">
        <div class="img-cont">
            <img src="img/img1.jpeg" alt="Image Description">
        </div>
    </div>

    <!-- Service Page Start -->
    <div class="GE_a2uY2 -mx-6 md:mx-0">
        <a class="ywHkNWsV _3CEVF49L" href="ARTIFICIAL_INTILIGENCE.php">
            <p class="_4xxaauR6">Artificial Intelligence</p>
            <p class="wXe03MBa">
                Toptal AI-Driven Digital Marketers utilize advanced artificial intelligence techniques, integrating
                search engine optimization, social media strategies, and email marketing to enhance engagement and
                conversions. By leveraging data-driven insights and machine learning algorithms, they optimize
                campaigns for measurable online success.
            </p>
            <p class="_2McXanW0">
                AI services&nbsp;
                <svg viewBox="0 0 12 8" width="12">
                    <g stroke="currentColor" fill="none" fill-rule="evenodd">
                        <path d="M0 3.607h11.253M8 .107l3.5 3.5-3.5 3.5"></path>
                    </g>
                </svg>
            </p>
        </a>

        <a class="ywHkNWsV _3CEVF49L" href="Website_Development.php">
            <p class="_4xxaauR6">Website Development</p>
            <p class="wXe03MBa">
                Our web development team utilizes innovative design, responsive layouts, and robust coding practices to
                enhance the user experience. We prioritize continuous improvement through testing and analytics,
                ensuring your website evolves for long-term success.
            </p>
            <p class="_2McXanW0">
                Website Services&nbsp;
                <svg viewBox="0 0 12 8" width="12">
                    <g stroke="currentColor" fill="none" fill-rule="evenodd">
                        <path d="M0 3.607h11.253M8 .107l3.5 3.5-3.5 3.5"></path>
                    </g>
                </svg>
            </p>
        </a>

        <a class="ywHkNWsV _3CEVF49L" href="web_design.php">
            <p class="_4xxaauR6">Web Design</p>
            <p class="wXe03MBa">
                Our web designers create visually engaging and user-friendly websites that resonate with your audience.
                By leveraging effective design strategies and storytelling, we enhance brand trust and foster a loyal
                community, ensuring an impactful online presence.
            </p>
            <p class="_2McXanW0">
                Design Services&nbsp;
                <svg viewBox="0 0 12 8" width="12">
                    <g stroke="currentColor" fill="none" fill-rule="evenodd">
                        <path d="M0 3.607h11.253M8 .107l3.5 3.5-3.5 3.5"></path>
                    </g>
                </svg>
            </p>
        </a>

        <a class="ywHkNWsV _3CEVF49L" href="Hosting_service.php">
            <p class="_4xxaauR6">Hosting</p>
            <p class="wXe03MBa">
                Our hosting specialists provide reliable, high-performance solutions that ensure your website runs
                smoothly. With robust infrastructure and proactive support, we optimize uptime and speed for long-term
                growth, enhancing user experience and engagement.
            </p>
            <p class="_2McXanW0">
                Hosting Services&nbsp;
                <svg viewBox="0 0 12 8" width="12">
                    <g stroke="currentColor" fill="none" fill-rule="evenodd">
                        <path d="M0 3.607h11.253M8 .107l3.5 3.5-3.5 3.5"></path>
                    </g>
                </svg>
            </p>
        </a>

        <a class="ywHkNWsV _3CEVF49L" href="database.php">
            <p class="_4xxaauR6">Database Management</p>
            <p class="wXe03MBa">
                Our database management experts conduct thorough data analysis, optimize database performance, and
                implement efficient data structures, ensuring reliable access and improved performance for your
                applications.
            </p>
            <p class="_2McXanW0">
                Database Services&nbsp;
                <svg viewBox="0 0 12 8" width="12">
                    <g stroke="currentColor" fill="none" fill-rule="evenodd">
                        <path d="M0 3.607h11.253M8 .107l3.5 3.5-3.5 3.5"></path>
                    </g>
                </svg>
            </p>
        </a>

        <a class="ywHkNWsV _3CEVF49L" href="data_analysis.php">
            <p class="_4xxaauR6">Data Analytics</p>
            <p class="wXe03MBa">
                Our data analytics experts analyze and interpret your data across various sources, ensuring insights are
                actionable and align with your business goals. We provide consistent reporting that connects with your
                objectives, driving informed decisions and growth.
            </p>
            <p class="_2McXanW0">
                Data Analytics Services&nbsp;
                <svg viewBox="0 0 12 8" width="12">
                    <g stroke="currentColor" fill="none" fill-rule="evenodd">
                        <path d="M0 3.607h11.253M8 .107l3.5 3.5-3.5 3.5"></path>
                    </g>
                </svg>
            </p>
        </a>
    </div>

    <!-- end service page -->

    <!-- start pages -->

    <style>
    .home-category_tiles_block_component__wrapper {
        padding: 20px;
    }

    .home-category_tiles_block_component__tiles {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        /* Space between tiles */
    }

    .home-category_tile_component__root {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .home-category_tile_component__root:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }

    .home-category_tile_component__tileDetail {
        padding: 15px;
        display: block;
        /* Set to block for visibility */
        background-color: white;
        color: black;
        /* Black text */
    }

    .home-category_tile_component__tileTitle {
        font-size: 1.5em;
        color: black;
        /* Black title */
        text-decoration: none;
    }

    .home-category_tile_component__tileSubtitle {
        color: #333;
        /* Dark gray subtitle */
        margin: 10px 0;
    }

    .home-category_tile_component__tileLink {
        display: inline-block;
        margin-right: 10px;
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .home-category_tile_component__tileLink:hover {
        text-decoration: underline;
    }

    .home-category_tiles_block_component__cta {
        margin-top: 20px;
        text-align: center;
    }

    .shared-cta_button_component__root {
        background-color: #007bff;
        /* Button background color */
        color: white;
        /* Button text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1.2em;
    }

    .shared-cta_button_component__root:hover {
        background-color: #0056b3;
        /* Darker shade on hover */
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        margin: 0 5px;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #007bff;
        text-decoration: none;
    }

    .pagination a:hover {
        background-color: #f0f0f0;
    }

    .pagination .active {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
    }

    @media (max-width: 600px) {
        .home-category_tiles_block_component__tiles {
            grid-template-columns: 1fr;
        }
    }
    </style>

    <div class="home-category_tiles_block_component__wrapper">
        <div class="home-category_tiles_block_component__tiles">
            <!-- WordPress Category -->
            <div class="home-category_tile_component__root">
                <div class="home-category_tile_component__tileDetail">
                    <h2>
                        <a class="home-category_tile_component__tileTitle" title="View WordPress"
                            href="/category/wordpress">WordPress</a>
                    </h2>
                    <p class="home-category_tile_component__tileSubtitle">Thousands of WordPress plugins</p>
                    <a class="home-category_tile_component__tileLink" title="Newest WordPress"
                        href="/category/wordpress?sort=date">Newest</a>
                    <a class="home-category_tile_component__tileLink" title="Bestselling WordPress"
                        href="/category/wordpress?sort=sales">Bestsellers</a>
                </div>
                <a class="home-category_tile_component__tileArt" title="View WordPress" href="/category/wordpress">
                    <div class="home-category_tile_component__imageIconWrapper">
                        <picture class="home-category_tile_component__imageWrapper">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-wordpress-15ecdbadfdf9e521b4a3933ef21cfffc88eb197b81263c42209eee42dad97f51.avif"
                                type="image/avif">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-wordpress-0386db3ef7e3ae69a48cae1050f9babb03bbbe64ba42601e868dec587e620b49.webp"
                                type="image/webp">
                            <img src="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-wordpress-52a9c6f969c977d182751b171f7099f71a1e046156a063750159cbe6771c82fc.png"
                                alt="WordPress" loading="lazy" width="345" height="175"
                                class="home-category_tile_component__tileImage">
                        </picture>
                        <div class="home-category_tile_component__tileIcon">
                            <img alt="WordPress" width="64" height="64" loading="lazy"
                                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/codecanyon/wordpress-c4a4c90a55e94cdf642e0d8e6b58795b144aa04d143ac4f010058190a543122f.svg">
                        </div>
                    </div>
                </a>
            </div>

            <!-- PHP Scripts Category -->
            <div class="home-category_tile_component__root">
                <div class="home-category_tile_component__tileDetail">
                    <h2>
                        <a class="home-category_tile_component__tileTitle" title="View PHP Scripts"
                            href="/category/php-scripts">PHP Scripts</a>
                    </h2>
                    <p class="home-category_tile_component__tileSubtitle">Thousands of PHP Scripts</p>
                    <a class="home-category_tile_component__tileLink" title="Newest PHP Scripts"
                        href="/category/php-scripts?sort=date">Newest</a>
                    <a class="home-category_tile_component__tileLink" title="Bestselling PHP Scripts"
                        href="/category/php-scripts?sort=sales">Bestsellers</a>
                </div>
                <a class="home-category_tile_component__tileArt" title="View PHP Scripts" href="/category/php-scripts">
                    <div class="home-category_tile_component__imageIconWrapper">
                        <picture class="home-category_tile_component__imageWrapper">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-php-scripts-4db591ad41a545351a82c9b575c8f04a5ac3bb11a325c68c6725593b3932a99a.avif"
                                type="image/avif">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-php-scripts-e0b8890ec70e2a330b745fa5b53d120f6f40c7c019ca2dad1bdecb02718843dc.webp"
                                type="image/webp">
                            <img src="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-php-scripts-f0f68a86605709907d3fa4107a50d5261ce6fb35373a2120a8d73cfd8cee38b9.png"
                                alt="PHP Scripts" loading="lazy" width="345" height="175"
                                class="home-category_tile_component__tileImage">
                        </picture>
                        <div class="home-category_tile_component__tileIcon">
                            <img alt="PHP Scripts" width="64" height="64" loading="lazy"
                                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/codecanyon/php-scripts-9749895da98a3c08012f78a59a44b8d05ec1957c0cf0ed2de43670360cc8640a.svg">
                        </div>
                    </div>
                </a>
            </div>

            <!-- Mobile Category -->
            <div class="home-category_tile_component__root">
                <div class="home-category_tile_component__tileDetail">
                    <h2>
                        <a class="home-category_tile_component__tileTitle" title="View Mobile"
                            href="/category/mobile">Mobile</a>
                    </h2>
                    <p class="home-category_tile_component__tileSubtitle">Mobile app templates, games and more
                    </p>
                    <a class="home-category_tile_component__tileLink" title="Newest Mobile"
                        href="/category/mobile?sort=date">Newest</a>
                    <a class="home-category_tile_component__tileLink" title="Bestselling Mobile"
                        href="/category/mobile?sort=sales">Bestsellers</a>
                </div>
                <a class="home-category_tile_component__tileArt" title="View Mobile" href="/category/mobile">
                    <div class="home-category_tile_component__imageIconWrapper">
                        <picture class="home-category_tile_component__imageWrapper">
                            <source srcset="img/img5.jpeg" type="image/avif">
                            <source srcset="img/img4.jpeg" type="image/webp">
                            <img src="img/img4.jpeg" alt="Mobile" loading="lazy" width="345" height="175"
                                class="home-category_tile_component__tileImage">
                        </picture>
                        <div class="home-category_tile_component__tileIcon">
                            <img alt="Mobile" width="64" height="64" loading="lazy" src="img/img4.jpeg">
                        </div>
                    </div>
                </a>
            </div>

            <!-- HTML 5 Category -->
            <div class="home-category_tile_component__root">
                <div class="home-category_tile_component__tileDetail">
                    <h2>
                        <a class="home-category_tile_component__tileTitle" title="View HTML 5"
                            href="/category/html5">HTML 5</a>
                    </h2>
                    <p class="home-category_tile_component__tileSubtitle">Thousands of HTML 5 templates</p>
                    <a class="home-category_tile_component__tileLink" title="Newest HTML 5"
                        href="/category/html5?sort=date">Newest</a>
                    <a class="home-category_tile_component__tileLink" title="Bestselling HTML 5"
                        href="/category/html5?sort=sales">Bestsellers</a>
                </div>
                <a class="home-category_tile_component__tileArt" title="View HTML 5" href="/category/html5">
                    <div class="home-category_tile_component__imageIconWrapper">
                        <picture class="home-category_tile_component__imageWrapper">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-html5-0c3ba2dc94fec9fdcf2f02f65246fad2536dc16fd15c711831793eb152bd94c4.avif"
                                type="image/avif">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-html5-c7efcc673ebae36781de8e42b4e9bff7e4c5175a76d9948d9119f5969dda0e8c.webp"
                                type="image/webp">
                            <img src="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-html5-21bb02e8f73c65c5c2325ca84b7cd8ead3b230c024f663abaf65e28740836105.png"
                                alt="HTML 5" loading="lazy" width="345" height="175"
                                class="home-category_tile_component__tileImage">
                        </picture>
                        <div class="home-category_tile_component__tileIcon">
                            <img alt="HTML 5" width="64" height="64" loading="lazy"
                                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/codecanyon/html5-eb28f10184d9da1f76b62aa159c78e522c65857a6c412625776d868653177c63.svg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="home-category_tile_component__root">
                <div class="home-category_tile_component__tileDetail">
                    <h2>
                        <a class="home-category_tile_component__tileTitle" title="View Javascript"
                            href="/category/javascript">Javascript</a>
                    </h2>

                    <p class="home-category_tile_component__tileSubtitle">Large range of Javascript code and
                        add-ons
                    </p>

                    <a class="home-category_tile_component__tileLink" title="Newest Javascript"
                        href="/category/javascript?sort=date">Newest</a>
                    <a class="home-category_tile_component__tileLink" title="Bestselling Javascript"
                        href="/category/javascript?sort=sales">Bestsellers</a>
                </div>

                <a class="home-category_tile_component__tileArt" title="View Javascript" href="/category/javascript">
                    <div class="home-category_tile_component__imageIconWrapper">
                        <picture class="home-category_tile_component__imageWrapper">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-javascript-a58ab417448d4403b5029342c52ec58cf0f97c139fd68b136ef0780d3c6cc648.avif"
                                type="image/avif">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-javascript-41b577bc8df2ae9c78c10b5202d4bd2c0ae09a271506517f85399f9488a60e13.webp"
                                type="image/webp">
                            <img src="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-javascript-68a75340009cdeb4a235c6090b3125f6fc0cc8a7929aee0ed883a21c9a28e8ae.png"
                                alt="Javascript" loading="lazy" width="345" height="175"
                                class="home-category_tile_component__tileImage">
                        </picture>

                        <div class="home-category_tile_component__tileIcon">
                            <img alt="Javascript" width="64" height="64" loading="lazy"
                                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/codecanyon/javascript-4d6fb525e05bcc490e82ba2cd201d6dcdf71252549308c89a61ae58879b48ab6.svg">
                        </div>
                    </div>
                </a>
            </div>
            <!-- pluging -->

            <div class="home-category_tile_component__root">
                <div class="home-category_tile_component__tileDetail">
                    <h2>
                        <a class="home-category_tile_component__tileTitle" title="View Plugins"
                            href="/category/plugins">Plugins</a>
                    </h2>

                    <p class="home-category_tile_component__tileSubtitle">Online store plugins, code and scripts
                    </p>

                    <a class="home-category_tile_component__tileLink" title="Newest Plugins"
                        href="/category/plugins?sort=date">Newest</a>
                    <a class="home-category_tile_component__tileLink" title="Bestselling Plugins"
                        href="/category/plugins?sort=sales">Bestsellers</a>
                </div>

                <a class="home-category_tile_component__tileArt" title="View Plugins" href="/category/plugins">
                    <div class="home-category_tile_component__imageIconWrapper">
                        <picture class="home-category_tile_component__imageWrapper">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-plugins-d41329e69e1de423aa7aeb9976324f877c874e5508272deeca547191797b1aac.avif"
                                type="image/avif">
                            <source
                                srcset="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-plugins-d5aced1f0fa2a127e00d9d58f0a854d01c7593cae30e35e7f60a97f8dc8f8c62.webp"
                                type="image/webp">
                            <img src="https://assets.market-storefront.envato-static.com/storefront/assets/home/codecanyon/category-tiles-plugins-d6e848b701c693d3a6866cd8870e78f06cb60e7ceca510795a0dbbbdc76de504.png"
                                alt="Plugins" loading="lazy" width="345" height="175"
                                class="home-category_tile_component__tileImage">
                        </picture>

                        <div class="home-category_tile_component__tileIcon">
                            <img alt="Plugins" width="64" height="64" loading="lazy"
                                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/codecanyon/plugins-c7384ae6bd8af0ed9f0a87be621954ccdc041a98c2dc0def8c7ddc09849eb84b.svg">
                        </div>
                    </div>
                </a>
            </div>

            <!-- Add other categories similarly... -->

        </div>

        <div class="home-category_tiles_block_component__cta">
            <a rel="" class="shared-cta_button_component__root" href="/category/all">View all categories</a>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <a href="?page=1" class="active">1</a>
            <a href="?page=2">2</a>
            <a href="?page=3">3</a>
            <a href="?page=4">4</a>
            <a href="?page=5">Next</a>
        </div>
    </div>



    <!-- PAGES END -->
    <!-- whats chat start -->
    <a href="https://wa.me/yourNumber" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <style>
    .floating-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        text-decoration: none;
        position: fixed;
        right: 20px;
        bottom: 20px;
        background-color: green;
        color: rgb(255, 255, 255);
        font-size: 12px;
        transition: background-color 0.3s;
    }

    .floating-button:hover {
        background-color: rgb(45, 82, 164);
    }

    .floating-button i {
        font-size: 30px;
        color: #25D366;
        /* WhatsApp green color */
    }

    .floating-button:hover {
        background-color: rgb(45, 82, 164);
        /* Darker on hover */
    }

    .floating-button i {
        font-size: 30px;
        /* Increased icon size */
        color: #25D366;
        /* WhatsApp green color */
    }
    </style>
    <script>
    function openWhatsApp() {
        const phoneNumber = '+918975013392';
        const message = encodeURIComponent("Hello, I need help!");
        const url = `https://wa.me/${phoneNumber}?text=${message}`;
        window.open(url, '_blank');
    }
    </script>
    </head>

    <body>
        <a role="button" class="has-label floating-button" part="button" sr-label="Open WhatsApp chat"
            onclick="openWhatsApp()">
            <i class="fab fa-whatsapp"></i> <!-- Font Awesome WhatsApp icon -->
        </a>

        <!-- end WhatsApp -->

        <!-- footer -->

        <footer>
            <div class="footer-container">
                <div class="footer-column">
                    <h3>ABOUT US</h3>
                    <ul>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Leadership</a></li>
                        <li><a href="#">Newsroom</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="linkedin.com/in/log-ai-b16abb330">LinkedIn</a></li>
                        <li><a
                                href="https://www.instagram.com/logai2k24/profilecard/?igsh=dGhhbTdvbGY3MHM4">Instagram</a>
                        </li>
                    </ul>
                </div>



                <div class="footer-column">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Project Management</a></li>
                        <li><a href="#">AI Model</a></li>
                        <li><a href="#">Database Management</a></li>
                        <li><a href="#">Hosting</a></li>
                        <li><a href="#">24/7 Services</a></li>

                    </ul>
                </div>

                <div class="footer-column">
                    <h3>CONTACT US</h3>
                    <p><a href="mailto:logai2k24@gmail.com">logai2k24@gmail.com</a></p>
                    <h2>
                        8975013392
                    </h2>
                </div>
            </div>

            <div class="footer-bottom">
                <p>Copyright 2024 LOGAI</p>
                <ul class="legal-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Modern Anti-Slavery Policy</a></li>
                </ul>
            </div>
        </footer>


        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>

</html>