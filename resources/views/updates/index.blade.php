@extends('admin.layouts.app')

@section('title', 'Manage Updates')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="dashboard-title">
        Manage Updates
    </h2>

    <a href="{{ route('admin.updates.create') }}"
       class="btn btn-primary-action">
        Create New Update
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Event Date</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($updates as $update)
                    <tr>

                        <td>
                            @if($update->image)
                                <img src="{{ asset('public/images/uploads/updates/' . $update->image) }}"
                                     alt="{{ $update->title }}"
                                     class="update-thumb">
                            @else
                                <span class="text-muted">
                                    No image
                                </span>
                            @endif
                        </td>

                        <td>
                            {{ $update->title }}
                        </td>

                        <td>
                            <span class="badge bg-{{ $update->category === 'announcement' ? 'warning' : 'info' }}">
                                {{ ucfirst(str_replace('_', ' ', $update->category)) }}
                            </span>
                        </td>

                        <td>
                            {{ $update->event_date ?? 'N/A' }}
                        </td>

                        <td>
                            <a href="{{ route('admin.updates.edit', $update->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('admin.updates.destroy', $update->id) }}"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this update?')">
                                    Delete
                                </button>

                            </form>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No updates found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

<div class="mt-3">
    <a href="{{ route('admin.dashboard') }}"
       class="btn btn-secondary">
        ← Back to Dashboard
    </a>
</div>

@endsection