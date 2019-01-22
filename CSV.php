<?php
/**
 * TO DO
 * - check if header is set?
 * - local save option
 */

class CSV {

    //variablen
    public $filename;
    public $header;
    public $body;
    public $content;
    public $path;
    public $separator;

    //Konstruktor
    function __construct(string $name) {
        $this->filename=$name;
        $this->separator=";";
    }

    //set functions
    public function setHeader(array $array){
        $this->header=implode($this->separator,$array)."\r\n";;
    }

    public function setBody(array $array){
        $this->body.=implode($this->separator,$array)."\r\n";;
    }

    public function setPath(string $path){
        $this->path=$path;
    }

    public function setSeparator(string $sign){
        $this->separator=$sign;
    }

    //get functions
    public function getName():string{
        return $this->filename;
    }

    public function getHeader():string{
        return $this->header;
    }

    public function getBody():string{
        return $this->body;
    }

    public function save(string $type="", string $path=""){

        $this->content=str_replace(";",$this->separator,$this->header.$this->body);

        switch($type){
            case "local":

                if($this->path){
                    $name=$this->path.$this->filename;
                }else{
                    $name=$this->filename;
                }

                $file = fopen($name, "w");
                fwrite($file, $this->content);
                fclose($file);

                break;
            default:

                    header('Content-Type: application/csv');
                    header('Content-Disposition: attachment; filename="'.$this->filename.'";');

                    echo $this->content;

                    exit();
                break;

        }
    }
}
?>