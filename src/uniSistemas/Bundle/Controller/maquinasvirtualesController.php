<?php

namespace uniSistemas\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniSistemas\Bundle\Entity\maquinasvirtuales;
use uniSistemas\Bundle\Form\maquinasvirtualesType;

/**
 * maquinasvirtuales controller.
 *
 */
class maquinasvirtualesController extends Controller
{

    /**
     * Lists all maquinasvirtuales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:maquinasvirtuales')->findAll();

        return $this->render('uniSistemasBundle:maquinasvirtuales:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new maquinasvirtuales entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new maquinasvirtuales();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('maquinasvirtuales_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSistemasBundle:maquinasvirtuales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a maquinasvirtuales entity.
     *
     * @param maquinasvirtuales $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(maquinasvirtuales $entity)
    {
        $form = $this->createForm(new maquinasvirtualesType(), $entity, array(
            'action' => $this->generateUrl('maquinasvirtuales_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new maquinasvirtuales entity.
     *
     */
    public function newAction()
    {
        $entity = new maquinasvirtuales();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSistemasBundle:maquinasvirtuales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a maquinasvirtuales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maquinasvirtuales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maquinasvirtuales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:maquinasvirtuales:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing maquinasvirtuales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maquinasvirtuales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maquinasvirtuales entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:maquinasvirtuales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a maquinasvirtuales entity.
    *
    * @param maquinasvirtuales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(maquinasvirtuales $entity)
    {
        $form = $this->createForm(new maquinasvirtualesType(), $entity, array(
            'action' => $this->generateUrl('maquinasvirtuales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing maquinasvirtuales entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maquinasvirtuales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maquinasvirtuales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('maquinasvirtuales_edit', array('id' => $id)));
        }

        return $this->render('uniSistemasBundle:maquinasvirtuales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a maquinasvirtuales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSistemasBundle:maquinasvirtuales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find maquinasvirtuales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('maquinasvirtuales'));
    }

    /**
     * Creates a form to delete a maquinasvirtuales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('maquinasvirtuales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
