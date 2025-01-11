<?php
include '../ketnoi/ketnoi.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$string = file_get_contents('php://input');
$input = json_decode($string, true);

switch ($method) {
    case 'GET':
        $result = $kn->query("SELECT * FROM chitietgio");
        $sanpham = [];
        while ($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
        echo json_encode($sanpham);
        break;

    case 'POST':
        $masp = $input['masp'];
        $idgiohang = $input['idgiohang'];
        $idchitiet = $input['idchitiet'];
        $soluongmua = $input['soluongmua'];
        $matv = $input['matv'];
        $kn->query("INSERT INTO chitietgio (masp, idgiohang, idchitiet, soluongmua, matv) VALUES ('$masp', '$idgiohang','$idchitiet','$soluongmua', '$matv')");
        echo json_encode(["message" => "chi tiet gio hang da duoc them vao"]);
        break;

    case 'PUT':
        $masp = $input['masp'];
        $idgiohang = $input['idgiohang'];
        $idchitiet = $input['idchitiet'];
        $soluongmua = $input['soluongmua'];
        $matv = $input['matv'];
        $kn->query("UPDATE chitietgio SET masp='$masp', idchitiet='$idchitiet', soluongmua='$soluongmua' WHERE idgiohang='$idgiohang'");
        echo json_encode(["message" => "gio hang da duoc cap nhat"]);
        break;

    case 'DELETE':
        $idchitiet = $input['idchitiet'];
        
        $sql1 = "SELECT * FROM chitietgio WHERE idchitiet = '".$idchitiet."'";
        $result1 = mysqli_query($kn , $sql1);
        $row = mysqli_fetch_array($result1);
        $masp = $row["masp"];
        $soluong = $row["soluongmua"];

        $sql2 = "SELECT * FROM sanpham WHERE masp = '".$masp."'";
        $result2 = mysqli_query($kn , $sql2);
        $row2 = mysqli_fetch_array($result2);
        $soluong2 = $row2["soluong"];

        $soluongcon = $soluong + $soluong2;

        $sql7 = "update sanpham SET soluong = '".$soluongcon."' where masp = '".$masp."'";
        $kq7 = mysqli_query($kn, $sql7);

        $kn->query("DELETE FROM chitietgio WHERE idchitiet='$idchitiet'");
        echo json_encode(["message" => "chi tiet gio hang da duoc xoa"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$kn->close();

?>