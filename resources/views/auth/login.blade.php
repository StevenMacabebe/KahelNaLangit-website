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
            font-family: 'Poppins', sans-serif;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 35px 30px;
            background: #faf7e5;  /* matches site background */
            border-radius: 18px;
            box-shadow: 0 0 0 4px #c25328, 0 8px 30px rgba(0,0,0,0.15);
            border: 3px solid #ffffff;
        }
        .login-card .logo {
            display: block;
            max-width: 160px;
            margin: 0 auto 20px;
        }
        .login-card h2 {
            color: #c25328;
            text-align: center;
            font-weight: 700;
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        .form-label {
            color: #4a4a4a;
            font-weight: 500;
        }
        .form-control {
            border-radius: 8px;
            border: 2px solid #e0d6c8;
            background: #fff;
            padding: 10px 14px;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #c25328;
            box-shadow: 0 0 0 3px rgba(194, 83, 40, 0.25);
        }
        .btn-primary {
            background: #c25328 !important;
            border: none !important;
            width: 100%;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary:hover {
            background: #9e3d18 !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(194, 83, 40, 0.4);
        }
        a {
            color: #c25328;
            text-decoration: none;
            font-weight: 500;
        }
        a:hover {
            color: #9e3d18;
            text-decoration: underline;
        }
        .alert-danger {
            background: #fde8e8;
            border-color: #f5c6cb;
            color: #721c24;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.9rem;
        }
        .demo-note {
            color: #6c757d;
            font-size: 0.85rem;
            margin-top: 15px;
            border-top: 1px solid #e0d6c8;
            padding-top: 15px;
        }
        .demo-note small {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <!-- Logo image instead of text -->
        <img src="{{ asset('public/images/logo.png') }}" alt="Kahel na Langit Logo" class="logo">

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
            <div class="demo-note">
                <small>Demo: test@example.com / password123</small>
            </div>
        </div>
    </div>
</body>
</html>
