<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->config['site_title'];?></title>
    
    <!-- css style -->
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/template.css" />
</head>
<body>

    <div class="menu">
        <?php $this->loadMenu(); ?>
    </div>

    <div class="topo">
        
    </div>


    <div class="container">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </div>

    <div class="rodape">

    </div>

    
    
</body>
</html>