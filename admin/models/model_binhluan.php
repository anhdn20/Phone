<?php
require_once '../system/model_system.php';
class model_binhluan extends model_system {
    function store($ThuTu,$tenNSX,$Anhien){ //hàm lưu 1 record vào table
        $sql = "INSERT INTO binhluan (ThuTu, TenNSX,  AnHien)
        VALUES ('$ThuTu', '$tenNSX', '$Anhien')";
        $kq = $this -> query($sql);
        return $kq;
    }
    function update($idNSX,$ThuTu,$tenNSX,$Anhien){ //hàm cập nhật 1 record vào table
        $sql = "UPDATE binhluan SET ThuTu='$ThuTu',TenNSX='$tenNSX',AnHien='$Anhien' where idNSX=".$idNSX;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function delete($id){  //hàm xóa 1 record khỏi table
        $sql="DELETE from binhluan where idNSX=".$id;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function listrecords(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM binhluan";
        $kq= $this->query($sql);
        return $kq;
    }
    function detailrecord($id){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM binhluan where idNSX=".$id;

        $kq= $this->queryOne($sql);
        return $kq;
    }
}//class
