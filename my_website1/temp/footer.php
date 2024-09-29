<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nashi Informatics Solutions Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5; /* Light background */
        }

        footer {
            background-color: #2C3E50; /* Dark navy background */
            color: #ECF0F1; /* Light text color */
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
            background-color: #34495E; /* Slightly lighter than the footer */
            transition: background-color 0.3s; /* Transition for hover effect */
        }

        .footer-section:hover {
            background-color: #3B5998; /* Light blue on hover */
        }

        .footer-section h2 {
            margin-bottom: 15px;
            color: #FFD700; /* Gold color for headings */
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
            color: #ECF0F1; /* Light grey for links */
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #FFD700; /* Gold color on hover */
        }

        .socials {
            margin-top: 20px;
        }

        .socials a {
            margin: 0 10px;
            color: #ECF0F1; /* Light grey for social icons */
            font-size: 24px;
            transition: color 0.3s;
        }

        .socials a:hover {
            color: #FFD700; /* Gold color on hover */
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #BDC3C7; /* Light border on top */
            margin-top: 20px;
        }

        .footer-bottom p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Footer Section -->
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

</body>
</html>
