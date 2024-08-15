<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class LaborContract extends Model
{
    use HasFactory;
    protected $table = 'labor_contracts';
    protected $fillable=[
        'user_id ',
        'add_id ',
        'MAHDLD',
        'HTLD',
        'DVSDLD',
        'NguoiDD',
        'NgayBDHD',
        'NgayHHHD',
        'Ngaynhan',
        'MaNgach',
        'NgachL',
        'BacL',
        'HesoL',
        'TGtinhL',
        'MucL',
        'HeSoPCCV',
        'MucPCCV',
        'HeSoPCKV',
        'HeSoPCTN',
        'HeSoPCDH',
        'Ghichu'


    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
