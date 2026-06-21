<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        
        .navbar           { background: #c25328 !important; }
        .navbar-brand,
        .nav-link         { color: #faf7e5 !important; font-weight: 500; }
        .nav-link:hover   { opacity: 0.8; }
        .btn-login        { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

        
        .page-header { background: linear-gradient(135deg, #f39c12, #e67e22); color: white; padding: 50px 0; }
        footer { background: #2c3e50; color: white; padding: 20px 0; text-align: center; margin-top: 50px; }
        .card { transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }

        body {
    background:
        radial-gradient(circle at 15% 20%, rgba(255,255,255,0.12), transparent 20%),
        radial-gradient(circle at 85% 15%, rgba(255,220,150,0.25), transparent 22%),
        radial-gradient(circle at 75% 80%, rgba(255,140,0,0.20), transparent 25%),
        linear-gradient(
            135deg,
            #d96a14 0%,
            #e67e22 40%,
            #f39c12 70%,
            #ffb347 100%
        );
    min-height: 100vh;
    background-attachment: fixed;
}
.card {
    background: #f8f4ed !important;
    border: 3px solid #ffffff !important;
    border-radius: 18px !important;
    box-shadow:
        0 0 0 4px #d97706,
        0 8px 20px rgba(0,0,0,0.15) !important;

    overflow: hidden;
    transition: all .3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow:
        0 0 0 5px #ffffff,
        0 12px 25px rgba(0,0,0,.25) !important;
}        
        
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <span style="width:18px;height:18px;background:#faf7e5;border-radius:50%;display:inline-block;vertical-align:middle;margin-right:6px;"></span>
                Kahel na Langit
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-1">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>

                    @auth
                        <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="btn-logout-nav">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p class="lead">We'd love to hear from you</p>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4>📧 Send Us a Message</h4>
                        <hr>
                        @auth
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <form method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact Number (optional)</label>
                                    <input type="text" class="form-control" name="contact_number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning text-white w-100">Send Message</button>
                            </form>
                        @else
                            <div class="alert alert-info">
                                <strong>🔐 Please login or register to send a message.</strong>
                            </div>
                            <a href="/login" class="btn btn-primary">Login</a>
                            <a href="/register" class="btn btn-secondary">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4>📍 Contact Information</h4>
                        <hr>
                        <p><strong>📧 Email:</strong> info@kahelnalangit.org</p>
                        <p><strong>📞 Phone:</strong> +63 912 345 6789</p>
                        <p><strong>📍 Address:</strong> Floodway, Taytay, Rizal, Philippines</p>
                        <hr>
                        <h5>Follow Us</h5>
                        <p>
                            <a href="#" class="btn btn-primary btn-sm">Facebook</a>
                            <a href="#" class="btn btn-info btn-sm text-white">Instagram</a>
                            <a href="#" class="btn btn-dark btn-sm">Twitter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
