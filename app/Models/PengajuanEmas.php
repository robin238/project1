<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class PengajuanEmas extends Model
{

    protected $table = 'tbl_pengajuan_emas';

    protected $hidden = [
    ];


    public function getJenisEmas()
    {
        return $this->belongsTo('\App\Models\JenisEmas' , 'id_jenis_emas');
    }

    public function getNasabahPengajuanEmas()
    {
        return $this->belongsTo('\App\Models\Nasabah' , 'id_nasabah');
    }


}