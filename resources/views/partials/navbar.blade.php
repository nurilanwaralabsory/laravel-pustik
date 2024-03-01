<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="index.html" class="logo">
        <span class="fs-2 fw-bolder" style="color: #e75e8d">PUSTIK</span>
    </a>
    <!-- ***** Logo End ***** -->

    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="{{ route('books') }}">Books</a></li>
        <li><a href="details.html">About Team</a> </li>

        <form method="POST" action="{{ route('logout') }}">
            <li class="mt-1" :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                @csrf
                <a href="#">{{ Auth::user()->name }}
                    <img src="{{ asset('template') }}/assets/images/profile-header.jpg" alt=""
                        style="width: 20px">
                </a>
            </li>
        </form>
    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>
