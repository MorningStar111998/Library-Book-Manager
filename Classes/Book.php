<?php

class Book
{

    private static array $allowedGenres = [
        'Fiction',
        'Non-Fiction',
        'Science Fiction',
        'Fantasy',
        'Mystery',
        'Thriller',
        'Romance',
        'Historical',
        'Biography',
        'Self-Help',
        'Philosophy',
        'Poetry',
        'Horror',
        'Adventure',
        'Children',
        'Young Adult',
        'Graphic Novel',
        'Classics'
    ];
    private static int $bookCount = 0;
    private ?int $id = null;
    private string $title;
    private string $author;
    private int $year;
    private string $genre;
    private string $description;

    public function __construct(
        string $title,
        string $author,
        int $year,
        string $genre,
        string $description
    ) {
        $this->title = $title;
        $this->author = $author;
        if ($year < 0 || $year > (int)date("Y")){
            throw new InvalidArgumentException("Invalid year : $year");
        }
        $this->year = $year;
        if (!in_array($genre, self::$allowedGenres)) {
            throw new InvalidArgumentException("Invalid genre: $genre");
        }
        $this->genre = $genre;
        $this->description = $description;

        self::$bookCount++;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function __toString(): string{
        return "{$this->title} by {$this->author} in {$this->year}";
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getBookCount(): int
    {
        return self::$bookCount;
    }

    public static function getAllowedGenres(): array
    {
        return self::$allowedGenres;
    }

    public function setDescription(string $description) : void{
        $this->description = $description;
    }
}


