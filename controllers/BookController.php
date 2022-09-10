<?php
namespace App\Controllers;

use App\Core\Controller;

class BookController extends Controller {
    public function show(int $id) {
        $bookModel = new \App\Models\BookModel($this->getDatabaseConnection());
        $titleModel = new \App\Models\TitleModel($this->getDatabaseConnection());
        $imageModel = new \App\Models\ImageModel($this->getDatabaseConnection());
        $publisherModel = new \App\Models\PublisherModel($this->getDatabaseConnection());
        $authorModel = new \App\Models\AuthorModel($this->getDatabaseConnection());
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $stateModel = new \App\Models\StateModel($this->getDatabaseConnection());
        $statusModel = new \App\Models\StatusModel($this->getDatabaseConnection());

        $book = ($bookModel) ->getById($id);

        $price = $book->price;
        $title  = ($titleModel)->getById($book->title_id);
        $titleName = ($title)->title_name;
        $images = ($imageModel)->getAllByFieldName('book_id',$book->book_id);

        $imageURLS = [];
        foreach ($images as $image) {
            $imageURLS[] = $image->image_url;
        }
        $author = ($authorModel)->getById($book->author_id);
        $authorName = ($author)->first_name .' '. ($author)->last_name;

        $publisher = ($publisherModel)->getById($book->publisher_id);
        $publisherName = ($publisher)->name;

        $category = ($categoryModel)->getById($title->category_id);
        $categoryName = ($category)->category_name;

        $state = ($stateModel)->getById($book->state_id);
        $stateName = ($state)->state_name;

        $status = ($statusModel)->getById($book->status_id);
        $statusName = ($status)->status_name;

        $bookData = [
            "price"         => $price,
            "images"        => $imageURLS,
            "title"         => $titleName,
            "id"            => $book->book_id,
            "author"        => $authorName,
            "category"      => $categoryName,
            "publisher"     => $publisherName,
            "state"         => $stateName,
            "status"        => $statusName
        ];

        //var_dump($bookData);
        $this->set('book',$bookData);

    }
}