<?php
  include __DIR__ . '/../inicio-html.php';
?>

<form action="/salvar-curso<?= isset($curso ) ? '?id=' . $curso->getId() : ''; ?>" method="POST">
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input class="form-control"
           value="<?= isset($curso) ? $curso->getDescricao() : "" ?>"
           type="text"
           id="descricao"
           name="descricao"
    >
  </div>
    <button class="btn btn-primary">Salvar</button>
</form>

<?php
  include __DIR__ . '/../fim-html.php';