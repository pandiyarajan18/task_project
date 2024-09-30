<?php include 'temp/header.php'; ?>


<div class="custom-page-container">

    <div class="unique-form-container">
        <form action="php/career_store.php" method="POST" enctype="multipart/form-data" class="unique-form">
            <div class="unique-form-group">
                <h2 class="unique-heading">Job Application</h2>

                <div class="unique-controls">
                    <input type="text" id="full_name" class="unique-input floatLabel" name="full_name" required>
                    <label for="full_name" class="unique-label">Full Name</label>
                </div>
                <div class="unique-controls">
                    <input type="email" id="email" class="unique-input floatLabel" name="email" required>
                    <label for="email" class="unique-label">Email Address</label>
                </div>
                <div class="unique-controls">
                    <input type="tel" id="phone" class="unique-input floatLabel" name="phone" required>
                    <label for="phone" class="unique-label">Phone Number</label>
                </div>
                <div class="unique-controls">
                    <select id="position" class="unique-select floatLabel" name="position" required>
                        <option value="">Select Position</option>
                        <option value="developer">Developer</option>
                        <option value="designer">Designer</option>
                        <option value="manager">Manager</option>
                    </select>
                    <label for="position" class="unique-label">Position</label>
                </div>

                <div class="unique-controls">
                    <textarea id="cover_letter" class="unique-textarea floatLabel" name="cover_letter"></textarea>
                    <label for="cover_letter" class="unique-label">Cover Letter</label>
                </div>
                <div class="unique-controls">
                    <input type="date" id="availability" class="unique-input floatLabel" name="availability" required>
                    <label for="availability" class="unique-label">Availability Date</label>
                </div>
            </div>
            <div class="unique-form-group">
                <button type="submit" value="Submit" class="unique-button">Apply Now</button>
            </div>
        </form>
    </div>

   \
    <?php include 'temp/footer.php'; ?>
    <script src="js/script.js" defer></script>
</div>