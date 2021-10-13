    <header>
        <div class="row g-0 p-3 align-items-center color-primary">
            <div class="col-6 col-md-1 text-center">
                <h1>DY.ID</h1>
            </div>
            <div class="col-sm-6 col-md-11">
                {{-- Add GET method action to... --}}
                <form action="#" method="GET">
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
                            <a class="nav-link text-light active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Pricing</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="btn btn-danger">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
