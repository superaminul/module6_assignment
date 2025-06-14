<?php

class Book {
    private $title;
    private $availableCopies;

 public function __construct(string $title,int $availableCopies) {
    $this->title = $title;
    $this->availableCopies = $availableCopies;
     }

public function getTitle(){
    return $this->title;
}
     
public function getCopies(){
    return $this->availableCopies;
}
public function borrowBook(){
    if($this->availableCopies > 0){
        $this->availableCopies = $this->availableCopies - 1;
        return true;
    }else{
        return false;
    }
}
 


public function returnBook(){
    $this->availableCopies = $this->availableCopies + 1;
}

}

class Member{

  private $name;


 public function __construct($name) {

      $this->name = $name;

     }

public function getName(){
    return $this->name;
}
    public function borrowBook(Book $book) {
        return $book->borrowBook();
    }

     public function returnBook(Book $book) {
        $book->returnBook();
    }
}

 $book1 = new Book("The Great Gatsby",5);
 $book2 = new Book("To Kill a Mockingbird",3);
 $member1 = new Member("John Doe");
 $member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Available Copies:\n";
echo $book1->getTitle() . ": " . $book1->getCopies() . " copies\n";
echo $book2->getTitle() . ": " . $book2->getCopies() . " copies\n";

?>
