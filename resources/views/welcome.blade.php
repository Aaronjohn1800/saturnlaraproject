<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1>Welcome to Our Application</h1>
                <div class="mt-4">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-success btn-lg">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>