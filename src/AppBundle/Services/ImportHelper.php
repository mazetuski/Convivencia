<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 27/04/17
 * Time: 19:30
 */

namespace AppBundle\Services;


use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Usuarios;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\UsuariosRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class ImportHelper
{

    function __construct(EntityManager $em, UserPasswordEncoder $securityEncoder)
    {
        $this->em = $em;
        $this->securityEncoder = $securityEncoder;
    }

    /**
     * Función que importa los alumnos a través de un fichero CSV
     * @param File $file
     */
    function importarAlumnos(File $file){
        /** @var CursosRepository $repositoryCurso */
        $repositoryCurso = $this->em->getRepository('AppBundle:Cursos');
        /** @var UsuariosRepository $repositoryUsuarios */
        $repositoryUsuarios = $this->em->getRepository('AppBundle:Usuarios');
        if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {
            while(($row = fgetcsv($handle)) !== FALSE) {
                if(count($row)>1) {
                    $alumno = new Alumno();
                    $alumno->setApellido1($row[0]);
                    $alumno->setApellido2($row[1]);
                    $alumno->setNombre($row[2]);

                    /** @var Cursos $curso */
                    $curso = $repositoryCurso->findOneByCurso($row[3]);
                    if ($curso != null) $alumno->setIdCurso($curso);
                    $alumno->setTelefono($row[4]);
                    $alumno->setEmail($row[5]);
                    $alumno->setDireccion($row[8]);
                    $alumno->setCodigoPostal($row[9]);
                    $alumno->setPuntos(0);
                    $alumno->setFoto('');
                    $user = new Usuarios();
                    $userNombre = substr($alumno->getNombre(), 0, 2) . substr($alumno->getApellido1(), 0, 2) . substr($alumno->getApellido2(), 0, 2);
                    $userNombre = strtr($userNombre, 'ÁÀÂÄÃÅÇÉÈÊËÍÏÎÌÑÓÒÔÖÕÚÙÛÜÝ', 'AAAAAACEEEEEIIIINOOOOOUUUUY');
                    $userNombre = strtr($userNombre, 'áàâäãåçéèêëíìîïñóòôöõúùûüýÿ', 'aaaaaaceeeeiiiinooooouuuuyy');
                    $user->setUsuario(mb_strtolower($userNombre));
                    $password = $this->securityEncoder
                        ->encodePassword($user, 'usuario');
                    $user->setPassword($password);
                    $user->setRoles(['ROLE_USER']);

                    if($repositoryUsuarios->findOneByUsuario($user->getUsuario()) == null) {
                        $this->em->persist($user);
                        $this->em->flush();
                        $alumno->setIdUsuario($user);
                        $this->em->persist($alumno);
                        $this->em->flush();
                    }
                }
            }
        }
    }

}