<?php
use yii\helpers\Html;
$this->title = 'Tentativas de Login';
?>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-sm p-4">
        <h2 class="mb-4 text-center">Tentativas de Login</h2>
        <!-- Exemplo de tabela de tentativas de login -->
        <table class="table table-hover table-responsive">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Usuário/IP</th>
              <th>Data/Hora</th>
              <th>Status</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>192.168.0.1</td>
              <td>2025-08-18 10:00</td>
              <td><span class="badge bg-danger">Bloqueado</span></td>
              <td>
                <?= Html::a('Desbloquear', ['admin/unblock-ip', 'id' => 1], ['class' => 'btn btn-sm btn-success']) ?>
              </td>
            </tr>
            <!-- ...outras linhas... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
