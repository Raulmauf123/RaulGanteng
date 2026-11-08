<?php
// Fitur Catatan Tugas - Mahasiswa 3 (branch: feature/catatan-tugas)
$tugas = [
    ["Laporan Praktikum RPL",   "Rekayasa Perangkat Lunak", "15 Nov 2026", "Belum"],
    ["Makalah Basis Data",      "Basis Data",               "20 Nov 2026", "Belum"],
    ["Latihan Algoritma",       "Algoritma dan Pemrograman","12 Nov 2026", "Selesai"],
    ["Desain Antarmuka Web",    "Pemrograman Web",          "25 Nov 2026", "Belum"],
    ["Resume Jaringan Komputer","Jaringan Komputer",        "10 Nov 2026", "Selesai"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catatan Tugas - Catatan Tugas Mahasiswa</title>
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
        nav a { margin-left: 16px; color: #dbeafe; text-decoration: none; }
        nav a:hover, nav a:focus { color: #ffffff; text-decoration: underline; }
        main { max-width: 900px; margin: 0 auto; padding: 24px; }
        h1 { margin: 0 0 4px; font-size: 1.6rem; }
        p.sub { margin: 0 0 24px; color: #6b7280; }
        .tabel-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 16px; text-align: left; }
        th { background: #f1f5f9; font-size: 0.9rem; }
        tr + tr td { border-top: 1px solid #e2e8f0; }
        .status {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .belum   { background: #fef3c7; color: #92400e; }
        .selesai { background: #dcfce7; color: #166534; }
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
        <h1>Catatan Tugas Mahasiswa</h1>
        <p class="sub">Daftar tugas mahasiswa</p>

        <div class="tabel-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Tugas</th>
                        <th>Mata kuliah</th>
                        <th>Deadline</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tugas as $t): ?>
                        <tr>
                            <td><?= htmlspecialchars($t[0]) ?></td>
                            <td><?= htmlspecialchars($t[1]) ?></td>
                            <td><?= htmlspecialchars($t[2]) ?></td>
                            <td>
                                <span class="status <?= strtolower($t[3]) ?>"><?= $t[3] ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>