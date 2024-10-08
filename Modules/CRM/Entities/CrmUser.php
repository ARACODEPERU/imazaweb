<?php

namespace Modules\CRM\Entities;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Company;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;
use Spatie\Permission\Traits\HasRoles;

class CrmUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'local_id',
        'company_id',
        'avatar',
        'information',
        'person_id',
        'status',
        'updated_information',
        'api_token'
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
    public function company(): HasOne
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function tokens()
    {
        return $this->morphMany(PersonalAccessToken::class, 'tokenable');
    }

    public function conversations()
    {
        return $this->belongsToMany(CrmConversation::class, 'crm_participants');
    }

    public function messages()
    {
        return $this->hasMany(CrmMessage::class);
    }
    public function person(): HasOne
    {
        return $this->hasOne(Person::class, 'id', 'person_id');
    }
}
