<?php

namespace App\Adapter\Gateway\Dao\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App\Adapter\Gateway\Dao\Eloquent\Model
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $person_in_charge
 * @property string $created_at
 * @property string $updated_at
 */
class Task extends Model
{
    protected $table = 'tasks';
}
