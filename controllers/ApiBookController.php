<?php

namespace App\Controllers;

use function Sodium\add;

class ApiBookController extends \App\Core\ApiController
{
    public function getBooksByPageNumber($pageNumber)
    {
        $bookModel = new \App\Models\BookModel($this->getDatabaseConnection());
        $titleModel = new \App\Models\TitleModel($this->getDatabaseConnection());
        $imageModel = new \App\Models\ImageModel($this->getDatabaseConnection());

        $booksApi = [];
        $books = ($bookModel) ->getCertainRows(10,($pageNumber-1)*10);

        foreach($books as $book) {
            $price = $book->price;
            $title  = ($titleModel)->getById($book->title_id);
            $titleName = ($title)->title_name;
            $images = ($imageModel)->getByFieldName('book_id',$book->book_id);
            $image = $images[0];

            $bookApi = [
                "price" => $price,
                "image" => $image,
                "title" => $titleName,
                "id" => $book->book_id
            ];

            $booksApi[] = array($bookApi);

        }

        $this->set('books',$booksApi);
    }
}