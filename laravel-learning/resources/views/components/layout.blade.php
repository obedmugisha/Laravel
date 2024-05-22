<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home Page</title>
</head>
<body>
<nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contacts">Contact Us</a>
       
    </nav>
    
    <!-- here we are passing slot to allow the file to pass value of that slot after -->
    
    {{$slot}}

</body>
</html>