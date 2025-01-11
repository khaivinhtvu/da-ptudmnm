<?php
include '../ketnoi/ketnoi.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$string = file_get_contents('php://input');
$input = json_decode($string, true);

switch ($method) {
    case 'GET':
        $result = $kn->query("SELECT * FROM thanhvien");
        $sanpham = [];
        while ($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
        echo json_encode($sanpham);
        break;

    case 'POST':
        $matv = $input['matv'];
        $tendangnhap = $input['tendangnhap'];
        $matkhau = md5($input['matkhau']);
        $hoten = $input['hoten'];
        $email = $input['email'];
        $diachi = $input['diachi'];
        $sdt= $input['sdt'];
        $kn->query("INSERT INTO thanhvien (MaTV, Tendangnhap, Matkhau, Hoten, Email, Diachi, Sdt) VALUES ('$matv', '$tendangnhap', '$matkhau', '$hoten', '$email', '$diachi', '$sdt')");
        echo json_encode(["message" => "thanh vien moi da duoc them vao"]);
        break;

    case 'PUT':
        $matv = $input['matv'];
        $tendangnhap = $input['tendangnhap'];
        $matkhau = md5($input['matkhau']);
        $hoten = $input['hoten'];
        $email = $input['email'];
        $diachi = $input['diachi'];
        $sdt= $input['sdt'];
        $kn->query("UPDATE thanhvien SET Tendangnhap='$tendangnhap', Matkhau='$matkhau', Hoten='$hoten', Email='$email', Diachi='$diachi', Sdt='$sdt' WHERE MaTV='$matv'");
        echo json_encode(["message" => "thanh vien da duoc cap nhat"]);
        break;

    case 'DELETE':
        $matv = $input['matv'];
        $kn->query("DELETE FROM thanhvien WHERE MaTV=$matv");
        echo json_encode(["message" => "thanh vien da duoc xoa"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$kn->close();

?>