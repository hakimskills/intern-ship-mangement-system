<!DOCTYPE html>
<html>
<head>
    <title>Employee Accepted</title>
</head>
<body>
<p>Hello the internship manager of  {{ $employee->nameComp }},</p>
<p> You can now log in using the following credentials:</p>
<ul>
    <li>Email: {{ $employee->manager_email }}</li>
    <li>Password: {{ $password }}</li>
</ul>
<p>Thank you for joining !</p>
</body>
</html>
