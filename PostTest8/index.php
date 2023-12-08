<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan IPK</title>
</head>
<body>
    <h2>Hasil Perhitungan IPK dan Status Kelulusan</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai IPS 1
        $nilai_ipSemester1 = isset($_POST['ip_smt1']) ? $_POST['ip_smt1'] : 0;

        // Menghitung total nilai IPS
        $total_nilai = $nilai_ipSemester1;
        $total_semester = 1;

        // Perulangan untuk mengambil nilai ip semester
        $counter = 2;
        while (isset($_POST['ip_smt' . $counter])) {
            $nilai_ipSemester = isset($_POST['ip_smt' . $counter]) ? $_POST['ip_smt' . $counter] : 0;
            $total_nilai += $nilai_ipSemester;
            $total_semester++;
            $counter++;
        }

        // Rumus untuk menghitung IPK
        $IPK = $total_nilai / $total_semester;

        // Menampilkan hasil rata-rata nilai
        echo "Total IPS Mahasiswa : " . number_format($total_nilai, 2) . "<br>";
        echo "Total Semester yang Diambil : " . $total_semester . "<br>";
        echo "IPK : " . number_format($IPK, 2) . "<br>";

        // Menampilkan status kelulusan
        $status_kelulusan = ($IPK >= 2.00) ? "LULUS" : "TIDAK LULUS";
        echo "Status Kelulusan : " . $status_kelulusan;
        echo '<br>';
        echo '<br><a href="index.html">Kembali</a>';
    }
    ?>
</body>
</html>
