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
        body { font-family: 'Poppins', sans-serif; background: #faf7e5; min-height: 100vh; }

        /* ── Navbar ── */
        .navbar { background: #c25328 !important; }
        .navbar-brand, .nav-link { color: #faf7e5 !important; font-weight: 500; }
        .nav-link:hover { opacity: 0.8; }
        .nav-link.btn-login { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

        /* ── Page Header ── */
        .page-header { background: #365fa9; color: #faf7e5; padding: 40px 0 32px; margin-bottom: 0; }
        .page-header h1 { font-weight: 700; }
        .page-header .lead { opacity: 0.85; font-size: 15px; }


        /* ── Resilience Strip ── */
        .strip { background: #faf7e5; border-top: 4px solid #c25328; border-bottom: 4px solid #c25328; padding: 28px 24px; text-align: center; }
        .strip h2 { font-size: clamp(15px, 2.5vw, 20px); font-weight: 700; color: #c25328; margin-bottom: 8px; }
        .strip p  { font-size: 13px; color: #555; max-width: 540px; margin: 0 auto; line-height: 1.75; }

        /* ── Section Labels ── */
        .sec-eye  { font-size: 10px; font-weight: 700; color: #c25328; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 4px; }
        .sec-head { font-size: clamp(14px, 2vw, 18px); font-weight: 700; color: #365fa9; margin-bottom: 20px; }

        /* ── Mission & Vision ── */
        .mv-card { background: #faf7e5; border: 2px solid #365fa9; border-radius: 14px; padding: 22px; height: 100%; }
        .mv-icon { width: 36px; height: 36px; background: #dce8fc; border-radius: 9px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; }
        .mv-icon i { font-size: 18px; color: #365fa9; }
        .mv-card h3 { font-size: 13px; font-weight: 700; color: #c25328; margin-bottom: 8px; }
        .mv-card p  { font-size: 12px; color: #555; line-height: 1.8; margin: 0; }

        /* ── Concept Section ── */
        .concept-visual { background: #365fa9; border-radius: 14px; height: 100%; min-height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px; padding: 28px 20px; text-align: center; }
        .concept-visual i { font-size: 42px; color: rgba(250,247,229,.4); }
        .concept-visual h3 { font-size: 18px; font-weight: 700; color: #faf7e5; margin: 0; }
        .concept-visual span { font-size: 11px; color: rgba(250,247,229,.6); }
        .concept-text h3 { font-size: 13px; font-weight: 700; color: #c25328; margin-bottom: 8px; }
        .concept-text p  { font-size: 12px; color: #555; line-height: 1.8; margin-bottom: 10px; }

        /* ── Quote ── */
        .quote-block { background: #365fa9; border-radius: 14px; padding: 22px 26px; display: flex; gap: 14px; align-items: flex-start; }
        .q-mark { font-size: 52px; color: rgba(250,247,229,.2); line-height: 1; margin-top: -10px; font-family: Georgia, serif; flex-shrink: 0; }
        .q-text { color: #faf7e5; font-size: 13px; line-height: 1.8; font-style: italic; margin: 0; }
        .q-attr { font-size: 11px; color: rgba(250,247,229,.6); margin-top: 8px; font-weight: 700; }

        /* ── Divider ── */
        .sec-divider { border: none; border-top: 2px dashed rgba(54,95,169,.2); margin: 8px 0 28px; }

        /* ── Damayan Story ── */
        .photo-box { background: #dce8fc; border: 2px solid #365fa9; border-radius: 14px; height: 100%; min-height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px; }
        .photo-box i { font-size: 36px; color: #365fa9; }
        .photo-box span { font-size: 11px; color: #365fa9; font-weight: 600; text-align: center; padding: 0 16px; }
        .story-text h3 { font-size: 13px; font-weight: 700; color: #c25328; margin-bottom: 8px; }
        .story-text p  { font-size: 12px; color: #555; line-height: 1.8; margin-bottom: 8px; }

        /* ── Before & After ── */
        .ba-label { font-size: 12px; font-weight: 700; color: #faf7e5; background: #365fa9; border-radius: 8px 8px 0 0; padding: 8px 16px; display: block; }
        .ba-grid  { display: grid; grid-template-columns: 1fr 1fr; gap: 2px; border: 2px solid #365fa9; border-top: none; border-radius: 0 0 12px 12px; overflow: hidden; margin-bottom: 12px; }
        .ba-photo { height: 120px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px; }
        .ba-photo i    { font-size: 26px; }
        .ba-photo span { font-size: 10px; font-weight: 700; }
        .ba-existing { background: #e8e0d4; }
        .ba-existing i, .ba-existing span { color: #888; }
        .ba-proposed { background: #dce8fc; }
        .ba-proposed i, .ba-proposed span { color: #365fa9; }

        /* ── SDG Flip Cards ── */
        .sdg-flip { height: 145px; cursor: pointer; -webkit-tap-highlight-color: transparent; user-select: none; perspective: 800px; }
        .sdg-inner { width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: transform .55s cubic-bezier(.4,0,.2,1); will-change: transform; }
        .sdg-flip.flipped .sdg-inner { transform: rotateY(180deg); }
        .sdg-face  { position: absolute; inset: 0; border-radius: 12px; backface-visibility: hidden; -webkit-backface-visibility: hidden; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 12px 10px; text-align: center; }
        .sdg-front { background: #faf7e5; border: 2px solid #365fa9; }
        .sdg-back  { background: #365fa9; transform: rotateY(180deg); }
        .sdg-pill  { display: inline-block; background: #365fa9; color: #faf7e5; border-radius: 6px; font-size: 10px; font-weight: 700; padding: 2px 9px; margin-bottom: 7px; }
        .sdg-front i           { font-size: 24px; color: #c25328; margin-bottom: 5px; }
        .sdg-front-title       { font-size: 11px; font-weight: 700; color: #365fa9; line-height: 1.4; }
        .sdg-hint              { font-size: 9px; color: #bbb; margin-top: 5px; }
        .sdg-back-num          { font-size: 10px; color: rgba(250,247,229,.5); font-weight: 700; letter-spacing: 1px; margin-bottom: 4px; }
        .sdg-back-title        { font-size: 12px; font-weight: 700; color: #faf7e5; margin-bottom: 6px; }
        .sdg-back-desc         { font-size: 10px; color: rgba(250,247,229,.88); line-height: 1.6; }

        /* ── Team Cards ── */
        .team-card { background: #faf7e5; border: 2px solid #365fa9; border-radius: 14px; overflow: hidden; transition: transform .2s; }
        .team-card:hover { transform: translateY(-4px); }
        .team-photo { height: 80px; background: #dce8fc; display: flex; align-items: center; justify-content: center; }
        .team-photo i { font-size: 32px; color: #365fa9; }
        .team-photo.alt { background: #fde8df; }
        .team-photo.alt i { color: #c25328; }
        .team-info { padding: 12px; text-align: center; }
        .team-info h5 { font-size: 12px; font-weight: 700; color: #365fa9; margin-bottom: 4px; }
        .role-pill { display: inline-block; background: #dce8fc; color: #185fa5; border-radius: 20px; font-size: 10px; font-weight: 700; padding: 2px 10px; }

    
        /* ── Footer ── */
        footer {
            background: #c25328;
            color: #faf7e5;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
        }

    </style>
</head>
<body>

    {{-- Navbar --}}
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

    {{-- Page Header --}}
    <div class="page-header">
        <div class="container">
            <h1>About Kahel na Langit</h1>
            <p class="lead">Empowering Communities, Building Hope</p>
        </div>
    </div>


    {{-- Resilience Strip --}}
    <div class="strip">
        <h2>A Space of Resiliency, Hope, and Community</h2>
        <p>Where once there was a flood-prone environment, today there stands a powerful symbol of resilience — the Damayan Model House.</p>
    </div>

    <div class="container py-4">

        {{-- Mission & Vision --}}
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

        {{-- Behind the Name --}}
        <p class="sec-eye">The Concept</p>
        <h2 class="sec-head">Behind the Name</h2>
        <div class="row g-3 mb-4 align-items-center">
            <div class="col-md-5">
                <div class="concept-visual">
                    <i class="ti ti-sun" aria-hidden="true"></i>
                    <h3>Kahel na Langit</h3>
                    <span>Orange Sky · Dawn · Renewal</span>
                </div>
            </div>
            <div class="col-md-7 concept-text">
                <h3>More Than Just Colors in the Sky</h3>
                <p>"Kahel na Langit" serves as a visual and poetic metaphor for the Damayan Community. An orange sky is transitional — the breathtaking aftermath of a heavy storm, the gentle dusk after a long day of labor, and the breaking dawn that signals a fresh start.</p>
                <p>This community renovation project is deeply rooted in the concept of community resilience and renewal, honoring the collective strength of the Damayan Community in Taytay. The community house is envisioned not just as a structure, but as a sanctuary where community members gather to rebuild, connect, and thrive.</p>
            </div>
        </div>

        {{-- Quote --}}
        <div class="quote-block mb-4">
            <div class="q-mark">"</div>
            <div>
                <p class="q-text">From dusk to dawn, from struggle to renewal — this is a celebration of unity, healing, and growth. By transforming their environment into a safe and stable space with dedicated architectural guidance, they have shown us what is possible when a community works together.</p>
                <div class="q-attr">— Kahel na Langit · Project Exhibit, Taytay, Rizal</div>
            </div>
        </div>

        <hr class="sec-divider">

        {{-- Damayan Community --}}
        <p class="sec-eye">The Community</p>
        <h2 class="sec-head">About the Damayan Community</h2>
        <div class="row g-3 mb-4 align-items-center">
            <div class="col-md-5">
                <div class="photo-box p-4">
                    <i class="ti ti-users" aria-hidden="true"></i>
                    {{-- Replace below with: <img src="{{ asset('images/community.jpg') }}" ...> --}}
                    <span>Community photo<br>Floodway, Taytay, Rizal</span>
                </div>
            </div>
            <div class="col-md-7 story-text">
                <h3>People-Led. Resilience-Rooted.</h3>
                <p>The Damayan Community in Taytay, Rizal is a people-led community rooted in resilience, hope, and community. What began as a small group of determined individuals has grown into a movement that uplifts seamstresses, vendors, and families, creating sustainable livelihoods and renewed hope for the future.</p>
                <p>Through collective effort and perseverance, the community built their Model House from the ground up — a powerful symbol of their journey. With the guidance of dedicated professionals, their once flood-prone environment has been transformed into a safe and stable space, protecting the lives they worked hard to rebuild.</p>
            </div>
        </div>

        {{-- Before & After --}}
        <p class="sec-eye mb-2">Before &amp; After</p>
        <span class="ba-label">Damayan Community House — Ground Floor</span>
        <div class="ba-grid mb-3">
            <div class="ba-photo ba-existing">
                {{-- Replace with: <img src="{{ asset('images/gf-existing.jpg') }}" ...> --}}
                <i class="ti ti-photo" aria-hidden="true"></i>
                <span>Existing</span>
            </div>
            <div class="ba-photo ba-proposed">
                {{-- Replace with: <img src="{{ asset('images/gf-proposed.jpg') }}" ...> --}}
                <i class="ti ti-building" aria-hidden="true"></i>
                <span>Proposed</span>
            </div>
        </div>
        <span class="ba-label">Damayan Community House — Second Floor</span>
        <div class="ba-grid mb-4">
            <div class="ba-photo ba-existing">
                <i class="ti ti-photo" aria-hidden="true"></i>
                <span>Existing</span>
            </div>
            <div class="ba-photo ba-proposed">
                <i class="ti ti-building" aria-hidden="true"></i>
                <span>Proposed</span>
            </div>
        </div>

        <hr class="sec-divider">

        {{-- SDGs --}}
        <p class="sec-eye text-center">Global Commitments</p>
        <h2 class="sec-head text-center">UN Sustainable Development Goals We Support</h2>
        <div class="row g-3 mb-4">
            <div class="col-4 col-md-4">
                <div class="sdg-flip">
                    <div class="sdg-inner">
                        <div class="sdg-face sdg-front"><span class="sdg-pill">Goal 1</span><i class="ti ti-home" aria-hidden="true"></i><div class="sdg-front-title">No Poverty</div><div class="sdg-hint">tap to flip</div></div>
                        <div class="sdg-face sdg-back"><div class="sdg-back-num">SDG GOAL 1</div><div class="sdg-back-title">No Poverty</div><div class="sdg-back-desc">KNL helps the Damayan Community overcome economic instability through fundraising, livelihood programs, and sustainable housing support.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="sdg-flip">
                    <div class="sdg-inner">
                        <div class="sdg-face sdg-front"><span class="sdg-pill">Goal 9</span><i class="ti ti-building-factory-2" aria-hidden="true"></i><div class="sdg-front-title">Industry, Innovation &amp; Infrastructure</div><div class="sdg-hint">tap to flip</div></div>
                        <div class="sdg-face sdg-back"><div class="sdg-back-num">SDG GOAL 9</div><div class="sdg-back-title">Innovation &amp; Infrastructure</div><div class="sdg-back-desc">The Damayan Model House demonstrates innovative, flood-resilient construction that brings lasting infrastructure to vulnerable communities.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="sdg-flip">
                    <div class="sdg-inner">
                        <div class="sdg-face sdg-front"><span class="sdg-pill">Goal 10</span><i class="ti ti-scale" aria-hidden="true"></i><div class="sdg-front-title">Reduced Inequalities</div><div class="sdg-hint">tap to flip</div></div>
                        <div class="sdg-face sdg-back"><div class="sdg-back-num">SDG GOAL 10</div><div class="sdg-back-title">Reduced Inequalities</div><div class="sdg-back-desc">We work to bridge gaps in access to resources, opportunities, and safety for marginalized communities in Floodway, Taytay, Rizal.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="sdg-flip">
                    <div class="sdg-inner">
                        <div class="sdg-face sdg-front"><span class="sdg-pill">Goal 11</span><i class="ti ti-building-community" aria-hidden="true"></i><div class="sdg-front-title">Sustainable Cities &amp; Communities</div><div class="sdg-hint">tap to flip</div></div>
                        <div class="sdg-face sdg-back"><div class="sdg-back-num">SDG GOAL 11</div><div class="sdg-back-title">Sustainable Communities</div><div class="sdg-back-desc">Our community engagement programs help build safer, more inclusive, and resilient settlements for flood-prone urban communities.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="sdg-flip">
                    <div class="sdg-inner">
                        <div class="sdg-face sdg-front"><span class="sdg-pill">Goal 13</span><i class="ti ti-leaf" aria-hidden="true"></i><div class="sdg-front-title">Climate Action</div><div class="sdg-hint">tap to flip</div></div>
                        <div class="sdg-face sdg-back"><div class="sdg-back-num">SDG GOAL 13</div><div class="sdg-back-title">Climate Action</div><div class="sdg-back-desc">By transforming flood-prone areas into stable environments, KNL directly addresses the impact of climate change on vulnerable communities.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="sdg-flip">
                    <div class="sdg-inner">
                        <div class="sdg-face sdg-front"><span class="sdg-pill">Goal 17</span><i class="ti ti-handshake" aria-hidden="true"></i><div class="sdg-front-title">Partnerships for the Goals</div><div class="sdg-hint">tap to flip</div></div>
                        <div class="sdg-face sdg-back"><div class="sdg-back-num">SDG GOAL 17</div><div class="sdg-back-title">Partnerships for Goals</div><div class="sdg-back-desc">KNL collaborates with organizations, donors, and volunteers to amplify impact and create lasting change for the Damayan Community.</div></div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="sec-divider">

        {{-- Team --}}
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

        <hr class="sec-divider">

    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Kahel na Langit. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.sdg-flip').forEach(card => {
            let sx, sy, st;
            card.addEventListener('pointerdown', e => { sx = e.clientX; sy = e.clientY; st = Date.now(); });
            card.addEventListener('pointerup', e => {
                if (Math.abs(e.clientX - sx) < 8 && Math.abs(e.clientY - sy) < 8 && Date.now() - st < 400)
                    card.classList.toggle('flipped');
            });
        });
    </script>
</body>
</html>