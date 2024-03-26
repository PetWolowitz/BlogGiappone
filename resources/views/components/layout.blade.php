<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primaryCus">
    <x-navbar />
    <div class=" min-vh-100">
        {{$slot}}
    </div>
    
    <x-footer />
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</body>
</html>