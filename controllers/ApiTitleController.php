<?php
namespace App\Controllers;

class ApiTitleController extends \App\Core\ApiController {
    public function getTitleByCategoryId($categoryId) {
        $titleModel = new \App\Models\TitleModel($this->getDatabaseConnection());
        $titles = ($titleModel)->getAllByCategoryId($categoryId);

        if (!$titles) {
            $this->set('error', -20001);
            $this->set('message', 'In this category does not exist titles.');
            return;
        }

        $this->set('titles', $titles);
    }
}
