<h2>Welcome to Your Dashboard</h2>

<p>You are logged in successfully!</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
