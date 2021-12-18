<?php

namespace App;

class SearchCondition
{
    private $examineeId;
    private $userName;
    private $email;
    private $firstName;
    private $surName;
    private $paymentNotYet;
    private $paymentDone;
    private $autoSearch;

    public function __construct (
        $examineeId, $userName, $email, $firstName, $surName, $paymentDone, $paymentNotYet, $autoSearch
    )
    {
        $this->examineeId = $examineeId;
        $this->userName = $userName;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->paymentDone = $paymentDone;
        $this->paymentNotYet = $paymentNotYet;
        $this->autoSearch = $autoSearch;
    }

    public function getExamineeId()
    {
        return $this->examineeId;
    }
    public function setExamineeId($examineeId)
    {
        $this->id = $examineeId;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
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

    public function getPaymentDone()
    {
        return $this->paymentDone;
    }
    public function setPaymentDone($paymentDone)
    {
        $this->paymentDone = $paymentDone;
    }

    public function getPaymentNotYet()
    {
        return $this->paymentNotYet;
    }
    public function setPaymentNotYet($paymentNotYet)
    {
        $this->paymentNotYet = $paymentNotYet;
    }

    public function setAutoSearch($autoSearch)
    {
        $this->autoSearch = $autoSearch;
    }
    public function getAutoSearch()
    {
        return $this->autoSearch;
    }

}