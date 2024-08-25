<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string phone_number
 * @property int fk_department
 * @property int fk_designation
 * @property Designation designation
 * @property Department department
 *
 */

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'fk_department', 'fk_designation', 'phone_number'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'fk_department');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'fk_designation');
    }
}
