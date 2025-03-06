<!DOCTYPE html>
<html>
<head>
    <title>Login Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        h1 {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <h1>Login Notification</h1>
    <p>Hello {{ $fullName }},</p>
    <p>You have successfully logged in to your account.</p>
    <p>Login Time: {{ $loginTime }}</p>
    <p>If this was not you, please contact support immediately.</p>
</body>
</html>
