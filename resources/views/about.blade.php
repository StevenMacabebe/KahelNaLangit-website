<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .navbar { background: #2c3e50 !important; }
        .page-header { background: linear-gradient(135deg, #f39c12, #e67e22); color: white; padding: 50px 0; margin-bottom: 30px; }
        footer { background: #2c3e50; color: white; padding: 20px 0; text-align: center; margin-top: 50px; }
        .team-card { transition: transform 0.3s; }
        .team-card:hover { transform: translateY(-5px); }
        .sdg-badge { font-size: 48px; text-align: center; padding: 20px; }
        
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
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">🌅 Kahel na Langit</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
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
                    <div><img src="{{ asset('public/images/uploads/climate.png') }}" alt="Goal 13"></div>
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
            <p>© 2026 Kahel na Langit. All rights reserved.</p>
            <p><small>Built with ❤️ for the Damayan Community</small></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
