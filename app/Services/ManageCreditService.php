<?php
namespace App\Services;
use App\Models\ManageCredit;
class ManageCreditService
{
    //insert or update record
    public static function createUpdate($details,$id)
    {
        if($id == 0)
        {
            return ManageCredit::create($details);
        }
        else
        {
            return ManageCredit::whereId($id)->update($details);
        }
    }
}