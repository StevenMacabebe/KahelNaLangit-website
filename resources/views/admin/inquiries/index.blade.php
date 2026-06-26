@extends('admin.layouts.app')

@section('title')
    Inquiries
@endsection

@section('description')
    View and manage incoming inquiries.
@endsection

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($inquiries as $inquiry)
                        <tr>
                            <td>{{ $inquiry->full_name }}</td>

                            <td>
                                {{ $inquiry->subject }}
                            </td>

                            <td>
                                <span class="badge bg-{{ $inquiry->status === 'pending'
                                    ? 'warning'
                                    : ($inquiry->status === 'resolved'
                                        ? 'success'
                                        : 'secondary') }}">
                                    {{ ucfirst($inquiry->status) }}
                                </span>
                            </td>

                            <td>
                                {{ $inquiry->created_at->format('M d, Y') }}
                            </td>

                            <td>
                                <div class="table-actions">

                                    <a href="{{ route('admin.inquiries.show', $inquiry->id) }}"
                                    class="btn btn-primary-action btn-sm">
                                        View
                                    </a>

                                    <form method="POST"
                                        action="{{ route('admin.inquiries.destroy', $inquiry->id) }}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this inquiry?')">
                                            Delete
                                        </button>

                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                No inquiries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection