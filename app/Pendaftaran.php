<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use SoftDeletes;
    
    protected $table = 'pendaftaran';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'fullname2',
        'no_mahasiswa2',
        'email2',
        'jenis_kelamin2',
        'jurusan2',
        'tempat_lahir2',
        'tgl_lahir2',
        'alamat2',
        'no_telp2',
        'fullname3',
        'no_mahasiswa3',
        'email3',
        'jenis_kelamin3',
        'jurusan3',
        'tempat_lahir3',
        'tgl_lahir3',
        'alamat3',
        'no_telp3',
        'fullname4',
        'no_mahasiswa4',
        'email4',
        'jenis_kelamin4',
        'jurusan4',
        'tempat_lahir4',
        'tgl_lahir4',
        'alamat4',
        'no_telp4',
        'fullname5',
        'no_mahasiswa5',
        'email5',
        'jenis_kelamin5',
        'jurusan5',
        'tempat_lahir5',
        'tgl_lahir5',
        'alamat5',
        'no_telp5',
        'file_proposal',
        'status',
    ];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User', 'users_id')->withTrashed();
    }
}
