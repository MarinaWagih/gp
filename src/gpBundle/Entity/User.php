<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * 
 */
class User {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=45 , nullable=false)
     */
    protected $fristName;

    /**
     * @ORM\Column(type="string",length=45 , nullable=false)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string",length=100 , nullable=false)
     */
    protected $email;

    /**
     * @ORM\Column(type="string",length=32 , nullable=false)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('male', 'female')" , nullable=false)
     */
    protected $gender;

    /**
     * @ORM\Column(type="string",length=100)
     */
    protected $profilePicture;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('0', '1')" )
     */
    protected $isHidden;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('0', '1')")
     */
    protected $isActive;

    /**
     * @ORM\Column(type="text")
     */
    protected $faceBookToken;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('0', '1')" )
     */
    protected $isAdmin;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $createDate;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $logoutDate;
    public function __constructor()
    {
        $this->isHidden='1';
        $this->isActive='1';
        $this->isAdmin='0';
        $this->createDate=new \DateTime();
    }
            
    function getId() {
        return $this->id;
    }

    function getFristName() {
        return $this->fristName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getGender() {
        return $this->gender;
    }

    function getProfilePicture() {
        return $this->profilePicture;
    }

    function getIsHidden() {
        return $this->isHidden;
    }

    function getIsActive() {
        return $this->isActive;
    }

    function getFaceBookToken() {
        return $this->faceBookToken;
    }

    function getIsAdmin() {
        return $this->isAdmin;
    }

    function getCreateDate() {
        return $this->createDate;
    }

    function getLogoutDate() {
        return $this->logoutDate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFristName($fristName) {
        $this->fristName = $fristName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setProfilePicture($profilePicture) {
        $this->profilePicture = $profilePicture;
    }

    function setIsHidden($isHidden) {
        $this->isHidden = $isHidden;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

    function setFaceBookToken($faceBookToken) {
        $this->faceBookToken = $faceBookToken;
    }

    function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;
    }

    function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }

    function setLogoutDate($logoutDate) {
        $this->logoutDate = $logoutDate;
    }


}
