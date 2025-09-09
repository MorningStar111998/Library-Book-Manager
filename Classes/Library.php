<?php
require_once(__DIR__ .'/Book.php');
require_once(__DIR__ . '/../includes/mysql.php');


class Library {
    private array $books = [];

    
    public function addBook(Book $book): void
    {

        $this->books[] = $book;
    }


    public function getBooks():array{
        $querry = "SELECT * FROM books";
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
        $path = __DIR__ . '/../data/' . $fileName;
        $data = [];


        foreach($this->books as $book){
            $data[] = [
                "title" => $book->getTitle(),
                'author'      => $book->getAuthor(),
                'year'        => $book->getYear(),
                'genre'       => $book->getGenre(),
                'description' => $book->getDescription(),
            ];
        }

        try{

            
            file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));

        } catch(Exception $e) {
            echo '❌ Could not save file. Error: ' . $e->getMessage();

            
        }


    }

    

    public function loadFromJson (string $fileName) : void  {
        $path = __DIR__ . "/../data/" .$fileName;

        if (!file_exists($path)) return ;

        $json = file_get_contents($path);
        $data = json_decode($json, true);
        
        foreach ($data as $bookData){
            $book = new Book (
                $bookData['title'],
                $bookData['author'],
                $bookData['year'],
                $bookData['genre'],
                $bookData['description']
            );

            $this->books[] = $book;
        }

    }
}

$library = new Library;
$library->loadFromJson("books.json");

// $book = new Book("12 Rules for Life", "Jordan Peterson",2018, "Self-Help","An antidote to Chaos");
// $library->addBook($book);


// $book2 = new Book("Ant Man", "Stan Lee", 2015, "Adventure", "A superhero who shrinks.");
// $library->addBook($book2);
// $library->saveToJson("books.json");


?>