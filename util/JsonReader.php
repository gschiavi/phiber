<?php

/**
 * Created by PhpStorm.
 * User: marci
 * Date: 14/02/2017
 * Time: 20:23
 */
class JsonReader
{
    private $arquivo;

    /**
     * JsonReader constructor.
     * @param $arquivo
     */
    public function __construct($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function read(){
            $info = file_get_contents($this->arquivo);
            $lendo = json_decode($info);
            return $lendo;
        }
}
//$json = new JsonReader("../phiber_config.json");
//echo $json->read()->phiber->link . " ";
//echo $json->read()->phiber->usuario . " ";
//echo $json->read()->phiber->senha . " ";