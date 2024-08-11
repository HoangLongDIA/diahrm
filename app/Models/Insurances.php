<?php

namespace App\Models;

use App\Traits\HasCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Insurances extends BaseModel
{
    use HasCompany;
    protected $table = 'user_insurances';
    protected $fillable=[
        'SoBHXH',
        'ThgBHXH',
        'NmBHXH',
        'SotheBHXH',
        'MadkyKCB',
        'NbdTheYT',
        'NktTheYT',
        'TgiaBHTN',
        'ThgBdBHTN',
        'NBdBHTN',
        'PCKVBHXH',
        'QTrBHXH',
        'MSTtncn',
        'SoNgPgPt'


    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
