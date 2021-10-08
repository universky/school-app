<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">School App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ("School") ? 'active' : '' }}" aria-current="page" href="/school">School</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ("Student") ? 'active' : '' }}" href="/student">Student</a>
            </li>
        </ul>
    </div>
    </div>
</nav>


