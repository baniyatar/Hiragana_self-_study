<?php

namespace App;

class UserRecord
{
    private $examineeId;
    private $userName;
    private $passWord;
    private $email;
    private $firstName;
    private $surName;
    private $city;
    private $country;
    private $payment;

    public function __construct (
        $examineeId, $userName, $passWord, $email, $firstName, $surName, $city, $country, $payment
    )
    {
        $this->examineeId = $examineeId;
        $this->userName = $userName;
        $this->passWord = $passWord;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->city = $city;
        $this->country = $country;
        $this->payment = $payment;
    }

    public function getExamineeId()
    {
        return $this->examineeId;
    }
    public function setExamineeId($examineeId)
    {
        $this->examineeId = $examineeId;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getPassWord()
    {
        return $this->passWord;
    }
    public function setPassWord($passWord)
    {
        $this->passWord = $passWord;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getSurName()
    {
        return $this->surName;
    }
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }
 
    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getPayment()
    {
        if($this->payment == '1'){
            return '済';
        }else{
            return '未';
        }
    }
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

}