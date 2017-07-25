<?php
namespace Weissheiten\Coaching\NeosPackageWithReactJS\Controller;

/*
 * This file is part of the Weissheiten.Coaching.NeosPackageWithReactJS package.
 */

use Neos\Flow\Annotations as Flow;

class DashboardController extends \Neos\Flow\Mvc\Controller\ActionController
{
    /**
     * @var array
     */
    protected $viewFormatToObjectNameMap = array(
        'html' => 'Neos\FluidAdaptor\View\TemplateView',
        'json' => 'Neos\Flow\Mvc\View\JsonView'
    );

    /**
     * A list of IANA media types which are supported by this controller
     *
     * @var array
     */
    protected $supportedMediaTypes = array('application/json', 'text/html');

    /**
     * Initializes the controller before invoking an action method.
     *
     * Override this method to solve tasks which all actions have in
     * common.
     *
     * @return void
     * @api
     */
    protected function initializeAction()
    {
    }

    /**
     * Render the Dashboard View
     * @return void
     */
    public function indexAction()
    {
        $this->view->assignMultiple(array(
            'value' => 'HelloWorld'
        ));
    }
}
