<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'email', 'tgl_order', 'total_harga' , 'metode_pembayaran'];
    protected $visible = ['user_id', 'email', 'tgl_order', 'total_harga' , 'metode_pembayaran'];

    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
