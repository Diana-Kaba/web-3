<?php

class Users
{
    protected $users;

    public function __construct($users = [])
    {
        $this->users = $users;
    }

    public function getUsers()
    {
        return $this->users;
    }

    public function getUser($i)
    {
        return $this->user[$i];
    }

    public function setUsers(array $users)
    {
        $this->users = $users;
    }

    public function setUser($user)
    {
        foreach ($this->users as $key => $userTemp) {
            if ($userTemp->getLogin() === $user->getLogin()) {
                echo "\nТакий користувач уже існує!";
                return;
            }
        }
        $this->users[] = $user;
    }

    // public function deleteUser($login)
    // {
    //     for ($i = 0; $i < $this->users; $i++) {
    //         if ($this->users[$i]->getLogin() === $login) {
    //             unset($this->users[$i]);
    //             return true;
    //         } else {
    //             return false;
    //         }
    //     }
    // }

    public function deleteUser($login)
    {
        $i = 0;
        foreach ($this->users as $user) {
            if ($user->getLogin() === $login) {
                unset($this->users[$i]);
                return true;
            } else {
                $i++;
            }
        }
        return false;
    }

    public function isValid($login, $password)
    {
        foreach ($this->users as $key => $user) {
            if ($user->isValid($login, $password)) {
                return true;
            }
        }
        return false;
    }

    public function __toString()
    {
        $str = "\nКористувачі: \n";
        foreach ($this->users as $user) {
            $str .= $user->getLogin() . "\n";
        }
        return $str;
    }
}
