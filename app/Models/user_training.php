<?php

namespace App\Models;
use App\Traits\HasCompany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\user_salary
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $name
 * @property int $start
 * @property int $end
 * @property-read \App\Models\User $user
 * 
 * @mixin \Eloquent
 */

 class user_training extends BaseModel
 {
 
     use HasCompany;
 
     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class);
     }
 
 }