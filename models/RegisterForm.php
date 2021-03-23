<?php


namespace app\models;

use yii\base\Model;
use yii\helpers\VarDumper;

class RegisterForm extends Model
{
    public $username;
    public $mail;
    public $password;
    public $passwordRepeat;

    public function rules()
    {
        return [
            // Username
            ['username', 'required', 'message' => 'Please provide a valid username.'],
            ['username', 'unique', 'message' => 'This username is already taken.'],
            ['username', 'string', 'min' => 4, 'max' => 16, 'message' => "The size of a nickname is between 4 and 16 characters."],

            // Mail
            ['mail', 'required', 'message' => "Please provide a valid mail"],
            ['mail', 'unique', 'message' => "This mail is already taken"],

            // Password
            [['password', 'passwordRepeat'], 'required', 'message' => 'Please provide a valid password'],
            [['password', 'passwordRepeat'], 'string', 'min' => 8, 'message' => "A password must be at least 8 characters long."],
            ['passwordRepeat', 'compare', 'compareAttribute' => 'password', 'message' => 'The two passwords must match.']
        ];
    }

    public function register()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->mail;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->created_at = date('Y-m-d H:i:s');

        if ($user->save()) {
            return true;
        }
        \Yii::error("User was not saved.".VarDumper::dumpAsString($user->errors));
        return false;
    }
}