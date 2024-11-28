<?php

$conn = mysqli_connect("localhost", "root", "", "db_paknata");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function regis($data) {
    global $conn;
    $username = strtolower(stripcslashes($data['username']));
    $password = strtolower(stripcslashes($data['password']));
    $password2 = strtolower(stripcslashes($data['password2']));
    $date = $data['date'];
    if ($password !== $password2) {
        echo'<script>alert("username baru ditambahkan")</script>';
        return false;
    }

    $password = password_hash($password, PASSWORD_BCRYPT);
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '$date')");
    return mysqli_affected_rows($conn);
}

// branch
function tambah($data) {
    global $conn;

    $alamat = htmlspecialchars($data['alamat']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tanggal = htmlspecialchars($data['tanggal']);

    // imaga
    $image = upload();
    if (!$image) {
        return false;
    }

    $query = "INSERT INTO place VALUE('', '$alamat', '$deskripsi', '$tanggal', '$image')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;

    $id = $data['id'];
    $alamat = htmlspecialchars($data['alamat']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $imageLama = htmlspecialchars($data['imageLama']);

    if ($_FILES['image']['error'] === 4 ) {
        $image = $imageLama;
    } else {
        $image = upload();
    }

    $query = "UPDATE place SET 
        alamat = '$alamat',
        deskripsi = '$deskripsi',
        image = '$image'
        WHERE id = $id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
// end branch


// article
function tambahArt($data) {
    global $conn;

    // image
    $gambar_art = uploadArt();
    if (!$gambar_art) {
        return false;
    }
    $judul = htmlspecialchars($data['judul_art']);
    $sub_art = htmlspecialchars($data['sub_artikel']);
    $artikel = htmlspecialchars($data['artikel']);
    $artikel2 = htmlspecialchars($data['artikel2']);
    $tgl = htmlspecialchars($data['tgl_art']);

    $query = "INSERT INTO tb_artikel VALUE('', '$gambar_art', '$judul', '$sub_art', '$artikel', '$artikel2', '$tgl')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateArt($data) {
    global $conn;

    $id = $data['id'];
    $judul = htmlspecialchars($data['judul_art']);
    $sub_art = htmlspecialchars($data['sub_artikel']);
    $artikel = htmlspecialchars($data['artikel']);
    $artikel2 = htmlspecialchars($data['artikel2']);
    $imageLama = htmlspecialchars($data['imageLama']);

    if ($_FILES['gambar_art']['error'] === 4) {
        $gambar_art = $imageLama;
    } else {
        $gambar_art = uploadArt();
    }

    $query = "UPDATE tb_artikel SET
    judul_art = '$judul',
    sub_artikel = '$sub_art',
    artikel = '$artikel',
    artikel2 = '$artikel2',
    gambar_art = '$gambar_art'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// end article

function upload() {

	$namaFile = $_FILES['image']['name'];
	$ukuranFile = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	// cek apakah tidak ada image yang diupload
	if ($error === 4) {
		echo "<script>
				alert('pilih image terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah image atau bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('Ukuran gambar terlalu besar');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../img/' . $namaFile);

	return $namaFile;

}

function uploadArt() {

	$namaFile = $_FILES['gambar_art']['name'];
	$ukuranFile = $_FILES['gambar_art']['size'];
	$error = $_FILES['gambar_art']['error'];
	$tmpName = $_FILES['gambar_art']['tmp_name'];

	// cek apakah tidak ada image yang diupload
	if ($error === 4) {
		echo "<script>
				alert('pilih image terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah image atau bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('Ukuran gambar terlalu besar');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../img/' . $namaFile);

	return $namaFile;

}

function cari($keyword) {
    global $conn;
    $query = "SELECT * FROM tb_artikel WHERE 
        judul_art LIKE '%$keyword%' OR
        sub_artikel LIKE '%$keyword%'
    ";
    
	$result = mysqli_query($conn, $query);

	$rows = [ ];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[ ] = $row;
	}

	return $rows;

}

?>