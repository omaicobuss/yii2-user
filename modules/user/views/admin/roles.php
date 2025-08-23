<?php
use yii\helpers\Html;
$this->title = 'Funções';
?>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-sm p-4">
        <h2 class="mb-4 text-center">Funções de Usuário</h2>
        <!-- Exemplo de tabela de funções -->
        <table class="table table-hover table-responsive">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>admin</td>
              <td>Administrador do sistema</td>
              <td>
                <?= Html::a('Editar', ['admin/edit-role', 'id' => 1], ['class' => 'btn btn-sm btn-primary']) ?>
                <?= Html::a('Excluir', ['admin/delete-role', 'id' => 1], [
                  'class' => 'btn btn-sm btn-danger',
                  'data-confirm' => 'Tem certeza que deseja excluir?',
                  'data-method' => 'post',
                ]) ?>
              </td>
            </tr>
            <!-- ...outras linhas... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
