<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class ImageModel extends Model
{
    protected function getFields(): array
    {
        return [
            'image_id'  =>new Field(new NumberValidator(), false),
            'book_id'   =>new Field(new NumberValidator(),false),
            'image_url' =>new Field((new StringValidator())->setMaxLength(45))
        ];
    }

    public function getAllByImageId(int $imageId): array
    {
        return $this->getAllByFieldName('image_id', $imageId);
    }
}