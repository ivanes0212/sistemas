<?php

namespace uniSistemas\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniSistemas\Bundle\Entity\sistemas;
use uniSistemas\Bundle\Form\sistemasType;

/**
 * sistemas controller.
 *
 */
class sistemasController extends Controller
{

    /**
     * Lists all sistemas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:sistemas')->findAll();

        return $this->render('uniSistemasBundle:sistemas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new sistemas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new sistemas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sistemas_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSistemasBundle:sistemas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a sistemas entity.
     *
     * @param sistemas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(sistemas $entity)
    {
        $form = $this->createForm(new sistemasType(), $entity, array(
            'action' => $this->generateUrl('sistemas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new sistemas entity.
     *
     */
    public function newAction()
    {
        $entity = new sistemas();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSistemasBundle:sistemas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sistemas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:sistemas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sistemas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:sistemas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sistemas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:sistemas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sistemas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:sistemas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a sistemas entity.
    *
    * @param sistemas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(sistemas $entity)
    {
        $form = $this->createForm(new sistemasType(), $entity, array(
            'action' => $this->generateUrl('sistemas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing sistemas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:sistemas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sistemas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sistemas_edit', array('id' => $id)));
        }

        return $this->render('uniSistemasBundle:sistemas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a sistemas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSistemasBundle:sistemas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find sistemas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sistemas'));
    }

    /**
     * Creates a form to delete a sistemas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sistemas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function crearAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:sistemas')->findAll();

        return $this->render('uniSistemasBundle:sistemas:crear.html.twig', array(
            'entities' => $entities,
        ));
    }
}
