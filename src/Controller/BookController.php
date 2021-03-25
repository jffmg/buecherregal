<?php

namespace App\Controller;

use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book-list", name="book_list")
     */
    public function list()
    {
$bookRepo = $this->getDoctrine()->getRepository(Book::class);
$books = $bookRepo->findBy([],["title"=> "ASC"],24);

        return $this->render('book/list.html.twig', [
            "books" => $books
        ]);
    }

    /**
     * @Route("/detail/{id}", name="book_detail")
     */
    public function detail($id)
    {
$bookRepo = $this->getDoctrine()->getRepository(Book::class);
$book = $bookRepo->findOneBy(['id' => $id]);

if (empty($book)) {
    throw $this->createNotFoundException("Ce livre n'est pas sur l'étagère.");
}
        return $this->render('book/detail.html.twig', [
            "book" => $book
        ]);
    }

    /**
     * @Route("/add", name="book_add")
     */
    public function add(EntityManagerInterface $em)
    {
        // creating a new entity of Book
        $book = new Book();

        $book->setDateCreated(new \DateTime());

        $book->setTitle("La Source au bout du monde");
        $book->setAuthorFamilyName("Morris");
        $book->setAuthorGivenName("William");
        $book->setPublisher("Aux forges de Vulcain");
        $book->setDatePublished(11/2016);

        $em->persist($book);
        $em->flush();



        return $this->render('book/add.html.twig');
    }
}
