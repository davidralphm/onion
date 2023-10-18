<?php

namespace App\Http\TA\Domain\Models;

use App\Http\TA\Domain\Enum\StatusMahasiswa;

class Topik
{
    public function __construct(
        private ?int $id,
        private string $nama,
        private string $jurusan,
        private StatusMahasiswa $status,
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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
