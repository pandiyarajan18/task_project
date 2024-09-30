<?php
session_start(); // Start the session
include 'temp/header.php'; ?>



<div class="registration-container">

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
    <script src="js/script.js" defer></script>
    <script>
        // Display Sweet Alert based on session message
        window.onload = function() {
            <?php if (isset($_SESSION['message'])): ?>
                swal({
                    title: "Notification",
                    text: "<?php echo $_SESSION['message']; ?>",
                    icon: "<?php echo strpos($_SESSION['message'], 'Error') !== false ? 'error' : 'success'; ?>",
                    button: "OK",
                });
                <?php unset($_SESSION['message']); // Clear the message after displaying 
                ?>
            <?php endif; ?>
        };
    </script>

    <?php include 'temp/footer.php'; ?>
    <script src="js/script.js" defer></script>
</div>