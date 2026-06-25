@extends('admin.layouts.app')

@section('title')
    Partnerships
@endsection

@section('description')
    Manage partner organisations and collaborations.
@endsection

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <a href="{{ route('admin.partnerships.create') }}"
       class="btn btn-primary-action">
        Add Partnership
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
                            <th>Logo</th>
                            <th>Banner</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th width="180">Actions</th>
                        </tr>
                    </thead>

                <tbody>

                    @foreach($partnerships as $partnership)
                        <tr>

                            <td>
                                @if($partnership->logo)
                                    <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->logo) }}"
                                        alt="{{ $partnership->name }}"
                                        class="logo-thumb">
                                @else
                                    <span class="text-muted">
                                        No logo
                                    </span>
                                @endif
                            </td>

                            <td>
                                @if($partnership->banner_image)
                                    <img src="{{ asset('public/images/uploads/partnerships/' . $partnership->banner_image) }}"
                                        alt="{{ $partnership->name }}"
                                        class="banner-thumb">
                                @else
                                    <span class="text-muted">
                                        No banner
                                    </span>
                                @endif
                            </td>

                            <td>
                                {{ $partnership->name }}
                            </td>

                            <td>
                                <span class="badge bg-{{ $partnership->status === 'current' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($partnership->status) }}
                                </span>
                            </td>

                            <td>
                                <a href="{{ route('admin.partnerships.edit', $partnership->id) }}"
                                class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form method="POST"
                                    action="{{ route('admin.partnerships.destroy', $partnership->id) }}"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this partnership?')">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

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