<?php
include('cn.php');

// function mostar y consultar de la dba
if ($_SERVER['REQUEST_METHOD']== 'GET') {
    if (isset($_GET['id'])) {
        $query=$DB_con->prepare('SELECT * FROM  libro WHERE id=:Api_id');
        $query->bindParam(':Api_id', $_GET['id']);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
header("HTTP/1.1 200 hay datos");
        echo json_encode($query->fetchAll());
             exit;
    }else {
   $query=$DB_con->prepare('SELECT * FROM  libro ');
   $query->execute();
   $query->setFetchMode(PDO::FETCH_ASSOC);
//   el encabezado PARA este correcto
header("HTTP/1.1 200 OK");
echo json_encode($query->fetchAll());
   exit;// para que ya no agra nada mas
//    var_dump($query);
}
}
// function para insert datos a la dba
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $query=$DB_con->prepare("INSERT INTO libro(nombre,num_telefonico,direccion)
     VALUES(:Api_nombre,:Api_numTelf,:Api_direccion)");
    $query->bindParam(':Api_nombre', $_POST['nombre']);
    $query->bindParam(':Api_numTelf', $_POST['telefono']);
    $query->bindParam(':Api_direccion', $_POST['direccion']);
    $query->execute();
header("HTTP/1.1 200 hay datos");
exit;
}

// fuction de delete en la dba
if ($_SERVER['REQUEST_METHOD']=='DELETE') {
    $query=$DB_con->prepare('DELETE FROM libro WHERE id=:Api_id');
    $query->bindParam(':Api_id', $_GET['id']);
    $query->execute();
header("HTTP/1.1 200 hay datos");
exit;
}
// function update de la dba
if ($_SERVER['REQUEST_METHOD']=='PUT') {
    $query=$DB_con->prepare('UPDATE libro SET nombre=:Api_nombre
    ,num_telefonico=:Api_numTelf,direccion=:Api_direccion WHERE id=:Api_id');
    $query->bindParam(':Api_nombre', $_GET['nombre']);
    $query->bindParam(':Api_numTelf', $_GET['telefono']);
    $query->bindParam(':Api_direccion', $_GET['direccion']);
    $query->bindParam(':Api_id', $_GET['id']);
    $query->execute();
header("HTTP/1.1 200 hay datos");
exit;
}

