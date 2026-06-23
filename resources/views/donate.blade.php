<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">
    <style>

        /* BASE */
        body  { font-family: 'Poppins', sans-serif; background: #faf7e5; min-height: 100vh; }
        h2    { font-size: 26px; font-weight: 700; }
        h3    { font-size: 18px; font-weight: 700; }
        h4    { font-size: 16px; font-weight: 700; }
        h5    { font-size: 15px; font-weight: 700; }

        /* NAVBAR */
        .navbar           { background: #c25328 !important; }
        .navbar-brand,
        .nav-link         { color: #faf7e5 !important; font-weight: 500; }
        .nav-link:hover   { opacity: 0.8; }
        .btn-login        { background: #faf7e5; color: #c25328 !important; border-radius: 20px; padding: 4px 14px !important; font-weight: 700; }

        /* HEADER */
        .page-header      { background: #d4a017; color: #faf7e5; padding: 40px 0 32px; margin-bottom: 24px; }
        .page-header h1 { font-weight: 700; font-size: 2.5rem; }
        .page-header .lead { opacity: 0.85; font-size: 15px; }

        /* SECTION */
        .sec-eye          { font-size: 14px; font-weight: 700; color: #c25328; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 4px; display: block; }
        .sec-divider      { border: none; border-top: 2px dashed rgba(212,160,23,.3); margin: 8px 0 20px; }

        /* HOPE STRIP */
        .hope-banner { width: 100%; border-radius: 14px; display: block; margin-bottom: 20px; border: none !important; transition: transform .25s, box-shadow .25s; cursor: pointer; }
        .hope-banner:hover { transform: translateY(-4px); box-shadow: 0 0 0 3px #d4a017, 0 14px 28px rgba(0,0,0,.15); border-radius: 14px; }

        /* CARDS */
        .card             { background: #faf7e5 !important; border: 2px solid #d4a017 !important; border-radius: 14px !important; box-shadow: 0 3px 10px rgba(0,0,0,0.10) !important; overflow: hidden; transition: transform 0.25s, box-shadow 0.25s; }
        .card:hover       { transform: translateY(-6px); box-shadow: 0 0 0 3px #d4a017, 0 14px 28px rgba(0,0,0,0.18) !important; }
        .card h3          { color: #c25328; margin-bottom: 8px; }
        .card h4          { color: #c25328; margin-bottom: 10px; }

        /* WAYS */
        .way-card         { background: #faf7e5; border: 2px solid #d4a017; border-radius: 14px; padding: 16px; display: flex; align-items: flex-start; gap: 10px; box-shadow: 0 3px 10px rgba(0,0,0,.08); transition: transform .25s, box-shadow .25s; height: 100%; }
        .way-card:hover   { transform: translateY(-5px); box-shadow: 0 0 0 3px #d4a017, 0 14px 28px rgba(0,0,0,.15); }
        .way-card h5      { color: #c25328; margin-bottom: 3px; }
        .way-num          { width: 30px; height: 30px; background: #d4a017; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 13px; font-weight: 700; color: #faf7e5; flex-shrink: 0; }

        /* DONATION CHANNEL CARDS - Big layout like GCash example */
        .channel-card {
            background: #faf7e5;
            border: 2px solid #d4a017;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,.08);
            transition: transform .25s, box-shadow .25s;
            height: 100%;
        }
        .channel-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 0 0 3px #d4a017, 0 14px 28px rgba(0,0,0,.15);
        }
        .channel-card h4 {
            color: #c25328;
            margin-bottom: 12px;
            font-size: 20px;
        }
        .channel-card .channel-detail {
            font-size: 14px;
            color: #555;
            margin-bottom: 4px;
        }
        .channel-card .channel-detail strong {
            color: #365fa9;
        }
        .channel-card .qr-wrapper {
            text-align: center;
            margin-top: 16px;
            padding: 16px;
            background: #fef9e7;
            border: 2px solid #d4a017;
            border-radius: 10px;
        }
        .channel-card .qr-wrapper img {
            width: 180px;
            height: 180px;
            border-radius: 10px;
            border: 2px solid #d4a017;
            display: block;
            margin: 0 auto 10px;
        }
        .channel-card .qr-wrapper .qr-placeholder {
            width: 180px;
            height: 180px;
            background: #fff;
            border: 2px solid #d4a017;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
        }
        .channel-card .qr-wrapper .qr-placeholder i {
            font-size: 72px;
            color: #d4a017;
        }
        .channel-card .qr-wrapper p {
            font-size: 12px;
            font-weight: 700;
            color: #555;
            margin-bottom: 2px;
        }
        .channel-card .qr-wrapper span {
            font-size: 11px;
            color: #aaa;
        }

        /* GUIDELINES */
        .guide-step       { display: flex; gap: 10px; margin-bottom: 12px; align-items: flex-start; }
        .guide-num        { width: 26px; height: 26px; background: #d4a017; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 700; color: #faf7e5; flex-shrink: 0; }
        .admin-note       { background: #fef9e7; border-left: 4px solid #d4a017; padding: 10px 14px; border-radius: 0 8px 8px 0; margin-top: 10px; font-size: 12px; color: #555; line-height: 1.75; font-style: italic; }

        /* PROCEEDS */
        .proc-card        { background: #faf7e5; border: 2px solid #d4a017; border-radius: 12px; padding: 14px; text-align: center; box-shadow: 0 3px 10px rgba(0,0,0,.08); transition: transform .25s, box-shadow .25s; height: 100%; }
        .proc-card:hover  { transform: translateY(-5px); box-shadow: 0 0 0 3px #d4a017, 0 14px 28px rgba(0,0,0,.15); }
        .proc-card i      { font-size: 40px; color: #d4a017; margin-bottom: 6px; display: block; }
        .proc-card p      { font-size: 11px; color: #555; font-weight: 600; }

        /* THANK YOU */
        .thank-banner     { background: #c25328; border-radius: 14px; padding: 20px 24px; text-align: center; }
        .thank-banner h3  { color: #faf7e5; margin-bottom: 4px; }
        .thank-banner p   { color: rgba(250,247,229,.85); }

        /* FOOTER */
        footer { background: #c25328; color: #faf7e5; padding: 20px 0; text-align: center; margin-top: 40px; }
        footer p { color: #faf7e5; font-size: 13px; }

        .form-link        { display: inline-block !important; margin-top: 8px !important; font-size: 11px !important; color: #c25328 !important; font-weight: 700 !important; text-decoration: none !important; background: #fef9e7 !important; border: 1.5px solid #d4a017 !important; border-radius: 8px !important; padding: 5px 12px !important; width: auto !important; }
        .form-link:hover  { background: #d4a017 !important; color: #faf7e5 !important; }

        /* Responsive tweaks */
        @media (max-width: 768px) {
            .channel-card .qr-wrapper img,
            .channel-card .qr-wrapper .qr-placeholder {
                width: 140px;
                height: 140px;
            }
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

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Support Our Mission</h1>
            <p class="lead">Your donation helps us empower communities</p>
        </div>
    </div>

    <div class="container py-4">

        {{-- Hope Banner Image --}}
        <img src="{{ asset('public/images/hope.png') }}"
             alt="Help us bring Hope to Life"
             class="hope-banner">

        {{-- Ways to Give --}}
        <span class="sec-eye">Ways to Give</span>
        <h2 class="mb-3" style="color:#c25328;">Ways to Extend Your Support</h2>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="way-card">
                <div class="way-num">1</div>
                    <div>
                    <h5>Donation Form</h5>
                        <p>Fill up our donation form to ensure your contribution is properly acknowledged.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScK8dU0U8O7Qr3BFL5Kg2j10iwnBpJ7SbrK0EmMyD8KWsCoeA/viewform" 
                        target="_blank" class="form-link">
                            <i class="ti ti-external-link" aria-hidden="true"></i> Open Donation Form
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="way-card">
                    <div class="way-num">2</div>
                    <div><h5>Wishlist Donations</h5><p>Check our wishlist for specific items the community needs most.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="way-card">
                    <div class="way-num">3</div>
                    <div><h5>In-Kind Donations</h5><p>Donate food, snacks, drinks, or essentials for our volunteers. Contact Anthony Madrigal at 09186390850.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="way-card">
                    <div class="way-num">4</div>
                    <div><h5>Fundraising Support</h5><p>Help us raise funds by sharing our cause within your network.</p></div>
                </div>
            </div>
        </div>

        <hr class="sec-divider">

        {{-- How to Donate Section --}}
        <span class="sec-eye">Donation Channel</span>
        <h2 class="mb-3" style="color:#c25328;">How to Donate</h2>

        {{-- Guidelines + GCash in 2 columns --}}
        <div class="row g-4 mb-4">
            {{-- Guidelines Card --}}
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h4>How Your Donation Works</h4>
                        <div class="guide-step">
                            <div class="guide-num">1</div>
                            <div style="display:flex; flex-direction:column; gap:6px;">
                                <p>Complete the donation form to ensure your contribution is properly acknowledged.</p>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScK8dU0U8O7Qr3BFL5Kg2j10iwnBpJ7SbrK0EmMyD8KWsCoeA/viewform"
                                target="_blank" class="form-link">
                                    <i class="ti ti-external-link" aria-hidden="true"></i> Open Donation Form
                                </a>
                            </div>
                        </div>
                        <div class="guide-step">
                            <div class="guide-num">2</div>
                            <p>Upload a photo or screenshot of your receipt through the form.</p>
                        </div>
                        <div class="guide-step" style="margin-bottom:0;">
                            <div class="guide-num">3</div>
                            <p>Check your email within 24–72 hours for your acknowledgment letter.</p>
                        </div>
                        @if($donation && $donation->guidelines)
                            <div class="admin-note">
                                {!! nl2br(e($donation->guidelines)) !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- GCash Card (big, like the example) --}}
            <div class="col-md-6">
                @if($donation && ($donation->gcash_name || $donation->gcash_number))
                <div class="channel-card">
                    <h4><i class="ti ti-device-mobile" aria-hidden="true" style="color:#d4a017;"></i> GCash</h4>
                    @if($donation->gcash_name)
                        <div class="channel-detail"><strong>Account Name:</strong> {{ $donation->gcash_name }}</div>
                    @endif
                    @if($donation->gcash_number)
                        <div class="channel-detail"><strong>GCash Number:</strong> {{ $donation->gcash_number }}</div>
                    @endif
                    <div class="qr-wrapper">
                        @if($donation->gcash_qr)
                            <img src="{{ asset('public/images/uploads/donations/' . $donation->gcash_qr) }}"
                                alt="GCash QR Code">
                        @else
                            <div class="qr-placeholder"><i class="ti ti-qrcode" aria-hidden="true"></i></div>
                        @endif
                        <p>Scan to donate via GCash</p>
                        <span>Use your GCash app to scan</span>
                    </div>
                </div>
                @endif
            </div>
        </div>

        {{-- BDO and Maya (full-width below, in 2 columns) --}}
        @if($donation && ($donation->bdo_bank_name || $donation->maya_bank_name))
        <div class="row g-4 mb-4">
            {{-- BDO --}}
            @if($donation->bdo_bank_name)
            <div class="col-md-6">
                <div class="channel-card">
                    <h4><i class="ti ti-building-bank" aria-hidden="true" style="color:#d4a017;"></i> {{ $donation->bdo_bank_name }}</h4>
                    <div class="channel-detail"><strong>Account Name:</strong> {{ $donation->bdo_account_name }}</div>
                    <div class="channel-detail"><strong>Account Number:</strong> {{ $donation->bdo_account_number }}</div>
                    <div class="qr-wrapper">
                        @if($donation->bdo_qr)
                            <img src="{{ asset('public/images/uploads/donations/' . $donation->bdo_qr) }}"
                                alt="BDO QR Code">
                        @else
                            <div class="qr-placeholder"><i class="ti ti-qrcode" aria-hidden="true"></i></div>
                        @endif
                        <p>Scan to donate via BDO</p>
                        <span>Use your banking app to scan</span>
                    </div>
                </div>
            </div>
            @endif

            {{-- Maya --}}
            @if($donation->maya_bank_name)
            <div class="col-md-6">
                <div class="channel-card">
                    <h4><i class="ti ti-building-bank" aria-hidden="true" style="color:#d4a017;"></i> {{ $donation->maya_bank_name }}</h4>
                    <div class="channel-detail"><strong>Account Name:</strong> {{ $donation->maya_account_name }}</div>
                    <div class="channel-detail"><strong>Account Number:</strong> {{ $donation->maya_account_number }}</div>
                    <div class="qr-wrapper">
                        @if($donation->maya_qr)
                            <img src="{{ asset('public/images/uploads/donations/' . $donation->maya_qr) }}"
                                alt="Maya QR Code">
                        @else
                            <div class="qr-placeholder"><i class="ti ti-qrcode" aria-hidden="true"></i></div>
                        @endif
                        <p>Scan to donate via Maya</p>
                        <span>Use your Maya app to scan</span>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif

        {{-- If no donation data at all --}}
        @if(!$donation)
            <div class="alert mb-4" style="background:#fef9e7; border:1.5px solid #d4a017; color:#555;">
                Donation details coming soon!
            </div>
        @endif

        <hr class="sec-divider">

        {{-- Proceeds --}}
        <span class="sec-eye">Together for a Greater Cause</span>
        <h2 class="mb-2" style="color:#c25328;">Your Donation Goes Toward</h2>
        <p class="mb-3">With construction of the Damayan Community space underway, your support will help turn this vision into reality.</p>
        <div class="row g-3 mb-4">
            <div class="col-6 col-md-4"><div class="proc-card"><i class="ti ti-paint" aria-hidden="true"></i><p>Interior Finishes</p></div></div>
            <div class="col-6 col-md-4"><div class="proc-card"><i class="ti ti-tools" aria-hidden="true"></i><p>Necessary Equipment</p></div></div>
            <div class="col-6 col-md-4"><div class="proc-card"><i class="ti ti-armchair" aria-hidden="true"></i><p>Furniture &amp; Fixtures</p></div></div>
            <div class="col-6 col-md-4"><div class="proc-card"><i class="ti ti-users" aria-hidden="true"></i><p>Volunteer Assistance</p></div></div>
            <div class="col-6 col-md-4"><div class="proc-card"><i class="ti ti-hammer" aria-hidden="true"></i><p>Construction &amp; Labor</p></div></div>
            <div class="col-6 col-md-4"><div class="proc-card"><i class="ti ti-heart" aria-hidden="true"></i><p>Community Programs</p></div></div>
        </div>

        <img src="{{ asset('public/images/poem.png') }}"
         alt="Kahel na Langit Poem"
         style="width:100%; border-radius:14px; display:block; margin-bottom:20px;">

        {{-- Thank You --}}
        <div class="thank-banner mb-4">
            <h3>Thank You for Your Generosity</h3>
            <p>Your donation, no matter how big or small, helps support their programs, livelihoods, and future spaces filled with hope and opportunity.</p>
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
