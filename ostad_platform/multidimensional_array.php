<?php


$users = array(
    "john" => array(
        "age"=> 27,
        "email" => "parvazreza00@gmail.com",
    ),
    "jane" => array(
        "age" => 30,
        "email" => "reza00@gmail.com",
    )
);

foreach($users as $username => $details){
    echo "Username : ". $username ."\n";
    foreach($details as $key => $value){
        echo $key.":".$value."\n";
    }
    echo "\n";
}

echo "\n";
echo "Employee data:\n";

$employee = [
    "alice" => [
        "position" => "Manager",
        "salary" => 60000,
        "department" => "Sales",
    ],
    "bob" => [
        "position" => "Developer",
        "salary" => 55000,
        "department" => "IT", 
    ],
    "charlie" => [
        "position" => "Designer",
        "salary" => 50000,
        "department" => "Marketing",
    ]
];

foreach($employee as $emple => $details){
    echo "Employee : ". $emple. "\n";
    foreach($details as $key => $value){
        echo $key. " : ". $value."\n";
    }
    echo "\n";
}

echo "\n";
echo "books history\n";

$books = array(
    "1984" => array(
        "author" => "George Orwell",
        "year" => 1949,
        "genre" => "Dystopian",
    ),
    "To Kill a Mockingbird" => [
        "author" => "Harper Lee",
        "year" => 1960,
        "genre" => "Fiction",
    ],
    "The Great Gatsby" => array(
        "author" => "F. Scott Fitzgerald",
        "year" => 1925,
        "genre" => "Classic",
    ),
);

foreach($books as $book => $details){
    echo "Book Name : ". $book. "\n";
    foreach($details as $key => $value){
        echo $key." : ". $value. "\n";
    }
    echo "\n";
}
