<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'id',
    ];
    public function user(){
    return $this->belongsTo(User::class);
    }
}
