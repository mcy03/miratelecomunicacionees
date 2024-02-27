<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/admin/login.css?1.0">
    <title>Login</title>
</head>
<body>
    <div class="contenido">
        <section class="login">
            <h1>Login Mira telecomunicacions</h1>
            <form id="form-login" action="<?=url.'?controller=login&action=loguear'?>" method="post">
                <label for="email">email</label>
                <input type="email" name="email" id="" placeholder="">
                <label for="user">user</label>
                <input type="text" name="user" id="" placeholder="">
                <label for="password">password</label>
                <input type="password" name="password" id="" placeholder="">

                <input type="submit" value="Entrar">
            </form>
        </section>
    </div>
</body>
</html>