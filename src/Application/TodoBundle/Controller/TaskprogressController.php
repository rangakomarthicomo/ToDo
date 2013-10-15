<?php

namespace Application\TodoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\TodoBundle\Entity\Taskprogress;
use Application\TodoBundle\Form\TaskprogressType;

/**
 * Taskprogress controller.
 *
 */
class TaskprogressController extends Controller
{

    /**
     * Lists all Taskprogress entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ApplicationTodoBundle:Taskprogress')->findAll();

        return $this->render('ApplicationTodoBundle:Taskprogress:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Taskprogress entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Taskprogress();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('taskprogress_show', array('id' => $entity->getId())));
        }

        return $this->render('ApplicationTodoBundle:Taskprogress:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Taskprogress entity.
    *
    * @param Taskprogress $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Taskprogress $entity)
    {
        $form = $this->createForm(new TaskprogressType(), $entity, array(
            'action' => $this->generateUrl('taskprogress_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create','attr'=> array('class'=>'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Taskprogress entity.
     *
     */
    public function newAction()
    {
        $entity = new Taskprogress();
        $form   = $this->createCreateForm($entity);

        return $this->render('ApplicationTodoBundle:Taskprogress:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Taskprogress entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationTodoBundle:Taskprogress')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Taskprogress entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ApplicationTodoBundle:Taskprogress:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Taskprogress entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationTodoBundle:Taskprogress')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Taskprogress entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ApplicationTodoBundle:Taskprogress:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Taskprogress entity.
    *
    * @param Taskprogress $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Taskprogress $entity)
    {
        $form = $this->createForm(new TaskprogressType(), $entity, array(
            'action' => $this->generateUrl('taskprogress_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Taskprogress entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationTodoBundle:Taskprogress')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Taskprogress entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('taskprogress_edit', array('id' => $id)));
        }

        return $this->render('ApplicationTodoBundle:Taskprogress:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Taskprogress entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ApplicationTodoBundle:Taskprogress')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Taskprogress entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('taskprogress'));
    }

    /**
     * Creates a form to delete a Taskprogress entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('taskprogress_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
