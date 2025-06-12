<?php
$this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Vítejte na stránkách Herní databáze!</h1>
        <p class="lead">Objevujte, přidávejte a spravujte své oblíbené hry, žánry, platformy a tvůrce.</p>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Hry</h5>
                    <p class="card-text">Prohlédněte si seznam všech her v databázi.</p>
                    <a href="<?= base_url('hry') ?>" class="btn btn-primary">Zobrazit hry</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Žánry</h5>
                    <p class="card-text">Prozkoumejte různé herní žánry.</p>
                    <a href="<?= base_url('zanry') ?>" class="btn btn-success">Zobrazit žánry</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Platformy</h5>
                    <p class="card-text">Podívejte se na podporované platformy.</p>
                    <a href="<?= base_url('platformy') ?>" class="btn btn-warning">Zobrazit platformy</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Tvůrci</h5>
                    <p class="card-text">Seznamte se s tvůrci her.</p>
                    <a href="<?= base_url('tvurci') ?>" class="btn btn-info">Zobrazit tvůrce</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>