<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Manga extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['image', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

}
