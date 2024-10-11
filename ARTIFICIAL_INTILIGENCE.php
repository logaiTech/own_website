<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webflow Qualifiers</title>
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
        display: flex;
        justify-content: center;
        /* Center the list horizontally */
        align-items: center;
        /* Center the list vertically */
        height: 100vh;
        /* Full viewport height */
    }

    /* General styles for the qualifier list */
    .qualifier_list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        /* Space between items */
        max-width: 600px;
        /* Set a max width for better readability */
        padding: 1rem;
        /* Add some padding around the list */
        background-color: #17152f;
        /* Dark background for contrast */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        /* Subtle shadow */
    }

    /* Styles for each qualifier item */
    .qualifier_item {
        display: flex;
        align-items: center;
        /* Center items vertically */
        background-color: #2c2a44;
        /* Darker background for items */
        border: 1px solid #e0e0e0;
        /* Light border */
        border-radius: 6px;
        /* Slightly rounded corners */
        padding: 1rem;
        /* Padding inside each item */
        transition: transform 0.2s;
        /* Smooth scaling effect */
        opacity: 0;
        /* Initially hidden for animation */
        transform: translateY(20px);
        /* Slide effect from bottom */
        animation: fadeIn 0.5s forwards;
        /* Animation */
    }

    /* Fade-in animation */
    @keyframes fadeIn {
        to {
            opacity: 1;
            /* Fully visible */
            transform: translateY(0);
            /* Move to original position */
        }
    }

    /* Delay animations for each item */
    .qualifier_item:nth-child(1) {
        animation-delay: 0s;
    }

    .qualifier_item:nth-child(2) {
        animation-delay: 0.1s;
    }

    .qualifier_item:nth-child(3) {
        animation-delay: 0.2s;
    }

    .qualifier_item:nth-child(4) {
        animation-delay: 0.3s;
    }

    .qualifier_item:nth-child(5) {
        animation-delay: 0.4s;
    }

    .qualifier_item:nth-child(6) {
        animation-delay: 0.5s;
    }

    .qualifier_item:nth-child(7) {
        animation-delay: 0.6s;
    }

    .qualifier_item:nth-child(8) {
        animation-delay: 0.7s;
    }

    .qualifier_item:nth-child(9) {
        animation-delay: 0.8s;
    }

    .qualifier_item:nth-child(10) {
        animation-delay: 0.9s;
    }

    .qualifier_item:nth-child(11) {
        animation-delay: 1s;
    }

    /* Emoji styles */
    .qualifier_item-emoji {
        font-size: 2rem;
        /* Larger emoji */
        margin-right: 1rem;
        /* Space between emoji and text */
    }

    /* Hover effect for items */
    .qualifier_item:hover {
        transform: scale(1.02);
        /* Scale up slightly on hover */
        border-color: #007BFF;
        /* Change border color on hover */
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
        /* Increase shadow on hover */
    }

    /* Responsive styles */
    @media (max-width: 600px) {
        .qualifier_list {
            padding: 0.5rem;
            /* Reduce padding on smaller screens */
        }

        .qualifier_item {
            flex-direction: row;
            /* Ensure row-wise layout on small screens */
            align-items: center;
            /* Keep items centered vertically */
        }

        .qualifier_item-emoji {
            margin-bottom: 0;
            /* No margin below emoji on small screens */
        }
    }
    </style>
</head>

<body>
    <div animation="staggered" class="qualifier_list">
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🤖</div>
            <div>Curious about how AI can enhance your Webflow projects?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">📈</div>
            <div>Want to leverage AI analytics to improve user experience?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">💡</div>
            <div>Looking to incorporate AI tools for creative design inspiration?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🛠️</div>
            <div>Interested in automating repetitive tasks using AI?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🌐</div>
            <div>Exploring how AI can optimize your website's SEO?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🔍</div>
            <div>Seeking AI-driven insights to better understand your audience?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🧠</div>
            <div>Want to integrate AI chatbots for enhanced customer interaction?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🔧</div>
            <div>Interested in using AI for more efficient project management?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">✨</div>
            <div>Aspiring to harness AI for innovative web solutions?</div>
        </div>
        <div class="qualifier_item">
            <div class="qualifier_item-emoji">🎓</div>
            <div>Searching for expert advice on AI integration in web design?</div>
        </div>
    </div>

</body>

</html>