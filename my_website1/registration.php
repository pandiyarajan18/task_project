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

    /* Header ends */

    /* Footer */
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        /* Light background */
    }

    footer {
        background-color: #2C3E50;
        /* Dark navy background */
        color: #ECF0F1;
        /* Light text color */
        padding: 40px 20px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    .footer-section {
        flex: 1;
        min-width: 250px;
        padding: 20px;
        border-radius: 8px;
        background-color: #34495E;
        /* Slightly lighter than the footer */
        transition: background-color 0.3s;
        /* Transition for hover effect */
    }

    .footer-section:hover {
        background-color: #3B5998;
        /* Light blue on hover */
    }

    .footer-section h2 {
        margin-bottom: 15px;
        color: #FFD700;
        /* Gold color for headings */
    }

    .footer-section p {
        margin: 10px 0;
    }

    .footer-section ul {
        list-style-type: none;
        padding: 0;
    }

    .footer-section ul li {
        margin: 10px 0;
    }

    .footer-section a {
        color: #ECF0F1;
        /* Light grey for links */
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-section a:hover {
        color: #FFD700;
        /* Gold color on hover */
    }

    .socials {
        margin-top: 20px;
    }

    .socials a {
        margin: 0 10px;
        color: #ECF0F1;
        /* Light grey for social icons */
        font-size: 24px;
        transition: color 0.3s;
    }

    .socials a:hover {
        color: #FFD700;
        /* Gold color on hover */
    }

    .footer-bottom {
        text-align: center;
        padding: 20px 0;
        border-top: 1px solid #BDC3C7;
        /* Light border on top */
        margin-top: 20px;
    }

    .footer-bottom p {
        margin: 0;
    }

    /*  */

    /*  */

    /* Colors */
    /* ---------------------------------------- */
    :root {
        --border: #c6c6c6;
        --border-focus: #9FB1C1;
        --brand-color: #1b3d4d;
        --booking-green: #bdcc00;
        /* Not used in CSS */
        --asphalt: #506982;
    }

    * {
        box-sizing: border-box;
    }

    body {
        text-align: center;
        font-family: 'Lato', sans-serif;
        background-color: #f7f7f7;
    }

    a {
        text-decoration: none;
    }

    .info-text {
        text-align: left;
    }

    header {
        padding: 4em 10%;
    }

    /* Form Container */
    .form-container {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 1.1);
        max-width: 600px;
        /* Adjust width as needed */
        margin: 50px auto;
        /* Center the container */
        padding: 2.5em;
        /* Increased padding inside the container */
    }

    form {
        padding: 0;
        /* Remove padding since it's now in .form-container */
    }

    .form-group {
        margin-bottom: 20px;
    }

    h2.heading {
        font-size: 20px;
        /* Slightly larger font size */
        text-transform: uppercase;
        font-weight: 300;
        text-align: left;
        color: var(--asphalt);
        border-bottom: 1px solid var(--asphalt);
        padding-bottom: 5px;
        /* Increased padding */
        margin-bottom: 30px;
    }

    .controls {
        text-align: left;
        position: relative;
        margin-bottom: 18px;
    }

    input,
    textarea,
    select {
        padding: 14px;
        /* Increased padding */
        font-size: 16px;
        border: 1px solid var(--border);
        width: 100%;
        margin-bottom: 18px;
        color: #888;
        border-radius: 2px;
        transition: border-color .3s;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: var(--border-focus);
    }

    label {
        position: absolute;
        left: 10px;
        /* Adjusted for better alignment */
        top: 8px;
        /* Adjusted for better alignment */
        width: 60%;
        color: #999;
        font-size: 16px;
        display: inline-block;
        padding: 4px 10px;
        transition: color .3s, top .3s;
        background-color: rgba(255, 255, 255, 1);
    }

    label.active {
        top: -25px;
        color: #555;
    }

    button {
        cursor: pointer;
        background-color: var(--brand-color);
        border: none;
        color: #fff;
        padding: 12px 0;
        /* Consistent padding */
        width: 100%;
        /* Button takes full width */
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #163a40;
    }

    .grid {
        background: white;
        margin-bottom: 20px;
    }

    @media (max-width: 760px) {
        .col-1-4 {
            width: 100%;
            padding-right: 0;
        }
    }
</style>



</head>

<body>
    <nav class="navbar">
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
                <li><a href="career.php">Career</a></li>
                <li><a href="registration.php">Registration </a></li>

            </ul>
        </div>
    </nav>

    <div class="form-container">
    <form action="php/register_store.php" method="POST" enctype="multipart/form-data">
            <!-- General -->
            <div class="form-group">
                <h2 class="heading">Registration</h2>
                <div class="controls">
                    <input type="text" id="name" class="floatLabel" name="username" required>
                    <label for="name">Username</label>
                </div>
                <div class="controls">
                    <input type="email" id="email" class="floatLabel" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="controls">
                    <input type="password" id="password" class="floatLabel" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="controls">
                    <input type="text" id="first_name" class="floatLabel" name="first_name" required>
                    <label for="first_name">First Name</label>
                </div>
                <div class="controls">
                    <input type="text" id="last_name" class="floatLabel" name="last_name" required>
                    <label for="last_name">Last Name</label>
                </div>
                <div class="controls">
                    <input type="tel" id="phone" class="floatLabel" name="phone" required>
                    <label for="phone">Phone</label>
                </div>
            </div>
            <!-- Details -->
            <div class="form-group">
                <div class="grid">
                    <button type="submit" value="Submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll(".floatLabel");
            inputs.forEach(input => {
                input.addEventListener("focus", () => {
                    const label = input.nextElementSibling;
                    if (label) {
                        label.classList.add("active");
                    }
                });
                input.addEventListener("blur", () => {
                    if (input.value === "") {
                        const label = input.nextElementSibling;
                        if (label) {
                            label.classList.remove("active");
                        }
                    }
                });
            });
        });
    </script>
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Nashi Informatics Solutions Pvt Ltd</h2>
                <p>Welcome to Nashi Informatics Solutions, where creativity meets strategy to power your digital success. We aim to empower your business with cutting-edge digital marketing strategies that deliver excellence.</p>
            </div>
            <div class="footer-section links">
                <h2>Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section services">
                <h2>Services</h2>
                <ul>
                    <li>SEO</li>
                    <li>Content Marketing</li>
                    <li>Social Media Management</li>
                    <li>Web Development</li>
                    <li>Analytics</li>
                    <li>Email Marketing</li>
                    <li>Brand Strategy</li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact</h2>
                <p>Phone: [Your Phone Number]</p>
                <p>Email: [Your Email]</p>
                <p>Website: [Your Website]</p>
                <div class="socials">
                    <h3>Follow Us:</h3>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-twitter-square"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram-square"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Nashi Informatics Solutions Pvt Ltd. All rights reserved.</p>
        </div>
    </footer>