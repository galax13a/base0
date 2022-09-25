<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavegatorMo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'navegators';

    protected $fillable = ['name','lang','url','enabled','order'];
	
}
