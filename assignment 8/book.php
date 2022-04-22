<?php
class Book
{
    private $code_book;
    private $name;
    private $qty;

    //setter private untuk $code_book dan $qty
    private function setOrderBook($code_book, $qty){
        $this->code_book = $code_book;
        $this->qty = $qty;
    }

    //setter yang dijalankan dari constructor
    public function __construct($code_book, $qty){
        $this->setOrderBook($code_book, $qty);
    }

    //getter untuk $code_book dan $qty
    public function getOrderBook(){
        //$code_book dalam format "BB00", dimana 2 karakter awal berupa alphabet dalam huruf besar, kemudian diikuti oleh 2 karakter angka 0-9. 
        //Jika format yang diinput tidak sesuai, tampilkan pesan error
        if(preg_match("/^[A-Z]{2}[0-9]{2}$/", $this->code_book)){
            //$qty hanya bisa menerima angka integer positif. Jika yang diinput selain angka integer positif akan menampilkan pesan error
            if($this->qty<0 || $this->qty>="A" && $this->qty<="Z" || $this->qty>="a" && $this->qty<="z" ){
                return "ERROR";
            }
            return "Code Book : $this->code_book <br> Qty :  $this->qty <br> <br> Book Ordered...";
        }else{
            return "ERROR";
        }
    }
}
$book_one = new Book("AA11",11);
echo $book_one->getOrderBook();