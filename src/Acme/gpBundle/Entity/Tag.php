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
 * @ORM\Table(name="tag")
 * 
 */
class Tag {
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
            
   
}
