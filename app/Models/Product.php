<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable=[
        'name',
        'image',
        'category',
        'type',
        'quantity',
        'group',
        'notes'
    ];

    public function getImageURL()
    {
        if($this->image) {
            return url('storage/'. $this->image);
        }
        return "https://cdn2.iconfinder.com/data/icons/admin-tools-2/25/image2-512.png";
    }
}
