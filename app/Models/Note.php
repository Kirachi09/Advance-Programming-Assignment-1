<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Note extends Model
{
    // These fields can be mass-assigned (filled from a form)
    protected $fillable = ['title', 'body', 'subject'];
}
