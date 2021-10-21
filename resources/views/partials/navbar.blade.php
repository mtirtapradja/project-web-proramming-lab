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
                            <a class="nav-link text-light active" href="/my-history">History Transaction</a>
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
            </div>
        </div>
    </div>
</header>
