<?php include 'temp/header.php'; ?>


<style>
     /* Banner Section */
     .banner {
            background: url('https://as1.ftcdn.net/v2/jpg/07/59/71/60/1000_F_759716062_EG01gkOAc62f3Iv7hbQL9KLRLqHbUCRn.jpg') no-repeat center center/cover;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            position: relative; /* Relative positioning for animations */
            overflow: hidden;
            opacity: 0; /* Initial opacity for animation */
            animation: fadeIn 1s ease forwards, slideIn 0.5s ease forwards; /* Multiple animations */
        }
        
        /* Fade-in animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Slide-in animation */
        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .banner-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 8px;
            animation: fadeIn 1s ease 0.5s forwards; /* Delay added */
            transform: translateY(50px); /* Start below the screen */
            opacity: 0; /* Initial opacity for animation */
            transition: transform 0.5s ease, opacity 0.5s ease; /* Smooth transition for transform and opacity */
        }
        
        /* Add hover effect on banner content */
        .banner-content:hover {
            transform: translateY(0); /* Move to original position */
            opacity: 1; /* Fade in */
        }
        
        /* Button Animation */
        .button {
            background: #00bcd4;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s; /* Transition for scale effect */
        }
        
        .button:hover {
            background: #0097a7;
            transform: scale(1.05); /* Scale effect */
        }
        
        /* Additional animations for text */
        .banner h1 {
            animation: slideIn 1s ease forwards; /* Slide in for heading */
            transform: translateY(-30px); /* Start higher */
            opacity: 0; /* Initial opacity */
            animation-delay: 0.5s; /* Delay for heading */
        }
        
        .banner p {
            animation: slideIn 1s ease forwards; /* Slide in for paragraph */
            transform: translateY(30px); /* Start lower */
            opacity: 0; /* Initial opacity */
            animation-delay: 0.8s; /* Delay for paragraph */
        }
        
        
        
                /* Description Section */
                .description {
                    padding: 50px 20px;
                    background: #f4f4f4;
                    text-align: center;
                    animation: slideInUp 1s ease forwards; /* Slide-in animation */
                    opacity: 0; /* Initial opacity for animation */
                }
        
                @keyframes slideInUp {
                    0% {
                        transform: translateY(50px);
                        opacity: 0;
                    }
                    100% {
                        transform: translateY(0);
                        opacity: 1;
                    }
                }
        
                .description img {
                    width: 100%;
                    max-width: 600px;
                    height: auto;
                    margin: 20px 0;
                    border-radius: 8px; /* Added rounded corners */
                    transition: transform 0.3s, filter 0.3s; /* Transition for filter */
         
                }
        
                .description img:hover {
                    transform: scale(1.05);
         
                }
        
                /* Key Digital Offerings Section */
                .offerings {
                    padding: 50px 20px;
                }
        
                .offerings h2 {
                    text-align: center;
                    margin-bottom: 20px;
                }
        
                .offering-list {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 20px;
                    justify-content: center;
                    opacity: 0; /* Initial opacity for animation */
                    animation: fadeIn 1s ease forwards; /* Fade-in animation */
                }
        
                .offering-item {
                    background: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    max-width: 300px;
                    text-align: center;
                    transition: transform 0.3s; /* Added transition */
                    position: relative; /* Relative positioning for animations */
                    opacity: 0; /* Initial opacity for animation */
                    animation: slideIn 0.5s forwards; /* Slide-in animation for each item */
                }
        
                @keyframes slideIn {
                    0% {
                        transform: translateY(50px);
                        opacity: 0;
                    }
                    100% {
                        transform: translateY(0);
                        opacity: 1;
                    }
                }
        
                .offering-item:hover {
                    transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
                }
        
                /* Why Choose Us Section */
                .why-us {
                    background: #e0f7fa;
                    padding: 50px 20px;
                    text-align: center;
                    animation: fadeIn 1s ease; /* Fade-in animation */
                }
                
        
        
        
        
        /* Section styles */
        .why-choose-us {
            padding: 50px 20px;
            background: #f9f9f9; /* Light background for contrast */
            text-align: center;
            position: relative; /* Position relative for child animations */
        }
        
        /* Title and paragraph styles */
        .why-choose-us h2,
        .why-choose-us h3 {
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
            transition: transform 0.5s ease, color 0.5s ease; /* Transition on hover */
        }
        
        .why-choose-us p {
            transition: transform 0.5s ease;
        }
        
        /* Fade-in animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s forwards;
            animation-delay: 0.3s; /* Delay for a staggered effect */
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* List styles */
        .why-choose-us ul {
            list-style: none;
            padding: 0;
            text-align: left; /* Align text left for better readability */
            margin: 0 auto; /* Center the list */
            max-width: 800px; /* Limit the width */
        }
        
        .why-choose-us ul li {
            margin-bottom: 15px; /* Space between list items */
            padding: 10px; /* Add padding for clickable effect */
            border: 1px solid transparent; /* Initial border */
            border-radius: 5px; /* Rounded corners */
            transition: border-color 0.3s ease, background-color 0.3s ease; /* Transition for hover */
        }
        
        /* Hover effect for list items */
        .why-choose-us ul li:hover {
            border-color: #007BFF; /* Change border color on hover */
            background-color: rgba(0, 123, 255, 0.1); /* Light background on hover */
        }
        
        /* Key benefits styles */
        .key-benefits {
            margin-top: 30px; /* Space above the benefits section */
        }
        
            
</style>
<body>

    <!-- Banner Section -->
    <header class="banner">
        <div class="banner-content">
            <h1>Join us in creating a powerful digital marketing footprint together.</h1>
            <p>Elevate Your Brand with Digital Marketing. Maximize your online presence and drive measurable results with our expert strategies.</p>
            <a href="#about-us" class="button">Explore Our Solutions</a>
        </div>
    </header>

    <!-- Description Section -->
    <section  class="description">
        <div class="description-content">
            <img src="https://as1.ftcdn.net/v2/jpg/02/56/22/94/1000_F_256229414_60bVi1yHUvD1lYuCu5avf1QhgeAIelFa.jpg" alt="Description Image">
            <h2>Digital Marketing Services</h2>
            <p>Unlock the potential of your business with our comprehensive digital marketing services. Our team of experts specializes in creating tailored strategies that drive traffic, increase engagement, and boost conversions. Whether you're a startup or an established enterprise, we offer solutions to fit your unique needs.</p>
        </div>
    </section>

    <!-- Key Digital Offerings Section -->
    <section class="offerings">
        <h2>Our Key Digital Offerings</h2>
        <div class="offering-list">
            <div class="offering-item">
                <h3>Search Engine Optimization (SEO)</h3>
                <p>Enhance your online visibility and rank higher on search engines with our cutting-edge SEO techniques.</p>
            </div>
            <div class="offering-item">
                <h3>Pay-Per-Click (PPC) Advertising</h3>
                <p>Maximize your ROI with our targeted PPC campaigns, reaching the right audience at the right time.</p>
            </div>
            <div class="offering-item">
                <h3>Social Media Marketing</h3>
                <p>Engage and grow your audience on platforms like Facebook, Instagram, Twitter, and LinkedIn.</p>
            </div>
            <div class="offering-item">
                <h3>Content Marketing</h3>
                <p>Attract, inform, and convert your audience with high-quality content, from blog posts to videos.</p>
            </div>
            <div class="offering-item">
                <h3>Email Marketing</h3>
                <p>Build relationships and drive sales with targeted email campaigns that reach your audience directly.</p>
            </div>
            <div class="offering-item">
                <h3>Analytics and Reporting</h3>
                <p>Make data-driven decisions with our comprehensive analytics and reporting services.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section  class="why-us">
        <h2>Why Choose Us?</h2>
        <ul>
            <li><strong>Expert Team:</strong> Our team stays updated with the latest trends and techniques.</li>
            <li><strong>Customized Solutions:</strong> We tailor our services to meet your business goals.</li>
            <li><strong>Proven Results:</strong> We have a track record of delivering measurable results.</li>
        </ul>
    </section><!-- Why Choose Nashi Informatics Solutions Section -->





<!-- Why Choose Us Section -->

<section class="why-choose-us">
    <h2 class="fade-in">Why Choose Nashi Informatics Solutions as Your Digital Marketing Services Agency?</h2>
    <p class="fade-in">Choosing the right digital marketing partner can make all the difference in achieving your business goals. Here’s why Nashi Informatics Solutions stands out:</p>
    
    <div class="why-choose-columns">
        <div class="left-column fade-in">
            <ul>
                <li class="box"><strong>Expertise and Experience:</strong> Our team of seasoned digital marketing professionals brings years of experience and a wealth of knowledge across various industries. We stay up-to-date with the latest trends and best practices to ensure your campaigns are always ahead of the curve.</li>
                <li class="box"><strong>Tailored Strategies:</strong> We understand that every business is unique. That’s why we take the time to understand your specific needs, challenges, and goals. Our customized strategies are designed to meet your individual requirements and deliver the best possible results.</li>
                <li class="box"><strong>Proven Track Record:</strong> Our portfolio speaks for itself. We have a history of driving successful campaigns that generate real, measurable results. From increased traffic and engagement to higher conversion rates, our clients see the difference we make.</li>
            </ul>
        </div>
        <div class="right-column fade-in">
            <ul>
                <li class="box"><strong>Comprehensive Services:</strong> We offer a full suite of digital marketing services, including SEO, PPC advertising, social media marketing, content marketing, email marketing, and analytics. This holistic approach ensures all aspects of your online presence work together seamlessly.</li>
                <li class="box"><strong>Data-Driven Approach:</strong> We believe in the power of data. Our campaigns are built on thorough research and continuous analysis, allowing us to make informed decisions and optimize your strategies for maximum effectiveness.</li>
            </ul>
        </div>
    </div>
    
    <h3 class="fade-in">Driving Business Growth with Innovative Digital Marketing Solutions</h3>
    <p class="fade-in">Achieving business growth through digital marketing services, Nashi Informatics Solutions offers tailored strategies that boost your online presence and engage your target audience. Our comprehensive approach includes SEO, PPC advertising, social media marketing, content creation, and email campaigns, all designed to deliver measurable results.</p>
    <p class="fade-in">By utilizing data-driven insights and innovative techniques, we help your business reach its full potential and sustain growth in a competitive digital landscape.</p>
    
    <img src="https://t4.ftcdn.net/jpg/06/85/50/95/240_F_685509523_hUN5TZ08gzw7s216Dw1QXVzYdtqzggOq.jpg" alt="Digital Marketing Strategy" class="fade-in" style="width: 100%; max-width: 600px; border-radius: 8px; margin: 20px 0;">
    
    <div class="key-benefits fade-in">
        <h3>Key Benefits</h3>
        <p><strong>Contribution to Growth:</strong> 50+</p>
        <p><strong>Years of Experience:</strong> 50+</p>
        <p><strong>Clients Served:</strong> 11+</p>
    </div>
</section>



    


    <!-- Contact Section -->
    <section  class="contact">
        <h2>Contact Us</h2>
        <p>Get in touch with us to learn more about how we can help your business grow through our digital marketing solutions.</p>
        <a href="mailto:info@nashiinformatics.com" class="button">Email Us</a>
    </section>
    <script>
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    };
</script>

    <!-- Footer -->
    <?php include 'temp/footer.php'; ?>
    <script src="js/script.js"></script>
</body>

</html>
