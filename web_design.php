<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Set the body's background color to black */
    body {
        background-color: #000;
        /* Black background */
        color: #fff;
        /* White text color for contrast */
        font-family: Arial, sans-serif;
        /* Use a simple font */
        margin: 0;
        /* Remove default margin */
        padding: 0;
        /* Remove default padding */
    }

    /* Style for the section wrapper */
    .section_content-wrapper {
        display: flex;
        flex-wrap: wrap;
        /* Allow cards to wrap in smaller screens */
        gap: 1rem;
        /* Space between cards */
        justify-content: center;
        /* Center the cards */
        padding: 1rem;
        /* Padding around the content */
    }

    /* Style for each card */
    .card {
        background-color: #17152f;
        /* Darker background for cards */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        /* Subtle shadow */
        width: calc(48% - 1rem);
        /* Responsive width for cards */
        overflow: hidden;
        /* Hide overflow */
        transition: transform 0.2s;
        /* Smooth scaling effect */
    }

    /* Image styles */
    .card_image-wrapper img {
        width: 100%;
        /* Full width for images */
        height: auto;
        /* Maintain aspect ratio */
    }

    /* Card hover effect */
    .card:hover {
        transform: scale(1.02);
        /* Slightly scale up on hover */
    }

    /* Headings */
    .h6 {
        margin: 0.5rem 0;
        /* Spacing for headings */
    }

    /* Paragraph styles */
    p {
        margin: 0.5rem;
        /* Spacing for paragraphs */
    }
    </style>
</head>

<body>
    <div animation="staggered" class="section_content-wrapper cc-2-col">
        <div animation-element="" class="card">
            <div class="card_image-wrapper cc-cover">
                <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/661ea0027b6f8e9e6e44966d_Level1-v2-1-New-Website.webp"
                    loading="lazy" alt="" class="image-cover">
            </div>
            <h3 class="h6">Basics of Type, Color &amp; Variables</h3>
            <p>Upload a custom font and change the colors of your elements using variables.</p>
        </div>
        <div animation-element="" class="card">
            <div class="card_image-wrapper cc-cover">
                <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/661ea00bcc149a88faf7afbd_Level1-v2-2-New-Website.webp"
                    loading="lazy" alt="" class="image-cover">
            </div>
            <h3 class="h6">Working with Images &amp; Backgrounds</h3>
            <p>Replace &amp; position images, create color and gradient backgrounds.</p>
        </div>
        <div animation-element="" class="card">
            <div class="card_image-wrapper cc-cover">
                <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2cb2461ced6b90f9589a_webflow-benefits-beginner-cms.webp"
                    loading="lazy" alt="" class="image-cover">
            </div>
            <h3 class="h6">CMS Basics</h3>
            <p>Create new projects using the content management system.</p>
        </div>
        <div animation-element="" class="card">
            <div class="card_image-wrapper cc-cover">
                <img src="https://cdn.prod.website-files.com/64f7e0efa0923cf471f9417c/65ad2cb387981212ff455583_webflow-benefits-beginner-going-live.webp"
                    loading="lazy" alt="" class="image-cover">
            </div>
            <h3 class="h6">Going Live</h3>
            <p>Publish your website and connect it to your custom domain.</p>
        </div>
    </div>

</body>

</html>