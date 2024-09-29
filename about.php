<?php include 'temp/header.php'; ?>

<style>
    .about-us {
    padding: 40px;
    background-color: #f9f9f9; /* Light background */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
}

.banner {
    text-align: center; /* Center text */
    margin-bottom: 40px;
}

.banner-headline {
    font-size: 24px; /* Large headline */
    color: #333;
    transition: color 0.3s ease; /* Transition on hover */
}

.banner-subheadline {
    font-size: 20px; /* Medium headline */
    color: #555;
    transition: color 0.3s ease; /* Transition on hover */
}

.banner-description {
    font-size: 16px; /* Normal text */
    color: #777;
}

.banner-images {
    display: flex;
    justify-content: center; /* Center images */
    gap: 20px; /* Space between images */
    margin-top: 20px;
}

.banner-images img {
    width: 100%; /* Responsive images */
    max-width: 400px; /* Max width for images */
    border-radius: 8px; /* Rounded corners */
    transition: transform 0.3s ease; /* Transition effect on hover */
}

.banner-images img:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
}

.company-profile {
    max-width: 800px; /* Limit width for readability */
    margin: 0 auto; /* Center alignment */
    text-align: justify; /* Justify text */
}

.profile-box {
    background-color: #ffffff; /* White background for profile box */
    padding: 20px; /* Inner padding */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Box shadow */
    transition: transform 0.3s ease; /* Transition effect */
}

.profile-box:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}

.transformation-quote {
    text-align: center; /* Center text */
    margin-top: 40px; /* Space above */
}

.transformation-quote h2 {
    font-size: 24px; /* Headline size */
    color: #333;
}

.transformation-quote img {
    width: 100%; /* Responsive image */
    max-width: 600px; /* Max width */
    border-radius: 8px; /* Rounded corners */
    margin: 20px 0; /* Space around image */
    transition: transform 0.3s ease; /* Transition effect */
}

.transformation-quote img:hover {
    transform: scale(1.05); /* Zoom effect on hover */
}

.transformation-box {
    background-color: #ffffff; /* White background for transformation box */
    padding: 20px; /* Inner padding */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Box shadow */
    transition: transform 0.3s ease; /* Transition effect */
}

.transformation-box:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}

.transformation-box ul {
    list-style: none; /* Remove bullets */
    padding: 0; /* Remove padding */
}

.transformation-box li {
    margin: 10px 0; /* Space between items */
    font-size: 16px; /* Normal text size */
    color: #555; /* Text color */
    transition: color 0.3s ease; /* Transition on hover */
}

.transformation-box li:hover {
    color: #007bff; /* Change color on hover */
}

</style>

<body>

    <section class="about-us">
        <div class="banner">
            <h2 class="banner-headline">Join us in creating a powerful digital marketing footprint together.</h2>
            <h3 class="banner-subheadline">Drive Growth with Digital Marketing</h3>
            <p class="banner-description">Customized campaigns designed to meet your unique business need.</p>
            
            <div class="banner-images">
                <img src="https://as1.ftcdn.net/v2/jpg/06/27/46/26/1000_F_627462657_e9GcVFJLiZ7VRDftHgCPdA2vaZgQaKl9.jpg" alt="Digital Marketing Banner Image 1" class="fade-in">
                <img src="https://as1.ftcdn.net/v2/jpg/05/52/74/84/1000_F_552748421_twUz7OpbxVm7Zr976kXmMlN5VxKF5BjJ.jpg" alt="Digital Marketing Banner Image 2" class="fade-in">
            </div>
        </div>
    
        <div class="company-profile fade-in">
            <h2>Company Profile</h2>
            <div class="profile-box">
                <p>Welcome to Nashi Informatics Solutions, your trusted partner in navigating the ever-evolving digital landscape. We’ve been dedicated to driving measurable results through innovative strategies and cutting-edge technologies. Our comprehensive services, including SEO, PPC advertising, social media marketing, content marketing, email marketing, and web design and development, are tailored to meet the unique needs of each client. We believe in a personalized approach, taking the time to understand your brand and goals to create customized strategies that deliver exceptional results. With a team of seasoned professionals and a commitment to transparency and excellence, we strive to be your trusted partner in navigating the digital landscape and achieving lasting success.</p>
            </div>
        </div>
    
        <div class="transformation-quote fade-in">
            <h2>“WE TRANSFORM YOUR IDEAS INTO TANGIBLE SUCCESS”</h2>
            <img src="https://as1.ftcdn.net/v2/jpg/07/55/55/62/1000_F_755556233_TdtSHQdYQlWsBdeup2SHbeUyeC05oHH7.jpg" alt="Transformation Image" class="fade-in">
            
            <div class="transformation-box">
                <ul>
                    <li>Equip entrepreneurs with the tools and strategies for digital success. We provide entrepreneurs with tailored digital marketing tools and strategies to help them thrive and achieve their business goals.</li>
                    <li>Unlock your brand’s full potential with powerful digital marketing strategies. We use advanced digital marketing strategies to maximize your brand's reach and impact.</li>
                    <li>Optimize your business processes with effective digital marketing solutions. We enhance your business efficiency through targeted and strategic digital marketing solutions.</li>
                    <li>Overcome digital hurdles with expert marketing strategies. We help you navigate and resolve digital marketing challenges with our expert strategies.</li>
                </ul>
            </div>
        </div>
    </section>
    

    <?php include 'temp/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>
