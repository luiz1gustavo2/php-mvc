<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;


class ListarCursos extends ControllerComHtml implements InterfaceControladorRequisicao
{

  private $repositorioDeCursos;
  
  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())->getEntityManager();
    $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
  }

  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('Cursos/listar-cursos.php', [
      'cursos' => $this->repositorioDeCursos->findAll(),
      'title' => 'Lista de Cursos'
    ]);
  }
}