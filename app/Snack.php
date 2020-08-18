<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Snack extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public function bar()
    {
        return $this->belongsTo(Bar::class);
    }
}
