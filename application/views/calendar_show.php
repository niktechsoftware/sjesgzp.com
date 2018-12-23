<html>
    <head>
        <title>CodeIgniter Calendar</title>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
            <?php
            // Generate calendar
            echo $this->calendar->generate($year, $month);
            ?>
        <!-- Div Fugo is Advertisement div -->
        <div id="fugo">
          <a href="http://www.formget.com/app/"><img src="<?php echo base_url(); ?>images/formGetadv-1.jpg" /></a>  
        </div>
    </body>
</html>

