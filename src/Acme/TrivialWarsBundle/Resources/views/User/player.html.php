<?php $view->extend('::base.html.twig') ?>

<?php $view['slots']->set('title', 'AcmeTrivialWarsBundle:User:player') ?>

<?php $view['slots']->start('body') ?>
    <h1>Welcome to the User:player page</h1>
<?php $view['slots']->stop() ?>
