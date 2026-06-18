<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffb437, #ffa003, #ff6c27, #d88531);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background: #e67e22;
            border: none;
            width: 100%;
            padding: 10px;
        }
        .btn-primary:hover {
            background: #d35400;
        }
        .logo-text {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #e67e22;
        }
        h2 {
            color: #e67e22;
            text-align: center;
            margin-bottom: 30px;
        }
        a {
            color: #e67e22;
        }
        a:hover {
            color: #d35400;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="logo-text">🌅 Kahel na Langit</div>
        <h2>Welcome Back!</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <div class="mt-3 text-center">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            <small class="text-muted">Demo: test@example.com / password123</small>
        </div>
    </div>
</body>
</html>
