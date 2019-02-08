<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>CicloVittal - Blog</title>

        <link rel="stylesheet" href="/res/site/css/ciclovittal.css ">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <link href="/sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
</head>

<body style="background-color: #f3f5f8">

        <div class="container" id="blogSite">

                <div class="row text-center">
                        <h2>Blog</h2>
                        <hr>
                </div>

                <div class="float-right"><a href="/blogSiteArtigos">Voltar à lista de artigos</a></div>

                <div class="content">
                        
                        <div id="posts">

                                <img id="image-preview" src="<?php echo htmlspecialchars( $blog["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid">
                                
                                <h3><?php echo htmlspecialchars( $blog["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>

                                <textarea readonly rows="100" id="readBlog"><?php echo htmlspecialchars( $blog["body"], ENT_COMPAT, 'UTF-8', FALSE ); ?>


Criado em: <?php echo formatDate($blog["created"]); ?>

</textarea>

<!-- <button id="up"></button>
<button id="down"></button> -->

                                <!-- <p class="textoBlog"><?php echo htmlspecialchars( $blog["body"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

                                <p>Criado em: <?php echo formatDate($blog["created"]); ?></p> -->


                        </div>

                </div>

                <div class="scroolTop">

                        <div class="btnTop">

                                <!-- <a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a> -->
                                 <button onclick="scrollToY(0, 10000, 'easeInOutSine');" id="page-up"><i class="fa fa-chevron-up"></i></button>

                        </div>
                </div>

        </div>

</body>

        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="/res/site/js/efeitos.js"></script>
        <script type="text/javascript">

        window.onscroll = function() {scrollFunction()};

        window.requestAnimFrame = (function(){
          return  window.requestAnimationFrame       ||
                  window.webkitRequestAnimationFrame ||
                  window.mozRequestAnimationFrame    ||
                  function( callback ){
                    window.setTimeout(callback, 1000 / 60);
                  };
        })();

        function scrollToY(scrollTargetY, speed, easing) {
            // scrollTargetY: the target scrollY property of the window
            // speed: time in pixels per second
            // easing: easing equation to use

            var scrollY = window.scrollY || document.documentElement.scrollTop,
                scrollTargetY = scrollTargetY || 0,
                speed = speed || 2000,
                easing = easing || 'easeOutSine',
                currentTime = 0;

            // min time .1, max time .8 seconds
            var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

            // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
            var easingEquations = {
                    easeOutSine: function (pos) {
                        return Math.sin(pos * (Math.PI / 2));
                    },
                    easeInOutSine: function (pos) {
                        return (-0.5 * (Math.cos(Math.PI * pos) - 1));
                    },
                    easeInOutQuint: function (pos) {
                        if ((pos /= 0.5) < 1) {
                            return 0.5 * Math.pow(pos, 5);
                        }
                        return 0.5 * (Math.pow((pos - 2), 5) + 2);
                    }
                };

            // add animation loop
            function tick() {
                currentTime += 1 / 60;

                var p = currentTime / time;
                var t = easingEquations[easing](p);

                if (p < 1) {
                    requestAnimFrame(tick);

                    window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
                } else {
                    window.scrollTo(0, scrollTargetY);
                }
            }

            // call it once to get started
            tick();
        }

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("page-up").style.display = "block";
            } else {
                document.getElementById("page-up").style.display = "none";
            }
        }

        </script>



</html>