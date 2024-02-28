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
    <?php   if (isset($error)) { ?>
        <input id="input-error" type="hidden" value="<?=$error?>">
    <?php   }else{ ?>
        <input id="input-error" type="hidden" value="0">
    <?php   } 

            if (isset($_COOKIE['error'])) {
                setcookie('error', '', time() - 3600, "/");
            }
    ?>
    <div class="contenido">
        <section class="login">
            <h1>Login Mira telecomunicacions</h1>
            <form id="form-login" action="<?=url.'?controller=login&action=loguear'?>" method="post">
                <div class="divEmail">
                    <label for="email">Email</label>
                    <input type="email" name="email"  placeholder="email">
                </div>
                <div class="divUser">
                    <label for="user">User</label>
                    <input type="text" name="user"  placeholder="user">
                </div>
                <div class="divPassword">
                    <label for="password">Password</label>
                    <input type="password" name="password"  placeholder="password">
                </div>

                <input type="submit" value="Entrar">
            </form>
        </section>
    </div>

    <script src="./script/login.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>