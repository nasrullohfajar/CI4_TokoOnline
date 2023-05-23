<?= $this->extend('v_template')?>
<?= $this->section('content')?>
<table>
        <?php foreach($mahasiswa as $a): ?>
                    <h2>Detail Mahasiswa</h2>
                    <p>NIM  : <?=$a['NIM'];?></p>
                    <p>Nama : <?=$a['Nama'];?></p>  
                    <p>Umur : <?=$a['Umur'];?></p>
                <?php endforeach; ?>
                <br>
                <br>
                <a href="<?php echo base_url('mahasiswa/');?>" class="btn btn-primary btn-sm">Kembali</a>
    </table>
<?= $this->endSection()?>