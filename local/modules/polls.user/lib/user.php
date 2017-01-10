<?
namespace Polls\User;

use Bitrix\Main\Entity;

class UserTable extends Entity\DataManager {

    public function testFunc($id_user) {
    
        global $USER;

        $rsUser = $USER->GetByID($id_user);
        $arUser = $rsUser->Fetch();

        return $arUser;  
    }
}