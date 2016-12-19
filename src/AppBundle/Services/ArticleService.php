<?php
namespace AppBundle\Services;
use Doctrine\ORM\EntityManager;

class ArticleService
{
    /**
     * @var EntityManager
     */
    private $doctrine;
    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }




}