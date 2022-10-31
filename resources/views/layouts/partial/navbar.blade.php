<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">Coba Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link{{ $activeMenu === 0 ? ' active' : '' }}" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ $activeMenu === 1 ? ' active' : '' }}" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ $activeMenu === 2 ? ' active' : '' }}" href="{{ url('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ $activeMenu === 3 ? ' active' : '' }}" href="{{ url('categories') }}">Categories</a>
                </li>
            </ul>
        </div>
    </div>
</nav>