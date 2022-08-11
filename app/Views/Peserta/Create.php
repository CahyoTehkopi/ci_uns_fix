<?= $this->extend('Layout/template') ?>
<?= $this->section('tabel') ?>


<div class="container">
    <div class="row">
        <div class="col">
            <?php if(!empty(session()->getFlashdata('error'))){?>
                <h4>Periksa Kembali Isian Anda</h4>
                    <br>
                    <?= session()->getFlashdata('error') ?>
                <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="<?= base_url("/peserta/store") ?>">
                <?= csrf_field() ?>
                <div class=form-group>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>">
                </div>
                <div class=form-group>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= old('email') ?>">
                </div>

                <div class=form-group>
                    <input type="submit" class="btn btn-primary" value="SIMPAN">
                </div>
            </form>
        </div>
    </div>

</div>



<?= $this->endSection() ?>