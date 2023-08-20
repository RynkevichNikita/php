<?php
interface Filter {
    public function filter();
}

class DataChecker implements Filter {
    public $data;
    public function __construct($data) 
    {
        $this->data = $data;
    }
    public function filter()
    {
        $newData = array_filter($this->data, fn($pieceOfData) => !is_int($pieceOfData)); //or '!is_numeric'
        print_r($this->data); 
        echo '<br>';
        print_r($newData);
        $newData = implode(', ', $newData);
        $stream = fopen("filesForExtends/data.txt", "w");
        fwrite($stream, $newData);
        fclose($stream);
    }
    public function getData()
    {
        $stream = fopen("filesForExtends/data.txt", "r");
        echo fread($stream, 4096);
        fclose($stream);
    }
}

$array = [3, '2', 'qwe', true, 'фыв', 5];

$filter = new DataChecker($array);
$filter->filter();
echo '<br>';
$filter->getData();