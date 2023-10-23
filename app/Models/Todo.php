<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $name
 */
class Todo extends Model
{
    protected $fillable = ['name', 'is_complete', 'assignees', 'priority']; // Add 'name' to this array

    const PRIORITY_LOW = 0;
    const PRIORITY_MEDIUM = 1;
    const PRIORITY_HIGH = 2;

    public function getPriorityBadgeAttribute()
    {
        $priorities = [
            self::PRIORITY_LOW => 'Low',
            self::PRIORITY_MEDIUM => 'Medium',
            self::PRIORITY_HIGH => 'High',
        ];

        return $priorities[$this->priority];
    }

    use HasFactory;
}
