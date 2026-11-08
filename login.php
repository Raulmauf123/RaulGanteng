<?php
// Fitur Login - Mahasiswa 1 (branch: feature/login)
$pesan = "";
$username = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars(trim($_POST["username"] ?? ""));
    $password = $_POST["password"] ?? "";

    // Akun contoh untuk latihan (belum memakai database)
    if ($username === "mahasiswa" && $password === "12345") {
        header("Location: dashboard.php");
        exit;
    }
    $pesan = "Username atau password salah. Coba lagi.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Catatan Tugas Mahasiswa</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eef2f7;
            color: #1f2937;
        }
        .kotak {
            width: 100%;
            max-width: 380px;
            margin: 16px;
            padding: 32px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }
        h1 { margin: 0 0 4px; font-size: 1.5rem; }
        p.sub { margin: 0 0 24px; color: #6b7280; }
        label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; }
        input {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 16px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 1rem;
        }
        input:focus { outline: 2px solid #2563eb; border-color: #2563eb; }
        button {
            width: 100%;
            padding: 11px;
            border: 0;
            border-radius: 6px;
            background: #2563eb;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
        }
        button:hover { background: #1d4ed8; }
        .error {
            margin-bottom: 16px;
            padding: 10px 12px;
            border-radius: 6px;
            background: #fee2e2;
            color: #991b1b;
            font-size: 0.9rem;
        }
        .petunjuk { margin-top: 20px; font-size: 0.85rem; color: #6b7280; text-align: center; }
    </style>
</head>
<body>
    <main class="kotak">
        <h1>Login Mahasiswa</h1>
        <p class="sub">Selamat datang di aplikasi catatan tugas</p>

        <?php if ($pesan !== ""): ?>
            <div class="error"><?= $pesan ?></div>
        <?php endif; ?>

        <form method="post" action="login.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= $username ?>" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Masuk</button>
        </form>

        <p class="petunjuk">Akun contoh: mahasiswa / 12345</p>
    </main>
</body>
</html>