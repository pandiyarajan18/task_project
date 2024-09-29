<?php include 'temp/header.php'; ?>

    <style>
        
        /* Banner */
        .banner {
            background-image: url('https://t4.ftcdn.net/jpg/04/81/72/77/240_F_481727770_1u2ylNpie8WRosMVbv1COXDnnEK6ofwh.jpg');
            height: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
        }

        .banner h1 {
            font-size: 2.5rem;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .banner p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Contact Section */
        .contact {
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 900px;
        }

        .contact h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .contact-info {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .info-box {
            flex: 1 1 30%;
            text-align: center;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            margin: 10px;
            transition: transform 0.3s;
        }

        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .info-box i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .contact-form input, .contact-form textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            transition: border-color 0.3s;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .contact-form button {
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            .navbar .nav-links {
                flex-direction: column;
                display: none;
                width: 100%;
            }

            .navbar .nav-links.active {
                display: flex;
            }

            .info-box {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

   

    <div class="banner">
        <h1>Start Your Journey to Digital Marketing Excellence</h1>
        <p>Get in touch today!</p>
    </div>

    <div class="contact">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <div class="info-box">
                <i class="fas fa-phone"></i>
                <h4>Phone</h4>
                <p>+1 (234) 567-8901</p>
            </div>
            <div class="info-box">
                <i class="fas fa-envelope"></i>
                <h4>Email</h4>
                <p>info@nashiinformatics.com</p>
            </div>
            <div class="info-box">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Address</h4>
                <p>1234 Street Name, City, State, Zip</p>
            </div>
        </div>
        <h3>Business Hours</h3>
        <p>Monday to Saturday: 9:30 AM - 6:00 PM</p>
        <p>Sunday: Closed</p>
        
        <h3>Follow Us</h3>
        <p>Stay connected with us on social media:</p>
        <p>
            <a href="#" class="fab fa-facebook" style="color:#007bff; padding: 0 10px;"></a>
            <a href="#" class="fab fa-twitter" style="color:#007bff; padding: 0 10px;"></a>
            <a href="#" class="fab fa-linkedin" style="color:#007bff; padding: 0 10px;"></a>
            <a href="#" class="fab fa-instagram" style="color:#007bff; padding: 0 10px;"></a>
        </p>

        <h3>Contact Form</h3>
        <form class="contact-form">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="tel" placeholder="Phone" required>
            <textarea placeholder="Message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>

        <h3>Visit Us</h3>
        <p>We’d love to meet you in person! Drop by our office during business hours.</p>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509831!2d144.95373631531584!3d-37.81627997975103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f1c66cf%3A0xf2f1ec8f87f5c9d5!2sNashi%20Informatics%20Solution!5e0!3m2!1sen!2sus!4v1632200245434!5m2!1sen!2sus" 
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <?php include 'temp/footer.php'; ?>
</body>
</html>
