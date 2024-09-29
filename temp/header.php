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
        padding-top: 80px; /* Space for fixed navbar */
    }

    /* Navbar */
    .navbar {
        background-color: #34495E; /* Dark navy background */
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
        max-width: 1200px; /* Limit the width for better appearance */
        margin: 0 auto; /* Center the container */
        width: 100%;
    }

    .navbar .logo {
        font-size: 1.8rem;
        text-decoration: none;
        color: #FFD700; /* Gold color for logo */
        font-weight: 700; /* Bold logo */
    }

    .navbar .nav-links {
        list-style: none;
        display: flex;
        gap: 30px; /* Increased gap for spacing */
    }

    .navbar .nav-links a {
        color: #ECF0F1; /* Light color for links */
        text-decoration: none;
        padding: 8px 15px; /* Add some padding for better click area */
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s, color 0.3s; /* Smooth transitions */
    }

    .navbar .nav-links a:hover {
        background-color: #FFD700; /* Gold background on hover */
        color: #2C3E50; /* Darker text color on hover */
        font-weight: bold; /* Make text bold on hover */
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .navbar .container {
            flex-direction: column; /* Stack items vertically */
            align-items: flex-start; /* Align items to the start */
        }

        .navbar .nav-links {
            flex-direction: column; /* Stack links vertically */
            width: 100%; /* Full width for nav links */
            display: none; /* Hide by default */
        }

        .navbar .nav-links.active {
            display: flex; /* Show links when active */
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
            display: none; /* Hide hamburger on larger screens */
        }
    }


    /* Header starts */



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

        <script>
            function toggleMenu() {
                const navLinks = document.querySelector('.nav-links');
                navLinks.classList.toggle('active');
            }
        </script>

        <!-- Main Content Goes Here -->

    </body>
    </html>
