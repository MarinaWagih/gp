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
        * @ORM\Column(type="text")
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
            * ORM\@Column(type="datetime") 
            */
           protected $createDate;
           
           public function __construct()
            {
                $this->createDate = new \DateTime();
                $this->isDeleted  ="0";
                $this->isHidden   ="0";
            }
}
