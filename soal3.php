<?php
    $search = '';

    if(isset($_POST['search'])){
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : '';

        $search = "WHERE nama LIKE '%$nama%' AND alamat LIKE '%$alamat%' AND hobi LIKE '%$hobi%'";
    }


?>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hobi</th>
    </tr>
    
    <?php
        $conn = new mysqli("localhost","root","","testdb");

        $sql = "SELECT p.nama, p.alamat, h.hobi FROM person p
                INNER JOIN hobi h ON h.person_id = p.id $search";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            foreach($result as $row){
                echo "
                <tr>
                    <td>$row[nama]</td>
                    <td>$row[alamat]</td>
                    <td>$row[hobi]</td>
                </tr>";
            }
        }
        else{
            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
        }
    ?>
</table>

<br>
<br>
<br>

<form action="#" method="post">
        Nama : <input type="text" name="nama">
        <br>

        Alamat : <input type="text" name="alamat">
        <br>

        Hobi : <input type="text" name="hobi">
        <br>
        <br>

        <button name="search" type="submit">SEARCH</button>
</form>
