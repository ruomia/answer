<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"C:\www\fastadmin2\1\answer\public/../application/admin\view\user\user\add.html";i:1550647755;s:69:"C:\www\fastadmin2\1\answer\application\admin\view\layout\default.html";i:1550647755;s:66:"C:\www\fastadmin2\1\answer\application\admin\view\common\meta.html";i:1550647755;s:68:"C:\www\fastadmin2\1\answer\application\admin\view\common\script.html";i:1550647755;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label for="c-group_id" class="control-label col-xs-12 col-sm-2"><?php echo __('Group'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <?php echo $groupList; ?>       
        </div>
    </div>
    <div class="form-group">
        <label for="c-username" class="control-label col-xs-12 col-sm-2"><?php echo __('Username'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-username" data-rule="required" class="form-control" name="row[username]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-nickname" class="control-label col-xs-12 col-sm-2"><?php echo __('Nickname'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-nickname" data-rule="required" class="form-control" name="row[nickname]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-password" class="control-label col-xs-12 col-sm-2"><?php echo __('Password'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-password" data-rule="" class="form-control" name="row[password]" type="text" value="" placeholder="<?php echo __('Leave password blank if dont want to change'); ?>" autocomplete="new-password" />
        </div>
    </div>
    <div class="form-group">
        <label for="c-email" class="control-label col-xs-12 col-sm-2"><?php echo __('Email'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-email" data-rule="" class="form-control" name="row[email]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-mobile" class="control-label col-xs-12 col-sm-2"><?php echo __('Mobile'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-mobile" data-rule="" class="form-control" name="row[mobile]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-avatar" class="control-label col-xs-12 col-sm-2"><?php echo __('Avatar'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-avatar" data-rule="" class="form-control" size="50" name="row[avatar]" type="text" value="">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-avatar" class="btn btn-danger plupload" data-input-id="c-avatar" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-avatar"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-avatar" class="btn btn-primary fachoose" data-input-id="c-avatar" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-avatar"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-avatar"></ul>
        </div>
    </div>
    <div class="form-group">
        <label for="c-level" class="control-label col-xs-12 col-sm-2"><?php echo __('Level'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-level" data-rule="required" class="form-control" name="row[level]" type="number" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-gender" class="control-label col-xs-12 col-sm-2"><?php echo __('Gender'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[gender]', ['1'=>__('Male'), '0'=>__('Female')] ); ?>

        </div>
    </div>
    <div class="form-group">
        <label for="c-birthday" class="control-label col-xs-12 col-sm-2"><?php echo __('Birthday'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-birthday" data-rule="" class="form-control datetimepicker" data-date-format="YYYY-MM-DD" data-use-current="true" name="row[birthday]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-bio" class="control-label col-xs-12 col-sm-2"><?php echo __('Bio'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-bio" data-rule="" class="form-control" name="row[bio]" type="text" value="">
        </div>
    </div>
        
    <div class="form-group">
        <label for="c-jointime" class="control-label col-xs-12 col-sm-2"><?php echo __('Jointime'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-jointime" data-rule="required" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[jointime]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="content" class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                <?php echo build_radios('row[status]', ['normal'=>__('Normal'), 'hidden'=>__('Hidden')] ); ?>

        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>