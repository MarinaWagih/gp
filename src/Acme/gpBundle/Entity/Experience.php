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
namespace Acme\gpBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert ;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="experience")
 * 
 */
class Experience {
        /**
         * @ORM\Column(type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */    
            protected $id;
        /**
        * @Assert\NotBlank()
        * @ORM\Column(type="text",nullable=false)
        */
           protected $body;
        /**
        * @ORM\Column(type="string",length=100)
        */
           protected $picture;
        /**
         * @ORM\Column(type="string", columnDefinition="ENUM('0', '1')")
         */
           protected $isHidden;
         /**
         * @ORM\Column(type="string", columnDefinition="ENUM('0', '1')")
         */
           protected $isDeleted;
           /** 
            * ORM\@Column(type="datetime",nullable=false) 
            */
           protected $createDate;
           
           public function __construct()
            {
                $this->createDate = new \DateTime();
                $this->isDeleted  ="0";
                $this->isHidden   ="0";
            }
            function getId() {
                return $this->id;
            }

            function getBody() {
                return $this->body;
            }

            function getPicture() {
                return $this->picture;
            }

            function getIsHidden() {
                return $this->isHidden;
            }

            function getIsDeleted() {
                return $this->isDeleted;
            }

            function getCreateDate() {
                return $this->createDate;
            }

            function setId($id) {
                $this->id = $id;
            }

            function setBody($body) {
                $this->body = $body;
            }

            function setPicture($picture) {
                $this->picture = $picture;
            }

            function setIsHidden($isHidden) {
                $this->isHidden = $isHidden;
            }

            function setIsDeleted($isDeleted) {
                $this->isDeleted = $isDeleted;
            }

            function setCreateDate($createDate) {
                $this->createDate = $createDate;
            }
   
}
