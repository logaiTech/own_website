<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Comment Form</title>
    <style>
    body {
        background-color: #e0e0e0;
        font-family: 'Arial', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .comment-form {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        padding: 30px;
        max-width: 500px;
        width: 100%;
        transition: transform 0.3s;
    }

    .comment-form:hover {
        transform: translateY(-5px);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 15px;
        border: 2px solid #007bff;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    textarea:focus {
        border-color: #0056b3;
        outline: none;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-submit {
        display: flex;
        justify-content: center;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .required {
        color: red;
    }

    @media (max-width: 480px) {
        .comment-form {
            padding: 20px;
        }
    }

    .floating-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-decoration: none;
        position: fixed;
        right: 20px;
        bottom: 20px;
        background-color: rgb(65, 102, 204);
        color: rgb(255, 255, 255);
        font-size: 12px;
        transition: background-color 0.3s;
    }

    .floating-button:hover {
        background-color: rgb(45, 82, 164);
    }

    .floating-button svg {
        width: 20px;
        height: 20px;
    }
    </style>
</head>

<body>
    <form action="https://formspree.io/f/{your_form_id}" method="POST" id="ast-commentform" class="comment-form">
        <h2>Leave a Comment</h2>
        <p class="comment-notes">
            <span id="email-notes">Your email address will not be published.</span>
            <span class="required-field-message" aria-hidden="true">Required fields are marked <span
                    class="required">*</span></span>
        </p>
        <label for="author">Name <span class="required">*</span></label>
        <input id="author" name="author" type="text" placeholder="Enter your name" required>

        <label for="email">Email <span class="required">*</span></label>
        <input id="email" name="email" type="text" placeholder="Enter your email" required>

        <label for="url">Website</label>
        <input id="url" name="url" type="text" placeholder="Enter your website (optional)">

        <label for="comment">Comment <span class="required">*</span></label>
        <textarea id="comment" name="comment" placeholder="Type your comment here..." rows="5" required></textarea>

        <div class="form-submit">
            <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
        </div>

        <a role="button" class="has-label floating-button" part="button" sr-label="Open/close chat"
            onclick="sendMessage()">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments"
                class="svg-inline--fa fa-comments fa-xl" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 512">
                <path fill="currentColor"
                    d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z">
                </path>
            </svg>
        </a>
    </form>
</body>

</html> -->


<?include_once'./menubar.php';?>
<h2></h2>
<div>



    <?php
     if(!empty($_POST["send"])){
        $userName = $_POST["userName"];
        $useremail = $_POST["userEmail "];
        $userPhone = $_POST["userphone"];
        $usermessage = $_POST["userMessage"];
        $toEmail = $_POST["lnbkar6@gmail.com"];
        $mailHeader = "Name: " .$userName .
        "\r\n Email: " .$userEmail  .
        "\r\n Phone: " .$userPhone  .
        "\r\n Message: " .$userMessage  ."\r\n";

        if(mail($toEmail,$userName,$mailHeaders)){
            $message = "Your Information is Received Successfully.";

        }

    }
    ?>

    <div class="form-container">
        <form action="mailto:logai2k24@gmail.com" method="post" enctype="text/plain">
            <div class="input-row">
                <h1>Contact Form</h1>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <br>
            <div class="input-row">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <br>
            <div class="input-row">
                <label for="mobile number">Contact Number:</label>
                <input id="contact" name="contact" rows="4" required>
            </div>


            <br>
            <div class="input-row">
                <label for="address">Address:</label>
                <input id="address" name="address" rows="4" required>
            </div>


            <br>
            <div class="input-row">
                <label for="message">Message:</label>
                <textarea id="text" name="message" required></textarea>
            </div>
            <br>

            <input type="submit" value="Submit">
        </form>

        <body>

            <style>
            *,
            *:after,
            *:before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -ms-box-sizing: border-box;
                box-sizing: border-box;
            }


            body {
                font-family: arial;
                font-size: 16px;
                margin: 0;
                background: #fff;
                color: #000;

                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background-color: black;
            }

            .form-container {
                width: 100%;
                max-width: 650px;
                margin: 0 auto;
                padding: 20px;
                border-radius: 10px;
                color: #fff;
                background: black;


            }

            .input-row {
                margin-bottom: 10px;
            }

            .input-row {
                display: block;
                margin-bottom: 3px;
            }

            .input-row input,
            .input-row textarea {
                width: 100%;
                padding: 10px;
                border: 0;
                border-radius: 3px;
                outline: 0;
                margin-bottom: 3px;
                font-size: 18px;
                font-family: arial;
            }

            .input-row textarea {
                height: 100px;
            }
            </style>




        </body>

        </html>