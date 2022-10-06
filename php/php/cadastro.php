<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAENS | Cadastro</title>

    <link rel="stylesheet" href="../css/geral/import.css">
</head>
<body id="cadastro">
    <header class="caens-header-2">
        <span>CAENS</span>
    </header>

    <main>
        <div class="bg-verde-claro">
            <div class="login-container">
                <h1>Cadastro</h1>

                <form action="#" class="form-login">

                    <div>
                        <label for="cadastro-nome">Nome do usuário</label>
                        <input type="text" placeholder="Nome" name="cadastro-nome" id="cadastro-nome">
                    </div>

                    <div>
                        <label for="cadastro-matricula">Matrícula do usuário</label>
                        <input type="text" placeholder="Matricula" name="cadastro-matricula" id="cadastro-matricula">
                    </div>

                    <div>
                        <label for="cadastro-email">E-mail</label>
                        <input type="email" placeholder="Email" name="cadastro-email" id="cadastro-email">
                    </div>

                    <div>
                        <label for="cadastro-senha">Senha</label>
                        <input type="password" placeholder="Senha" name="cadastro-senha" id="cadastro-senha">
                    </div>

                    <div>
                        <label for="cadastro-confirmar-senha">Confirmar senha</label>
                        <input type="password" placeholder="Confirmar senha"name="cadastro-confirmar-senha" id="cadastro-confirmar-senha">
                    </div>
                
                    <input type="submit" value="Salvar" class="botao-2">
                </form>
            </div>
        </div>
    </main>



</body>
</html>