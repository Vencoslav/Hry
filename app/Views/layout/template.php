<!Doctype html>
<html>
    <head>
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <?= $this->include("layout/assets");?> 
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url() ?>"><?= $title ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('hry') ?>">Hry</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('tvurci') ?>">Tvůrci</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('zanry') ?>">žánry</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <?= $this->renderSection("content");?>
        </div>
    </body>
</html>