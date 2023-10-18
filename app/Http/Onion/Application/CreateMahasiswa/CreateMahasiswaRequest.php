<?php

namespace App\Http\Onion\Application\Service\CreateMahasiswa;

use App\Http\Onion\Domain\Enum\StatusMahasiswa;

class CreateMahasiswaRequest
{
    public function __construct(
        private string $nama,
        private string $jurusan,
        private StatusMahasiswa $status,
    )
    {
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getJurusan(): string
    {
        return $this->jurusan;
    }

    public function getStatus(): StatusMahasiswa
    {
        return $this->status;
    }
}
