<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $guarded = ['id'];
    public $incrementing = false;
    protected $keyType = 'string';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'users.kelas_id')
            ->select('users.*', 'kelas.nama_kelas as nama_kelas')
            ->get();
    }
}
