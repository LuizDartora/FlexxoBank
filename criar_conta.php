<?php include('header.php');?>

    <main class="container">
    <h1 class="mt-5 mb-3">Crie sua conta</h1>
        <form action="" method="post">
            <div class="my-2">
                <label class="form-label">Nome</label>
                <input type="text" name="Nome" class="form-control">
                <p class="form-text">Preencha apenas o seu primeiro nome.</p>
            </div>
            <div class="my-2">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control">
                <p class="form-text">Preencha o seu email pessoal</p>
            </div>
            <div class="my-2">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control">
                <p class="form-text">Informe uma senha com letras e números e caracteres.</p>
            </div>
            <input type="submit" value="Criar" class="btn btn-primary">
        </form>
    </main>

<?php include('footer.php');?>