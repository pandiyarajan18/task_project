<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap'); /* Importing Google Font */

    .why-us {
        font-family: 'Poppins', sans-serif; /* Applying Poppins font to the section */
        background: linear-gradient(135deg, #ffffff, #f2f2f2); /* Soft gradient background for a modern feel */
        padding: 50px 30px; /* Reduced padding for a more compact design */
        text-align: center;
        animation: fadeIn 1s ease; /* Smooth fade-in animation */
        border-radius: 15px; /* Reduced rounded corners for a sleek look */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Slightly reduced shadow for subtle depth */
        margin: 30px auto; /* Reduced space between sections and centering */
        max-width: 800px; /* Limit the width for better readability */
    }

    .why-us h2 {
        font-size: 2.5rem; /* Reduced font size for the heading */
        margin-bottom: 25px; /* Reduced space below the heading */
        font-weight: 600; /* Keep heading bold */
        letter-spacing: 0.8px; /* Slightly reduced letter spacing */
        text-transform: uppercase; /* Uppercase heading for emphasis */
    }

    .why-us ul {
        list-style-type: none; /* Remove default list style */
        padding: 0; /* Remove default padding */
    }

    .why-us li {
        font-size: 1.2rem; /* Reduced font size for list items */
        margin: 15px 0; /* Reduced space between list items */
        text-align: left; /* Align text to the left */
        display: flex; /* Use flexbox for better alignment */
        align-items: center; /* Vertically center the icon and text */
        line-height: 1.6; /* Reduce line height for compactness */
        transition: all 0.3s ease; /* Smooth transition on hover */
    }

    .why-us li:hover {
        transform: translateX(8px); /* Slight movement on hover for interactivity */
    }

    .why-us li::before {
        content: "✔"; /* Add a checkmark before each list item */
        color: #28a745; /* Green color for the checkmark to indicate positivity */
        font-weight: bold;
        margin-right: 10px; /* Reduced space between the icon and the text */
        font-size: 1.3rem; /* Reduced icon size for better balance */
    }

    .why-us li strong {
        font-weight: 600; /* Use medium-heavy font weight for strong text */
    }
</style>

<section class="why-us">
    <h2>Why Choose Us?</h2>
    <ul>
        <li><strong>Expert Team:</strong> Our team stays updated with the latest trends and techniques.</li>
        <li><strong>Customized Solutions:</strong> We tailor our services to meet your business goals.</li>
        <li><strong>Proven Results:</strong> We have a track record of delivering measurable results.</li>
    </ul>
</section>
