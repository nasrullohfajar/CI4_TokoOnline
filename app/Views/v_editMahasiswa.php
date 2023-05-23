<?= $this->extend('v_template')?>
<?= $this->section('content')?>
<?php foreach($mahasiswa as $a): ?>
    <center>
    <form action = "<?= base_url("mahasiswa/update/{$a['NIM']}"); ?>" method="post" width=100%>
        <div>
            <label for="NIM">NIM</label> <br>
            <input type="text" class="form-control" name="NIM" required value="<?= old('NIM',$a['NIM']) ?>" readonly>
            <br><br><br>
        </div>

        <div>
            <label for="Nama">Nama</label> <br>
            <input type="text" class="form-control" name="Nama" required value="<?= old('Nama',$a['Nama']) ?>">
            <br><br><br>
        </div>

        <div>
            <label for="Umur">Umur</label> <br>
            <input type="number" class="form-control" name="Umur" required value="<?= old('Umur',$a['Umur']) ?>">
            <br><br><br>
        </div>
    <?php endforeach; ?>

        <div>
            <a href="<?php echo base_url('/mahasiswa');?>" class="btn btn-primary btn-sm">Kembali</a>
            <input type="submit" value="Simpan" class="btn btn-success btn-sm" role="button" aria-pressed="true">
        </div>
    </form>
    </center>
<?= $this->endSection()?>