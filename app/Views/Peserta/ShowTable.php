<?= $this->extend('Layout/template') ?>
<?= $this->section('tabel') ?>


<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('/peserta/create')?>" class="btn btn-primary">TAMBAH DATA</a>
        </div>
        <?php dd($peserta);?>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-sm" id="data">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($peserta as $row) { ?>
                        <tr>
                            <td><?= $row->name ?></td>
                            <td><?= $row->email ?></td>
                            <td>
                                <a href="<?= base_url("/peserta/edit/$row->id") ?>" class="btn btn-info">EDIT</a>
                                <a href="<?= base_url("/peserta/delete/$row->id") ?>" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection() ?>