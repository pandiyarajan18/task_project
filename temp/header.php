<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nashi Informatics Solutions Pvt Ltd</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 80px 0 0 0; /* Space for fixed navbar */
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #34495E; /* Dark navy background */
            padding: 15px 20px;
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
            margin: 0 auto;
            width: 100%;
        }

        .navbar .logo {
            font-size: 1.8rem;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .navbar .nav-links a {
            color: #ECF0F1;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar .nav-links a.active {
            background-color: #FFD700; /* Gold background for active link */
            color: #2C3E50; /* Darker text color for active link */
            font-weight: bold;
        }

        .navbar .nav-links a:hover {
            background-color: #FFD700; /* Gold background on hover */
            color: #2C3E50; /* Darker text color on hover */
            font-weight: bold;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .navbar .container {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar .nav-links {
                flex-direction: column;
                width: 100%;
                display: none;
            }

            .navbar .nav-links.active {
                display: flex;
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

        @media (min-width: 769px) {
            .navbar .hamburger {
                display: none;
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
                <li><a href="registration.php">Registration</a></li>
            </ul>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        // Highlight the active link based on the current page URL
        document.addEventListener("DOMContentLoaded", function () {
            const currentPath = window.location.pathname.split("/").pop(); // Get the current page's filename
            const navLinks = document.querySelectorAll('.nav-links a');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active'); // Add 'active' class to the current link
                }
            });
        });
    </script>

    <!-- Main Content Goes Here -->

</body>
</html>
