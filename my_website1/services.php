<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nashi Informatics Solutions Pvt Ltd</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        /* Header starts */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            padding-top: 80px;
            /* Space for fixed navbar */
        }

        /* Navbar */
        .navbar {
            background-color: #34495E;
            /* Dark navy background */
            padding: 15px 20px;
            transition: background-color 0.3s;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            /* Limit the width for better appearance */
            margin: 0 auto;
            /* Center the container */
            width: 100%;
        }

        .navbar .logo {
            font-size: 1.8rem;
            text-decoration: none;
            color: #FFD700;
            /* Gold color for logo */
            font-weight: 700;
            /* Bold logo */
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
            /* Increased gap for spacing */
        }

        .navbar .nav-links a {
            color: #ECF0F1;
            /* Light color for links */
            text-decoration: none;
            padding: 8px 15px;
            /* Add some padding for better click area */
            border-radius: 5px;
            /* Rounded corners */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transitions */
        }

        .navbar .nav-links a:hover {
            background-color: #FFD700;
            /* Gold background on hover */
            color: #2C3E50;
            /* Darker text color on hover */
            font-weight: bold;
            /* Make text bold on hover */
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .navbar .container {
                flex-direction: column;
                /* Stack items vertically */
                align-items: flex-start;
                /* Align items to the start */
            }

            .navbar .nav-links {
                flex-direction: column;
                /* Stack links vertically */
                width: 100%;
                /* Full width for nav links */
                display: none;
                /* Hide by default */
            }

            .navbar .nav-links.active {
                display: flex;
                /* Show links when active */
            }

            .navbar .hamburger {
                display: flex;
                flex-direction: column;
                cursor: pointer;
            }

            .navbar .hamburger div {
                height: 3px;
                width: 25px;
                background: #ECF0F1;
                margin: 4px;
                transition: all 0.3s ease;
            }
        }

        /* Show hamburger menu */
        @media (min-width: 769px) {
            .navbar .hamburger {
                display: none;
                /* Hide hamburger on larger screens */
            }
        }

        /* Additional Header */
        header {
            background: white;
            color: rgb(16, 6, 6);
            padding: 1rem 0;
            text-align: center;
            position: sticky;
            top: 80px;
            /* Adjust for main navbar space */
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .secondary-navbar ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            /* Wrap links in smaller screens */
        }

        .secondary-navbar ul li {
            margin: 0 1rem;
        }

        .secondary-navbar a {
            color: #100202;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .secondary-navbar a:hover {
            color: #4CAF50;
        }

        /* Boxed Sections */
        section {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1.5rem;
            border: 1px solid #ddd;
            /* Border for box */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow for depth */
            background-color: #ffffff;
            /* Background color for box */
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        section:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            /* Shadow on hover */
            transform: translateY(-5px);
            /* Lift section slightly on hover */
        }

        section img {
            width: 100%;
            /* Make images responsive */
            max-width: 800px;
            /* Set a maximum width */
            height: auto;
            /* Maintain aspect ratio */
            margin: 1rem 0;
            /* Spacing above and below the image */
            border-radius: 10px;
            /* Rounded corners */
        }

        section h2 {
            color: #34495E;
            font-family: 'Montserrat', sans-serif;
        }

        section h3 {
            color: #2C3E50;
            font-weight: 700;
            margin-top: 1rem;
        }

        section p {
            color: #333;
        }

        section ul {
            margin-top: 1rem;
            list-style: disc;
            padding-left: 1.5rem;
        }

        section ul li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <nav class="navbar main-navbar">
        <div class="container">
            <a href="#" class="logo"><b>Nashi Informatics Solution</b></a>
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Why Choose Us</a></li>
                
            </ul>
        </div>
    </nav>

    <header class="secondary-navbar">
        <nav>
            <ul>
                <li><a href="#seo">SEO</a></li>
                <li><a href="#content-marketing">Content Marketing</a></li>
                <li><a href="#social-media">Social Media Management</a></li>
                <li><a href="#website-development">Website Development</a></li>
                <li><a href="#analytics">Analytics & Reporting</a></li>
                <li><a href="#email-marketing">Email Marketing</a></li>
                <li><a href="#brand-strategy">Brand Strategy</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="seo">
            <h2>Search Engine Optimization (SEO)</h2>
            <img src="https://media.istockphoto.com/id/1183594834/photo/search-engine-optimization-concept.jpg?s=1024x1024&w=is&k=20&c=7zIidaDWHI_miLEUm7E0Qc-dweh61qSDuBd4GrJ-NVM=" alt="SEO Concept">
            <h3>Elevate Your Digital Presence with Expert SEO Services</h3>
            <p>In today’s competitive digital landscape, having a robust SEO strategy is crucial for enhancing your online visibility and driving organic traffic to your website. At Nashi Informatics Solutions, we specialize in delivering comprehensive SEO solutions that elevate your brand’s presence on search engines.</p>
            <h4>Our SEO Services Include:</h4>
            <ul>
                <li>Keyword Research</li>
                <li>On-Page Optimization</li>
                <li>Technical SEO</li>
                <li>Content Creation</li>
                <li>Link Building</li>
                <li>Local SEO</li>
            </ul>
            <h4>Why Choose Us for Your SEO Needs?</h4>
            <ul>
                <li>Experienced Professionals</li>
                <li>Tailored Solutions</li>
                <li>Data-Driven Approach</li>
                <li>Transparent Reporting</li>
            </ul>
        </section>

        <section id="content-marketing">
            <h2>Content Marketing</h2>
            <img src="https://media.istockphoto.com/id/1480721358/photo/content-marketing-cycle-concept-social-networking-seo-customer-attraction-digital-content.jpg?s=1024x1024&w=is&k=20&c=CdhrtAQtjMHxXT24_ltMw9oUffgSHi5DaS27mDkocT8=" alt="Content Marketing Concept">
            <h3>Elevate Your Brand with Strategic Content Marketing</h3>
            <p>Content marketing is essential for driving engagement, building brand authority, and converting leads into loyal customers. At Nashi Informatics Solutions, we provide tailored content marketing solutions designed to enhance your online presence and achieve your business goals.</p>
            <h4>Our Content Marketing Services Include:</h4>
            <ul>
                <li>Strategic Planning</li>
                <li>Content Creation</li>
                <li>Content Distribution</li>
                <li>SEO Optimization</li>
                <li>Audience Engagement</li>
                <li>Performance Analytics</li>
            </ul>
            <h4>Why Choose Us for Your Content Marketing?</h4>
            <ul>
                <li>Expert Team</li>
                <li>Tailored Strategies</li>
                <li>Results-Driven</li>
                <li>End-to-End Service</li>
            </ul>
        </section>

        <section id="social-media">
            <h2>Social Media Management</h2>
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.3epr.com%2Fsocial-media-training%2F&psig=AOvVaw2ILSfNpzWyuYR85VrLB2xa&ust=1727609680854000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCKDisonG5YgDFQAAAAAdAAAAABAf">
            <h3>Maximize Your Reach with Effective Social Media Management</h3>
            <p>In an age where social media plays a pivotal role in marketing, it’s essential to have a strong and engaging presence on various platforms. Our social media management services at Nashi Informatics Solutions help brands build relationships and foster community engagement.</p>
            <h4>Our Social Media Management Services Include:</h4>
            <ul>
                <li>Social Media Strategy Development</li>
                <li>Content Creation</li>
                <li>Community Management</li>
                <li>Social Media Advertising</li>
                <li>Analytics and Reporting</li>
                <li>Brand Monitoring</li>
            </ul>
            <h4>Why Choose Us for Your Social Media Management?</h4>
            <ul>
                <li>Creative Team</li>
                <li>Data-Driven Strategies</li>
                <li>Responsive Management</li>
                <li>Continuous Improvement</li>
            </ul>
        </section>

        <section id="website-development">
            <h2>Website Development and Design</h2>
            <img src="https://media.istockphoto.com/id/1261872994/photo/web-development-concept.jpg?s=1024x1024&w=is&k=20&c=eTxT3l7zj-W4-wFNTm1j7_Yg0Hf5mTjSUmjByVRTCKk=" alt="Website Development">
            <h3>Build a Stunning Website That Converts</h3>
            <p>Your website is often the first impression customers have of your brand. At Nashi Informatics Solutions, we specialize in creating visually appealing, user-friendly websites that drive engagement and conversion.</p>
            <h4>Our Website Development Services Include:</h4>
            <ul>
                <li>Custom Website Design</li>
                <li>Responsive Web Development</li>
                <li>E-commerce Solutions</li>
                <li>Content Management Systems (CMS)</li>
                <li>Website Maintenance</li>
                <li>Performance Optimization</li>
            </ul>
            <h4>Why Choose Us for Your Website Development?</h4>
            <ul>
                <li>Skilled Developers</li>
                <li>User-Centric Designs</li>
                <li>Agile Development Process</li>
                <li>Post-Launch Support</li>
            </ul>
        </section>

        <section id="analytics">
            <h2>Analytics and Reporting</h2>
            <img src="https://media.istockphoto.com/id/1471911248/photo/data-analysis-concept.jpg?s=1024x1024&w=is&k=20&c=MOv-QhH0j_YsZim5Hw7pOfi4F-a6ALuG4-5a1KDNhiY=" alt="Analytics and Reporting">
            <h3>Transform Data into Actionable Insights</h3>
            <p>Understanding your audience and their behavior is essential for driving success. Our analytics and reporting services help you make data-driven decisions to optimize your marketing efforts.</p>
            <h4>Our Analytics Services Include:</h4>
            <ul>
                <li>Web Analytics</li>
                <li>Performance Tracking</li>
                <li>Custom Reporting</li>
                <li>Competitor Analysis</li>
                <li>Data Visualization</li>
                <li>Insights and Recommendations</li>
            </ul>
            <h4>Why Choose Us for Your Analytics Needs?</h4>
            <ul>
                <li>Expert Analysts</li>
                <li>Tailored Reporting</li>
                <li>Actionable Insights</li>
                <li>Continuous Improvement</li>
            </ul>
        </section>

        <section id="email-marketing">
            <h2>Email Marketing</h2>
            <img src="https://media.istockphoto.com/id/1250961072/photo/woman-using-smartphone-on-desk.jpg?s=1024x1024&w=is&k=20&c=UQsF9dsdLrI_03QsDfUTGZ8y3LQ2sY1og8Im8xHsyP0=" alt="Email Marketing">
            <h3>Engage and Retain Customers with Effective Email Marketing</h3>
            <p>Email marketing remains one of the most effective channels for reaching and engaging customers. Our services help you craft compelling email campaigns that resonate with your audience and drive conversions.</p>
            <h4>Our Email Marketing Services Include:</h4>
            <ul>
                <li>Email Campaign Strategy</li>
                <li>Template Design</li>
                <li>Audience Segmentation</li>
                <li>A/B Testing</li>
                <li>Performance Tracking</li>
                <li>List Management</li>
            </ul>
            <h4>Why Choose Us for Your Email Marketing?</h4>
            <ul>
                <li>Creative Approach</li>
                <li>High Open Rates</li>
                <li>Targeted Campaigns</li>
                <li>Performance Analysis</li>
            </ul>
        </section>

        <section id="brand-strategy">
            <h2>Brand Strategy</h2>
            <img src="https://media.istockphoto.com/id/1277632415/photo/business-team-working-with-digital-tablet-in-office-meeting.jpg?s=1024x1024&w=is&k=20&c=0WIlb1V2HpDqP48xX7Rv1t2iyJHGmD4o1zV4z4MP4zE=" alt="Brand Strategy">
            <h3>Craft a Brand That Resonates</h3>
            <p>A strong brand strategy is essential for establishing your identity and connecting with your audience. Our team works with you to develop a cohesive brand strategy that reflects your values and resonates with your target market.</p>
            <h4>Our Brand Strategy Services Include:</h4>
            <ul>
                <li>Brand Identity Development</li>
                <li>Market Research</li>
                <li>Brand Positioning</li>
                <li>Messaging and Voice</li>
                <li>Visual Branding</li>
                <li>Brand Guidelines</li>
            </ul>
            <h4>Why Choose Us for Your Brand Strategy?</h4>
            <ul>
                <li>Innovative Thinking</li>
                <li>Data-Driven Insights</li>
                <li>Collaborative Process</li>
                <li>Long-Term Vision</li>
            </ul>
        </section>

        <!-- Add more sections as needed -->
    </main>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>

</html>