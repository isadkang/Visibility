<?php

class Perusahaan {
    private $nama;
    private $posisi;
    private $gaji;

    public function hitungBonus(){
        if($this->posisi == 'Manager'){
            return $this->gaji * 1.2;
        } else {    
            return $this->gaji;
        }
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setPosisi($posisi){
        $this->posisi = $posisi;
    }

    public function getPosisi(){
        return $this->posisi;
    }

    public function setGaji($gaji){
        $this->gaji = $gaji;
    }

    public function getGaji(){
        return $this->gaji;
    }
}

$karyawan1 = new Perusahaan();
$karyawan1->setNama("Rassel");
$karyawan1->setPosisi('Manager');
$karyawan1->setGaji(15000000);

$karyawan2 = new Perusahaan();
$karyawan2->setNama('Rivaldo');
$karyawan2->setPosisi("Developer");
$karyawan2->setGaji(8000000);
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
<title>Gaji Karyawan</title>
<div class="main">
    <div class="container">
        <h2>Penerapan Visibility Private dalam project OOP PHP</h2>
        <table border="1">
            <tr>
                <th>Nama Karyawan</th>
                <th>Posisi</th>
                <th>Gaji</th>
            </tr>
            <tr>
                <td><?= $karyawan1->getNama() ?></td>
                <td><?= $karyawan1->getPosisi() ?></td>
                <td>Rp <?= $karyawan1->hitungBonus() ?></td>
            </tr>
            <tr>
                <td><?= $karyawan2->getNama() ?></td>
                <td><?= $karyawan2->getPosisi() ?></td>
                <td>Rp <?= $karyawan2->hitungBonus() ?></td>
            </tr>
        </table>
    </div>
</div>
