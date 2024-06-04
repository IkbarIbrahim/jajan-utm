<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $casts = [
        'id' => 'integer',
        'body' => 'string',
        'created_at' => 'date',
        'user_id' => 'integer',
    ];

    protected $fillable = ['body', 'created_at', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
