<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title><?php echo $titulo == ''? 'Tallentus':$titulo; ?></title>

        <link  rel="stylesheet" type="text/css" href="<?php echo $frontend ?>assets/css/general.css"  title=""  media="screen" />
        <!-- Tallentus -->
        <?php if(isset($web_css)){ foreach($web_css as $css){?>
            <link  rel="<?php echo isset($css['rel']) ? $css['rel'] : 'stylesheet'?>" type="text/css" href="<?php echo $frontend.$css['href']?>"  title="<?php echo isset($css['title']) ? $css['title']:''?>"  media="<?php echo isset($css['media']) ? $css['media'] : 'screen'?>" /> 
        <?php echo "\n"; }} ?>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300|Roboto:100,400,300,500,700,900|Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo $frontend ?>assets/js/ie-emulation-modes-warning.js"></script>
        <script src="<?php echo $frontend ?>assets/js/jquery-1.11.1.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>