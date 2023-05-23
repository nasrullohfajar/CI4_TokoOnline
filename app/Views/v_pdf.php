<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save to Pdf</title>
    <style>
    .tab {
        border-collapse: collapse;
    }

    .tab th,
    .tab td {
        padding: 5px;
        border: solid 1px #777;
    }

    .tab th {
        background-color: lightblue;
    }
    </style>
</head>

<body>

    <img src="../public/img/logo_polban.png" alt="" width="10%"><br><br><br>

    <table border="1" width=100% class="tab">

        <tr>
            <th width="10%">no</th>
            <th width="20%">nim</th>
            <th width="50%">nama</th>
            <th width="20%">umur</th>
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
        </tr>

        <?php
            $no++;
            }
        }
        ?>
    </table>
</body>

</html>