<x-layout>
    <h2>Login</h2>

    <form method="POST" action="{{ route('login.store') }}" class="card form-card auth-card">
        @csrf

        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="field checkbox">
            <label>
                <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                Remember me
            </label>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Sign in</button>
            <a href="{{ route('register') }}" class="btn secondary">Create an account</a>
        </div>
    </form>
</x-layout>
