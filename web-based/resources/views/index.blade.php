<!DOCTYPE html>
<html lang="en" class="scroll-pt-[80px] scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRIMS</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/Ellipse.png')}}" type="image/x-icon">

    <!-- Google Fonts: Poppins/IBM Plex Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="min-h-screen max-w-full bg-[#F4F4F5]">

    <!-- Navbar Section -->
    @include('landingpages.partials.navbar')
    <!-- Navbar Section -->

    <main class="min-h-screen max-w-full bg-[#F4F4F5] flex-1 flex flex-col">
        <!-- Hero Section -->
        @include('landingpages.hero-section')
        <!-- Hero Section -->

        <!-- Steps Section -->
        @include('landingpages.step-section')
        <!-- Steps Section -->

        <!-- Barangay Certificates Section -->
        @include('landingpages.certificates-section')
        <!-- Barangay Certificates Section -->

        <!-- Blotter Section -->
        @include('landingpages.blotter-section')
        <!-- Blotter Section -->

        <!-- FAQ Section -->  
        @include('landingpages.faq-section')
        <!-- FAQ Section -->

        <!-- Create Account Section -->
        @include('landingpages.create-account-section')
        <!-- Create Account Section -->
    </main>

    <!-- Footer Section -->
    @include('landingpages.partials.footer')
    <!-- Footer Section -->

</body>
</html> 