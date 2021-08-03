@extends('layouts.weblayout')

@section('content')
<h1>Welcome homepage 1123</h1>
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<a href="{{ url('logout') }}"
                        class="{{ Request::is('logout') ? 'list-group-item active' : 'list-group-item' }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-power"></i> Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
@endsection