<?php
class Tim
{
  public $namaTim;
  public $namaLeader;
  public $anggota;
  public $tahunBerdiri;

  public function print()
  {
    echo "=== Print Pertama ===";
    echo "<br>";
    echo "Nama Tim        : " . $this->namaTim;
    echo "<br>";
    echo "Nama Leader     : " . $this->namaLeader;
    echo "<br>";
    echo "Jumlah Anggota  : " . $this->anggota;
    echo "<br>";
    echo "Tahun Berdiri   : " . $this->tahunBerdiri;
    echo "<br>";
    echo "=== Penutup ===";
    echo "<br>";
    echo "<br>";
  }

  public function create()
  {
    echo "INSERT INTO tim VALUES(
    '$this->namaTim',
    '$this->namaLeader',
    $this->anggota,
    $this->tahunBerdiri
    )";
  }

  public function read()
  {
    echo "SELECT * FROM tim";
  }

  public function update()
  {
    echo "UPDATE tim SET
    namaLeader = '$this->namaLeader',
    anggota = $this->anggota,
    tahunBerdiri = $this->tahunBerdiri,
    WHERE
    namaTim = $this->namaTim
    ";
  }

  public function delete()
  {
    echo "DELETE FROM tim
    WHERE namaTim = '$this->namaTim'";
  }
}
