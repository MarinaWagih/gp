<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Experience
 * @author marina
 * DB Table
 */
<<<<<<< HEAD
namespace Acme\gpBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert ;
use Doctrine\ORM\Mapping as ORM;
=======

namespace Acme\gpBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

>>>>>>> 015c78993bd5bca6d44f9ce6a1104d324d941a4b
/**
 * @ORM\Entity
 * @ORM\Table(name="tag")
 * 
 */
class Tag {
<<<<<<< HEAD
        /**
         * @ORM\Column(type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */    
            protected $id;
        /**
        * @Assert\NotBlank()
        * @ORM\Column(type="string",length=45,nullable=false)
        */
           protected $name;
        /**
        * @ORM\Column(type="text")
        */
           protected $description;
        /**
         * @ORM\Column(type="string", length=100)
         */
           protected $picture;
           /** 
            * ORM\@Column(type="datetime",nullable=false) 
            */
           protected $createDate;
           
           public function __construct()
            {
                $this->createDate = new \DateTime();
            }
            
   
=======

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string",length=45,nullable=false)
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string",length=100)
     */
    protected $picture;

    /**
     * ORM\@Column(type="datetime",nullable=false) 
     */
    protected $createDate;

    public function __construct() {
        $this->createDate = new \DateTime();
    }
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getPicture() {
        return $this->picture;
    }

    function getCreateDate() {
        return $this->createDate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }



>>>>>>> 015c78993bd5bca6d44f9ce6a1104d324d941a4b
}
