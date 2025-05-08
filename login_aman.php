<?php
$conn = new mysqli('localhost', 'root', '', 'kampus');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //code dirubah menggunakan Prepared Statement.
    $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); // "ss" = dua parameter string
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login berhasil! Selamat datang, " . $result->fetch_assoc()['username'];
    } else {
        echo "Username/password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Rentan</title>
</head>
<body>
    <h2>Login ke Sistem!</h2>
    <form method="POST">
        Username: <br><input type="text" name="username"><br>
        Password: <br><input type="text" name="password"><br>
        <br><input type="submit" value="Login">
    </form>
    <p>code sudah dirubah menggunakan Prepared Statement.</p>
</body>
</html>