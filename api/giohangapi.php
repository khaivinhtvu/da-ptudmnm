<?php
include '../ketnoi/ketnoi.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$string = file_get_contents('php://input');
$input = json_decode($string, true);

switch ($method) {
    case 'GET':
        $result = $kn->query("SELECT * FROM giohang");
        $sanpham = [];
        while ($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
        echo json_encode($sanpham);
        break;

    case 'POST':
        $id = $input['id'];
        $admin = $input['admin'];
        $thoigian = $input['thoigian'];
        $trangthai = $input['trangthai'];
        $kn->query("INSERT INTO giohang (id, admin, thoigian, trangthai) VALUES ('$id', '$admin','$thoigian','$trangthai')");
        echo json_encode(["message" => "gio hang da duoc them vao"]);
        break;

    case 'PUT':
        $id = $input['id'];
        $admin = $input['admin'];
        $thoigian = $input['thoigian'];
        $trangthai = $input['trangthai'];
        $kn->query("UPDATE giohang SET id='$id', admin='$admin', thoigian='$thoigian', trangthai='$trangthai' WHERE id='$id'");
        echo json_encode(["message" => "gio hang da duoc cap nhat"]);
        break;

    case 'DELETE':
        $id = $input['id'];
        $kn->query("DELETE FROM giohang WHERE id=$id");
        echo json_encode(["message" => "gio hang da duoc xoa"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$kn->close();

?>