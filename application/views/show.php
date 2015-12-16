<html>
    <head>
        <title>Aqua-Pi 1.0</title>
        
        <style>
            body {
                background-color:   #2159e8;
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
            <img id="webcam-image" src="<?php echo site_url("assets/images/aquacam.jpg"); ?>"/>
        </div>
    </body>
</html>