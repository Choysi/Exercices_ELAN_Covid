<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha256-l85OmPOjvil/SOvVt3HnSSjzF1TUMyT9eV0c2BzEGzU=" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">


    <title>Login</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm bg-warning navbar-dark">
        <!-- Brand/logo -->

        <a class="navbar-brand" href="login.php"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/7/7a/20th_Century_Fox_Logo.svg/1200px-20th_Century_Fox_Logo.svg.png" alt="logo" style="width:200px;"></a>
        <section class="link">
            <!-- Links -->
            <center>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">S'enregistrer</a>
                    </li>
                </ul>
        </section>
        </center>
    </nav>
    <!-- /navbar -->
<!-- laser-->

<!-- /laser -->
    <!-- son -->

    <center>
        <audio id="nyan" src="20th-century-fox.mp3" preload="metadata" type="audio/mpeg" autoplay>
            Your browser does not support the audio element.
        </audio>
        <a class="btn" id="nyan-btn">Clique !</a>
    </center>
    <script>
        var nyan = document.getElementById('nyan');
        var nyanBtn = document.getElementById('nyan-btn');

        function playPause(song) {
            if (song.paused && song.currentTime >= 0 && !song.ended) {
                song.play();
            } else {
                song.pause();
            }
        }

        function reset(btn, song) {
            if (btn.classList.contains('playing')) {
                btn.classList.toggle('playing');
            }
            song.pause();
            song.currentTime = 0;
        }

        function progress(btn, song) {
            setTimeout(function() {
                var end = song.duration;
                var current = song.currentTime;
                var percent = current / (end / 100);
                //check if song is at the end
                if (current == end) {
                    reset(btn, song);
                }
                //set inset box shadow
                btn.style.boxShadow = "inset " + btn.offsetWidth * (percent / 100) + "px 0px 0px 0px rgba(0,0,0,0.125)"
                //call function again
                progress(btn, song);
            }, 1000);
        }

        nyanBtn.addEventListener('click', function() {
            nyanBtn.classList.toggle('playing');
            playPause(nyan);
            progress(nyanBtn, nyan);
        });
    </script>

    <!-- /son -->

    <!-- login -->
    <center>
        <form class="login">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre mail">
                <small id="emailHelp" class="form-text text-muted">Ne divulguez jamais vos identifiants</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="caput draconis">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-warning">Valider</button>
        </form>
    </center>
    <!-- /login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>