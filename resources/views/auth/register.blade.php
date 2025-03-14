<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link to the compiled CSS file -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <form method="POST" action="/register">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required>
        </div>

        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>