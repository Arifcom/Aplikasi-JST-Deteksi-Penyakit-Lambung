<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/13/2017
 * Time: 9:17 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css'); ?>"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--This Page CSS-->
    <?php echo $css; ?>
</head>

<body>
<nav>
    <div class="nav-wrapper">
        <a href="<?php  echo base_url('dashboard'); ?>" class="brand-logo center">Kelompok 3</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a class="modal-trigger" href="#import">Import Data Latih</a></li>
            <li><a href="<?php echo base_url('data-latih/export'); ?>">Export Data Latih</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Data Latih<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Data Uji<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<?php $this->load->view($content, $query); ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
<script>
    $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>

<!--This Page JS-->
<?php echo $js; ?>

<!--Dropdown-->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php  echo base_url('detail/latihtg'); ?>">70:30</a></li>
    <li><a href="<?php  echo base_url('detail/latihdd'); ?>"">80:20</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php  echo base_url('detail/ujitg'); ?>">70:30</a></li>
    <li><a href="<?php  echo base_url('detail/ujidd'); ?>">80:20</a></li>
</ul>

<!--Modal-->
<div id="import" class="modal modal-fixed-footer">
    <form method='post' action='<?php echo base_url('data-latih/import'); ?>' enctype='multipart/form-data'>
        <div class="modal-content">
            <h4>Import Data Latih</h4>
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input name="file" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            </button>
            <button class="modal-action modal-close btn waves-effect waves-light">Cancel
            </button>
        </div>
    </form>
</div>

<div id="settings" class="modal bottom-sheet">
    <div class="modal-content">

    </div>
    <div class="modal-footer">

    </div>
</div>

</body>
</html>
