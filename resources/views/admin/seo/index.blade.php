@extends('admin.master')

@section('body')
<section class="py-5 bg-light">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <h5 class="mb-0">
          <i class="fas fa-search me-2"></i> SEO Records
        </h5>
        {{-- Optional: Add a "New SEO" button if needed --}}
        {{-- <a href="{{ route('seo.create') }}" class="btn btn-primary btn-sm">
          <i class="fas fa-plus"></i> New SEO
        </a> --}}
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="table-responsive shadow-sm rounded bg-white">
          <table class="table table-bordered table-hover mb-0">
            <thead class="table-dark">
              <tr>
                <th scope="col">Page</th>
                <th scope="col" style="width: 120px;">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($seos as $item)
                <tr>
                  <td class="align-middle">{{ $item->page }}</td>
                  <td class="align-middle text-center">
                    @can('seo-edit')
                        <a href="{{ route('seo.edit', $item->id) }}" class="btn btn-sm btn-dark" title="Edit SEO">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    @endcan
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="2" class="text-center text-muted py-3">
                    <i class="fas fa-info-circle me-1"></i> No SEO records found.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
