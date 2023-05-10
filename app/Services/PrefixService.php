<?php
namespace App\Services;
use App\Models\MobilePrefix;
class PrefixService
{
    // Get all records
    public static function getPrefix()
    {
        return MobilePrefix::orderby('id','desc')->paginate(10);
    }
    // delete record
    public static function delete($newsId) 
    {
        $news = MobilePrefix::find($newsId);
        $news->delete();
    }
    //find record by id
    public static function getPrefixById($newsId)
    {
        return MobilePrefix::find($newsId);
    }
    //insert or update record
    public static function createUpdate($prefixDetails,$prefixId)
    {
        if($prefixId== 0)
        {
            return MobilePrefix::create($prefixDetails);
        }
        else
        {
            return MobilePrefix::whereId($prefixId)->update($prefixDetails);
        }
    }
    

    public static function deletePrefix($id) 
    {
        $news = MobilePrefix::find($id);
        $news->delete();
    }
}
?>