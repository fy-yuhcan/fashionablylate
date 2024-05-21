<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'adress',
        'building',
        'detail',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class); 
    }
    public function scopeCategorySearch($query, $category_id)
{
  if (!empty($category_id)) {
    $query->where('category_id', $category_id);
  }
}
public function scopeKeywordSearch($query, $keyword)
{
    if (!empty($keyword)) {
        $query->where('email', 'like', '%' . $keyword . '%')
              ->orWhere('first_name', 'like', '%' . $keyword . '%')
              ->orWhere('last_name', 'like', '%' . $keyword . '%');
      }
      }
public function scopeGenderSearch($query,$gender)
{
    if (!empty($gender)) {
    $query->where('gender', $gender);
    }
}
public function scopeDateSearch($query,$date){
    if (!empty($date)) {
        $query->whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59']);
    }
}
}

