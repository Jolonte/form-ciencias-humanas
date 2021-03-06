<?php
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#a29bfe" />
    <meta name="description" content="Prova online de ciências humanas.">

    <!-- -------- FAVICON -------- -->
    <link rel="shortcut icon" href="../IMGS/favicon.ico" type="image/x-icon">

    <!-- -------- CSS -------- -->
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />

    <title>Conta: <?php echo $_SESSION['nome']; ?></title>
</head>

<body>
    <div class="container-conta">

        <!-- -------- HEADER -------- -->
        <header>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="prova.php">Prova</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="hero-conta">
                <h1>BEM-VINDO!</h1>
                <div class="status-conta">
                    <h2>status: <?php echo $_SESSION['status']?></h2>
                </div>
        </section>

        <!-- -------- MAIN -------- -->

        <main class="main-conta">
            <section class="dados-conta">
                <div class="painel-conta">
                    <div class="conta">
                        <p>Nome: <?php echo $_SESSION['nome']?></p>
                        <p>Email: <?php echo $_SESSION['email']?></p>
                        <p>Senha: <?php echo $_SESSION['senha']?></p>
                    </div>

                    <div class="prova">
                        <p>Data realizada: <?php echo $_SESSION['data']?></p>
                        <p>Nota final: <?php echo $_SESSION['nota']?></p>
                    </div>

                    <div class="buttons-conta">
                        <a class="abrir"><button>Editar conta</button></a>

                        <a href="excluir.php"><button>Excluir conta</button></a>
                    </div>
                </div>
            </section>
        </main>

        <!-- -------- FOOTER -------- -->

        <footer class="footer-conta">
            <nav>
                <ul>
                    <li><a href="https://github.com/Jolonte" target="_blank">©Vinícius Neves Costa</a></li>
                </ul>
            </nav>
        </footer>

        <!-- -------- MODAL -------- -->

        <div id="modal-login" class="modal-container">
            <div class="modal">
                <div class="login">
                    <button class="fechar">x</button>
                    <h2 class="subtitulo">Alterar</h2>
                    <form method="POST" action="alterar.php">
                        <label for="name">
                            <input type="text" id="name" name="name" placeholder="Nome">
                        </label>

                        <label for="email">
                            <input type="email" id="email-login" name="email" placeholder="Email">
                        </label>

                        <label for="password">
                            <input type="password" id="password-login" name="password" placeholder="Senha">
                        </label>

                        <nav>
                            <input class="abrir" value="Salvar" type="submit" name="update" id="update">
                        </nav>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- -------- MAIN JS ---------->
    <script src="../JS/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("a").on('click', function(event) {

            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    window.location.hash = hash;
                });
            }
        });
    });
    </script>

</body>

</html>