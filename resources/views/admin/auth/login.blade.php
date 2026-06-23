<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("public/images/authbg.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }
        .login-card {
            max-width: 480px;
            width: 100%;
            padding: 40px 35px;
            background: #faf7e5;
            border-radius: 18px;
            box-shadow: 0 0 0 4px #2c3e50, 0 8px 30px rgba(0,0,0,0.15);
            border: 3px solid #ffffff;
        }
        .login-card .logo {
            display: block;
            max-width: 160px;
            margin: 0 auto 15px;
        }
        .login-card h2 {
            color: #2c3e50;
            text-align: center;
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 1.8rem;
        }
        .login-card .logo-sub {
            text-align: center;
            color: #7f8c8d;
            font-size: 0.95rem;
            margin-bottom: 25px;
            font-weight: 500;
        }
        .form-label {
            color: #2c3e50;
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
            border-color: #2c3e50;
            box-shadow: 0 0 0 3px rgba(44, 62, 80, 0.25);
        }
        .btn-primary {
            background: #2c3e50 !important;
            border: none !important;
            width: 100%;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary:hover {
            background: #1a252f !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(44, 62, 80, 0.4);
        }
        a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
        }
        a:hover {
            color: #1a252f;
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
        @media (max-width: 576px) {
            .login-card {
                max-width: 100%;
                margin: 0 15px;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-card">
        <img src="{{ asset('public/images/logo.png') }}" alt="Kahel na Langit Logo" class="logo">
        <h2>Admin Access</h2>
        <div class="logo-sub">Secure administrator login</div>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
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
            <div class="demo-note">
                <small>Default: admin@kahel.com / password123</small>
            </div>
        </div>
    </div>
</body>
</html>
