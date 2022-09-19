<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/" style="margin-right: 200px;">BPKA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav row container ml-10">

            <li class="nav-item col">
            <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item col">
            <a class="nav-link {{ $title === "About" ? 'active' : '' }}" href="/about">ABOUT US</a>
            </li>
            <li class="nav-item col">
            <a class="nav-link {{ $title === "All News" ? 'active' : '' }}" href="/news">NEWS</a>
            </li>

            <li class="nav-item col">
            <a class="nav-link" href="#">GALLERY</a>
            </li>
           
        </div>
    </div>
    </nav>
    <!-- navbar end -->