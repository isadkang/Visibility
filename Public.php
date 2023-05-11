<?php

Class Karyawan {
    public $nama_karyawan;
    public $jabatan;
    public $gaji_pokok;

    public function hitungGaji(){
        if($this->jabatan == 'Manager'){
            return $this->gaji_pokok * 1.1;
        } else {    
            return $this->gaji_pokok;
        }
    }
}

$perusahaan1 = new Karyawan();
$perusahaan1->nama_karyawan = "Muhammad Irsyad Nataprawira";
$perusahaan1->jabatan = 'Full Stack Dev.';
$perusahaan1->gaji_pokok = 8000000;

$perusahaan2 = new Karyawan();
$perusahaan2->nama_karyawan = 'Nata Prawira';
$perusahaan2->jabatan = "Back End Dev.";
$perusahaan2->gaji_pokok = number_format(5000000,0,",",".");
?>
<style>
    .main {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<title>Study Case Pak Ahmad</title>
<div class="main">
    <div class="container">
        <h2 align="center" >Penerapan Visibility Public dalam Project OOP PHP</h2>
        <table border="1">
            <tr>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Gaji</th>
            </tr>
            <tr>
                <td><?= $perusahaan1->nama_karyawan ?></td>
                <td><?= $perusahaan1->jabatan ?></td>
                <td>Rp <?= $perusahaan1->hitungGaji() ?></td>
            </tr>
            <tr>
                <td><?= $perusahaan2->nama_karyawan ?></td>
                <td><?= $perusahaan2->jabatan ?></td>
                <td>Rp <?= $perusahaan2->hitungGaji() ?></td>
            </tr>
        </table>
    </div>
</div>