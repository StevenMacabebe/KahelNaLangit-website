<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <style>

        /* ── Base ── */
        body {
            font-family: 'Poppins', sans-serif;
            background: #faf7e5;
            min-height: 100vh;
        }    

        /* ── Navbar ── */
        .navbar {
            background: #c25328 !important;
        }
        .navbar-brand,
        .nav-link {
            color: #faf7e5 !important;
            font-weight: 500;
        }
        .nav-link:hover {
            opacity: 0.8;
        }
        .nav-link.btn-login {
            background: #faf7e5;
            color: #c25328 !important;
            border-radius: 20px;
            padding: 4px 14px !important;
            font-weight: 700;
        }

        /* ── Page header ── */
        .page-header {
            background: #365fa9;
            color: #faf7e5;
            padding: 40px 0 32px;
            margin-bottom: 24px;
        }
        .page-header h1 { font-weight: 700; }
        .page-header .lead { opacity: 0.85; font-size: 15px; }


        /* ── Footer ── */
        footer {
            background: #c25328;
            color: #faf7e5;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
        }

        .team-card { transition: transform 0.3s; }
        .team-card:hover { transform: translateY(-5px); }
        .sdg-badge { font-size: 48px; text-align: center; padding: 20px; }
        .sdg-badge img { max-width: 48px; max-height: 48px; margin-bottom: 5px; }
        
    
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
    <!-- Navigation -->
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
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>About Kahel na Langit</h1>
            <p class="lead">Empowering Communities, Building Hope</p>
        </div>
    </div>

    <div class="container">
        <!-- Mission & Vision -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3>🎯 Our Mission</h3>
                        <p>Kahel na Langit is a community-driven initiative dedicated to empowering and uplifting vulnerable communities through sustainable development programs, fundraising activities, and community engagement efforts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3>👁️ Our Vision</h3>
                        <p>To create a world where communities thrive through collective action and shared responsibility, fostering a culture of hope, cooperation, and long-term sustainability.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Story -->
        <div class="card shadow-sm mb-5">
            <div class="card-body">
                <h3>🌅 The Story Behind the Name</h3>
                <p>"Kahel na Langit" symbolizes renewal, resilience, and new beginnings, much like the orange sky that appears after a storm or before the start of a new day. This name reflects our commitment to helping communities rise above challenges and build a brighter future.</p>
            </div>
        </div>

        <!-- Damayan Community -->
        <div class="card shadow-sm mb-5">
            <div class="card-body">
                <h3>🏘️ The Damayan Community</h3>
                <p>We work closely with the Damayan Community in Floodway, Taytay, Rizal, a community that has demonstrated remarkable resilience despite facing challenges such as flooding, economic instability, and limited access to resources. Through the development of the Damayan Model House, we have helped transform a flood-prone environment into a safer and more stable space.</p>
            </div>
        </div>

        <!-- SDGs Section -->
        <h3 class="text-center mb-4">🌍 UN Sustainable Development Goals We Support</h3>
        <div class="row mb-5">
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm sdg-badge">
                    <div>🏠</div>
                    <h5>Goal 1</h5>
                    <p>No Poverty</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm sdg-badge">
                    <div>🏗️</div>
                    <h5>Goal 9</h5>
                    <p>Industry, Innovation & Infrastructure</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm sdg-badge">
                    <div>⚖️</div>
                    <h5>Goal 10</h5>
                    <p>Reduced Inequalities</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm sdg-badge">
                    <div>🏙️</div>
                    <h5>Goal 11</h5>
                    <p>Sustainable Cities & Communities</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm sdg-badge">
                    <img src="{{ asset('public/images/climate.png') }}" alt="Goal 13">
                    <h5>Goal 13</h5>
                    <p>Climate Action</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm sdg-badge">
                    <div>🤝</div>
                    <h5>Goal 17</h5>
                    <p>Partnerships for the Goals</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <h3 class="text-center mb-4">👥 Meet Our Team</h3>
        <div class="row mb-5">
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card shadow-sm">
                    <div class="card-body">
                        <div style="font-size: 48px;">👩</div>
                        <h5>Marian Nicole Acosta</h5>
                        <p class="text-muted">Project Lead</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card shadow-sm">
                    <div class="card-body">
                        <div style="font-size: 48px;">👩</div>
                        <h5>Darlene Avenir</h5>
                        <p class="text-muted">UI/UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card shadow-sm">
                    <div class="card-body">
                        <div style="font-size: 48px;">👨</div>
                        <h5>Jose Luis Garcia</h5>
                        <p class="text-muted">Backend Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card shadow-sm">
                    <div class="card-body">
                        <div style="font-size: 48px;">👨</div>
                        <h5>Steven John Macabebe</h5>
                        <p class="text-muted">Full Stack Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card shadow-sm">
                    <div class="card-body">
                        <div style="font-size: 48px;">👨</div>
                        <h5>Mark Benedict Manundo</h5>
                        <p class="text-muted">Database Administrator</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card shadow-sm">
                    <div class="card-body">
                        <div style="font-size: 48px;">👩</div>
                        <h5>Rosalie Joy Vicente</h5>
                        <p class="text-muted">Quality Assurance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
