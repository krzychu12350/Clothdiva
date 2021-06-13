<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner_image extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_banner_image';

    public $timestamps = false;
    
    protected $fillable = [
        'path_to_image',
        'paragraph_large',
        'paragraph_small',
        'link_href',
        'link_desc',
    ];
}
