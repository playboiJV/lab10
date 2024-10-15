<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            text-align: center;
        }
        .welcome-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h1 {
            color: #333;
            font-size: 28px;
        }
        .welcome-container p {
            color: #555;
            font-size: 16px;
            margin: 5px 0;
        }
        .welcome-container .buttons {
            margin-top: 20px;
        }
        .welcome-container button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
        }
        .welcome-container button:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to IPT10</h1>
        <p>Name: Joshua Visbal</p>
        <p>Email: jv@gmail.com</p>
        <div class="buttons">
            <button><a href="/registration-form">Register</a></button>
            <button><a href="/login-form">Login</a></button>
        </div>
    </div>
</body>
</html>

