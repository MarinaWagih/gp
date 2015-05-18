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
            
}
