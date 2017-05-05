<?php

require __DIR__ . "../../vendor/autoload.php";


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    public function getTableName()
    {
        return $this->table;   
    }
}

$user = new User;
//$user->save();
echo $user->getTableName();
//$reflect = new ReflectionClass($user);
//$methods = $reflect->getProperties();
//foreach ($methods as $method) {
    //echo $method->name . "\n";
//}
