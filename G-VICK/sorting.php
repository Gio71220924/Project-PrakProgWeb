<?php

require 'koneksi.php';


$query = "SELECT * FROM data_konser";
if (isset($_GET["by"])) {
    $by = $_GET["by"];
    if ($by == "high-low") {
        $query .= " order by reguler desc";
    }
    else if ($by == "low-high") {
        $query .= " order by reguler asc";
    }
    else if ($by == "az") {
        $query .= " order by nama_konser asc";
    }
    else if ($by == "za") {
        $query .= " order by nama_konser desc"; 
    }
}
$result = mysqli_query($koneksi, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
