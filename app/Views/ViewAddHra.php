<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Přidat novou hru</h1>

<form method="POST" action="<?= base_url('hry/create') ?>">
    <div class="mb-3">
        <label>Název</label>
        <input type="text" name="nazev" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Popis</label>
        <textarea name="popis" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Datum vydání</label>
        <input type="date" name="vydani" class="form-control">
    </div>

    <div class="mb-3">
        <label>Autoři</label>
        <select name="id_tvurce[]" class="form-control" multiple>
            <?php foreach ($tvurci as $tvurce): ?>
                <option value="<?= $tvurce->id ?>"><?= $tvurce->nazev ?> <?= $tvurce->popis ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Žánry</label>
        <select name="genre_ids[]" class="form-control" multiple>
            <?php foreach ($zanry as $zanr): ?>
                <option value="<?= $zanr->id ?>"><?= $zanr->nazev ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Přidat hru</button>
</form>

<?= $this->endSection() ?>