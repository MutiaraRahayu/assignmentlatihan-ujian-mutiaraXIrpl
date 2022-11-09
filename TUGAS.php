<h2 style="text-align: center;"> Mutiara Rahayu </h2>
<h2 style="text-align: center;"> XI RPL </h2>
<hr>
<?php
class Document {
    public $authors;
    public $date;
    public $email;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
    public function getEmail(){
        return $this->email;
    }

}
$daud = new Document();
$daud-> setAuthors("Authors : Mutiara Rahayu");
$daud-> setDate("Tanggal Lahir : 12-11-2005");
$daud-> setEmail("Email : mutiarrhyu@gmail.com");

echo $daud->getAuthors();
echo "<br>";
echo $daud->getDate();
echo "<br>";
echo $daud->getEmail();
echo "<br>";
echo "<hr>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($authors){
        $this->authors = $authors;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthors(){
        return $this->authors;
    }
}
$arby = new Book();
$arby-> setTitle("Judul Buku :  senaja dan pagi");

echo $arby->getTitle();
echo "<br>";
echo $arby->getAuthors();



class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    

}

$dary = new Email();
$dary-> setSubject("Sinopsis : Menceritakan tentang perjalanan cinta mereka yang di awali dengan pertemuan dua pribadi yang berbeda namun memiliki impian yang sama. ");

echo $dary->getSubject();
echo "<br>";
echo $dary->getAuthors();
echo "<br>";
echo "<hr>";