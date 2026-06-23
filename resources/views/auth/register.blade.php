<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Kahel na Langit</title>
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
        .register-card {
            max-width: 480px;  /* wider */
            width: 100%;
            padding: 40px 35px;
            background: #faf7e5;
            border-radius: 18px;
            box-shadow: 0 0 0 4px #658107, 0 8px 30px rgba(0,0,0,0.15);
            border: 3px solid #ffffff;
        }
        .register-card .logo {
            display: block;
            max-width: 160px;
            margin: 0 auto 20px;
        }
        .register-card h2 {
            color: #658107;
            text-align: center;
            font-weight: 700;
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        .form-label {
            color: #658107;
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
            border-color: #658107;
            box-shadow: 0 0 0 3px rgba(101, 129, 7, 0.25);
        }
        .btn-primary {
            background: #658107 !important;
            border: none !important;
            width: 100%;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary:hover {
            background: #3f5a04 !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(101, 129, 7, 0.4);
        }
        a {
            color: #658107;
            text-decoration: none;
            font-weight: 500;
        }
        a:hover {
            color: #3f5a04;
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
        .alert-danger ul {
            padding-left: 18px;
            margin-bottom: 0;
        }
        @media (max-width: 576px) {
            .register-card {
                max-width: 100%;
                margin: 0 15px;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-card">
        <img src="{{ asset('public/images/logo.png') }}" alt="Kahel na Langit Logo" class="logo">
        <h2>Create Account</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password (min 8 characters)</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <div class="mt-3 text-center">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </div>
</body>
</html>
