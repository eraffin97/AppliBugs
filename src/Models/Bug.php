<?php

namespace BugApp\Models;

class Bug {
    
    public $id;
    public $title;
    public $description;
    public $createdAt;
    public $closed;
    public $url;
    public $ip;
    
    function __construct() {
        // $this->createdAt = new \DateTime();
        // $this->closed = false;
    }  
   

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of closed
     */ 
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set the value of closed
     *
     * @return  self
     */ 
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;

    }

    public function getUrl() {
        return $this->url;
    }

    public function setIp($ip) {
        $this->ip = $ip;
        return $this;
    }

    public function getIp() {
        return $this->ip;
    }

}