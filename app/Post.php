<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static paginate(int $int, array $array, string $string)
 */
class Post extends Model
{
    protected  $table = 'posts';
    public  $timestamps = true;


}
