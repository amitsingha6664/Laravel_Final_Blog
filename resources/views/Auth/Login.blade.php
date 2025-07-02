<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8c0ff, #3f2b96); /* A nice gradient background */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Hide overflow for background animations */
            position: relative;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.15); /* Slightly transparent white */
            backdrop-filter: blur(10px); /* Frosted glass effect */
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeIn 1s ease-out;
            max-width: 450px; /* Max width for the card */
            width: 90%; /* Responsive width */
            color: #fff;
            position: relative;
            z-index: 2; /* Ensure it's above background elements */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card h2 {
            color: #fff;
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .form-floating > .form-control,
        .form-floating > .form-control-plaintext {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-bottom: 2px solid rgba(255, 255, 255, 0.7);
            color: #fff;
            transition: border-color 0.3s ease, background-color 0.3s ease;
            border-radius: 5px 5px 0 0;
            padding: 1rem .75rem; /* Adjust padding for better look */
        }

        .form-floating > .form-control:focus,
        .form-floating > .form-control-plaintext:focus {
            border-bottom-color: #66b2ff; /* Highlight on focus */
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: none; /* Remove default bootstrap shadow */
        }

        .form-floating > label {
            color: rgba(255, 255, 255, 0.7);
            transition: 0.3s ease all;
            padding: 1rem .75rem; /* Match input padding */
        }

        /* Label animation adjustment for Bootstrap's floating labels */
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label,
        .form-floating > .form-control-plaintext:focus ~ label,
        .form-floating > .form-control-plaintext:not(:placeholder-shown) ~ label,
        .form-floating > .form-select ~ label {
             color: #66b2ff; /* Change color on focus/content */
        }

        /* Placeholder color for inputs */
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-login {
            background: linear-gradient(90deg, #66b2ff, #3366ff); /* Button gradient */
            border: none;
            border-radius: 25px;
            color: #fff;
            font-size: 1.2em;
            font-weight: 600;
            padding: 12px 0;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-login:hover {
            background: linear-gradient(90deg, #3366ff, #0047b3); /* Darker on hover */
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            color: #fff; /* Ensure text color remains white on hover */
        }

        .btn-login:active {
            transform: translateY(0);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .forgot-password {
            display: block;
            margin-top: 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.9em;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #66b2ff;
        }

        /* Background animated elements */
        .shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 1; /* Below the login card */
        }

        .shapes div {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.1);
            animation: animate 25s linear infinite;
            bottom: -150px;
            border-radius: 50%; /* Make them circles */
        }

        .shapes div:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-delay: 0s; }
        .shapes div:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-delay: 2s; animation-duration: 12s; }
        .shapes div:nth-child(3) { left: 70%; width: 20px; height: 20px; animation-delay: 4s; }
        .shapes div:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-delay: 0s; animation-duration: 18s; }
        .shapes div:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-delay: 0s; }
        .shapes div:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-delay: 3s; }
        .shapes div:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-delay: 7s; }
        .shapes div:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-delay: 15s; animation-duration: 45s; }
        .shapes div:nth-child(9) { left: 20%; width: 15px; height: 15px; animation-delay: 2s; animation-duration: 35s; }
        .shapes div:nth-child(10) { left: 85%; width: 150px; height: 150px; animation-delay: 0s; animation-duration: 11s; }

        @keyframes animate {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; border-radius: 0; }
            100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; border-radius: 50%; }
        }
    </style>
</head>
<body>
    <div class="shapes">
        <div></div> <div></div> <div></div> <div></div> <div></div>
        <div></div> <div></div> <div></div> <div></div> <div></div>
    </div>

    <div class="login-card text-center">
        <h2 class="mb-4">লগইন</h2>
        <form action="#" method="">
            <div class="form-floating mb-3">
                <input type="text" name="Phone_Number" class="form-control" id="username" placeholder=" ">
                <label for="username">মোবাইল নাম্বার</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="Password" class="form-control" id="password" placeholder=" ">
                <label for="password">পাসওয়ার্ড</label>
            </div>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-login">লগইন করুন</button>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('Registration') }}" class="forgot-password">Create New Account</a>
                <a href="#" class="forgot-password">পাসওয়ার্ড ভুলে গেছেন?</a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Optional: You can add JavaScript here for form validation or submission.
        // For demonstration, a simple alert on successful login:
        document.querySelector('.btn-login').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'test' && password === '123') {
                alert('লগইন সফল হয়েছে!');
                // In a real application, you would redirect the user or perform other actions.
            } else {
                alert('ভুল ইউজারনেম বা পাসওয়ার্ড।');
            }
        });
    </script>
</body>
</html>