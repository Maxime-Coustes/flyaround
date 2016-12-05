<?php

namespace CoavBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CoavBundle\Entity\PlaneModel;
use CoavBundle\Form\PlaneModelType;

/**
 * PlaneModel controller.
 *
 */
class PlaneModelController extends Controller
{
    /**
     * Lists all PlaneModel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planeModels = $em->getRepository('CoavBundle:PlaneModel')->findAll();

        return $this->render('CoavBundle:planemodel:index.html.twig', array(
            'planeModels' => $planeModels,
        ));
    }

    /**
     * Creates a new PlaneModel entity.
     *
     */
    public function newAction(Request $request)
    {
        $planeModel = new PlaneModel();
        $form = $this->createForm('CoavBundle\Form\PlaneModelType', $planeModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planeModel);
            $em->flush();

            return $this->redirectToRoute('planemodel_show', array('id' => $planeModel->getId()));
        }

        return $this->render('CoavBundle:planemodel:new.html.twig', array(
            'planeModel' => $planeModel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PlaneModel entity.
     *
     */
    public function showAction(PlaneModel $planeModel)
    {
        $deleteForm = $this->createDeleteForm($planeModel);

        return $this->render('CoavBundle:planemodel:show.html.twig', array(
            'planeModel' => $planeModel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PlaneModel entity.
     *
     */
    public function editAction(Request $request, PlaneModel $planeModel)
    {
        $deleteForm = $this->createDeleteForm($planeModel);
        $editForm = $this->createForm('CoavBundle\Form\PlaneModelType', $planeModel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planeModel);
            $em->flush();

            return $this->redirectToRoute('planemodel_edit', array('id' => $planeModel->getId()));
        }

        return $this->render('CoavBundle:planemodel:edit.html.twig', array(
            'planeModel' => $planeModel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PlaneModel entity.
     *
     */
    public function deleteAction(Request $request, PlaneModel $planeModel)
    {
        $form = $this->createDeleteForm($planeModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planeModel);
            $em->flush();
        }

        return $this->redirectToRoute('planemodel_index');
    }

    /**
     * Creates a form to delete a PlaneModel entity.
     *
     * @param PlaneModel $planeModel The PlaneModel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PlaneModel $planeModel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('planemodel_delete', array('id' => $planeModel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
