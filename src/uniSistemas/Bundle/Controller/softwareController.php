<?php

namespace uniSistemas\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniSistemas\Bundle\Entity\software;
use uniSistemas\Bundle\Form\softwareType;

/**
 * software controller.
 *
 */
class softwareController extends Controller
{

    /**
     * Lists all software entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:software')->findAll();

        return $this->render('uniSistemasBundle:software:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new software entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new software();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('software_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSistemasBundle:software:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a software entity.
     *
     * @param software $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(software $entity)
    {
        $form = $this->createForm(new softwareType(), $entity, array(
            'action' => $this->generateUrl('software_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new software entity.
     *
     */
    public function newAction()
    {
        $entity = new software();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSistemasBundle:software:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a software entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:software')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find software entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:software:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing software entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:software')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find software entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:software:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a software entity.
    *
    * @param software $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(software $entity)
    {
        $form = $this->createForm(new softwareType(), $entity, array(
            'action' => $this->generateUrl('software_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing software entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:software')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find software entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('software_edit', array('id' => $id)));
        }

        return $this->render('uniSistemasBundle:software:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a software entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSistemasBundle:software')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find software entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('software'));
    }

    /**
     * Creates a form to delete a software entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('software_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function buscarMaquinaAction()
    {
        
        return $this->render('uniSistemasBundle:software:buscarMaquina.html.twig');
    }

     public function responderMaquinaAction(Request $res)
    {
     //     $titulo= $_POST['titulo']; // Coger variables usando php clásico.
         $tit= $res->request->get('titulo'); // Modo symfony2
         
      $em = $this->getDoctrine()->getEntityManager();
      
      $dql = "select j from uniSistemasBundle:software j where j.nombre like :titulo";
      $respuesta = $em->createQuery($dql);
      $respuesta->setParameter('titulo',"%" . $tit . "%");
      $software = $respuesta->getResult();
     
      
        return $this->render('uniSistemasBundle:software:responderMaquina.html.twig', array(
            'tabla' => $software,
            'tit'=> $tit,
            
        ));
    }
}
