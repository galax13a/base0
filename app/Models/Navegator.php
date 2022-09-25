<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navegator extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'navegators';

    protected $fillable = ['name','lang','url','clase','enabled','order'];
	
}
