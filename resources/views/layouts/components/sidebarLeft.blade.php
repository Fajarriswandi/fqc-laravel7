<div class="col-md-2 col-sm-12 sidebarContainer">
    <div class="content">
        <div class="navbar">

            {{-- List menu --}}
            <ul class="list-group w-100 listMenu">
                <li>
                    <a href="{{ url('admin') }}"
                        class="{{ Request::is('admin') ? 'list-group-item active' : 'list-group-item' }}"><i
                            class="bi bi-columns-gap"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('artikel') }}"
                        class="{{ Request::is('artikel') ? 'list-group-item active' : 'list-group-item' }}"><i
                            class="bi bi-file-earmark-richtext"></i> Articles</a>
                </li>
                <li>
                    <a href="{{ url('users') }}"
                        class="{{ Request::is('users') ? 'list-group-item active' : 'list-group-item' }}"><i
                            class="bi bi-people"></i> Users</a>
                </li>
                <li>
                    <a href="{{ url('logout') }}"
                        class="{{ Request::is('logout') ? 'list-group-item active' : 'list-group-item' }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-power"></i> Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
    </div>
</div>
