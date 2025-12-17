<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - BIRIMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-3xl font-bold mb-6 text-center" style="color: var(--orange);">Forgot Password</h2>
            
            @if(session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('status') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <p class="text-gray-600 mb-6 text-center">Enter your email address and we'll send you a link to reset your password.</p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-orange-500"
                           placeholder="example@birims.com">
                </div>

                <button type="submit" 
                        class="w-full bg-orange-500 text-white py-3 rounded-lg hover:bg-orange-600 transition duration-150 font-semibold">
                    Send Reset Link
                </button>

                <div class="mt-6 text-center">
                    <a href="{{ url('/login') }}" class="text-orange-500 hover:underline font-semibold">
                        ← Back to Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>