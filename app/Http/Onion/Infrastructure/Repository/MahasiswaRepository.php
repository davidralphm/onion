<?php

namespace App\Http\Onion\Infrastructure\Repository;

use App\Http\Onion\Domain\Models\Mahasiswa;
use App\Http\Onion\Domain\Service\Repository\MahasiswaRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MahasiswaRepository implements MahasiswaRepositoryInterface
{
    public function persist(Mahasiswa $mahasiswa)
    {
        $data = $this->createPayload($mahasiswa);
        DB::table('mahasiswa')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $mahasiswa_id): ?Mahasiswa
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(Mahasiswa $mahasiswa)
    {
        return [
            'id' => $mahasiswa->getId(),
            'nama' => $mahasiswa->getNama(),
            'jurusan' => $mahasiswa->getJurusan(),
            'status' => $mahasiswa->getStatus()->value,
        ];
    }
}
