<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Product;

class LuckyController extends Controller
{

    /**
     * @Route("/lucky/number/{count}")
     */
    public function numberAction($count)
    {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);

        return new Response(
            '<html><body>Lucky numbers: ' . $numbersList . '</body></html>'
        );
    }

    /**
     * @Route("/lucky/product")
     */
    public function productAction()
    {
        for ($i = 0; $i < 5; $i++) {
            $product = new Product();
            $product->setName('A Foo Bar');
            $product->setPrice(mt_rand(1, 53));
            $product->setDescription('Lorem ipsum dolor');

            $em = $this->getDoctrine()->getManager();

            $em->persist($product);
        }

        $em->flush();

        return new Response('Created product id ' . $product->getId());
    }

}
