<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Update - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">🌅 Kahel na Langit - Admin</span>
            <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2>Create New Update</h2>
                <form method="POST" action="{{ route('admin.updates.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="announcement">Announcement</option>
                            <option value="project_update">Project Update</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="8" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="event_date" class="form-label">Event Date (optional)</label>
                        <input type="date" class="form-control" id="event_date" name="event_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Update</button>
                    <a href="{{ route('admin.updates.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>