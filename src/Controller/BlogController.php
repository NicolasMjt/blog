<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ArticleRepository $report)
    {
    	$articles=$report->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles'=>$articles
        ]);
    }
  
     /**
    *@Route("/article/{id}", name="article")
    ArticleRepository $report, int $id
    */
    public function article(Article $article){
       /* $repo = $report->getDoctrine()->getRepository(Article::class);
        $article = $repo->find($id);*/
        return $this->render('blog/article.html.twig',[
        'article' =>$article    
        ]);
    }
}
