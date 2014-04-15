<?php

namespace Innovit\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
	private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_insc", type="date")
     */
    private $dateInsc;

    

    /**
     * Get id
     *
     * @return integer 
     */
	 
    public function getId()
    {
        return $this->id;
    }
	 /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateInsc
     *
     * @param \DateTime $dateInsc
     * @return Utilisateur
     */
    public function setDateInsc($dateInsc)
    {
        $this->dateInsc = $dateInsc;

        return $this;
    }

    /**
     * Get dateInsc
     *
     * @return \DateTime 
     */
    public function getDateInsc()
    {
        return $this->dateInsc;
    }
	public function __construct()
    {
        parent::__construct();
        $this->nom="";
		$this->prenom="";
		$this->dateInsc=new \DateTime ;
    }
}
