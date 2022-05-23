<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
</head>
<body>
    <h1>Newsletter Email</h1>
    <h2>Hi {{ !empty($details['admin']) ? $details['admin'] : 'Dear subscriber'}}</h2>
    <p>{{  $details['body'] }}</p>
</body>
</html>
