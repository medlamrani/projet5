<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/projet5/src/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/projet5/src/public/css/bootstrap.css">
        <title>Se connecter</title>
    </head>
    <body>   
        <?php if(isset($_SESSION['message'])) : ?> 
            <div class="mt-5 alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['message'] ;?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="login-bloc text-center">
            <form action="http://localhost/projet5/admin/adminconnect" method="post" class="login">
                <img class="mb-4" src="/projet5/src/public/image/user.png" alt="" width="72" height="72">

                <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>

                <label for="username" class="sr-only">Peudo : </label>
                <input type="text" id="username" name="username" class="form-control mb-4" placeholder="Pseudo" required="" autofocus="">

                <label for="password" class="sr-only">Mot de passe :</label>
                <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Mot de passe" required="">

                <input type="submit" value="Se connecter" name="adminConnect" class="btn btn-lg btn-primary btn-block" />
                
            </form>
        </div>    
    </body>
</html>