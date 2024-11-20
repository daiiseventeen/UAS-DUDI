<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="yayasn.png">
    <title>SMK ASSALAAM</title>
</head>

<body>
    <section>
        <div class="row" style="max-width: 100%; overflow: hidden;">
            <div class="col pt-5 text-center">
                <img src="yayasn-removebg-preview.png" alt="" style="width: 200px; height: 150px; align-items: center;">
            </div>
        </div>
    </section>
    <section>
        <div class="row pt-3" style="max-width: 100%; overflow: hidden;">
            <div class="col fw-bold mb-2 text-center">
                <h2>PENGGAJIHAN</h2>
            </div>
        </div>
    </section>
    <section>
        <div class="row" style="max-width: 100%; overflow: hidden;">
            <div class="col fw-bold text-center">
                <h4>GURU/KARYAWAN YAYASAN ASSALAAM BANDUNG</h4>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-4 mb-5 d-flex justify-content-center pe-5 border-2">
            <!-- Form dimulai -->
            <form action="gajih.php" method="POST" style="width: 100%;">
                <div class="card">
                    <p class="card-header">Data Penggajihan</p>
                    <div class="card-body">
                        <!-- Form row -->
                        <div class="row">
                            <!-- NO -->
                            <div class="col-12 mb-3">
                                <label for="no" class="form-label">No</label>
                                <input type="text" class="form-control" id="no" placeholder="No" name="no">
                            </div>
                            <!-- Nama -->
                            <div class="col-12 mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                            </div>
                            <!-- Unit -->
                            <div class="col-12 mb-3">
                                <label for="unit" class="form-label">Unit Pendidikan</label>
                                <select class="form-select" aria-label="Pilih Unit Pendidikan" name="unit">
                                    <option selected>Pilih Unit Pendidikan</option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="sma">SMA</option>
                                    <option value="smk">SMK</option>
                                </select>
                            </div>
                            <!-- Date -->
                            <div class="col-12 mb-3">
                                <label for="tanggal" class="form-label">Tanggal Gaji</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="row">
                                <!-- Bagian Kiri: Teks Gaji -->
                                <div class="col-md-6">
                                    <h5 class="mb-3 fw-bold text-center">Teks Gaji</h5>
                                    <!-- Jabatan -->
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <select class="form-select" aria-label="Pilih Jabatan" name="jabatan">
                                            <option selected>Pilih Jabatan</option>
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option value="Wakasek">Wakasek</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Karyawan">Karyawan</option>
                                        </select>
                                    </div>
                                    <!-- Lama Kerja -->
                                    <div class="mb-3">
                                        <label for="lamaKerja" class="form-label">Lama Kerja</label>
                                        <input type="text" class="form-control" id="lamaKerja" placeholder="Lama Kerja (tahun)" name="lamakerja">
                                    </div>
                                    <!-- Status Kerja -->
                                    <div class="mb-3">
                                        <label for="statusKerja" class="form-label">Status Kerja</label>
                                        <select class="form-select" aria-label="Pilih Status Kerja" name="statuskerja">
                                            <option selected>Pilih Status Kerja</option>
                                            <option value="Tetap">Tetap</option>
                                            <option value="Kontrak">Kontrak</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Bagian Kanan: Potongan -->
                                <div class="col-md-6">
                                    <h5 class="mb-3 fw-bold text-center">Potongan</h5>
                                    <!-- BPJS -->
                                    <div class="mb-3">
                                        <label for="bpjs" class="form-label">BPJS</label>
                                        <input type="text" class="form-control" id="bpjs" placeholder="BPJS (Rp)" name="bpjs">
                                    </div>
                                    <!-- Pinjaman -->
                                    <div class="mb-3">
                                        <label for="pinjaman" class="form-label">Pinjaman</label>
                                        <input type="text" class="form-control" id="pinjaman" placeholder="Pinjaman (Rp)" name="pinjaman">
                                    </div>
                                    <!-- tabungan -->
                                    <div class="mb-3">
                                        <label for="cicilan" class="form-label">Cicilan</label>
                                        <input type="text" class="form-control" id="cicilan" placeholder="Cicilan (Rp)" name="cicilan">
                                    </div>
                                    <!-- Infaq -->
                                    <div class="mb-3">
                                        <label for="infaq" class="form-label">Infaq</label>
                                        <input type="text" class="form-control" id="infaq" placeholder="Lainya (Rp)" name="infaq">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Proses</button>
                    </div>
                </div>
            </form>
            <!-- Form berakhir -->
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
