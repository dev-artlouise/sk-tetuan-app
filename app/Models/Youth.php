<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youth extends Model
{
    use HasFactory;

    protected $table = 'yt_profile';

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'datebirth',
        'birth_place',
        'contact_no',
        'address',
        'zone',
        'gender',
        'kk_member',
        'civil_status',
        'tribe',
        'religion',
        'email',
        'educational_attainment',
        'occupation',
        'youth_sector',
        'organization',
        'fathers_name',
        'fathers_occupation',
        'mothers_name',
        'mothers_occupation',
        'living_w_parents',
        'concerns_issue',
        'control_no',
        'batch',
        'civil_status_specify',
        'spouse_name',
        'youth_sec_specify',
        'org_specify',
        'encoded_by',   
    ];
}
