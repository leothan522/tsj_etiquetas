<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessage extends Model
{
    use HasFactory;
    protected $table = "chatmessages";
    protected $fillable = ['users_id', 'chats_id', 'default'];

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class, 'chats_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
