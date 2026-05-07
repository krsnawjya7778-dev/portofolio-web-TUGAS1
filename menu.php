<?php $page = $_GET['page'] ?? 'home'; ?>
<style>

.logo-k{
    font-size:32px;
    font-weight:bold;
    color:#6366f1 !important;
    text-decoration:none;
    display:inline-block;
    animation:spin 4s linear infinite;
    transition:0.3s;
}

.logo-k:hover{
    color:#22c55e !important;
    transform:scale(1.2);
}

@keyframes spin{
    from{
        transform:rotate(0deg);
    }

    to{
        transform:rotate(360deg);
    }
}

</style>
<nav class="navbar navbar-expand-lg shadow-sm px-4" style="background:white;">
    <div class="container-fluid">

        <a class="navbar-brand logo-k" href="index.php?page=home">
            K
        </a>


        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link <?= $page == 'home' ? 'fw-bold text-primary' : '' ?>" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page == 'about' ? 'fw-bold text-primary' : '' ?>" href="?page=about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page == 'contact' ? 'fw-bold text-primary' : '' ?>" href="?page=contact">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($page == 'level' || $page == 'studies') ? 'fw-bold text-primary' : '' ?>" data-bs-toggle="dropdown">
                        Studies
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=level">Level</a></li>
                        <li><a class="dropdown-item" href="?page=studies">Studies</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="navbar-nav">
                <?php if (isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <span class="nav-link text-muted"><?= $_SESSION['user']['nama']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="btn btn-sm text-white" style="background:#6366f1;" href="?page=login">
                            Login
                        </a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>