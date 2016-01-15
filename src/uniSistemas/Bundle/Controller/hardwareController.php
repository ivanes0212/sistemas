<?php

namespace uniSistemas\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniSistemas\Bundle\Entity\hardware;
use uniSistemas\Bundle\Form\hardwareType;

/**
 * hardware controller.
 *
 */
class hardwareController extends Controller
{

    /**
     * Lists all hardware entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:hardware')->findAll();

        return $this->render('uniSistemasBundle:hardware:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new hardware entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new hardware();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hardware_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSistemasBundle:hardware:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a hardware entity.
     *
     * @param hardware $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(hardware $entity)
    {
        $form = $this->createForm(new hardwareType(), $entity, array(
            'action' => $this->generateUrl('hardware_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new hardware entity.
     *
     */
    public function newAction()
    {
        $entity = new hardware();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSistemasBundle:hardware:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hardware entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:hardware')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find hardware entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:hardware:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hardware entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:hardware')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find hardware entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:hardware:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a hardware entity.
    *
    * @param hardware $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(hardware $entity)
    {
        $form = $this->createForm(new hardwareType(), $entity, array(
            'action' => $this->generateUrl('hardware_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing hardware entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:hardware')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find hardware entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hardware_edit', array('id' => $id)));
        }

        return $this->render('uniSistemasBundle:hardware:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a hardware entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSistemasBundle:hardware')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find hardware entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hardware'));
    }

    /**
     * Creates a form to delete a hardware entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hardware_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function buscarHardwareAction()
    {
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:hardware')->findAll();

        return $this->render('uniSistemasBundle:hardware:buscarHardware.html.twig', array(
            'cats' => $entities,
        ));
    }

   public function responderHardwareAction(Request $request)
    {
      //    $nom= $_POST['categoria']; // Coger variables usando php clásico.
         $nom= $request->request->get('nombre'); // Modo symfony2
         
         $em = $this->getDoctrine()->getManager();
        if  ($nom=="Todas")
                $entities = $em->getRepository('uniSistemasBundle:hardware')->findAll();
        else 
            $entities = $em->getRepository('uniSistemasBundle:hardware')->findByNombre($nom);

        return $this->render('uniSistemasBundle:hardware:responderHardware.html.twig', array(
            'entities' => $entities,
            'nomCat'=> $nom,
        ));
    }
}
