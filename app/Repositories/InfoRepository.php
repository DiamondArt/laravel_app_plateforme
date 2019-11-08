<?php

namespace App\Repositories;

use App\Models\UserInfo;

class infoRepository
{
function userinfoUpdate($id)
{
    $info = UserInfo::find($id);
    $info->lastname = $request->lastname;
    $info->save();

}
}