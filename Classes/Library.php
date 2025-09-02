<?php
require_once(__DIR__ .'/Book.php');


class Library {
    private array $books = [];

    public function addBook(Book $book): void{
        $this->books[] = $book;
    }

    public function getBooks():array{
        return $this->books;
    }

    public function searchBook(string $wordSearched){
        $searchResults = [];
        $bookCount = count($this->books);
        $books = $this->books;

        for ($i=0 ; $i<$bookCount; $i++){
            if (stripos($books[$i]->getTitle(), $wordSearched) !== false){
                $searchResults[] = $books[$i];
            }

        }

        return $searchResults;
    }

    public function saveToJson(string $fileName){
        $data = [];

        foreach($this->books as $book){
            $data = [
                "title" => $book->getTitle(),
                'author'      => $book->getAuthor(),
                'year'        => $book->getYear(),
                'genre'       => $book->getGenre(),
                'description' => $book->getDescription(),
            ];
        }

        file_put_contents($fileName, json_encode($data, JSON_PRETTY_PRINT));


    }

    public function loadFromJson (string $fileName) : array {
        
    }




}


?>