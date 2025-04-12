<?php
session_start();
include("../login/connect.php");

if (!isset($_SESSION['admin_email'])) {
    header("Location: admin_login.php");
    exit();
}

if (isset($_POST['deleteYorum'])) {
    $yorum_id = $_POST['yorum_id'];
    $sql = "DELETE FROM yorumlar WHERE id='$yorum_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Yorum başarıyla silindi!";
    } else {
        echo "Hata: " . $conn->error;
    }
}

if (isset($_POST['deleteUser'])) {
    $user_id = $_POST['user_id'];
    
    // Önce kullanıcının yorumlarını sil
    $sql = "DELETE FROM yorumlar WHERE kullanici_id='$user_id'";
    if ($conn->query($sql) === TRUE) {
        // Ardından kullanıcıyı sil
        $sql = "DELETE FROM users WHERE id='$user_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Kullanıcı başarıyla silindi!";
        } else {
            echo "Hata: " . $conn->error;
        }
    } else {
        echo "Hata: " . $conn->error;
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../Style/admin_style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
        color: #333;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    form {
        display: inline;
    }

    input[type="submit"] {
        background-color: #ff4d4d;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        margin: 5px;
    }

    input[type="submit"]:hover {
        background-color: #ff1a1a;
    }
</style>
<body>
    <h1>Yorumları ve Kullanıcıları Yönet</h1>
    <form method="post" action="admin_panel.php" style="text-align: right;">
        <input type="submit" name="logout" value="Çıkış">
    </form>
    <table>
        <tr>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Yorum</th>
            <th>Yorum Sil</th>
            <th>Kullanıcı Sil</th>
        </tr>
        <?php
        $sql = "SELECT u.id, u.firstName, u.lastName, y.id AS yorum_id, y.yorum_metni 
                FROM users u 
                LEFT JOIN yorumlar y ON u.id = y.kullanici_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['firstName'] . "</td>";
                echo "<td>" . $row['lastName'] . "</td>";
                echo "<td>" . ($row['yorum_metni'] ? $row['yorum_metni'] : 'Yorum yok') . "</td>";
                echo "<td>
                        <form method='post' action='admin_panel.php'>
                            <input type='hidden' name='yorum_id' value='" . $row['yorum_id'] . "'>
                            <input type='submit' name='deleteYorum' value='Sil' " . ($row['yorum_id'] ? '' : 'disabled') . ">
                        </form>
                      </td>";
                echo "<td>
                        <form method='post' action='admin_panel.php'>
                            <input type='hidden' name='user_id' value='" . $row['id'] . "'>
                            <input type='submit' name='deleteUser' value='Sil'>
                        </form>
                      </td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>