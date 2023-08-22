<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="film.css">
</head>
<body>

    <div class="conatainer-fluid">
        <h1 style="text-align:center; margin-top:100px;">The Game</h1>
        </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="filmsforsite/game.jpg" alt="affiche film game" class="img-fluid" style="max-width:100%">
                        <img src="filmsforsite/game.jpg" alt="affiche film game" class="img-fluid" style="max-width:100%">
                        <img src="filmsforsite/game.jpg" alt="affiche film game" class="img-fluid" style="max-width:100%">
                        <img src="filmsforsite/game.jpg" alt="affiche film game" class="img-fluid" style="max-width:100%">
                    </div>
                    <div class="col-md-4" style="text-align:justify;">
                    <p>Nicholas Van Orton, homme d'affaires avisé, reçoit le jour de son anniversaire un étrange cadeau que lui offre son frère Conrad. Il s'agit d'un jeu. Nicholas découvre peu à peu que les enjeux en sont très élevés, bien qu'il ne soit certain ni des règles, ni même de l'objectif réel.<br>
                     Il prend peu à peu conscience qu'il est manipulé jusque dans sa propre maison par des conspirateurs inconnus qui semblent vouloir faire voler sa vie en eclats.</p> 
                    <br> <br>
                    <strong>Acteurs principaux :   Michael Douglas, Sean Penn, Deborah Kara Unger</strong>
                    </div>        
                    <div  class="col-md-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QEw2L7U0jRA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
            </div>
            </div>
            
            
            
            <div class="glide" style="margin-top:450px;">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide" style="text-align:center;"><a href="6emesens.php"><img src="filmsforsite/6emesens.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="Babel.php"><img src="filmsforsite/Babel.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="the-others.php"><img src="filmsforsite/the others.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="game.php"><img src="filmsforsite/game.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="fightclub.php"><img src="filmsforsite/fight-club.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="cast-way.php"><img src="filmsforsite/cast-way.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="terminal.php"><img src="filmsforsite/terminal.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                        <li class="glide__slide" style="text-align:center;"><a href="Shelter.php"><img src="filmsforsite/Shelter.jpg" width="200px;" height= "300px;" style="border-radius: 10px"></a></li>
                    </ul>
                </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

     </div>
    
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    const myVar = {

        type: 'carousel',
        perView: 4,
        breakpoints: {
            1100: {
            perView: 3
            },
            1000: {
            perView: 3
            },
            900: {
            perView: 3
            },
            800: {
            perView: 2
            },
            600: {
            perView: 1
            }

        }
    }
  new Glide('.glide',myVar).mount()
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>