<?php 
<html>
    <head>
            <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <style>
          .spinner {
  width: 40px;
  height: 40px;
  background-color: #333;

  position: absolute;
top: 48%;
left: 48%;
  -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
  animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
  0% { -webkit-transform: perspective(120px) }
  50% { -webkit-transform: perspective(120px) rotateY(180deg) }
  100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
}

@keyframes sk-rotateplane {
  0% { 
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg) 
  } 50% { 
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg) 
  } 100% { 
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
            </style>
        </head>
        <body>
             <!--CSS Spinner-->
<div class="spinner-wrapper">
        <div class="spinner"></div>
        </div>
        <script>
                $(document).ready(function() 
                {
                //Preloader
                $(window).on("load", function() 
                {
                preloaderFadeOutTime = 500;
                function hidePreloader()
                 {
                var preloader = $('.lds-css');
                preloader.fadeOut(preloaderFadeOutTime);
                }
                hidePreloader();
                });
                });
                </script>
            </body>
            
    </html>
    ?>