<?php

function edit() {

  $comentario = $_POST['comentario'];

  $sql = 'select * from comentarios where (id = :id)
                          values (:comentario, :id)';

  $connection = connection();
  $result = $connection->prepare($sql);
  $result->bindValue(':comentario', $comentario);
  $result->bindValue(':id', isset($_SESSION['id']) ? $_SESSION['id'] : null);
  $result->execute();
}

if (isset($_POST['btnEditar']) && !empty($_SESSION['id'])) {
  edit();
}
