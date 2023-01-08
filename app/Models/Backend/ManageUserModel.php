<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageUserModel extends Model
{
    use HasFactory;
    protected $fillable =[
        'fName',
        'lName',
        'nid',
        'phone',
        'email',
        'status',
        'address',
        'file',
        'multifile',
       
    ];
}
