<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryEmployee extends Model
{
    //

    protected $table = 'employee_history';

    protected $fillable = [
        'empl_id',
        'tanggal_transaksi',
        'status_id',
        'tgl'
    ];

    public function getEmployee()
    {
        return $this->belongsTo('App\Employee', 'empl_id', 'id');
    }

    public function getStatus()
    {
        return $this->hasOne('App\Status', 'status_id', 'id');
    }
}
