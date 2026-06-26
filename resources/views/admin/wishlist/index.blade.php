@extends('admin.layouts.app')

@section('title')
    Wishlist
@endsection

@section('description')
    Manage wishlist items and requests.
@endsection

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <a href="{{ route('admin.wishlist.create') }}"
       class="btn btn-primary">
        Add Item
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
                        <th>Item</th>
                        <th>Needed</th>
                        <th>Received</th>
                        <th>Status</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($wishlist as $item)

                        <tr>

                            <td>
                                @if($item->image)
                                    <img src="{{ asset('public/images/uploads/wishlist/' . $item->image) }}"
                                         alt="{{ $item->item_name }}"
                                         class="item-thumb">
                                @else
                                    <span class="text-muted">
                                        No image
                                    </span>
                                @endif
                            </td>

                            <td>
                                {{ $item->item_name }}
                            </td>

                            <td>
                                {{ $item->quantity_needed }}
                            </td>

                            <td>
                                {{ $item->quantity_received }}
                            </td>

                            <td>
                                <span class="badge bg-{{ $item->status === 'complete' ? 'success' : ($item->status === 'incomplete' ? 'warning' : 'secondary') }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>

                            <td>

                                <div class="table-actions">

                                    <a href="{{ route('admin.wishlist.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form method="POST"
                                        action="{{ route('admin.wishlist.destroy', $item->id) }}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this item?')">
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                No wishlist items found.
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