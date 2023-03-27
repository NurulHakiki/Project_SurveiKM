<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Contracts\KuesionerContract;
use App\Contracts\PertanyaanContract;

class KuesionerController extends Controller
{
    public function __construct(
        private PertanyaanContract $pertanyaanService,
        private KuesionerContract $kuesionerService
    ) {
        //
    }

    public function pendidikan()
    {
        $questions = $this->pertanyaanService->getAllPertanyaan();
        
        return view('kuesioner.index', [
            'questions' => $questions,
            'namalayanan' => 'Pendidikan',
            'id_layanan' => 1
        ]);
    }

    public function kesehatan()
    {
        $questions = $this->pertanyaanService->getAllPertanyaan();
        
        return view('kuesioner.index', [
            'questions' => $questions,
            'namalayanan' => 'Pendidikan',
            'id_layanan' => 2
        ]);
    }

    public function administratif()
    {
        $questions = $this->pertanyaanService->getAllPertanyaan();
        
        return view('kuesioner.index', [
            'questions' => $questions,
            'namalayanan' => 'Pendidikan',
            'id_layanan' => 3
        ]);
    }

    public function publik()
    {
        $questions = $this->pertanyaanService->getAllPertanyaan();
        
        return view('kuesioner.index', [
            'questions' => $questions,
            'namalayanan' => 'Pendidikan',
            'id_layanan' => 4
        ]);
    }

    public function sarana()
    {
        $questions = $this->pertanyaanService->getAllPertanyaan();
        
        return view('kuesioner.index', [
            'questions' => $questions,
            'namalayanan' => 'Pendidikan',
            'id_layanan' => 5
        ]);
    }

    public function regulatif()
    {
        $questions = $this->pertanyaanService->getAllPertanyaan();
        
        return view('kuesioner.index', [
            'questions' => $questions,
            'namalayanan' => 'Pendidikan',
            'id_layanan' => 6
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required|string|in:1,2',
            'nik' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'answers' => 'required|array',
            'id_layanan' => 'required|numeric'
        ]);

        DB::beginTransaction();

        try {
            $add_responden = $this->kuesionerService->addResponden(
                $request->nama_lengkap,
                $request->jenis_kelamin,
                $request->pendidikan,
                $request->pekerjaan,
                $request->no_hp,
                $request->nik,
                $request->id_layanan
            );   

            $add_kuesioner = $this->kuesionerService->addKuesioner(
                $add_responden->id,
                1, // 1 = layanan AK1 (tbl_layanan)
                $request->answers
            );
            
            DB::commit();

            return response()->json([
                'message' => 'Proses berhasil'
            ], 201);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
