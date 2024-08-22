<?php

// Book class to represent a book in the library
class Book {
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book (decreases available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book (increases available copies)
    public function returnBook() {
        $this->availableCopies++;
    }
}

// Member class to represent a library member
class Member {
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method for the member to borrow a book
    public function borrowBook($book) {
        // $book->borrowBook();
        if ($book->borrowBook()) {
            echo $this->name . " borrowed \"" . $book->getTitle() . "\".\n";
        } else {
            echo "Sorry, \"" . $book->getTitle() . "\" is not available.\n";
        }
    }

    // Method for the member to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned \"" . $book->getTitle() . "\".\n";
    }
}

// Example usage of the Library System

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member 1 borrows Book 1
$member1->borrowBook($book1);

// Member 2 borrows Book 2
$member2->borrowBook($book2);

// Display available copies after borrowing
echo "Available copies of \"" . $book1->getTitle() . "\": " . $book1->getAvailableCopies() . "\n";
echo "Available copies of \"" . $book2->getTitle() . "\": " . $book2->getAvailableCopies() . "\n";

// Member 1 returns Book 1
// $member1->returnBook($book1);

// Display available copies after returning
// echo "Available copies of \"" . $book1->getTitle() . "\": " . $book1->getAvailableCopies() . "\n";
?>
