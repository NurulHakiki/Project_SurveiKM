<?php 

declare(strict_types=1);

namespace App\Contracts;

interface IndukPertanyaanContract 
{
    public function getAllIndukPertanyaan(); // tanpa pagination

    public function getListPagination();

    public function insertDataIndukPertanyaan(string $induk_pertanyaan, array $jawaban, $unsur, $no_urut);

    public function getIndukPertanyaanById($id);

    public function getIndukPertanyaanJawaban($id);

    public function updateIndukPertanyaanById($IndukPertanyaan_id, $IndukPertanyaan, $unsur, $no_urut);

    public function updateJawaban($IndukPertanyaan_id, array $jawabans);

    public function deleteIndukPertanyaanById($IndukPertanyaan_id);

    public function deleteIndukPertanyaanJawaban($IndukPertanyaan_id);

}