<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">
    <style>
        /* BASE */
        body  { font-family: 'Poppins', sans-serif; background: #faf7e5; }
        h1    { font-size: 28px; font-weight: 700; }
        h2    { font-size: 22px; font-weight: 700; }
        h3    { font-size: 16px; font-weight: 700; }
        h5    { font-size: 13px; font-weight: 700; }
        p     { font-size: 14px; color: #555; line-height: 1.8; margin: 0; }

        /* NAVBAR */
        .navbar           { background: #c25328 !important; }
        .navbar-brand,
        .nav-link         { color: #faf7e5 !important; font-weight: 500; }
        .nav-link:hover   { opacity: 0.8; }
        .btn-login        { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

        /* PAGE HEADER */
        .page-header      { background: #365fa9; color: #faf7e5; padding: 40px 0 32px; }
        .page-header p    { color: #faf7e5; opacity: 0.85; }

        /* STRIP */
        .strip            { background: #faf7e5; border-top: 4px solid #c25328; border-bottom: 4px solid #c25328; padding: 28px 24px; text-align: center; }
        .strip h2         { color: #c25328; margin-bottom: 8px; }
        .strip p          { max-width: 540px; margin: 0 auto; }

        /* SECTION */
        .sec-eye          { font-size: 11px; font-weight: 700; color: #c25328; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 4px; }
        .sec-head         { color: #365fa9; margin-bottom: 20px; }
        .sec-divider      { border: none; border-top: 2px dashed rgba(54,95,169,.2); margin: 8px 0 28px; }

        /* MISSION */
        .mv-card          { background: #faf7e5; border: 2px solid #365fa9; border-radius: 14px; padding: 22px; height: 100%; }
        .mv-card h3       { color: #c25328; margin-bottom: 8px; }
        .mv-icon          { width: 36px; height: 36px; background: #dce8fc; border-radius: 9px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; }
        .mv-icon i        { font-size: 18px; color: #365fa9; }

        /* CONCEPT */
        .concept-visual   { background: #365fa9; border-radius: 14px; min-height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px; padding: 28px 20px; text-align: center; }
        .concept-visual i { font-size: 42px; color: rgba(250,247,229,.4); }
        .concept-visual h3 { color: #faf7e5; margin: 0; }
        .concept-visual p { color: rgba(250,247,229,.6); }
        .concept-text h3  { color: #c25328; margin-bottom: 8px; }

        /* QUOTE */
        .quote-block      { background: #365fa9; border-radius: 14px; padding: 22px 26px; display: flex; gap: 14px; }
        .q-mark           { font-size: 52px; color: rgba(250,247,229,.2); line-height: 1; margin-top: -10px; font-family: Georgia, serif; flex-shrink: 0; }
        .quote-block p    { color: #faf7e5; font-style: italic; }
        .q-attr           { font-size: 12px; color: rgba(250,247,229,.6); margin-top: 8px; font-weight: 700; }

        /* STORY */
        .photo-box        { background: #dce8fc; border: 2px solid #365fa9; border-radius: 14px; min-height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px; overflow: hidden; }
        .photo-box img    { width: 100%; height: 100%; object-fit: cover; }
        .story-text h3    { color: #c25328; margin-bottom: 8px; }

        /* BEFORE & AFTER */
        .ba-label         { font-size: 13px; font-weight: 700; color: #faf7e5; background: #365fa9; border-radius: 8px 8px 0 0; padding: 8px 16px; display: block; }
        .ba-grid          { display: grid; grid-template-columns: 1fr 1fr; gap: 2px; border: 2px solid #365fa9; border-top: none; border-radius: 0 0 12px 12px; overflow: hidden; margin-bottom: 12px; }
        .ba-photo         { height: 160px; }
        .ba-photo img     { width: 100%; height: 100%; object-fit: cover; display: block; }

        /* SDG */
        .sdg-card         { background: #faf7e5; border: 2px solid #365fa9; border-radius: 12px; padding: 20px; text-align: center; height: 100%; }
        .sdg-card i       { font-size: 28px; color: #c25328; margin-bottom: 8px; display: block; }
        .sdg-card h5      { color: #365fa9; margin-bottom: 4px; }

        /* TEAM */
        .team-card        { background: #faf7e5; border: 2px solid #365fa9; border-radius: 14px; overflow: hidden; transition: transform .2s; }
        .team-card:hover  { transform: translateY(-4px); }
        .team-photo       { height: 80px; background: #dce8fc; display: flex; align-items: center; justify-content: center; }
        .team-photo i     { font-size: 32px; color: #365fa9; }
        .team-photo.alt   { background: #fde8df; }
        .team-photo.alt i { color: #c25328; }
        .team-info        { padding: 12px; text-align: center; }
        .team-info h5     { color: #365fa9; margin-bottom: 4px; }
        .role-pill        { font-size: 11px; font-weight: 700; background: #dce8fc; color: #185fa5; border-radius: 20px; padding: 2px 10px; display: inline-block; }

        /* FOOTER */
        footer            { background: #c25328; color: #faf7e5; padding: 20px 0; text-align: center; margin-top: 40px; }
        footer p          { color: #faf7e5; font-size: 13px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <span style="width:14px;height:14px;background:#faf7e5;border-radius:50%;display:inline-block;vertical-align:middle;margin-right:6px;"></span>
                Kahel na Langit
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-1">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'fw-bold' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'fw-bold' : '' }}" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('partnerships') ? 'fw-bold' : '' }}" href="/partnerships">Partnerships</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'fw-bold' : '' }}" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('donate') ? 'fw-bold' : '' }}" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <h1>About Kahel na Langit</h1>
            <p>Empowering Communities, Building Hope</p>
        </div>
    </div>

    <div class="strip">
        <h2>A Space of Resiliency, Hope, and Community</h2>
        <p>Where once there was a flood-prone environment, today there stands a powerful symbol of resilience — the Damayan Model House.</p>
    </div>

    <div class="container py-4">

        <p class="sec-eye">Who We Are</p>
        <h2 class="sec-head">Our Mission &amp; Vision</h2>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="mv-card">
                    <div class="mv-icon"><i class="ti ti-target" aria-hidden="true"></i></div>
                    <h3>Our Mission</h3>
                    <p>A community-driven initiative dedicated to empowering and uplifting vulnerable communities through sustainable development programs, fundraising activities, and community engagement efforts.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mv-card">
                    <div class="mv-icon"><i class="ti ti-eye" aria-hidden="true"></i></div>
                    <h3>Our Vision</h3>
                    <p>A world where communities thrive through collective action and shared responsibility, fostering a culture of hope, cooperation, and long-term sustainability.</p>
                </div>
            </div>
        </div>

        <hr class="sec-divider">

        <p class="sec-eye">The Concept</p>
        <h2 class="sec-head">Behind the Name</h2>
        <div class="row g-3 mb-4 align-items-center">
            <div class="col-md-5">
                <div class="concept-visual">
                    <i class="ti ti-sun" aria-hidden="true"></i>
                    <h3>Kahel na Langit</h3>
                    <p>Orange Sky · Dawn · Renewal</p>
                </div>
            </div>
            <div class="col-md-7 concept-text">
                <h3>More Than Just Colors in the Sky</h3>
                <p class="mb-3">"Kahel na Langit" serves as a visual and poetic metaphor for the Damayan Community. An orange sky is transitional — the breathtaking aftermath of a heavy storm, the gentle dusk after a long day of labor, and the breaking dawn that signals a fresh start.</p>
                <p>This community renovation project is deeply rooted in the concept of community resilience and renewal, honoring the collective strength of the Damayan Community in Taytay.</p>
            </div>
        </div>

        <div class="quote-block mb-4">
            <div class="q-mark">"</div>
            <div>
                <p>From dusk to dawn, from struggle to renewal — this is a celebration of unity, healing, and growth. By transforming their environment into a safe and stable space, they have shown us what is possible when a community works together.</p>
                <div class="q-attr">— Kahel na Langit · Project Exhibit, Taytay, Rizal</div>
            </div>
        </div>

        <hr class="sec-divider">

        <p class="sec-eye">The Community</p>
        <h2 class="sec-head">About the Damayan Community</h2>
        <div class="row g-3 mb-4 align-items-center">
            <div class="col-md-5">
                <div class="photo-box">
                    <img src="{{ asset('images/community.jpg') }}" alt="Damayan Community">
                </div>
            </div>
            <div class="col-md-7 story-text">
                <h3>People-Led. Resilience-Rooted.</h3>
                <p class="mb-3">The Damayan Community in Taytay, Rizal is a people-led community rooted in resilience, hope, and community. What began as a small group of determined individuals has grown into a movement that uplifts seamstresses, vendors, and families.</p>
                <p>Through collective effort and perseverance, the community built their Model House from the ground up — a powerful symbol of their journey. Their once flood-prone environment has been transformed into a safe and stable space.</p>
            </div>
        </div>

        <p class="sec-eye mb-2">Before &amp; After</p>
        <span class="ba-label">Damayan Community House — Ground Floor</span>
        <div class="ba-grid mb-3">
            <div class="ba-photo">
                <img src="{{ asset('images/gf-existing.jpg') }}" alt="Ground Floor Existing">
            </div>
            <div class="ba-photo">
                <img src="{{ asset('images/gf-proposed.jpg') }}" alt="Ground Floor Proposed">
            </div>
        </div>
        <span class="ba-label">Damayan Community House — Second Floor</span>
        <div class="ba-grid mb-4">
            <div class="ba-photo">
                <img src="{{ asset('images/sf-existing.jpg') }}" alt="Second Floor Existing">
            </div>
            <div class="ba-photo">
                <img src="{{ asset('images/sf-proposed.jpg') }}" alt="Second Floor Proposed">
            </div>
        </div>

        <hr class="sec-divider">

        <p class="sec-eye text-center">Global Commitments</p>
        <h2 class="sec-head text-center">UN Sustainable Development Goals We Support</h2>
        <div class="row g-3 mb-4">
            <div class="col-6 col-md-4"><div class="sdg-card"><i class="ti ti-home" aria-hidden="true"></i><h5>Goal 1</h5><p>No Poverty</p></div></div>
            <div class="col-6 col-md-4"><div class="sdg-card"><i class="ti ti-building-factory-2" aria-hidden="true"></i><h5>Goal 9</h5><p>Industry, Innovation &amp; Infrastructure</p></div></div>
            <div class="col-6 col-md-4"><div class="sdg-card"><i class="ti ti-scale" aria-hidden="true"></i><h5>Goal 10</h5><p>Reduced Inequalities</p></div></div>
            <div class="col-6 col-md-4"><div class="sdg-card"><i class="ti ti-building-community" aria-hidden="true"></i><h5>Goal 11</h5><p>Sustainable Cities &amp; Communities</p></div></div>
            <div class="col-6 col-md-4"><div class="sdg-card"><i class="ti ti-leaf" aria-hidden="true"></i><h5>Goal 13</h5><p>Climate Action</p></div></div>
            <div class="col-6 col-md-4"><div class="sdg-card"><i class="ti ti-handshake" aria-hidden="true"></i><h5>Goal 17</h5><p>Partnerships for the Goals</p></div></div>
        </div>

        <hr class="sec-divider">

        <p class="sec-eye text-center">The People</p>
        <h2 class="sec-head text-center">Meet Our Team</h2>
        <div class="row g-3 mb-4">
            <div class="col-6 col-md-4">
                <div class="team-card">
                    <div class="team-photo"><i class="ti ti-user-circle" aria-hidden="true"></i></div>
                    <div class="team-info"><h5>Marian Nicole Acosta</h5><span class="role-pill">Project Lead</span></div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="team-card">
                    <div class="team-photo alt"><i class="ti ti-user-circle" aria-hidden="true"></i></div>
                    <div class="team-info"><h5>Darlene Avenir</h5><span class="role-pill">UI/UX Designer</span></div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="team-card">
                    <div class="team-photo"><i class="ti ti-user-circle" aria-hidden="true"></i></div>
                    <div class="team-info"><h5>Jose Luis Garcia</h5><span class="role-pill">Backend Developer</span></div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="team-card">
                    <div class="team-photo alt"><i class="ti ti-user-circle" aria-hidden="true"></i></div>
                    <div class="team-info"><h5>Steven John Macabebe</h5><span class="role-pill">Full Stack Developer</span></div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="team-card">
                    <div class="team-photo"><i class="ti ti-user-circle" aria-hidden="true"></i></div>
                    <div class="team-info"><h5>Mark Benedict Manundo</h5><span class="role-pill">Database Administrator</span></div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="team-card">
                    <div class="team-photo alt"><i class="ti ti-user-circle" aria-hidden="true"></i></div>
                    <div class="team-info"><h5>Rosalie Joy Vicente</h5><span class="role-pill">Quality Assurance</span></div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>