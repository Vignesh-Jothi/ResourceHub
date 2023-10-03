<?php

namespace App\Models\ResModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResModel extends Model
{
    use HasFactory;

    protected $table = "resources";

    protected $fillable = [
        'id',
        'type',
        'name',
        'link',
        'category'
    ];

    public $timestamp = "true";
}
