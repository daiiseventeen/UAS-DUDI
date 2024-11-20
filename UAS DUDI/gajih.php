<?php

if (isset($_POST['submit'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggalgaji = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lamakerja = $_POST['lamakerja'];
    $statuskerja = $_POST['statuskerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $lainnya = $_POST['infaq'];
    
    class GajiKaryawan
    {
        public $gaji;
        public $bonus;
        public $gajibersih;

        public function penggajihan($nama2, $no2, $unit2, $tanggalgaji2)
        {
            echo "No : $no2 <br>";
            echo "Nama Karyawan : $nama2 <br>";
            echo "Unit Pendidikan : $unit2 <br>";
            echo "Tanggal Gaji : $tanggalgaji2 <br>";
        }

        public function gaji($jabatan2, $lamakerja2, $statuskerja2)
        {
            echo "Jabatan : $jabatan2<br>";

            switch ($jabatan2) {
                case "Kepala Sekolah":
                    $this->gaji = 10000000;
                    break;
                case "Wakasek":
                    $this->gaji = 7000000;
                    break;
                case "Guru":
                    $this->gaji = 5000000;
                    break;
                case "Karyawan":
                    $this->gaji = 2500000;
                    break;
                default:
                    $this->gaji = 0;
            }

            echo "Gaji Pokok : Rp " . number_format($this->gaji) . "<br>";
            echo "Lama Kerja : $lamakerja2 tahun<br>";
            echo "Status Kerja : $statuskerja2<br>";

            if ($statuskerja2 == "Tetap") {
                $this->bonus = 1000000;
            } else {
                $this->bonus = 0;
            }            

            echo "Bonus : Rp " . number_format($this->bonus) . "<br>";
        }

        public function potongan($bpjs2, $pinjaman2, $cicilan2, $lainnya2)
        {
            echo "BPJS : Rp " . number_format($bpjs2) . "<br>";
            echo "Pinjaman : Rp " . number_format($pinjaman2) . "<br>";
            echo "Cicilan : Rp " . number_format($cicilan2) . "<br>";
            echo "Lainnya : Rp " . number_format($lainnya2) . "<br>";

            $total_potongan = $bpjs2 + $pinjaman2 + $cicilan2 + $lainnya2;
            $this->gajibersih = ($this->gaji + $this->bonus) - $total_potongan;

            echo "Total Gaji Bersih : Rp " . number_format($this->gajibersih) . "<br>";
        }
    }

    $cetak = new GajiKaryawan();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Struk Gaji</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f4f8;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .card {
                width: 350px;
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 15px;
                background-color: #ffffff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .card-header {
                text-align: center;
                font-weight: bold;
                font-size: 20px;
                color: #007BFF;
                margin-bottom: 15px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            td {
                padding: 5px 10px;
            }
            td:first-child {
                font-weight: bold;
                color: #555;
            }
            td:last-child {
                text-align: right;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="card-header">Struk Gaji Karyawan</div>
            <div class="card-body">
                <table>
                    <?= $cetak->penggajihan($nama, $no, $unit, $tanggalgaji); ?>
                    <?= $cetak->gaji($jabatan, $lamakerja, $statuskerja); ?>
                    <?= $cetak->potongan($bpjs, $pinjaman, $cicilan, $lainnya); ?>
                </table>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
