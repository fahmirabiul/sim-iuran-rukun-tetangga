<?php

if (isset($_POST['tambah'])) {

    $conn = mysqli_connect('localhost', 'root', '', 'samlekum');
    // $sql = "INSERT INTO pembayaran (id_pmb, nik, id_iuran, tanggal_pmb) VALUES";
    $id_iuran = $this->input->post('id_iuran');

    foreach ($warga as $war) :
        // $sql .= '("' . '' . '","' . $war['nik'] . '", "' . $id_iuran . '","' . '' . '"),';
        $sql = "INSERT INTO pembayaran (id_pmb, nik, id_iuran, tanggal_pmb, status_pmb) VALUES ('" . "" . "','" . $war["nik"] . "', '" . $id_iuran . "','" . "" . "','" . "Belum Dibayar" . "')";

        // $sql = rtrim($sql, ',');
        $insert = mysqli_query($conn, $sql);

    endforeach;
}

redirect('iuran');
