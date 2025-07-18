@extends('admin.master')

@section('title')
    Product Features | Orbit
@endsection

@section('body')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">All Product Features</h4>
        <a href="{{ route('itemfeaturs.create') }}" class="btn btn-primary">+ Add New Feature</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Section Title</th>
                    <th>Feature Title</th>
                    <th>Sub Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($features as $feature)
                    <tr>
                        <td>{{ $feature->id }}</td>
                        <td>{{ $feature->product->product_name ?? 'N/A' }}</td>
                        <td>{{ $feature->section_title }}</td>
                        <td>{{ $feature->feature_title }}</td>
                        <td>{{ $feature->feature_sub_title }}</td>
                        <td>{{ Str::limit($feature->feature_description, 50) }}</td>
                        <td>
                            <a href="{{ route('itemfeaturs.edit', $feature->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('itemfeaturs.destroy', $feature->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No features found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $features->links() }}
        </div>
    </div>
</div>
@endsection
