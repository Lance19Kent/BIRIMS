<!DOCTYPE html>
<html lang="en" class="scroll-pt-[80px] scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRIMS</title>
    <link rel="icon" href="{{asset('img/Ellipse.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="/web-based/resources/css/app.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="min-h-screen w-full bg-[#F4F4F5]">
    @include('landingpages.partials.navbar')
    <main class="min-h-screen w-full bg-[#F4F4F5] flex-1 flex flex-col">
        @include('landingpages.hero-section')
        @include('landingpages.step-section')
        @include('landingpages.certificates-section')
        @include('landingpages.blotter-section')
        @include('landingpages.faq-section')
        @include('landingpages.create-account-section')
    </main>
    @include('landingpages.partials.footer')
</body>
</html> 