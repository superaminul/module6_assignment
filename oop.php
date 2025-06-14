<?php

class Book {

// Add properties as Private
    private $title;
    private $availableCopies;

 public function __construct(string $title,int $availableCopies) {
    $this->title = $title;
    $this->availableCopies = $availableCopies;
     }

//  Add getTitle method
public function getTitle(){
    return $this->title;
}
     
 // Add getAvailableCopies method
public function getCopies(){
    return $this->availableCopies;
}
 // Add borrowBook method
public function borrowBook(){
    if($this->availableCopies > 0){
        $this->availableCopies = $this->availableCopies - 1;
        return true;
    }else{
        return false;
    }
}
 


 //Add returnBook method
public function returnBook(){
    $this->availableCopies = $this->availableCopies + 1;
}

}

class Member{

  private $name;


 public function __construct($name) {

      $this->name = $name;

     }


 //Add getName method
public function getName(){
    return $this->name;
}
 // Add borrowBook methodx
    public function borrowBook(Book $book) {
        return $book->borrowBook();
    }



 //Add returnBook method

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
