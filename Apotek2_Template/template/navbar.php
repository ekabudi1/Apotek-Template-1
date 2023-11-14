<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#BEADFA ;">
    <div class="container-fluid">
        <a class="navbar-brand">APOTEK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php?page=obat"> Obat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?page=pelanggan">Data Pelanggan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?= $_SESSION['username']?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>