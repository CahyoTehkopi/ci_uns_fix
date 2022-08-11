<?= $this->extend('Layout/template') ?>
<?= $this->section('tabel') ?>

<table class="table table-sm" id="data">
    <thead>
        <tr>
            <th>Fakultas</th>
            <th>Prodi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataTable as $row) { ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#data').DataTable();
    });
</script>
<?= $this->endSection() ?>