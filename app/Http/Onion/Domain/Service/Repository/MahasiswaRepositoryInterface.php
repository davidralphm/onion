<?php

namespace App\Http\Onion\Domain\Service\Repository;

use App\Http\Onion\Domain\Models\Mahasiswa;

interface MahasiswaRepositoryInterface
{
    public function persist(Mahasiswa $mahasiswa);
    public function getById(int $topik_id): ?Mahasiswa;

}
