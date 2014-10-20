<?php $this->beginContent('application.modules_core.notification.views.notificationLayoutMail', array('notification' => $notification, 'showSpace' => true)); ?>

<?php echo Yii::t('CommentModule.views_notifications_newCommented', "%displayName% commented your %contentTitle%.", array(
    '%displayName%' => '<strong>' . $creator->displayName . '</strong>',
    '%contentTitle%' => $targetObject->getContentTitle()
));
?>

    <br/>

    <em>"<?php echo NotificationModule::formatOutput($sourceObject->message); ?>"</em>

<?php $this->endContent(); ?>