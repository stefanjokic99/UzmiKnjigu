<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;

class BookModel extends Model
{
    protected function getFields(): array
    {
        return [
            'book_id'           => new Field(new NumberValidator(), false),
            'author_id'         => new Field(new NumberValidator(), true),
            'publisher_id'      => new Field(new NumberValidator(), true),
            'title_id'          => new Field(new NumberValidator(), true),
            'user_id'           => new Field(new NumberValidator(), true),
            'state_id'          => new Field(new NumberValidator(), true),
            'status_id'         => new Field(new NumberValidator(), true),
            'price'             => new Field((new NumberValidator())->setDecimal()
                                                                    ->setUnsigned()
                                                                    ->setIntegerLength(10)
                                                                    ->setMaxDecimalDigits(2)),
            'publishing_year'   => new Field(new NumberValidator(), true),
            'pages'          => new Field(new NumberValidator(), true)

        ];
    }

    public function getAllByBookId(int $bookId): array
    {
        return $this->getAllByFieldName('book_id', $bookId);
    }
}