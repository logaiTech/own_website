<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Help Button</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Font Awesome CDN -->
    <style>
    .floating-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        /* Adjust width for the button */
        height: 60px;
        /* Adjust height for the button */
        border-radius: 50%;
        /* Circular button */
        text-decoration: none;
        position: fixed;
        /* Fixed position */
        right: 20px;
        bottom: 20px;
        background-color: rgb(65, 102, 204);
        color: rgb(255, 255, 255);
        font-size: 12px;
        /* Smaller font size */
        transition: background-color 0.3s;
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
        const phoneNumber = '8975013392';
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
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Instagram</a></li>
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

</body>

</html>