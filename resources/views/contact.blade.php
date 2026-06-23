<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

    <style>

            /* BASE */
            body  { font-family: 'Poppins', sans-serif; background: #faf7e5; min-height: 100vh; }
            .wrapper { flex: 1; }

            /* NAVBAR */
            .navbar           { background: #c25328 !important; }
            .navbar-brand,
            .nav-link         { color: #faf7e5 !important; font-weight: 500; }
            .nav-link:hover   { opacity: 0.8; }
            .btn-login        { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

            /* HEADER */
            .page-header      { background: #d771ab; color: #faf7e5; padding: 40px 0 32px; margin-bottom: 24px; margin-bottom: 24px}
            .page-header h1 { font-weight: 700; font-size: 2.5rem; color: #faf7e5;}
            .page-header .lead { opacity: 0.85; font-size: 15px; color: #faf7e5; }

            /* ── ANIMATIONS ── */
            @keyframes float { 0%,100%{transform:translateY(0);} 50%{transform:translateY(-10px);} }
            @keyframes slideUp { from{opacity:0;transform:translateY(20px);} to{opacity:1;transform:translateY(0);} }
            @keyframes fadeIn { from{opacity:0;} to{opacity:1;} }
            @keyframes pulse { 0%,100%{transform:scale(1);} 50%{transform:scale(1.05);} }

            /* ── INFO CARDS ── */
            .info-card { background: #f8f4ed; border: 3px solid #fff; border-radius: 14px; padding: 16px; text-align: center; box-shadow: 0 0 0 3px #d771ab, 0 6px 16px rgba(0,0,0,.1); transition: transform .3s, box-shadow .3s; animation: fadeIn .6s ease both; cursor: pointer; }
            .info-card:nth-child(1) { animation-delay: .1s; }
            .info-card:nth-child(2) { animation-delay: .2s; }
            .info-card:nth-child(3) { animation-delay: .3s; }
            .info-card:hover { transform: translateY(-6px) scale(1.02); box-shadow: 0 0 0 4px #fff, 0 12px 24px rgba(0,0,0,.2); }
            .ic-icon { width: 42px; height: 42px; background: #d771ab; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px; transition: transform .3s; animation: pulse 3s ease-in-out infinite; }
            .info-card:nth-child(2) .ic-icon { animation-delay: .5s; }
            .info-card:nth-child(3) .ic-icon { animation-delay: 1s; }
            .info-card:hover .ic-icon { transform: scale(1.15) rotate(10deg); }
            .ic-icon i { font-size: 18px; color: #fff; }
            .ic-label { font-size: 14px; font-weight: 700; color: #c25328; margin-bottom: 3px; }
            .ic-value { font-size: 14px; color: #555; }
            .copy-btn { display: inline-block; font-size: 11px; color: #d771ab; background: rgba(215,113,171,.1); border-radius: 10px; padding: 2px 7px; margin-top: 4px; cursor: pointer; border: 1px solid rgba(215,113,171,.3); transition: all .2s; }
            .copy-btn:hover { background: #d771ab; color: #fff; }

            /* ── CARDS ── */
            .contact-card { background: #f8f4ed; border: 3px solid #fff; border-radius: 18px; box-shadow: 0 0 0 4px #d771ab, 0 8px 20px rgba(0,0,0,.12); overflow: hidden; transition: transform .3s, box-shadow .3s; animation: fadeIn .7s ease both; }
            .contact-card:hover { transform: translateY(-5px); box-shadow: 0 0 0 5px #fff, 0 12px 25px rgba(0,0,0,.22); }
            .contact-card .card-body { padding: 20px; }
            .contact-card h4 { color: #c25328; font-weight: 700; margin-bottom: 12px; font-size: 16px; }
            .contact-divider { border: none; border-top: 1px solid rgba(215,113,171,.3); margin: 10px 0; }

            /* ── FORM ── */
            .form-control { border: 1.5px solid #d771ab !important; border-radius: 8px !important; background: #faf7e5 !important; font-size: 14px !important; transition: border-color .2s, box-shadow .2s !important; }
            .form-control:focus { border-color: #c25328 !important; box-shadow: 0 0 0 3px rgba(215,113,171,.2) !important; }
            .form-label { font-size: 14px; font-weight: 600; color: #555; }
            .char-count { font-size: 11px; color: #aaa; text-align: right; margin-top: 2px; }
            .alert-pink { background: #fce4ec; color: #7a3a5a; border: 1.5px solid #d771ab; border-radius: 12px; padding: 10px 14px; font-size: 14px; }
            .btn-warning { background: #c25328 !important; border: none !important; color: white !important; transition: transform .2s, box-shadow .2s !important; font-size: 14px !important; }
            .btn-warning:hover { background: #9e3d18 !important; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(194,83,40,.4) !important; }
            .btn-secondary { background: #6c757d !important; border: none !important; color: white !important; transition: transform .2s !important; font-size: 14px !important; }
            .btn-secondary:hover { transform: scale(1.03); }

            /* ── FAQ ACCORDION ── */
            .faq-item { border-bottom: 1px dashed rgba(215,113,171,.3); }
            .faq-item:last-child { border-bottom: none; }
            .faq-btn { width: 100%; background: none; border: none; padding: 12px 0; display: flex; align-items: center; justify-content: space-between; cursor: pointer; font-family: 'Poppins', sans-serif; transition: opacity .2s; }
            .faq-btn:hover { opacity: .8; }
            .faq-q-text { font-size: 14px; font-weight: 700; color: #c25328; text-align: left; display: flex; align-items: center; gap: 6px; }
            .faq-q-text i { color: #d771ab; font-size: 16px; flex-shrink: 0; }
            .faq-arrow { font-size: 14px; color: #d771ab; transition: transform .3s; flex-shrink: 0; }
            .faq-arrow.open { transform: rotate(180deg); }
            .faq-answer { font-size: 14px; color: #555; line-height: 1.7; padding: 0 0 12px 24px; display: none; }
            .faq-answer.show { display: block; animation: slideUp .3s ease; }
            .faq-link { color: #d771ab; font-weight: 700; text-decoration: none; cursor: pointer; }

            /* ── WHAT HAPPENS NEXT ── */
            .next-strip { background: #d771ab; border-radius: 14px; padding: 22px 24px; margin-bottom: 24px; position: relative; overflow: hidden; }
            .next-strip::before { content: ''; position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(250,247,229,.08); border-radius: 50%; }
            .next-strip h4 { color: #faf7e5; margin-bottom: 16px; text-align: center; position: relative; font-size: 16px; font-weight: 700; }
            .next-steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; position: relative; }
            .next-step { text-align: center; animation: fadeIn .8s ease both; }
            .next-step:nth-child(1) { animation-delay: .1s; }
            .next-step:nth-child(2) { animation-delay: .3s; }
            .next-step:nth-child(3) { animation-delay: .5s; }
            .next-num { width: 38px; height: 38px; background: rgba(250,247,229,.2); border: 2px solid rgba(250,247,229,.5); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px; font-size: 15px; font-weight: 700; color: #faf7e5; transition: transform .3s, background .3s; }
            .next-step:hover .next-num { transform: scale(1.2); background: rgba(250,247,229,.35); }
            .next-step h5 { color: #faf7e5; font-size: 14px; margin-bottom: 3px; }
            .next-step p { color: rgba(250,247,229,.8); font-size: 13px; }

            /* ── SOCIAL ── */
            .si { display: flex; align-items: center; gap: 12px; margin-bottom: 10px; padding: 8px; border-radius: 8px; transition: background .2s; text-decoration: none; }
            .si:hover { background: rgba(215,113,171,.1); }
            .si:last-child { margin-bottom: 0; }
            .si-icon { width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: transform .3s; }
            .si:hover .si-icon { transform: scale(1.1) rotate(5deg); }
            .fb { background: #1877f2; }
            .ig { background: #e4405f; }
            .si-icon i { font-size: 18px; color: #fff; }
            .si-label strong { display: block; font-size: 14px; color: #c25328; }
            .si-label span { font-size: 13px; color: #555; }

            /* ── MAP ── */
            .map-container { border-radius: 14px; overflow: hidden; border: 3px solid #fff; box-shadow: 0 0 0 4px #d771ab; transition: transform .3s; }
            .map-container:hover { transform: scale(1.005); }
            .map-container iframe { width: 100%; height: 300px; display: block; border: 0; }

            /* ── SEC DIVIDER ── */
            .sec-divider { border: none; border-top: 2px dashed rgba(215,113,171,.3); margin: 8px 0 20px; }

            @media (max-width: 768px) {
                .next-steps { grid-template-columns: 1fr; gap: 10px; }
                .next-step { display: flex; align-items: center; gap: 12px; text-align: left; }
                .next-num { margin: 0; flex-shrink: 0; }
            }

            /* FOOTER */
            footer { background: #c25328; color: #faf7e5; padding: 20px 0; text-align: center; margin-top: 40px; }
            footer p { color: #faf7e5; font-size: 13px; }
        </style>
</head>

    <body>
    <div class="wrapper">

        {{-- NAVBAR --}}
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
                        <li class="nav-item"><a class="nav-link active" href="/contact">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/donate">Donate</a></li>
                        <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                                        
                        @auth
                        <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link btn-login" style="border:none; cursor:pointer;">Logout</button>
                            </form>
                        </li>
                        @else
                            <li class="nav-item"><a class="nav-link btn-login" href="/login">Login/Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        {{-- PAGE HEADER --}}
        <div class="page-header">
            <div class="container">
                <h1>Contact Us</h1>
                <p class="lead">We'd love to hear from you</p>
            </div>
        </div>

        <div class="container mt-2">

            {{-- Info Cards --}}
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="ic-icon"><i class="ti ti-mail" aria-hidden="true"></i></div>
                        <div class="ic-label">Email Us</div>
                        <div class="ic-value">info@kahelnalangit.org</div>
                        <span class="copy-btn" onclick="copyText('info@kahelnalangit.org', this)">Copy</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="ic-icon"><i class="ti ti-phone" aria-hidden="true"></i></div>
                        <div class="ic-label">Call Us</div>
                        <div class="ic-value">+63 912 345 6789</div>
                        <span class="copy-btn" onclick="copyText('+63 912 345 6789', this)">Copy</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="ic-icon"><i class="ti ti-map-pin" aria-hidden="true"></i></div>
                        <div class="ic-label">Visit Us</div>
                        <div class="ic-value">Damayan, Blk 64, Floodway,<br>Taytay, Rizal 1920</div>
                    </div>
                </div>
            </div>

            <hr class="sec-divider">

            {{-- Form + FAQ --}}
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="contact-card h-100">
                        <div class="card-body">
                            <h4>Send Us a Message</h4>
                            <div class="contact-divider"></div>
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
                                        <textarea class="form-control" name="message" rows="5" required
                                                id="msgArea" oninput="countChars()" maxlength="500"></textarea>
                                        <div class="char-count"><span id="charCount">0</span>/500</div>
                                    </div>
                                    <button type="submit" class="btn btn-warning text-white w-100">Send Message</button>
                                </form>
                            @else
                                <div class="alert-pink mb-3">
                                    <strong>Please login or register to send a message.</strong>
                                </div>
                                <div class="d-flex gap-2 mb-3">
                                    <a href="/login" class="btn btn-warning text-white">Login</a>
                                    <a href="/register" class="btn btn-secondary">Register</a>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" disabled placeholder="Login to send a message">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact Number (optional)</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="5" disabled></textarea>
                                </div>
                                <button class="btn btn-warning text-white w-100" disabled>Send Message</button>
                            @endauth
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-card h-100">
                        <div class="card-body">
                            <h4>Frequently Asked Questions</h4>
                            <div class="contact-divider"></div>
                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span class="faq-q-text"><i class="ti ti-circle-check" aria-hidden="true"></i>How can I donate?</span>
                                    <span class="faq-arrow">▾</span>
                                </button>
                                <div class="faq-answer">Via GCash, bank transfer, or our online donation form. Visit our Donate page for full details.</div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span class="faq-q-text"><i class="ti ti-circle-check" aria-hidden="true"></i>Can I volunteer?</span>
                                    <span class="faq-arrow">▾</span>
                                </button>
                                <div class="faq-answer">Yes! Reach out through this form or our social media pages to get involved.</div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span class="faq-q-text"><i class="ti ti-circle-check" aria-hidden="true"></i>Where is the Damayan Community?</span>
                                    <span class="faq-arrow">▾</span>
                                </button>
                                <div class="faq-answer">Located in Floodway, Taytay, Rizal, Philippines. <a class="faq-link" onclick="scrollToMap()">See map below ↓</a></div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span class="faq-q-text"><i class="ti ti-circle-check" aria-hidden="true"></i>How can I become a partner?</span>
                                    <span class="faq-arrow">▾</span>
                                </button>
                                <div class="faq-answer">Simply send us a message using the form on this page! Just put <strong>"Partnership Inquiry"</strong> as your subject and tell us a bit about yourself or your organization. Our team will reach out to discuss collaboration opportunities with you.</div>
                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span class="faq-q-text"><i class="ti ti-circle-check" aria-hidden="true"></i>How long before I get a reply?</span>
                                    <span class="faq-arrow">▾</span>
                                </button>
                                <div class="faq-answer">We typically respond within 24–72 hours. For urgent concerns, message us on Facebook or Instagram.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- What Happens Next --}}
            <div class="next-strip">
                <h4>What Happens After You Message Us?</h4>
                <div class="next-steps">
                    <div class="next-step">
                        <div class="next-num">1</div>
                        <h5>We Receive</h5>
                        <p>Your message goes directly to our team's inbox.</p>
                    </div>
                    <div class="next-step">
                        <div class="next-num">2</div>
                        <h5>We Review</h5>
                        <p>Our team reads and prepares a thoughtful response.</p>
                    </div>
                    <div class="next-step">
                        <div class="next-num">3</div>
                        <h5>We Reply</h5>
                        <p>Expect a response within 24–72 hours.</p>
                    </div>
                </div>
            </div>

            <hr class="sec-divider">

            {{-- Map + Social --}}
            <div class="row g-4 mb-4" id="map-section">
                <div class="col-md-8">
                    <div class="contact-card">
                        <div class="card-body">
                            <h4>Find Us</h4>
                            <div class="contact-divider"></div>
                            <div class="map-container mt-2">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.820448639135!2d121.1273643!3d14.5357814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c6f7b72da001%3A0xd5c2c6c4dd9c9d15!2sDamayan%20Block%2064!5e0!3m2!1sen!2sph!4v1700000000000"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            <p class="text-muted mt-2 mb-0 small">
                                <i class="ti ti-map-pin me-1" style="color:#d771ab;" aria-hidden="true"></i>
                                Damayan Block 64, San Juan, Taytay, 1920 Rizal, Philippines
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card h-100">
                        <div class="card-body">
                            <h4>Follow Us</h4>
                            <div class="contact-divider"></div>
                            <a href="https://www.facebook.com/profile.php?id=61563689687892" target="_blank" class="si">
                                <div class="si-icon fb"><i class="ti ti-brand-facebook" aria-hidden="true"></i></div>
                                <div class="si-label"><strong>Facebook</strong><span>Kahel na Langit</span></div>
                            </a>
                            <a href="https://www.instagram.com/int.kahelnalangit/" target="_blank" class="si">
                                <div class="si-icon ig"><i class="ti ti-brand-instagram" aria-hidden="true"></i></div>
                                <div class="si-label"><strong>Instagram</strong><span>int.kahelnalangit</span></div>
                            </a>
                        </div>
                    </div>
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
    <script>
    function toggleFaq(btn) {
        const answer = btn.nextElementSibling;
        const arrow = btn.querySelector('.faq-arrow');
        const isOpen = answer.classList.contains('show');
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('show'));
        document.querySelectorAll('.faq-arrow').forEach(a => a.classList.remove('open'));
        if (!isOpen) { answer.classList.add('show'); arrow.classList.add('open'); }
    }
    function scrollToMap() {
        document.getElementById('map-section').scrollIntoView({behavior: 'smooth'});
    }
    function countChars() {
        const val = document.getElementById('msgArea').value;
        document.getElementById('charCount').textContent = val.length;
    }
    function copyText(text, btn) {
        navigator.clipboard.writeText(text).then(() => {
            btn.textContent = 'Copied!';
            btn.style.background = '#d771ab';
            btn.style.color = '#fff';
            setTimeout(() => { btn.textContent = 'Copy'; btn.style.background = ''; btn.style.color = ''; }, 2000);
        });
    }
    </script>
</body>
</html>