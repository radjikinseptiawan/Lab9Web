<?php
include("./config/database.php");

$conn = $mysqli->prepare("SELECT * FROM data_barang");

$conn->execute();

$results = $conn->get_result();

if($results-> num_rows === 0){
    echo "Tidak ada data!";
}

$data = $results->fetch_all(MYSQLI_ASSOC);

$conn->close();
$mysqli->close();
?>

<table class="table-container">
    <thead>
        <tr>
            <td>Nomor</td>
            <td>Katgori</td>
            <td>Nama</td>
            <td>Gambar</td>
            <td>Harga_Beli</td>
            <td>Harga_Jual</td>
            <td>Stok</td>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sort = 0;
            foreach($data as $item){
               $sort+=1;
                echo "
                <tr>
                    <td>{$sort}</td>
                    <td>{$item['kategori']}</td>
                    <td>{$item['nama']}</td>
                    <td>{$item['gambar']}</td>
                    <td>{$item['harga_beli']}</td>
                    <td>{$item['harga_jual']}</td>
                    <td>{$item['stok']}</td>
                    </tr>  
                ";
            };
        ?>
    </tbody>
</table>