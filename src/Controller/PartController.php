<?php
/**
 * Created by PhpStorm.
 * User: janhb
 * Date: 24.02.2019
 * Time: 13:00
 */

namespace App\Controller;


use App\Entity\Part;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PartController extends AbstractController
{

    /**
     * @Route("/part/{id}/info")
     * @Route("/part/{id}")
     */
    function show(Part $part)
    {
        return $this->render('show_part_info.html.twig',
            [
                "part" => $part
            ]
            );
    }

}