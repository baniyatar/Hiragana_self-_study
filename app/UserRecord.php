<?php

namespace App;


class UserRecord
{
    private $id;
    private  $username ;
    private $password;
    private $email;
    private $firstname;
    private $surname;

    private $city;
    private $country;
    private $payment; 

    public function __construct (
        $id, $username, $password, $email, $firstname, $surname,$city,$country, $payment
    )
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->surname =$surname;
        $this->city = $city;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             city;
        $this->country = $country;
        $this->payment = $payment;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUsername()
    {
        return $this->username;

    }

    public function setUsername($username)
    {
       $this->username= $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getPaymentDone()
    {
        if($this->payment == '1'){
            return '済';
        }else{
            return '未';
        }
    }

    public function setPaymentDone($payment)
    {
        $this->payment = $payment;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
    $this->surname=$surname;
    }
  
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->city = $country;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

  
}