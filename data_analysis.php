<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Data Analytics Jobs</title>
    <style>
    /* Reset and global styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #212529;
        background-color: #FAFAFA;
        overflow-x: hidden;
    }

    /* Container and row styles */
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-6 {
        flex: 0 0 50%;
        padding: 15px;
    }

    /* Left fold styles */
    .left_fold {
        padding: 30px;
    }

    /* Headings with smooth animations */
    .heading_animate {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: left;
        margin-bottom: 20px;
        animation: fadeInUp 1s ease;
    }

    /* Button styles */
    .post_btn {
        display: inline-flex;
        align-items: center;
        padding: 12px 25px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .post_btn:hover {
        background-color: #0056b3;
    }

    .post_btn img {
        margin-left: 8px;
    }

    /* Image responsiveness */
    .right_fold img {
        width: 100%;
        max-width: 350px;
        border-radius: 5px;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
        background-color: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }

    /* Selection color */
    ::selection {
        background-color: #007BFF;
        color: #FFF;
    }

    /* Media queries for responsiveness */
    @media (max-width: 768px) {
        .col-sm-6 {
            flex: 0 0 100%;
        }

        .left_fold,
        .right_fold {
            padding: 15px;
        }

        .heading_animate {
            font-size: 2rem;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .row {
            flex-direction: column;
        }

        .right_fold img {
            max-width: 100%;
        }

        .left_fold,
        .right_fold {
            padding: 10px;
        }
    }

    /* Keyframes for animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-sm-6 left_fold">
            <div class="is_animated">
                <h2 class="heading_animate">
                    <b>
                        <div style="position:relative;display:inline-block;" class="split-words">Find</div>
                        <div style="position:relative;display:inline-block;" class="split-words">top</div>
                        <div style="position:relative;display:inline-block;" class="split-words">freelance</div>
                        <div style="position:relative;display:inline-block;" class="split-words">data</div>
                        <div style="position:relative;display:inline-block;" class="split-words">analytics</div>
                        <div style="position:relative;display:inline-block;" class="split-words">Curated</div>
                        <div style="position:relative;display:inline-block;" class="split-words">just</div>
                        <div style="position:relative;display:inline-block;" class="split-words">for</div>
                        <div style="position:relative;display:inline-block;" class="split-words">you.</div>
                    </b>
                </h2>
                <p class="para_animate">Work on the best data analytics jobs, as a freelancer, and transform
                    decision-making at organizations.</p>
                <a href="" class="post_btn">
                    <span class="post_cont">Get Started</span>
                    <span class="post_img">
                        <img src="/static/ui23/images/arrowhover.svg" class="img_show" alt="" loading="lazy">
                        <img src="/static/ui23/images/arrowhover1.svg" class="img_hide" alt="" loading="lazy">
                    </span>
                </a>
            </div>
        </div>
        <div class="col-sm-6 right_fold">
            <figure>
                <img src="img/img1.png" alt="shape" loading="lazy">
            </figure>
        </div>
    </div>

    <!-- Second page content -->
    <style>
    :root {
        --blue: #aab7b8;
        --green: #f4f6f7;
        --pink: #e83e8c;
        --orange: #fd7e14;
        --neutral-bg: rgb(254, 253, 251);
        --dark-bg: #201808;
        --text-color: #212529;
    }

    body {
        margin: 0;
        font-family: "Montserrat", sans-serif;
        background: var(--neutral-bg);
        color: var(--text-color);
        line-height: 1.5;
        overflow-y: auto;
    }

    section {
        background-color: var(--neutral-bg);
        padding: 50px 0;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .heading_animate {
        text-align: center;
        margin-bottom: 40px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .col-sm-3 {
        flex: 0 0 23%;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        margin: 10px;
        transition: transform 0.3s;
        padding: 20px;
        /* Uniform padding for all boxes */
        color: rgb(90, 52, 52);
        /* Text color */
    }

    .Box-one {
        text-align: center;
        padding: 20px;
        /* Ensure text is padded consistently */
    }

    .Bg-blue {
        background-color: var(--blue);
    }

    .Bg-pink {
        background-color: var(--pink);
    }

    .Bg-green {
        background-color: var(--green);
    }

    .Bg-orange {
        background-color: var(--orange);
    }

    .Box-one:hover {
        transform: scale(1.05);
    }

    .MainIcon img {
        max-width: 50px;
        margin-top: 15px;
    }

    ::selection {
        background-color: #0a0e13;
        color: #e8e6e3;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 4px;
        background-color: #fff;
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(30, 45, 77, .2);
        border-radius: 4px;
    }
    </style>

    <section class="Template-Fifth common_section" style="background-color: rgb(254, 253, 251);">
        <div class="container">
            <div class="is_animated">
                <h2 class="heading_animate">
                    <div style="position:relative;display:inline-block;" class="split-words">Why</div>
                    <div style="position:relative;display:inline-block;" class="split-words">Choose</div>
                    <div style="position:relative;display:inline-block;" class="split-words">Us?</div>
                </h2>
            </div>
            <div class="Choose-folder">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="Box-one Bg-blue">
                            <h4 class="para_animate">Top Clients</h4>
                            <p class="para_animate">Get matched to the right projects with trusted global clients.</p>
                            <span class="MainIcon"><img src="/static/ui23/images/OneIcon.svg" alt=""
                                    loading="lazy"></span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="Box-one Bg-pink">
                            <h4 class="para_animate">Managed Payment System</h4>
                            <p class="para_animate">Seamless on-time payment, invoicing and compliance.</p>
                            <span class="MainIcon"><img src="/static/ui23/images/TwoIcon.svg" alt=""
                                    loading="lazy"></span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="Box-one Bg-green">
                            <h4 class="para_animate">Exclusive Projects</h4>
                            <p class="para_animate">High-quality, exclusive projects, handpicked for you.</p>
                            <span class="MainIcon"><img src="/static/ui23/images/ThreeIcon.svg" alt=""
                                    loading="lazy"></span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="Box-one Bg-orange">
                            <h4 class="para_animate">Expert Support</h4>
                            <p class="para_animate">Get instant project and platform support anytime.</p>
                            <span class="MainIcon"><img src="/static/ui23/images/FourIcon.svg" alt=""
                                    loading="lazy"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>