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
            'author_id'         => new Field(new NumberValidator(), false),
            'publisher_id'      => new Field(new NumberValidator(), false),
            'title_id'          => new Field(new NumberValidator(), false),
            'user_id'           => new Field(new NumberValidator(), false),
            'state_id'          => new Field(new NumberValidator(), false),
            'status_id'         => new Field(new NumberValidator(), true),
            'price'             => new Field((new NumberValidator())->setDecimal()
                                                                    ->setUnsigned()
                                                                    ->setIntegerLength(10)
                                                                    ->setMaxDecimalDigits(2)),
            'publishing_year'   => new Field(new NumberValidator(), false),
            'pages_id'          => new Field(new NumberValidator(), false)

        ];
    }

    public function getAllByBookId(int $bookId): array
    {
        return $this->getAllByFieldName('book_id', $bookId);
    }
}