<?php
  include __DIR__ . '/../inicio-html.php';
?>

<form action="/realizar-login" method="POST">
  <div class="form-group">
    <label for="email">Email</label>
    <input class="form-control"
           type="text"
           id="email"
           name="email"
    >
    <br>
    <label for="senha">Senha</label>
    <input class="form-control"
           type="password"
           id="senha"
           name="senha"
    >
  </div>
    <button class="btn btn-primary">Entrar</button>
</form>

<?php
  include __DIR__ . '/../fim-html.php';
?>