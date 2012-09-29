<ul class="yii-debug-toolbar-tabs">
    <li class="active" type="yii-debug-toolbar-mongo-summary"><a href="javascript:;//">
        <?php echo Yii::t('yii-debug-toolbar','Summary')?></a></li>
    <li type="yii-debug-toolbar-mongo-callstack"><a href="javascript:;//">
        <?php echo Yii::t('yii-debug-toolbar','Callstack')?></a></li>
    <li type="yii-debug-toolbar-mongo-servers"><a href="javascript:;//">
        <?php echo Yii::t('yii-debug-toolbar','Servers')?></a></li>
</ul>

<?php $this->render('mongo/servers', array(
    'connections'=>$connections
)) ?>

<?php $this->render('mongo/summary', array(
    'summary'=>$summary
)) ?>

<?php $this->render('mongo/callstack', array(
    'callstack'=>$callstack
)) ?>
