<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Page</title>
    <style>
        body{
            background: linear-gradient(135deg, #43d0c4ff 0%, #0b6e68ff 100%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container{
          background: #228da0ff;
          padding: 30px 26px 24px 26px;
          border-radius: 15px;
          box-shadow: 0 7px 25px rgba(4, 12, 33, 1);
          max-width: 400px;
          width: 100%;
          box-sizing: border-box;
        }
        .form-container h2{
            text-align: center;
            margin-top: 6px;
            color: #e4f7eeff;
            letter-spacing: 1px;
        }
        label{
            display: block;
            margin-top: 15px;
            font-weight: 510;   
            color: #333;
            font-size: 5em;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"]{
            width: 100%;
            padding: 8px 10px;
            margin-top: 6px;
            border: 1px solid #cfd8dc;
            border-radius: 6px;
            font-size: 1em; 
            background: #f7fafd;
            transition: border-color 0.2s;
            box-sizing: border-box;
        }
        button[type="submit"]{
            margin-top: 20px;
            width: 100%;
            padding: 10px 0;
            background: linear-gradient(90deg, #7de468ff 0%, #0dcb0dff 100%);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s;
            inset:0;
        }
        .error{
            color: #FF3838;
            font-size: 0.92em;
          
        }
        
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Practice Page</h2>
        <form id="registrationForm" autocomplete="off">
            <label>Full Name:
                <input type="text" id="fullName" name="fullName" required>
                <div class="error" id="fullNameError"></div>
            </label>
            <label>Email:
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError"></div>
            </label>
            <label>Phone Number:
                <input type="text" id="phoneNumber" name="phoneNumber" required>
                <div class="error" id="phoneNumberError"></div>
            </label>
            <label>Password:
                <input type="password" id="password" name="password" required>
                <div class="error" id="passwordError"></div>
            </label>
            <label>Confirm Password:
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <div class="error" id="confirmPasswordError"></div>
            </label>
            <button type="submit">Register</button>
            <div class="success" id="successMessage"></div>
        </form>
    </div>
    <script>
        const form = document.getElementById('registrationForm');
        const fullNameError = document.getElementById('fullNameError');
        const emailError = document.getElementById('emailError');
        const phoneNumberError = document.getElementById('phoneNumberError');
        const passwordError = document.getElementById('passwordError');
        const confirmPasswordError = document.getElementById('confirmPasswordError');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', function(e) {
            e.preventDefault();


            fullNameError.innerText = '';
            emailError.innerText = '';
            phoneNumberError.innerText = '';
            passwordError.innerText = '';
            confirmPasswordError.innerText = '';
            successMessage.innerText = '';

          
            const fullName = document.getElementById('fullName').value.trim();
            const email = document.getElementById('email').value.trim();
            const phoneNumber = document.getElementById('phoneNumber').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            let isValid = true;

            if (fullName === '') {
                fullNameError.innerText = 'Full Name is required.';
                isValid = false;
            }
            else if (!/^[A-Za-z\s]+$/.test(fullName)) {
                 fullNameError.innerText = 'Full Name must contain only letters and spaces.';
                 isValid = false;}

            if (!email.includes('@') || !email.includes('.')) {
                emailError.innerText = 'Please enter a valid email address.';
                isValid = false;
            }
            if (phoneNumber === '' || !/^\d{11}$/.test(phoneNumber)) {
                phoneNumberError.innerText = 'Please enter a valid 11-digit phone number.';
                isValid = false;
            }
            if (password.length < 6) {
                passwordError.innerText = 'Password must be at least 6 characters long.';
                isValid = false;
            }
            if (password !== confirmPassword) {
                confirmPasswordError.innerText = 'Passwords do not match.';
                isValid = false;
            }
            if (isValid) {
                successMessage.innerText = 'Registration successful!';
                form.reset();
            }
        });
    </script>
</body>
</html>
