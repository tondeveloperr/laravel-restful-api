<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model implements Authenticatable
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $fillable = ['username', 'password', 'name'];
    public $timestamps = true;
    public $incrementing = true;





    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, "user_id", "id");
    }

    public function getAuthIdentifierName()
    {
        return 'username';
    }
    public function getAuthIdentifier()
    {
        return $this->username;
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getRememberToken()
    {
        return $this->token;
    }
    public function setRememberToken($value)
    {
        return $this->token = $value;
    }

    public function getRememberTokenName()
    {
        return 'token';
    }
}
