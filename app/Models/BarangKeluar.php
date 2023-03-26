<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_keluar_barang', 'customer', 'model','rwo','rwo_qty','hc','plan_output','actual_output','set_up_time_plan','set_up_time_actual','set_up_time_var','running_time_plan','running_time_actual','running_time_var','total_plan','total_actual','total_var','remark','users_id','barang_masuk_id'
    ];

    protected $hidden = [];

    public function barang_masuk()
    {
        return $this->belongsTo(
            BarangMasuk::class,'barang_masuk_id','id'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class,'users_id','id'
        );
    }

}
