<?php
include "Tim.php";
$blackOps = new Tim();
$shadowCompany = new Tim();

$blackOps->namaTim = "Black Ops";
$blackOps->namaLeader = "Frank Woods";
$blackOps->anggota = 20;
$blackOps->tahunBerdiri = 1990;
// $blackOps->print();
$blackOps->create();
// $blackOps->read();

$shadowCompany->namaTim = "Shadow Company";
$shadowCompany->namaLeader = "Phillip Graves";
$shadowCompany->anggota = 100;
$shadowCompany->tahunBerdiri = 2007;
$shadowCompany->print();
