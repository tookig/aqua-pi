<html>
    <head>
        <meta http-equiv="Refresh" content="30">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        <title>Aqua-Pi 1.0</title>
        
        <style>
            body {
                background-color:   #2159e8;
                font-family:        verdana, arial;
            }
            
            h1 {
                color:              white;
                margin:             10px;
            }
            
            #aqua-pi-main {
                width:          600px;
                height:         800px;
                margin-left:    auto;
                margin-right:   auto;
                margin-top:     20px;
                margin-bottom:  20px;
                background-color:   #2184e8;
                border-radius:  10px;
                text-align:     center;
            }
            
            #webcam-image {
                width:          550px;
                height:         400px;
                margin-left:    auto;
                margin-right:   auto;
                margin-top:     10px;
                margin-bottom:  10px;
            }
        </style>
        
    </head>
    
    <body>
        <div id="aqua-pi-main">
            <h1>Aqua-cam</h1>
            <img id="webcam-image" src="<?php echo site_url("assets/images/aquacam.jpg"); ?>"/>
            <?php if ($temperature): ?>
            <div class="temperature-box">Temperature: <span id="temperature"><?php echo $temperature->value; ?>&degC</span> at <?php echo $temperature->timestamp; ?></div>
            <?php endif; ?>
        </div>
    </body>
</html>