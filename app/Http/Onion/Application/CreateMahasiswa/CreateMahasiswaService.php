<?php

namespace App\Http\Onion\Application\Service\CreateMahasiswa;

use App\Http\Onion\Domain\Models\Mahasiswa;
use App\Http\Onion\Domain\Service\Repository\MahasiswaRepositoryInterface;

class CreateMahasiswaService
{
    public function __construct(
        private MahasiswaRepositoryInterface $mahasiswa_repository
    )
    {
    }

    public function execute(CreateMahasiswaRequest $request){
        $mahasiswa = new Mahasiswa(
            null,
            $request->getNama(),
            $request->getJurusan(),
            $request->getStatus(),
        );

        $this->mahasiswa_repository->persist($mahasiswa);
    }
}
