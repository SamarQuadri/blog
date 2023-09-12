<!DOCTYPE html>
<html>
<head>
    <title>Password Confirmation Example</title>
   
</head>
<body>
    <h1>Sign Up</h1>
    <form action="process_signup.php" method="POST" onsubmit="return validateForm()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <span id="password_error" class="error-message"></span>
        <br>
        <button type="submit">Sign Up</button>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var passwordError = document.getElementById("password_error");

            if (password !== confirmPassword) {
                passwordError.textContent = "Passwords do not match!";
                return false; // Prevent form submission
            } else {
                passwordError.textContent = ""; // Clear error message
                return true; // Allow form submission
            }
        }
    </script>
</body>
</html>
