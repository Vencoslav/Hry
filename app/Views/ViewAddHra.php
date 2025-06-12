<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Add New Game</h1>

<form method="POST" action="<?= base_url('hry/create') ?>">
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Published Date</label>
        <input type="date" name="published_date" class="form-control">
    </div>

    <div class="mb-3">
        <label>Authors</label>
        <select name="author_ids[]" class="form-control" multiple>
            <?php foreach ($tvurci as $tvurce): ?>
                <option value="<?= $tvurce->id ?>"><?= $tvurce->nazev ?> <?= $tvurce->popis ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Genres</label>
        <select name="genre_ids[]" class="form-control" multiple>
            <?php foreach ($zanry as $zanr): ?>
                <option value="<?= $zanr->id ?>"><?= $zanr->nazev ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Add Game</button>
</form>

<?= $this->endSection() ?>