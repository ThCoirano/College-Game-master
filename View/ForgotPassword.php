<?php
    SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../CSS/Style.css?<?php echo time()?>"/>

    <!--Bootstrap's CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script type="text/script" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
    <script type="text/script" scr="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <?php if(isset($_SESSION["UserMessage"])) :?>
        <script>
            window.onload = function(){
                alert("<?php echo $_SESSION["UserMessage"];?>");
            }
        </script>
        <?php unset($_SESSION["UserMessage"]); ?>
    <?php endif ?>

</head>
<body class="container">
    <section class="form-group row" id="Form-Container">
        <form action="../Controller/ForgotPasswordController.php" method="POST" class="col-10 col-sm-6 col-md-8 col-xl-4" id="Form">
            <header>
                <legend class="text-center Form-Text Form-Text-Title">Esqueci minha senha</legend>
            </header>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Usuário" class="form-control" name="loginName" required/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Palavra-Chave" class="form-control" name="keyword" required/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="submit" value="Recuperar" class="btn btn-success Input-Size" class="form-control"/> 
                    <button class="btn btn-danger Input-Size" class="form-control">
                        <a href="SignIn.php" class="link-decoration">Voltar</a>
                    </button>
                </fieldset>
            </form>
    </section>
</body>
</html>