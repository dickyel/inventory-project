<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_masuk_barang','nama_line', 'nama_customer', 'model','rwo','rwo_qty','hc','plan_output','actual_output','set_up_time_plan','set_up_time_actual','set_up_time_var','running_time_plan','running_time_actual','running_time_var','total_plan','total_actual','remark','users_id','total_var'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class,'users_id','id'
        );
    }


}
