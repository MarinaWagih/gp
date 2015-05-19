<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DemoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment {

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
     * @ORM\Column(type="string", columnDefinition="ENUM('0', '1')")
     */
    protected $isDeleted;

    /**
     * ORM\@Column(type="datetime")
     */
    protected $createDate;

    public function __construct() {
        $this->createDate = new \DateTime();
        $this->isDeleted = "0";
    }

    function getIsDeleted() {
        return $this->isDeleted;
    }

    function getCreateDate() {
        return $this->createDate;
    }

    function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    function setCreateDate($createDate) {

        $this->createDate = $createDate;
    }

    function getId() {
        return $this->id;
    }

    function getBody() {
        return $this->body;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setBody($body) {
        $this->body = $body;
    }

}
