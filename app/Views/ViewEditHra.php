<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<!-- Edit Game Form -->
<div class="bg-white shadow-lg editdiv">
    <div class="m-3">
        <h1 class="">Uprav hru</h1>

        <form action="<?= site_url('hry/update/' . $hra->id) ?>" method="post">
            <!-- Title Field -->
            <div class="mb-4 ">
                <label class="block font-medium mb-1">Název</label>
                <input type="text" name="nazev" value="<?= $hra->nazev ?>" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Description Field -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Popis</label>
                <textarea id="popis" name="popis"><?= $hra->popis ?></textarea>
            </div>

            <!-- Published Date Field -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Datum vydání</label>
                <input type="text" name="datum_vydani" value="<?= $hra->datum_vydani ?>" class="w-full border rounded px-3 py-2">
            </div>

               <!-- Submit Button -->
            <div class="text-right mb-4">
                <button type="submit" class="px-4 py-2 rounded savechanges">Ulož změny</button>
            </div>
        </form>
    </div>
</div>

<!-- TinyMCE Editor Script -->
<script src="https://cdn.tiny.cloud/1/wtzrkm9ng24oerzyodd9cyi0i1s1x65v08rza9ytbeza3uhy/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: '#description'
    });
</script>

<?= $this->endSection() ?>