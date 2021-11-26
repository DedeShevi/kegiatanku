<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
    {
        return [
            'invite',
            'edit',
            'update',
            'delete',
            'kegiatanIndex',
            'createKegiatan',
            'editKegiatan',
            'updateKegiatan',
            'hapusKegiatan',
        ];
    }
}