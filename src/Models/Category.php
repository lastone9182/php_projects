<?php
namespace Festiv\Publ\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @var array */
    protected $fillable = [
        'name',
        'description'
    ];
}
