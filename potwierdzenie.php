<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JM-Project - Twoje WWW</title>
        <meta name="description" content="www strony internetowe strony z pasją">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="jquery.scrollTo.min.js"></script>
        <script>
		
                jQuery(function($)
                {
                    //zresetuj scrolla
                    $.scrollTo(0);
                    
                    $('#link1').click(function() { $.scrollTo($('#about-us'), 500); });
                    $('#link2').click(function() { $.scrollTo($('#contact'), 500); });
                    
                    $('.scrollup').click(function() { $.scrollTo($('body'), 1000); });
                }
                );
                
                //pokaż podczas przewijania
                $(window).scroll(function()
                {
                    if($(this).scrollTop()>300) $('.scrollup').fadeIn();
                    else $('.scrollup').fadeOut();		
                }
                );
            
            
            </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <div class="logo">
                <div class="Logoimage"></div>
                <img src="img/logo.png" class="loogo"></div>
                

            </div>
            <div class="menu">
                <ul>
                    <li><a id="link1" href="index.html">Kim jesteśmy</a></li>
                    <li><a id="link2" href="index.html">Kontakt</a></li>
                    <li><a id="link3" href="index.htm">Portfolio</a></li>
                </ul>
            </div>
        </header>
        <main>
       <h2 class="message">Pomyślnie wysłano wiadomość.<h2>
           <a href="index.html">Powrót do strony głównej</a>
        </main>
        
        <script src="" async defer></script>
    </body>
</html>