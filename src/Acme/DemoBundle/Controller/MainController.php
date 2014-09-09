<?php

/**
 * Description of MainController
 *
 * @author ruben
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController {
    
    public function contactAction()
    {
        return new Response('<h1>Contactez nous!</h1>');
    }

}
