<?php

namespace App\Controllers;

use App\Helper\StrHelper;
use App\Models\PageModal;
use Yaa\Framework\Controller;
use Yaa\Framework\Page;

class PageController extends Controller
{
    private array $articles;

    public function all(): Page
    {
        $nameMethod = StrHelper::prepareNameMethod(__METHOD__);

        $this->meta = [
            'title' => 'Вывод всех статей',
            'description' => 'Вывод всех статей на тестовом сайте',
            'keywords' => 'статьи',
        ];

        $h1 = 'Вывод всех статей';
        $desc = 'Вывод всех статей на тестовом сайте';
        $articles = PageModal::getInstance()->getAll();

        return $this->render('pages/articles', compact('h1', 'desc', 'nameMethod', 'articles'));
    }

    public function single(array $params): Page
    {
        $nameMethod = StrHelper::prepareNameMethod(__METHOD__);

        $id = (int)$params['id'];
        $article = PageModal::getInstance()->getById($id);

        $this->meta = [
            'title' => $article['title'],
            'description' => $article['description'],
            'keywords' => mb_strtolower($article['title']),
        ];

        $h1 = $article['title'];
        $desc = $article['description'];

        return $this->render('pages/article', compact('h1', 'desc', 'nameMethod', 'article'));
    }

    public function custom(array $params): Page
    {
        $nameMethod = StrHelper::prepareNameMethod(__METHOD__);

        $start = (int)$params['start'];
        $end = (int)$params['end'];

        $articles = PageModal::getInstance()->getByRange($start, $end);

        $this->meta = [
            'title' => "Выбранные статьи от $start до $end",
            'description' => "Выбранные статьи в диапазоне от $start до $end",
            'keywords' => 'выборка статей',
        ];

        $h1 = "Выбранные статьи от $start до $end";
        $desc = "Выбранные статьи в диапазоне от $start до $end";

        return $this->render('pages/articles', compact('h1', 'desc', 'nameMethod', 'articles'));
    }
}
