<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RyanChandler\Uuid\Concerns\HasUuid;

class PhoneNumber extends Model
{
    use HasFactory;
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'nickname',
        'uuid',
        'owner_id',
        'network_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'owner_id' => 'integer',
        'network_id' => 'integer',
    ];


    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function network()
    {
        return $this->belongsTo(Network::class);
    }
}