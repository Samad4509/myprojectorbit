@extends('admin.master')

@section('title')
    Product Manage | Orbit
@endsection

@section('body')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Product Manage
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            {{-- Responsive and fully centered table --}}
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50px;">ID</th>
                            <th>Product Name</th>
                            <th>Banner Title</th>
                            <th>Banner Subtitle</th>
                            <th style="min-width: 150px;">Banner Description</th>
                            {{-- <th style="min-width: 150px;">Product Features</th> --}}
                            <th style="width: 120px;">Banner Image</th>
                            <th style="min-width: 150px;">Technology Images</th>
                            <th style="width: 120px;">Created At</th>
                            <th style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->product->product_name ?? 'N/A' }}</td>
                                <td>{{ $item->banner_title }}</td>
                                <td>{{ $item->banner_subtitle ?? '-' }}</td>
                                <td>{!! nl2br(e($item->banner_description)) !!}</td>
                                {{-- <td style="max-width: 300px; max-height: 120px; overflow: auto;">
                                    {!! $item->product_features !!}
                                </td> --}}

                                <td>
                                    @if ($item->banner_image)
                                        <img src="{{ asset($item->banner_image) }}" alt="Banner"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if ($item->tech_images)
                                        @php $images = json_decode($item->tech_images, true); @endphp
                                        @foreach ($images as $img)
                                            <img src="{{ asset($img) }}" alt="Tech"
                                                style="width: 100px; height: 100px; object-fit: cover; margin: 2px;">
                                        @endforeach
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="{{route('all.edit',$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{route('all.destroy',$item->id)}}" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class="card-footer bg-light">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection