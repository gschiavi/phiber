<?php
require_once '../bin/Phiber.php';

/**
 * Class Usuario
 *
 */
class Usuario
{

    /**
     * @_type=int
     * @_size=11
     * @_primaryKey=true
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=true
     */
    private $id;

    /**
     * @_type=varchar
     * @_size=158
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $nome;


    /**
     * @_type=varchar
     * @_size=170
     * @_primaryKey=false
     * @_notNull=true
     * @_default=olamundo
     * @_autoIncrement=false
     */
    private $email;

    /**
     * @_type=varchar
     * @_size=15
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $cpf;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}

$usuario = new Usuario();
$usuario->setNome("Lucas");
$usuario->setEmail("123@123.com");
$usuario->setCpf("123");
$pPersist = Phiber::openPersist();
$pPersist::create($usuario);
