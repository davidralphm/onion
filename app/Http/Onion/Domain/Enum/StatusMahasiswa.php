<?php

namespace App\Http\TA\Domain\Enum;

enum StatusMahasiswa : string
{
    case Aktif = 'aktif';
    case TidakAktif = 'tidak_aktif';
    case Cuti = 'cuti';
    case SudahLulus = 'sudah_lulus';
}
