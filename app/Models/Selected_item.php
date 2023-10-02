<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selected_item extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    public mixed $name;
    public mixed $user_id;

    /**
     * @var mixed|string
     */

    protected $fillable = [
        'name',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
