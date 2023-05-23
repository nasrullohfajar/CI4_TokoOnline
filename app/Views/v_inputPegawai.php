<?= $this->extend('v_template')?>
<?= $this->section('content')?>
    <?php
    if (isset($errors)) {
        echo '<div style="width: 300px"; border-radius: 5px;>';
        echo '<ul style="background-color: red; color: white; padding: 10px;">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>

    <form method="post" action="<?= base_url(); ?>/postPegawai">
        <h1>Tambah Pegawai</h1>
        <label for="nip">Nip</label><br>
        <input type="number" name="nip" id="nip"class="form-control" required autofocus value="<?= set_value('nip') ?>"><br>

        <br><label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" placeholder="nama" class="form-control" required value="<?= set_value('nama') ?>"><br>

        <br><label for="gender">Gender</label><br>
        <input type="radio" name="gender" value="L" <?php echo set_radio('gender', 'L'); ?>> 
        <label for="L">L</label>
        <input type="radio" name="gender" value="P" <?php echo set_radio('gender', 'P'); ?>>
        <label for="P">P</label><br>

        <br><label for="telp">Telp</label><br>
        <input type="text" name="telp" id="telp" placeholder="telp" class="form-control" required value="<?= set_value('telp') ?>"><br>

        <br><label for="email">Email</label><br>
        <input type="text" name="email" id="email" placeholder="email" class="form-control" required value="<?= set_value('email') ?>"><br>

        <br><label for="penddidikan">Pendidikan</label> <br>
            <select name="pendidikan" id="pendidikan">
                <option value="">Pilih Pendidikan</option>
                <option value="SD" <?= set_select('pendidikan', 'SD'); ?>>SD</option>
                <option value="SMP" <?= set_select('pendidikan', 'SMP'); ?>>SMP</option>
                <option value="SMA" <?= set_select('pendidikan', 'SMA'); ?>>SMA</option>
                <option value="D3" <?= set_select('pendidikan', 'D3'); ?>>D3</option>
                <option value="D4/S1" <?= set_select('pendidikan', 'D4/S1'); ?>>D4/S1</option>
            </select><br>
        
        <br><button type="submit" class="btn btn-success" role="button" aria-pressed="true">Submit</button>
    </form>
<?= $this->endSection()?>