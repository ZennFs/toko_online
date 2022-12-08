<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index($nama = (''), $umur = 0)
    {
        echo "Hallo! nama saya $nama.";
        echo "<br>";
        echo "Saya berumur $umur tahun.";
    }
}
