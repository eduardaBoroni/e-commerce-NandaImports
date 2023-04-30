<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/css/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Recuperar Senha</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-  border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="/"><b>Quitanda Online</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="index.php">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.php">Contato</a>
                        </li>
                    </ul>

                    <div class="align-self-end">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="cadastrarc.php" class="nav-link text-white">Quero me Cadastrar</a>
                            </li>

                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white">Entrar</a>
                            </li>

                            <li class="nav-item">
                                <a href="carrinho.php" class="nav-link text-white">
                                    <svg class="bi" width="24" height="24" fill="currentColor">
                                        <use xlink:href="/bi.svg#cart3" />
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

     <main class="flex-fill">
     <div class="container">
     <div class="row justify-content-center">
        <form class="col-sm-10 col-md-8 col-lg-6">
            <h1>Recuperação de Senha</h1>

            <div class="form-floating mb-3">
            <input type="email" id="txtEmail" class="form-control" placeholder=" " autofocus>
            <label for="txtEmail">E-mail</label>
            </div>

            <button type="button" onclick="window.location.href='confirmrecupsenha.html'"
            class="btn btn-lg btn-warning">Recuperar Senha</button>

            <p class="mt-3">
                Ainda não é cadastrado? <a href="cadastrarc.php">Clique aqui</a>
                para se cadastrar.
            </p>
           
        </form>
    </div>
     </div>
     </main>

     <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row">
                    <div class=" text center">
                        &copy; 2022 - Nanda Imports <br>
                        Rua Nova Paraíba, 517, América, Acaraju/SE
                    </div>
                </div>

            </div>
        </footer>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>