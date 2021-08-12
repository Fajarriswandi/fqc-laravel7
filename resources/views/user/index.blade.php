@extends('layouts.adminLayout')

{{-- PAGE TITLE --}}
@section('title', 'User management :: Fajr Quran Centre')

@section('main')
    <div class="col-md-10 col-sm-12">
        <h1>User Management</h1>

        @foreach ($users as $i => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
        {{-- @foreach ($role_users as $i => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->user_id }}</td>
                <td>{{ $role->role_id }}</td>
            </tr>
        @endforeach --}}
    </div>



@endsection
