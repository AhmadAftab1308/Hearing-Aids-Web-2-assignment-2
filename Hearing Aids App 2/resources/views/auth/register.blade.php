<x-layout>
    <h2>Create account</h2>

    <form method="POST" action="{{ route('register.store') }}" class="card form-card auth-card">
        @csrf

        <div class="field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <p class="help-text">Minimum 8 characters.</p>
        </div>

        <div class="field">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Register</button>
            <a href="{{ route('login') }}" class="btn secondary">I already have an account</a>
        </div>
    </form>
</x-layout>
