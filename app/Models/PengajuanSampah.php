<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PengajuanSampah extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_pengajuan_sampah';

    protected $dates = ['deleted_at'];

    protected $hidden = [
    ];


    public function getJenisSampah()
    {
        return $this->belongsTo('\App\Models\JenisSampah' , 'id_sampah');
    }

    public function getNasabahPengajuanSampah()
    {
        return $this->belongsTo('\App\Models\Nasabah' , 'id_nasabah');
    }

    public function getSampah()
    {
        return $this->belongsTo('\App\Models\Sampah' , 'id_sampah');
    }






}