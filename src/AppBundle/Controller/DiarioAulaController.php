<?php

namespace AppBundle\Controller;

use AppBundle\Services\CrearSancionHelper;
use AppBundle\Services\DiarioHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DiarioAulaController extends Controller
{
    /**
     * @Route("/diarioAula", name="show_diario")
     * @Method({"GET", "POST"})
     */
    public function showDiario(Request $request){

        if($request->get('likeFecha') == null) $fecha = new \DateTime();
        else $fecha = \DateTime::createFromFormat('d/m/Y', $request->get('likeFecha'));
        /** @var CrearSancionHelper $crearSancionHelper */
        $crearSancionHelper = $this->get('app.crearSancionHelper');
        if($request->get('likeHora') == null) $horasElegidas = [$crearSancionHelper->getHoraFromDate($fecha)];
        else $horasElegidas = $request->get('likeHora');

        /** @var DiarioHelper $diarioHelper */
        $diarioHelper = $this->get('app.diarioHelper');
        $horas = CrearSancionHelper::HORAS_CLASE;
        $diarioData = $diarioHelper->getDiarioData($fecha, $horasElegidas, $horas);

        return $this->render('convivencia/admin/diarioAula.html.twig', array(
            'diarioData' => $diarioData,
        ));
    }
}
