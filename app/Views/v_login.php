<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php if (!empty(session()->getFlashdata('error'))) : ?>
    <?php endif; ?>
    <form method="post" action="<?= base_url(); ?>/login">
        <?= csrf_field(); ?>
        <h1>Login</h1>
        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
        <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
    </form>
</body>
</html>