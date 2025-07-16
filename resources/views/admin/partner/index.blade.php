@extends('admin.master')
@section('title')
Partner Query
@endsection
@section('body')
<div class="container">
    <h2>Partner List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Company</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Business Type</th>
                <th>Website</th>
                <th>Message</th>
                <th>Agreed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $partner)
                <tr>
                    <td>{{ $partner->company_name }}</td>
                    <td>{{ $partner->fullName }}</td>
                    <td>{{ $partner->email }}</td>
                    <td>{{ $partner->phone }}</td>
                    <td>{{ $partner->businessType }}</td>
                    <td>{{ $partner->website }}</td>
                    <td>{{ $partner->message }}</td>
                    <td>{{ $partner->agree ? 'Yes' : 'No' }}</td>
                    <td>
                         <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
