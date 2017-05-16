<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 16/05/17
 * Time: 17:38
 */

namespace AppBundle\Services;


use AppBundle\Entity\Partes;
use AppBundle\Repository\EstadosParteRepository;
use AppBundle\Repository\PartesRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class PartesHelper
{
    function __construct(EntityManager $em)
    {
        $this->em = $em;
        /** @var PartesRepository repositoryPartes */
        $this->repositoryPartes = $this->em->getRepository('AppBundle:Partes');
        /** @var EstadosParteRepository repositoryEstadoPartes */
        $this->repositoryEstadoPartes = $this->em->getRepository('AppBundle:EstadosParte');
    }

    /**
     * Función que devuelve un parte dependiendo del request
     * @param Request $request
     * @return Partes $parte
     */
    public function getParteFromRequest(Request $request){

        if ($request->query->has('idParte')) {
            $parte = $this->repositoryPartes->getParteById($request->get('idParte'));
        } else {
            $parte = new Partes();
            $estadoIniciado = $this->repositoryEstadoPartes->findOneByEstado(self::ESTADO_INICIADO);
            $parte->setIdEstado($estadoIniciado);
        }
        return $parte;
    }

    /**
     * Función que devuelve true si puede recuperar 1 punto, false en caso contrario
     * @param Partes $parte
     * @return bool
     */
    public function parteRecupera(Partes $parte){
        if ($parte->getRecupera() == 0)
            return true;
        return false;
    }

    /**
     * Función que recupera 1 punto si el usuario a pulsado el boton recupera punto
     * @param Request $request
     * @return bool
     */
    public function recuperarPuntos(Request $request){
        if ($request->get('recuperaPunto') != null && $request->get('parteHidden') != null) {
            /** @var Partes $parte */
            $parte = $this->repositoryPartes->getParteById($request->get('parteHidden'));
            $parte->setRecupera(1);
            $this->em->persist($parte);
            $this->em->flush();
            return true;
        }
        return false;
    }

    /**
     * Función que cambia el estado del parte en función del request
     * @param Request $request
     * @param Partes $parte
     * @return bool
     */
    public function changeEstado(Request $request, Partes $parte){
        if ($request->get('estadoParte') != null) {
            $allEstados = $this->repositoryEstadoPartes->findAll();
            foreach ($allEstados as $key => $valueEstado) {
                if ($valueEstado->getId() == $parte->getIdEstado()->getId())
                    if ($key < count($allEstados) - 1) {
                        $nextEstado = $this->repositoryEstadoPartes->findOneById($valueEstado->getId() + 1);
                        $parte->setIdEstado($nextEstado);
                        $this->em->persist($parte);
                        $this->em->flush();
                        return true;
                    }
            }
        }
        return false;
    }
}