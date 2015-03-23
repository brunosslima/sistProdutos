<?php

namespace ProdutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Produto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="produto", type="string", length=45)
     */
    private $produto;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_venda", type="integer")
     */
    private $qtVenda;


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
     * Set produto
     *
     * @param string $produto
     * @return Produto
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get produto
     *
     * @return string 
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Set qtVenda
     *
     * @param integer $qtVenda
     * @return Produto
     */
    public function setQtVenda($qtVenda)
    {
        $this->qtVenda = $qtVenda;

        return $this;
    }

    /**
     * Get qtVenda
     *
     * @return integer 
     */
    public function getQtVenda()
    {
        return $this->qtVenda;
    }
}
