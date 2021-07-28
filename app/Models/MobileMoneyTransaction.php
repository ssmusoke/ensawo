<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MobileMoneyTransaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
        'source',
        'destination',
        'amount',
        'comment',
        'uuid',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->uuid = Str::uuid();
        });
    }

    public function __toString()
    {
        return $this->name;
    }
}
