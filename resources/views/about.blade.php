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
        body  { font-family: 'Poppins', sans-serif; background: #faf7e5; min-height: 100vh; }
        h2    { font-size: 26px; font-weight: 700; }
        h3    { font-size: 18px; font-weight: 700; }
        h5    { font-size: 15px; font-weight: 700; }  

        /* NAVBAR */
        .navbar           { background: #c25328 !important; }
        .navbar-brand,
        .nav-link         { color: #faf7e5 !important; font-weight: 500; }
        .nav-link:hover   { opacity: 0.8; }
        .btn-login        { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

        /* HEADER */
        .page-header      { background: #365fa9; color: #faf7e5; padding: 40px 0 32px; margin-bottom: 24px; }
        .page-header h1 { font-weight: 700; font-size: 2.5rem; }
        .page-header .lead { opacity: 0.85; font-size: 15px; }

        /* SECTION LABELS */
        .sec-eye          { font-size: 14px; font-weight: 700; color: #c25328; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 4px; display: block; }
        .sec-divider      { border: none; border-top: 2px dashed rgba(54,95,169,.2); margin: 8px 0 28px; }

        /* ICON BADGE */
        .icon-badge       { width: 42px; height: 42px; background: #dce8fc; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; }
        .icon-badge i     { font-size: 20px; color: #365fa9; }

        /* CARDS */
        .card             { background: #faf7e5 !important; border: 2px solid #365fa9 !important; border-radius: 14px !important; box-shadow: 0 3px 10px rgba(0,0,0,0.10) !important; overflow: hidden; transition: transform 0.25s, box-shadow 0.25s; }
        .card:hover       { transform: translateY(-6px); box-shadow: 0 0 0 3px #365fa9, 0 14px 28px rgba(0,0,0,0.18) !important; }
        .card h3          { color: #c25328; margin-bottom: 8px; }

        /* SDG */
        .sdg-badge        { text-align: center; padding: 20px; }
        .sdg-badge img    { width: 56px; height: 56px; object-fit: contain; margin-bottom: 8px; display: block; margin-left: auto; margin-right: auto; }
        .sdg-badge h5     { color: #365fa9; margin-bottom: 4px; }

        /* MISSION & VISION (MV) CARDS */
        .mv-photo         { width: 100%; height: 340px; object-fit: cover; display: block; }
        .mv-icon-row      { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
        .icon-badge       { width: 42px; height: 42px; background: #dce8fc; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .icon-badge i     { font-size: 20px; color: #365fa9; }
        .card-body h3     { color: #c25328; margin-bottom: 6px; }
        .card-body p      { color: #555 !important; }

        /* SDG MODAL */
        .sdg-overlay      { display:none; position:fixed; inset:0; background:rgba(0,0,0,.45); z-index:999; align-items:center; justify-content:center; }
        .sdg-overlay.show { display:flex; }
        .sdg-popup        { background:#faf7e5; border:2px solid #365fa9; border-radius:14px; padding:28px; max-width:380px; width:90%; text-align:center; position:relative; }
        .sdg-popup img    { width:64px; height:64px; object-fit:contain; margin-bottom:12px; }
        .sdg-popup h5     { color:#365fa9; font-size:16px; font-weight:700; margin-bottom:8px; }
        .sdg-popup p      { color:#555; font-size:13px; line-height:1.7; margin:0; }
        .sdg-close        { position:absolute; top:12px; right:14px; background:none; border:none; font-size:18px; color:#888; cursor:pointer; }

        /* DAMAYAN COMMUNITY */
        .damayan-photo    { width: 100%; height: 100%; object-fit: cover; display: block; min-height: 260px; }
        .location-tag     { font-size: 11px; font-weight: 700; color: #365fa9; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px; }

        /* BEFORE & AFTER TABS */
        .tabs-inner       { border-top: 2px solid #365fa9; padding: 14px; }
        .tab-row          { display: flex; gap: 8px; }
        .tab-btn          { flex: 1; padding: 9px; border: 2px solid #365fa9; background: #faf7e5; color: #365fa9; font-size: 12px; font-weight: 700; border-radius: 10px 10px 0 0; border-bottom: none; cursor: pointer; font-family: 'Poppins', sans-serif; transition: background .2s; }
        .tab-btn.active   { background: #365fa9; color: #faf7e5; }
        .tab-panel        { display: none; border: 2px solid #365fa9; border-radius: 0 0 10px 10px; overflow: hidden; }
        .tab-panel.active { display: block; }
        .ba-grid          { display: grid; grid-template-columns: 1fr 1fr; gap: 2px; }
        .ba-photo         { height: 180px; position: relative; overflow: hidden; }
        .ba-photo img     { width: 100%; height: 100%; object-fit: cover; display: block; }
        .ba-tag           { position: absolute; bottom: 8px; left: 50%; transform: translateX(-50%); background: rgba(0,0,0,.45); color: #fff; font-size: 11px; font-weight: 700; padding: 2px 12px; border-radius: 20px; white-space: nowrap; }

        /* TEAM */
        .team-card        { transition: transform 0.3s; }
        .team-card:hover  { transform: translateY(-5px); }
        .team-avatar      { font-size: 48px; }
        .team-card h5     { color: #365fa9; margin-bottom: 4px; }
        .role-pill        { font-size: 11px; font-weight: 700; background: #dce8fc; color: #185fa5; border-radius: 20px; padding: 2px 10px; display: inline-block; }

        /* FOOTER */
        footer            { background: #c25328; color: #faf7e5; padding: 20px 0; text-align: center; margin-top: 40px; }
        footer p          { color: #faf7e5; font-size: 13px; }
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

        <span class="sec-eye">Who We Are</span>
        <h2 class="mb-4" style="color:#365fa9;">Our Mission &amp; Vision</h2>
        <div class="row mb-5 justify-content-center" style="max-width:100%; margin:0 auto;">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="card h-100">
                    <img src="{{ asset('public/images/mission1.png') }}" alt="Our Mission" class="mv-photo">
                    <div class="card-body">
                        <div class="mv-icon-row">
                            <div class="icon-badge"><i class="ti ti-target" aria-hidden="true"></i></div>
                            <h3>Our Mission</h3>
                        </div>
                        <p>Kahel na Langit is a community-driven initiative dedicated to empowering and uplifting vulnerable communities through sustainable development programs, fundraising activities, and community engagement efforts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="{{ asset('public/images/vision1.png') }}" alt="Our Vision" class="mv-photo">
                    <div class="card-body">
                        <div class="mv-icon-row">
                            <div class="icon-badge"><i class="ti ti-eye" aria-hidden="true"></i></div>
                            <h3>Our Vision</h3>
                        </div>
                        <p>To create a world where communities thrive through collective action and shared responsibility, fostering a culture of hope, cooperation, and long-term sustainability.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="sec-divider">

        <span class="sec-eye">The Concept</span>
        <div class="card mb-5">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('public/images/concept1.png') }}" alt="The Concept" class="img-fluid h-100" style="object-fit:cover;">
                </div>
                <div class="col-md-7">
                    <div class="card-body h-100 d-flex flex-column justify-content-center p-4">
                        <div class="icon-badge mb-3"><i class="ti ti-sun" aria-hidden="true"></i></div>
                        <h3>The Story Behind the Name</h3>
                        <p>"Kahel na Langit" symbolizes renewal, resilience, and new beginnings, much like the orange sky that appears after a storm or before the start of a new day. This name reflects our commitment to helping communities rise above challenges and build a brighter future.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="sec-divider">

        <span class="sec-eye">The Community</span>
        <div class="card mb-5">
            <div class="row g-0">
                <div class="col-md-5" style="min-height:260px; overflow:hidden;">
                    <img src="{{ asset('public/images/community.jpg') }}"
                        alt="Damayan Community"
                        class="damayan-photo"
                        style="border-radius:12px 0 0 12px;">
                </div>
                <div class="col-md-7" style="border-left: 2px solid #365fa9;">
                    <div class="card-body p-4">
                        <div class="location-tag">Floodway, Taytay, Rizal</div>
                        <div class="icon-badge mb-3">
                            <i class="ti ti-building-community" aria-hidden="true"></i>
                        </div>
                        <h3>The Damayan Community</h3>
                        <p class="mt-2 mb-4">We work closely with the Damayan Community in Floodway, Taytay, Rizal, a community that has demonstrated remarkable resilience despite facing challenges such as flooding, economic instability, and limited access to resources. Through the development of the Damayan Model House, we have helped transform a flood-prone environment into a safer and more stable space.</p>

                        {{-- Tabs moved here --}}
                        <div class="tab-row">
                            <button class="tab-btn active" onclick="switchTab('gf', this)">Ground Floor</button>
                            <button class="tab-btn" onclick="switchTab('sf', this)">Second Floor</button>
                        </div>
                        <div class="tab-panel active" id="tab-gf">
                            <div class="ba-grid">
                                <div class="ba-photo">
                                    <img src="{{ asset('public/images/gf-existing.png') }}" alt="Ground Floor Existing">
                                    <span class="ba-tag">Existing</span>
                                </div>
                                <div class="ba-photo">
                                    <img src="{{ asset('public/images/gf-proposed.png') }}" alt="Ground Floor Proposed">
                                    <span class="ba-tag">Proposed</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-panel" id="tab-sf">
                            <div class="ba-grid">
                                <div class="ba-photo">
                                    <img src="{{ asset('public/images/sf-existing.png') }}" alt="Second Floor Existing">
                                    <span class="ba-tag">Existing</span>
                                </div>
                                <div class="ba-photo">
                                    <img src="{{ asset('public/images/sf-proposed.png') }}" alt="Second Floor Proposed">
                                    <span class="ba-tag">Proposed</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>

        <hr class="sec-divider">

            <span class="sec-eye text-center d-block">Global Commitments</span>
            <h2 class="text-center mb-4" style="color:#365fa9;">UN Sustainable Development Goals We Support</h2>
            <div class="row mb-5">
                <div class="col-md-4 mb-3">
                    <div class="card text-center h-100 sdg-badge"
                        onclick="openSdg('{{ asset('public/images/sdg1.png') }}','Goal 1 — No Poverty','KNL helps the Damayan Community overcome economic instability through fundraising, livelihood programs, and sustainable housing support.')">
                        <img src="{{ asset('public/images/sdg1.png') }}" alt="Goal 1">
                        <h5>Goal 1</h5>
                        <p>No Poverty</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center h-100 sdg-badge"
                        onclick="openSdg('{{ asset('public/images/sdg9.png') }}','Goal 9 — Industry, Innovation &amp; Infrastructure','The Damayan Model House demonstrates innovative, flood-resilient construction that brings lasting infrastructure to vulnerable communities.')">
                        <img src="{{ asset('public/images/sdg9.png') }}" alt="Goal 9">
                        <h5>Goal 9</h5>
                        <p>Industry, Innovation &amp; Infrastructure</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center h-100 sdg-badge"
                        onclick="openSdg('{{ asset('public/images/sdg10.png') }}','Goal 10 — Reduced Inequalities','We work to bridge gaps in access to resources, opportunities, and safety for marginalized communities in Floodway, Taytay, Rizal.')">
                        <img src="{{ asset('public/images/sdg10.png') }}" alt="Goal 10">
                        <h5>Goal 10</h5>
                        <p>Reduced Inequalities</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center h-100 sdg-badge"
                        onclick="openSdg('{{ asset('public/images/sdg11.png') }}','Goal 11 — Sustainable Cities &amp; Communities','Our community engagement programs help build safer, more inclusive, and resilient settlements for flood-prone urban communities.')">
                        <img src="{{ asset('public/images/sdg11.png') }}" alt="Goal 11">
                        <h5>Goal 11</h5>
                        <p>Sustainable Cities &amp; Communities</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center h-100 sdg-badge"
                        onclick="openSdg('{{ asset('public/images/sdg13.png') }}','Goal 13 — Climate Action','By transforming flood-prone areas into stable environments, KNL directly addresses the impact of climate change on vulnerable communities.')">
                        <img src="{{ asset('public/images/sdg13.png') }}" alt="Goal 13">
                        <h5>Goal 13</h5>
                        <p>Climate Action</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center h-100 sdg-badge"
                        onclick="openSdg('{{ asset('public/images/sdg17.png') }}','Goal 17 — Partnerships for the Goals','KNL collaborates with organizations, donors, and volunteers to amplify impact and create lasting change for the Damayan Community.')">
                        <img src="{{ asset('public/images/sdg17.png') }}" alt="Goal 17">
                        <h5>Goal 17</h5>
                        <p>Partnerships for the Goals</p>
                    </div>
                </div>
            </div>

            {{-- SDG Modal --}}
            <div class="sdg-overlay" id="sdgOverlay">
                <div class="sdg-popup">
                    <button class="sdg-close" onclick="closeSdg()">✕</button>
                    <img id="sdgImg" src="" alt="">
                    <h5 id="sdgTitle"></h5>
                    <p id="sdgDesc"></p>
                </div>
            </div>

        <hr class="sec-divider">

        <span class="sec-eye text-center d-block">The People</span>
        <h2 class="text-center mb-4" style="color:#365fa9;">Meet Our Team</h2>
        <div class="row mb-5">
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card">
                    <div class="card-body">
                        <div class="team-avatar">👩</div>
                        <h5>Marian Nicole Acosta</h5>
                        <span class="role-pill">Project Lead</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card">
                    <div class="card-body">
                        <div class="team-avatar">👩</div>
                        <h5>Darlene Avenir</h5>
                        <span class="role-pill">UI/UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card">
                    <div class="card-body">
                        <div class="team-avatar">👨</div>
                        <h5>Jose Luis Garcia</h5>
                        <span class="role-pill">Backend Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card">
                    <div class="card-body">
                        <div class="team-avatar">👨</div>
                        <h5>Steven John Macabebe</h5>
                        <span class="role-pill">Full Stack Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card">
                    <div class="card-body">
                        <div class="team-avatar">👨</div>
                        <h5>Mark Benedict Manundo</h5>
                        <span class="role-pill">Database Administrator</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center team-card">
                    <div class="card-body">
                        <div class="team-avatar">👩</div>
                        <h5>Rosalie Joy Vicente</h5>
                        <span class="role-pill">Quality Assurance</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="sdg-overlay" id="sdgOverlay">
    <div class="sdg-popup">
        <button class="sdg-close" onclick="closeSdg()">✕</button>
        <img id="sdgImg" src="" alt="">
        <h5 id="sdgTitle"></h5>
        <p id="sdgDesc"></p>
    </div>
    </div>

    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openSdg(img, title, desc) {
            document.getElementById('sdgImg').src = img;
            document.getElementById('sdgTitle').innerHTML = title;
            document.getElementById('sdgDesc').innerHTML = desc;
            document.getElementById('sdgOverlay').classList.add('show');
        }
        function closeSdg() {
            document.getElementById('sdgOverlay').classList.remove('show');
        }
        document.getElementById('sdgOverlay').addEventListener('click', function(e) {
            if (e.target === this) closeSdg();
        });

        function switchTab(floor, btn) {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
            document.getElementById('tab-' + floor).classList.add('active');
            btn.classList.add('active');
        }
    </script> 

</body>
</html>
