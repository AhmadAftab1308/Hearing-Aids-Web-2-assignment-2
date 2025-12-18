<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hearing Aids Price Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <div class="brand-block">
            <h1 class="site-title">Hearing Aids Price Guide</h1>
            <p class="site-subtitle">Compare types, prices and suitability ratings</p>
        </div>

        <nav class="main-nav" aria-label="Primary navigation">
            <a href="{{ route('hearing-aids.index') }}">Home</a>

            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>

                @if(auth()->user()->is_admin)
                    <a href="{{ route('admin.brands.index') }}">Manage Brands</a>
                    <a href="{{ route('hearing-aids.create') }}">Add Hearing Aid</a>
                @endif

                <form action="{{ route('logout') }}" method="POST" class="inline-form">
                    @csrf
                    <button type="submit" class="nav-button">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endguest
        </nav>
    </div>
</header>

<main class="container">
    @if(session('success'))
        <div class="alert success" role="status">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert error" role="alert">
            <strong>Please fix the following:</strong>
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ $slot }}
</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; {{ date('Y') }} Hearing Aids Price Guide.</p>
    </div>
</footer>
</body>
</html>
