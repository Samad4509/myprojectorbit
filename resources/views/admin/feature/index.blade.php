@extends('admin.master')

@section('title')
    Feature Manage | Orbit
@endsection

@section('body')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Feature Manage
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Responsive Feature Table --}}
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Feature Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($features as $feature)
                            <tr>
                                <td>{{ $feature->feature_name }}</td>
                                <td>
                                    <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('features.destroy', $feature->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this feature?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
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
@endsection
