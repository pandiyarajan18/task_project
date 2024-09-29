<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
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
    <div class="form-container">
        <form action="submit_application.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <h2 class="heading">Job Application</h2>
                <div class="controls">
                    <input type="text" id="full_name" class="floatLabel" name="full_name" required>
                    <label for="full_name">Full Name</label>
                </div>
                <div class="controls">
                    <input type="email" id="email" class="floatLabel" name="email" required>
                    <label for="email">Email Address</label>
                </div>
                <div class="controls">
                    <input type="tel" id="phone" class="floatLabel" name="phone" required>
                    <label for="phone">Phone Number</label>
                </div>
                <div class="controls">
                    <select id="position" class="floatLabel" name="position" required>
                        <option value="">Select Position</option>
                        <option value="developer">Developer</option>
                        <option value="designer">Designer</option>
                        <option value="manager">Manager</option>
                        <!-- Add more positions as needed -->
                    </select>
                    <label for="position">Position</label>
                </div>
                <div class="controls">
                    <input type="file" id="resume" name="resume" accept=".pdf,.docx" required>
                    <label for="resume">Upload Resume</label>
                </div>
                <div class="controls">
                    <textarea id="cover_letter" class="floatLabel" name="cover_letter" placeholder="Cover Letter"></textarea>
                    <label for="cover_letter">Cover Letter</label>
                </div>
                <div class="controls">
                    <input type="date" id="availability" class="floatLabel" name="availability" required>
                    <label for="availability">Availability Date</label>
                </div>
            </div>
            <!--  Details -->
            <div class="form-group">
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4">Apply Now</button>
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
</body>

</html>