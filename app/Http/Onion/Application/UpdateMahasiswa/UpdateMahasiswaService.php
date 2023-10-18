<?php

namespace App\Http\Onion\Application\Service\UpdateMahasiswa;

use App\Http\Onion\Domain\Models\Mahasiswa;
use App\Http\Onion\Domain\Service\Repository\MahasiswaRepositoryInterface;

class UpdateMahasiswaService
{
    public function __construct(
        private MahasiswaRepositoryInterface $mahasiswa_repository
    )
    {
    }

    public function execute(UpdateMahasiswaRequest $request){
        $mahasiswa = new Mahasiswa(
            $request->getId(),
            $request->getNama(),
            $request->getJurusan(),
            $request->getStatus(),
        );

        $this->mahasiswa_repository->persist($mahasiswa);
    }
}
