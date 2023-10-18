<?php

namespace App\Http\Onion\Presentation\Controller;

use App\Http\Controllers\Controller;
use App\Http\Onion\Application\Service\CreateMahasiswa\CreateMahasiswaRequest;
use App\Http\Onion\Application\Service\CreateMahasiswa\CreateMahasiswaService;
use App\Http\Onion\Application\Service\UpdateMahasiswa\UpdateMahasiswaRequest;
use App\Http\Onion\Application\Service\UpdateMahasiswa\UpdateMahasiswaService;
use App\Http\Onion\Domain\Enum\StatusMahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct(
        private CreateMahasiswaService $create_mahasiswa_service,
        private UpdateMahasiswaService $update_mahasiswa_service
    )
    {
    }

    public function createMahasiswa(Request $request){
        $request = new CreateMahasiswaRequest(
            $request->input('jurusan'),
            $request->input('nama'),
            StatusMahasiswa::tryFrom($request->input('status')),
        );

        return $this->executeService($this->create_mahasiswa_service, $request);
    }
    public function updateMahasiswa(Request $request){
        $request = new UpdateMahasiswaRequest(
            $request->input('id'),
            $request->input('jurusan'),
            $request->input('nama'),
            StatusMahasiswa::tryFrom($request->input('status')),
        );

        return $this->executeService($this->update_mahasiswa_service, $request);
    }
}
