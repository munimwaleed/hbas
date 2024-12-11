<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel positions</title>
    @Vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
   
    <div class="px-10">
        <nav class="flex justify-between items-center py-4">
        <div>
            <a href="/" >
                <img src="{{ Vite::asset('resources/images/logo.jpg')}}" alt="logo" class="logo">
            </a> 
        </div>

        <div class="links">
            <a href="">Jobs</a>
            <a href="">Career</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>

        <div> 
            <a href="">Post a Job</a>
        </div>
        </nav>

        <main>
            {{$slot}}
        </main>
    </div>

</body>
</html>