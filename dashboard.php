<?php
// Fitur Dashboard - Mahasiswa 2 (branch: feature/dashboard)
$nama = "Mahasiswa";
$ringkasan = [
    ["Total tugas", 6],
    ["Belum selesai", 4],
    ["Selesai", 2],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Catatan Tugas Mahasiswa</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eef2f7;
            color: #1f2937;
        }
        header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px 24px;
            background: #1e3a8a;
            color: #ffffff;
        }
        header strong { font-size: 1.1rem; }
        nav a {
            margin-left: 16px;
            color: #dbeafe;
            text-decoration: none;
        }
        nav a:hover, nav a:focus { color: #ffffff; text-decoration: underline; }
        main { max-width: 900px; margin: 0 auto; padding: 24px; }
        h1 { margin: 0 0 4px; font-size: 1.6rem; }
        p.sub { margin: 0 0 24px; color: #6b7280; }
        .ringkasan {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
        }
        .kartu {
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }
        .kartu .angka { font-size: 2rem; font-weight: 700; color: #1e3a8a; }
        .kartu .label { color: #6b7280; }
        .tombol {
            display: inline-block;
            margin-top: 24px;
            padding: 11px 20px;
            border-radius: 6px;
            background: #2563eb;
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
        }
        .tombol:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <header>
        <strong>Catatan Tugas</strong>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="catatan.php">Catatan Tugas</a>
            <a href="login.php">Keluar</a>
        </nav>
    </header>

    <main>
        <h1>Dashboard Mahasiswa</h1>
        <p class="sub">Selamat datang di halaman dashboard, <?= htmlspecialchars($nama) ?>.</p>

        <section class="ringkasan">
            <?php foreach ($ringkasan as $item): ?>
                <div class="kartu">
                    <div class="angka"><?= $item[1] ?></div>
                    <div class="label"><?= $item[0] ?></div>
                </div>
            <?php endforeach; ?>
        </section>

        <a class="tombol" href="catatan.php">Lihat catatan tugas</a>
    </main>
</body>
</html>