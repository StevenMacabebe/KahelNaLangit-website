@extends('admin.layouts.app')

@section('title')
    Updates
@endsection

@section('description')
    Manage Updates
@endsection

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <a href="{{ route('admin.updates.create') }}"
       class="btn btn-primary">
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

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

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

                                <div class="table-actions">

                                    <a href="{{ route('admin.updates.edit', $update->id) }}"
                                    class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form method="POST"
                                        action="{{ route('admin.updates.destroy', $update->id) }}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this update?')">
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                No updates found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>
</div>

<div class="mt-3">
    <a href="{{ route('admin.dashboard') }}"
       class="btn btn-secondary">
        Back to Dashboard
    </a>
</div>

@endsection