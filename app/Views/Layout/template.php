<?php include "template_header.php" ?>

<body>
    <h1>Selamat Datang</h1>
    <h2>Mahasiswa <?= $apps ?></h2>

    <?= $this->renderSection('tabel'); ?>

</body>
<?php include "template_footer.php" ?>