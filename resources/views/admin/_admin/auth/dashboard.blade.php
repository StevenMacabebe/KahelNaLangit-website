<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kahel na Langit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">🌅 Kahel na Langit - Admin</a>
            <div class="ms-auto">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Welcome to Admin Dashboard!</h2>
                        <p>You are logged in as: <strong>{{ Auth::guard('admin')->user()->full_name }}</strong></p>
                        <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Updates</h5>
                                        <p class="card-text display-6">{{ $updatesCount }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Partnerships</h5>
                                        <p class="card-text display-6">{{ $partnershipsCount }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Wishlist Items</h5>
                                        <p class="card-text display-6">{{ $wishlistCount }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Pending Inquiries</h5>
                                        <p class="card-text display-6">{{ $inquiriesCount }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h4>Quick Actions</h4>
                            <div class="btn-group" role="group">
                                <a href="{{ route('admin.updates.index') }}" class="btn btn-primary">Manage Updates</a>
                                <a href="{{ route('admin.partnerships.index') }}" class="btn btn-success">Manage Partnerships</a>
                                <a href="{{ route('admin.wishlist.index') }}" class="btn btn-warning">Manage Wishlist</a>
                                <a href="{{ route('admin.inquiries.index') }}" class="btn btn-danger">Manage Inquiries</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>