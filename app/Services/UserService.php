<?php
namespace App\Services;
use App\Models\User;
class UserService
{
    // Get all records
    public static function getUser()
    {
        return User::orderby('id','desc')->paginate(10);
    }
    // delete record
    public static function delete($userId) 
    {
        $user = User::find($userId);
        $user->delete();
    }
    //find record by id
    public static function getUserById($userId)
    {
        return User::find($userId);
    }
    //insert or update record
    public static function createUpdate($userDetails,$userId)
    {
        if($userId== 0)
        {
            return User::create($userDetails);
        }
        else
        {
            return User::whereId($userId)->update($userDetails);
        }
    }
    public static function deleteUser($id) 
    {
        $user = User::find($id);
        $user->delete();
    }
}
?>