<?php

namespace Manhattan\Bundle\ConsoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * @Route("/console")
 */
class ConsoleController extends Controller
{

    /**
     * @Route("/", name="console_index")
     * @Method({"GET"})
     * @Secure(roles="ROLE_ADMIN")
     */
    public function indexAction()
    {
        return $this->render('ManhattanConsoleBundle:Console:index.html.twig');
        
        return array(
            'last_username' => 'fsd'
        );
    }
}
