<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\EmailValidator;
use App\Validators\NumberValidator;
use App\Validators\PasswordValidator;
use App\Validators\StringValidator;

class UserModel extends Model{
    protected function getFields(): array {
        return [
            'user_id'           => new Field(new NumberValidator(), false),
            'first_name'        => new Field(new StringValidator()),
            'last_name'         => new Field(new StringValidator()),
            'username'          => new Field((new StringValidator())->setMaxLength(128)),
            'password'          => new Field(new PasswordValidator()),
            'e-mail'            => new Field(new EmailValidator()),
            'description'       => new Field((new StringValidator())->setMaxLength(64 * 1024)),
            'profile_picture'   => new Field(new StringValidator()),
            'user_type'         => new Field(new NumberValidator(), false)
        ];
    }
    public function getByUsername(string $userName) {
        return $this->getByFieldName('username',$userName);
    }
}