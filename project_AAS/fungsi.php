<?php
    $conn= mysqli_connect("localhost", "root", "", "db_masjid");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $box = [];

        while ($square = mysqli_fetch_assoc($result)){
            $box[] = $square;
        }
        return $box;
    }

    function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama_donatur"]);
    $donatur = htmlspecialchars($data["donatur_id"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $nominal = htmlspecialchars($data["nominal_barang"]);

    $foto = upload();

    $query = "INSERT INTO infaq
                    VALUE
                    ('$nama','$donatur','$kategori','$nominal', '$foto')
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload() {

    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                document.location.href= 'tambah.php';
              </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
                document.location.href= 'tambah.php';
              </script>";
        return false;
    }

    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
                document.location.href= 'tambah.php';
              </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


