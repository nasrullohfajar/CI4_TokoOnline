<?= $this->extend('v_template')?>
<?= $this->section('content')?>
<table border="1" width=100% class="table table-striped table-bordered">
    <form action=" <?= base_url(); ?>/mahasiswa" method="GET">
        <input type="text" name="cari" placeholder="cari berdasarkan nama">
        <button type="submit" class="btn btn-success btn-sm" role="button" aria-pressed="true">cari</button>
        <a href="/displayPdf" class="btn btn-primary btn-sm">Save as Pdf</a>
    </form>
    <tr class="table-primary">
        <th>no</th>
        <th>nim</th>
        <th>nama</th>
        <th>umur</th>
        <th>opsi</th>
    </tr>

    <?php
            $no = 1;
            if(!empty($mahasiswa)){
                foreach($mahasiswa as $data){?>
    <tr>
        <td><?=$no;?></td>
        <td><?=$data['NIM'];?></td>
        <td><?=$data['Nama'];?></td>
        <td><?=$data['Umur'];?></td>
        <td><a href="/mahasiswa/detail/<?php echo $data['NIM'];?>" class="btn btn-primary" role="button"
                aria-pressed="true">detail</a>
            <a href="/mahasiswa/edit/<?php echo $data['NIM'];?>" class="btn btn-primary" role="button"
                aria-pressed="true">edit
        </td>
    </tr>

    <?php
            $no++;
            }
        }
        ?>
</table>
<?= $pager->links('mahasiswa', 'bootstrap_pagination');?>
<?= $this->endSection()?>