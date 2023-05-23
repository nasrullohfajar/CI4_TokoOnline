<?= $this->extend('v_template')?>
<?= $this->section('content')?>
<table border="1" width = 100% class="table table-striped table-bordered">

    <a href="/tambahPegawai" class="btn btn-primary" role="button" aria-pressed="true">+ Tambah Pegawai</a><br><br>
        <tr>
            <th>no</th>
            <th>nip</th>
            <th>nama</th>
            <th>gender</th>
            <th>telp</th>
            <th>email</th>
            <th>pendidikan</th>
        </tr>

        <?php
            $no = 1;
            if(!empty($pegawai)){
                foreach($pegawai as $data){?>
                <tr>
                    <td><?=$no;?></td>
                    <td><?=$data['nip'];?></td>
                    <td><?=$data['nama'];?></td>
                    <td><?=$data['gender'];?></td>
                    <td><?=$data['telp'];?></td>
                    <td><?=$data['email'];?></td>
                    <td><?=$data['pendidikan'];?></td>
                </tr>
            
        <?php
            $no++;
            }
        }
        ?>
    </table>
<?= $this->endSection()?>