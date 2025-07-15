@extends('admin.master')

@section('body')
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Show Role') }}</div>

                <div class="card-body">
                    <a href="{{route('roles.index')}}" class="btn btn-info">Back</a>
                    <p><strong>Name:</strong>{{$role->name}}</p>
                    <h4>Permissions</h4>
                    @foreach($role->permissions as $permission)
                        <p>{{$permission->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
