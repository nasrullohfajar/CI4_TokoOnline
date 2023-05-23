<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <?php 
		$session = session();
		if(isset($_SESSION['gagal'])){
		    return redirect()->to(base_url('/'));
		}
	?>

    <table border=1 width=100%>
        </td>
        <tr>
            <td>
                <center>
                    <h1>Header</h1>
                </center>
            </td>
        </tr>

        <tr>
            <td>
                <a href="<?= base_url('/home')?>">Home</a>
                <a href="<?= base_url('/info')?>">Info</a>
                <a href="<?= base_url('/mahasiswa')?>">Mahasiswa</a>
                <a href="<?= base_url('/pegawai')?>">Pegawai</a>
                <a href="<?= base_url('/logout')?>">logout</a>
            </td>
        </tr>

        <tr>
            <td height=450px>
                <?= $this->renderSection('content')?>
            </td>
        </tr>

        <tr>
            <td>
                <center>
                    <h1>Footer</h1>
                </center>
            </td>
        </tr>
    </table>

</body>

</html>