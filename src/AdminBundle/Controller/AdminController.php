<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Roles;
use AdminBundle\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("admin/")
 */
class AdminController extends Controller
{
    /**
     * @Route("", name="_admin")
     * @Template()
     */
    public function indexAction()
    {
        return array('session' => $this->get('session'));
    }

    /**
     * @Route("roles/list")
     */
    public function listRoleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $roles = $this->get('scs.util')->toArray($em->getRepository('AdminBundle:Roles')->findAll());

        if (count($roles) === 0) {
            $roles = array(
                array('name' => 'admin', 'role' => 'ROLE_ADMIN')
            );
            foreach ($roles as $value) {
                $role = new Roles();
                $role->setName($value['name']);
                $role->setRole($value['role']);
                $em->persist($role);
            }
            $em->flush();
            $roles = $this->get('scs.util')->toArray($em->getRepository('AdminBundle:Roles')->findAll());
        }
        return new Response('({"total":"'.count($roles).'","data":'.json_encode($roles).'})');
    }

    /**
     * @Route("users/list")
     */
    public function listUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $this->get('scs.util')->toArray($em->getRepository('AdminBundle:Users')->findAll());

        return new Response('({"total":"'.count($users).'","data":'.json_encode($users).'})');
    }

//    /**
//     * @Route("users/add")
//     */
//    public function loadNewUsersAction(Request $rq)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $users = new Users();
//        $users->setUsername("admin");
//        $users->setPassword(12345678);
//        $users->setEmail("admin@email.cu");
//        $users->setIsActive(\TRUE);
//
//        $em->persist($users);
//
//        return new Response($em->flush());
//    }

    /**
     * @Route("qqq")
     */
    public function d()
    {
//        $finder = new Finder();
//
//        $finder->name('*UsersStore*');
//        $finder->files()->in(realpath($this->get('crud_ext_js.util')->getPath() .'\\web\\js\\app\\store\\'));
//
//        foreach ($finder as $file) {
//            return new Response($file->getRelativePathname());
//        }

//        $textField = $this->get('crud_ext_js.util')->getTableInformation('users');

//        $em = $this->getDoctrine()->getManager();

//        $data = array();
//
//        foreach($this->getDoctrine()->getManager()->getRepository('AdminBundle:Users')->findAll() as $user ) {
//            $data[] = array(
//                'id' => $user->getId(),
//                'username' => $user->getUsername(),
//                'email' => $user->getEmail(),
//                'is_active' => $user->getIsActive()
//            );
//        }
//        if (substr('personalidad_id', -3) === '_id') {
//            return new JsonResponse(substr('personalidad_id', -3));
//        } else {
//            return new JsonResponse(substr('personalidad_id', -3));
//        }
        $entity = $this->get('crud_ext_js.util')->finder('Rolefs', '/src/');

        $explode = explode('\\', $entity);

        if (count($explode) > 1) {
            $bundle = $explode[0];
        } else {
            $bundle = false;
        }

        $bundle = $bundle ? $bundle : 'FALSE';

        return new Response($bundle);
    }
}