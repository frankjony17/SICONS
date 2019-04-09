<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class UsersRepository extends EntityRepository
{
    /**
     * Verificar si existe un usuario con los datos ($username, $email) además del
     * usuario reprecentado por el id.
     * 
     * @param type $id
     * @param type $username
     * @param type $email
     * 
     * @return array Resultado de la consulta.
     */
    public function countUsers($id, $username, $email)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('u.username')
            ->from('AdminBundle:Users', 'u')
            ->where('u.id <> :id and (u.username = :username or u.email = :email)')
            ->setParameter('id', $id)
            ->setParameter('username', $username)
            ->setParameter('email', $email)->getQuery();
        
        try{
            return $query->getResult();
        }
        catch (NoResultException $ex) {
            return 1;
        }        
    }
}
