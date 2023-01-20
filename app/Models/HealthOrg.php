<?php

namespace App\Models;

use Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthOrg extends Model
{
    use  HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'service_number',
        'phone',
        'county',
        'sub_county',
        'f_description',
        'location',
        'cor',
        'category',
        'aname',
        'aphone',
        'aID',
        'kra',
        
     
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the user that access the org.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function counties()
    {
        return $this->belongsTo(Counties::class);
    }

     public function sub_counties()
    {
        return $this->belongsTo(Sub_Counties::class);
    }
}
