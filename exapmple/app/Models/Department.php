<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'abbreviation', 'number_employees'];


    public function director() {
        return $this->hasOne(User::class, 'id', 'director_id');
        }

    public function departments() {
        return $this->hasMany(Department::class, 'director_id', 'id');
        }
}