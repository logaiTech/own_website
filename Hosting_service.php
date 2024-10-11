<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Development & Hosting</title>
    <style>
    /* Set the body's background color to black */
    body {
        background-color: #000;
        /* Black background */
        color: #fff;
        /* White text for contrast */
        font-family: Arial, sans-serif;
        /* Simple font */
        margin: 0;
        /* Remove default margin */
        padding: 0;
        /* Remove default padding */
    }

    /* Style for the main container */
    .main-container {
        padding: 2rem;
        /* Padding around the container */
    }

    /* Introduction section style */
    .intro,
    .hosting-info {
        background-color: #17152f;
        /* Darker background for sections */
        border-radius: 8px;
        /* Rounded corners */
        padding: 1.5rem;
        /* Padding inside sections */
        margin-bottom: 2rem;
        /* Space below sections */
    }

    /* Style for the section content wrapper */
    .section_content-wrapper {
        display: flex;
        flex-wrap: wrap;
        /* Allow cards to wrap in smaller screens */
        gap: 1rem;
        /* Space between cards */
        justify-content: center;
        /* Center the cards */
    }

    /* Style for each card */
    .card {
        background-color: #17152f;
        /* Darker background for cards */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        /* Subtle shadow */
        width: calc(30% - 1rem);
        /* Responsive width for cards */
        padding: 1rem;
        /* Padding inside cards */
        transition: transform 0.2s;
        /* Smooth scaling effect */
    }

    /* Card icon styles */
    .card_icon-wrapper {
        display: flex;
        align-items: center;
        /* Center icons vertically */
        margin-bottom: 0.5rem;
        /* Space below icons */
    }

    /* Headings */
    .h6 {
        margin: 0.5rem 0;
        /* Spacing for headings */
    }

    /* Paragraph styles */
    p {
        margin: 0;
        /* Remove default margin */
        line-height: 1.5;
        /* Improve readability */
    }

    /* Card hover effect */
    .card:hover {
        transform: scale(1.02);
        /* Slightly scale up on hover */
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .card {
            width: calc(48% - 1rem);
            /* Two cards per row on smaller screens */
        }
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
            /* Full width for cards on very small screens */
        }
    }
    </style>
</head>

<body>
    <div class="w-layout-blockcontainer main-container w-container">
        <!-- Introduction Section -->
        <div class="intro">
            <h2>Welcome to Website Development</h2>
            <p>Website development is the process of building and maintaining websites. It encompasses various tasks,
                including web design, content creation, and programming. In today's digital age, having a robust online
                presence is crucial for businesses and individuals alike.</p>
            <p>Our comprehensive course will guide you through every step of the web development journey, equipping you
                with the skills needed to succeed in this ever-evolving field.</p>
        </div>

        <!-- Hosting Information Section -->
        <div class="hosting-info">
            <h2>Understanding Website Hosting</h2>
            <p>Website hosting is a service that allows individuals and organizations to make their websites accessible
                via the Internet. Here are some key aspects of web hosting:</p>
            <ul>
                <li><strong>Types of Hosting:</strong> There are various types of hosting available, including shared,
                    VPS, dedicated, and cloud hosting, each catering to different needs.</li>
                <li><strong>Domain Registration:</strong> Hosting services often provide domain registration, allowing
                    you to choose and secure a web address for your site.</li>
                <li><strong>Storage and Bandwidth:</strong> Hosting plans vary in terms of storage space and bandwidth,
                    impacting how many visitors your site can handle.</li>
                <li><strong>Security Features:</strong> Many hosting providers offer security features like SSL
                    certificates and regular backups to protect your data.</li>
                <li><strong>Customer Support:</strong> Reliable customer support is crucial, especially if you encounter
                    technical issues with your hosting.</li>
            </ul>
            <p>Choosing the right hosting provider is essential for the performance and reliability of your website.
                Explore our resources to learn more about selecting the best hosting option for your needs.</p>
        </div>

        <div animation="staggered" class="section_content-wrapper cc-3-col">
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b7908095719ef74088c_webflow-new-label-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">Fully Updated for Webflow 2024</h3>
                <p>Discover the latest features with the latest Webflow UI and a completely redesigned curriculum.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b7b7aa1e2b14fff0a05_webflow-video-recorder-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">16 Hours of Action-Packed Videos</h3>
                <p>Master Webflow through real-life client scenarios tailored for both beginners and experienced users.
                </p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b79fe72c2b693cd4c0b_webflow-progressive-projects-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">3 Progressive Projects</h3>
                <p>Progress through the course by building 3 websites hands-on at increasing levels of complexity.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b7787e560852efd61f4_webflow-cloud-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">Exclusive Assets &amp; Templates</h3>
                <p>Access project files and assets to build your Webflow projects just like you would on client
                    projects.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b7a244c6f343f893598_webflow-training-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">Comprehensive A to Z Training</h3>
                <p>This Webflow course provides structured guidance to take you from beginner (or intermediate) to
                    advanced.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b7af67a2fa56e314bb0_webflow-secondary-cursor-click.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">Personalized Expert Guidance</h3>
                <p>Get 2 months private mentoring to refine your skills and elevate your work.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b78da3173314f3375d0_webflow-lifetime-access-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">Lifetime Course Access</h3>
                <p>Enjoy free lifetime access to all course content, including future updates, to maintain your Webflow
                    skills.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2b7880b0bd676be416a2_webflow-globe-icon.svg"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">Private Webflow Community</h3>
                <p>Join our network of designers to collaborate, get feedback, and continue growing your skills.</p>
            </div>
            <div animation-element="" class="card">
                <div class="card_icon-wrapper">
                    <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2cb9248454f1eef91aee_webflow-ran-segall-icon.webp"
                        loading="lazy" width="20" height="20" alt="" class="icon-1x1-x-small">
                </div>
                <h3 class="h6">saurabh satpuute</h3>
                <p>Learn from the real-world Webflow knowledge and authentic style of Log AI.</p>
            </div>
        </div>
    </div>

</body>

</html>