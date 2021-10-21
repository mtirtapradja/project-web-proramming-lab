<header class="mb-auto">
    <div class="row g-0 p-3 align-items-center color-primary">
        <div class="col-6 col-md-1 text-center">
            <a href="/" class="text-decoration-none text-black">
                <h1>DY.ID</h1>
            </a>
        </div>
        <div class="col-sm-6 col-md-11">
            {{-- Add GET method action to... --}}
            <form action="/" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-danger" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="navbar navbar-expand-lg navbar-light color-secondary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="/">Home</a>
                    </li>
                </ul>
                @can('user')
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light active" href="/my-cart">My Cart</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light active" href="/history">History Transaction</a>
                        </li>
                    </ul>
                @endcan
                @can('admin')
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Manage Product
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/products/create">Add Product</a></li>
                                <li><a class="dropdown-item" href="/products/manage">View Product</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Manage Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/categories/create">Add Category</a></li>
                                <li><a class="dropdown-item" href="/categories/manage">View Category</a></li>
                            </ul>
                        </li>
                    </ul>
                @endcan
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item me-2">
                            <a href="/login" class="btn btn-danger">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Login
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a href="/register" class="btn btn-danger">
                                <i class="bi bi-person-plus-fill"></i>
                                Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
