<?php

class Pengurus extends DB
{
    function getPengurus()
    {
        $query = "SELECT * from pengurus";

        return $this->execute($query);
    }
   
    function addPengurus($nim, $nama, $semester, $id_bidang, $img)
    {
        $query = "INSERT INTO pengurus VALUES ($nim, '$nama', $semester, $id_bidang, '$img')";

        return $this->execute($query);
    }

    function deletePengurus($id_pengurus)
    {
        $query = "DELETE FROM pengurus WHERE id_pengurus='$id_pengurus'";

        return $this->execute($query);
    }

    function updatePengurus($nim, $nama, $semester, $id_bidang, $img, $id_pengurus)
    {
        $query = "UPDATE pengurus SET nim=$nim, nama='$nama', semester=$semester, id_bidang=$id_bidang, img='$img' where id_pengurus='$id_pengurus'";
    
        return $this->execute($query);
    }
}
?>