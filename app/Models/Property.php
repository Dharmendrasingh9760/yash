<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Property extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'property',
        'property_id',
        'ward_no',
        'colony_name',
        'building_type',
        'house_no',
        'property_owner_name',
        'father_or_husband_name',
        'mobile_number',
        'total_arv',
        'house_tax_current',
        'house_tax_arrear',
        'surcharge',
        'total_tax_house',
        'water_tax_current',
        'water_tax_arrear',
        'water_tax_surcharge',
        'total_water_tax',
        'water_charge_current',
        'water_charge_arrear',
        'water_charge_surcharge',
        'total_water_charge',
        'total_property_tax',
        'deposite_house_tax',
        'deposite_water_tax',
        'deposite_water_charges',
        'remarks',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
