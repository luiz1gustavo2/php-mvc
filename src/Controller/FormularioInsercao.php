<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('Cursos/form.php', [
      'title' => 'Novo curso'
    ]);  
  }
}