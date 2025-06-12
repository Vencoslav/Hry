<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <?php if ($isLoggedIn): ?>
        <a href="<?= base_url('games/new') ?>" class="btn btn-primary">Add New Game</a>
    <?php endif; ?>
    
    <div class="row">
        <?php foreach ($hry as $hra): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">
                            <?= anchor('hry/'.$hra->id, $hra->title) ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    <div class="d-flex">
        <div class="mx-auto text-center">
            <?= $pager->links(); ?>
        </div>
    </div>
</footer>

<?= $this->endSection() ?>