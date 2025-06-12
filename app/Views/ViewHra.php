<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<?php 
    //$ionAuth = new \IonAuth\Libraries\IonAuth();
    $isLoggedIn = $ionAuth->loggedIn();
?>

<div id="invoice">
    <div class="row h-100">
        <div class="col-sm mt-5">
            <h2 class="card-title"><?= $hra->title ?></h2> 
            <p class="description my-3"><?= $hra->description ?></p>
            <div class="col-sm no-print">
                <button type="button" class="btn btn-primary btn-sm mt-3 w-100" onclick="download_pdf()">Download PDF</button>
            </div> 
            
            <?php if ($isLoggedIn): ?>
            <div class="row">
                <div class="col-sm">
                    <p><a href="<?= site_url('hry/edit/' . $hra->id) ?>">
                    <button type="submit" class="btn btn-warning btn-sm mt-3 w-100">Edit Hra</button></a></p>
                </div>
                <div class="col-sm">
                    <form action="<?= base_url('hry/delete/' . $hra->id) ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this hrab?');">
                        <button type="submit" class="btn btn-danger btn-sm mt-3 w-100">Delete</button>
                    </form>
                </div>                
            </div>
            <?php endif; ?>
            
        </div>                
    </div>
</div>

<script>
function download_pdf() {
    const pdf = document.getElementById('invoice');
    const elementsToHide = document.querySelectorAll('.no-print');
    elementsToHide.forEach(el => el.style.display = 'none');

    setTimeout(() => {
        html2pdf()
            .from(pdf)
            .set({
                margin: 10,
                filename: '<?= $hra->title ?>',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: {
                    scale: 2,
                    useCORS: true,
                },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            })
            .save()
            .then(() => {
                elementsToHide.forEach(el => el.style.display = '');
            })
            .catch(err => {
                console.error(err);
                elementsToHide.forEach(el => el.style.display = '');
            });
    }, 500);
}
</script>


<?= $this->endSection() ?>