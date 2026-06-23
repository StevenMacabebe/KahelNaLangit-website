@extends('admin.layouts.app')

@section('title', 'Manage Inquiries')

@section('content')

<h2 class="dashboard-title">
    Inquiries
</h2>

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
                            <a href="{{ route('admin.inquiries.show', $inquiry->id) }}"
                               class="btn btn-primary-action btn-sm">
                                View
                            </a>

                            <form method="POST"
                                  action="{{ route('admin.inquiries.destroy', $inquiry->id) }}"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this inquiry?')">
                                    Delete
                                </button>
                            </form>
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

@endsection