<header class="py-3 bg-dark">
    <div class="container">
        <!-- Start Header -->
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-dark px-0">
                <a class="navbar-brand d-flex" href="index.html">
                    E-SINTA
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto py-3 py-md-0">
                        <li class="nav-item pe-0 pe-md-3">
                            <a
                                href="{{route('home')}}"
                                class="text-light"
                            >Home</a
                            >
                        </li>
                        @if(auth()->user())
                            @if(auth()->user()->is_super_admin)
                                <li class="nav-item pe-0 pe-md-3">
                                    <a
                                        href="{{route('dashboard.index')}}"
                                        class="text-light"
                                    >Dashboard</a
                                    >
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Header -->
    </div>
</header>
