<div class="row sticky-top">
    <div class="col-md-2 col-sm-12 p-0">
        {{-- Navigation sidebar --}}
        <nav class="navSidebar navbar">
            <div class="d-flex">
                <div>
                    <div class="avatar">
                        @php
                            $username = Auth::user()->name;
                            echo substr($username, 0, 1);
                        @endphp
                    </div>
                </div>
                <div class="username">{{ Auth::user()->name }}</div>
            </div>
        </nav>
    </div>
    <div class="col-md-10 col-sm-12 navTopRight">Right</div>
</div>
