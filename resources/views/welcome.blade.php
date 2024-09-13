<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with React</title>
    
    @viteReactRefresh
    @vite('resources/js/app.js')
</head>
<body>

    <div id="app">
        <h1>Welcome to Laravel 10 with React!</h1>

        <!-- React component will be injected here -->
        <div id="example"></div>
    </div>

</body>
</html>
