<?php

declare(strict_types=1);

namespace App;


class Auth
{
    public array $users = [];
    public  array  $keys = ['name', 'email', 'password'];
    public  array $values = [];
    public function __construct(
        public string $name,
        public string $email,
        public string $password,


    ) {
    }
    public function register(): array
    {
        $this->values = [$this->name, $this->email, $this->password];
        $array_combine = array_combine($this->keys, $this->values);
        array_push($this->users, $array_combine);
        return $this->users;
    }
}
