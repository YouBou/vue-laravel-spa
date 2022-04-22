<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App\Models
 */
class Task extends Model
{
    protected $fillable = [
        'title',
        'content',
        'person_in_charge'
    ];
}
