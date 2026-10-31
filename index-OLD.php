<?php 

  $title = "Enkonu home";
  $description = "indie artist from another planet";
  $keywords = "enkonu indie music artist";
  include('head.php');
?>

<?php $thisPage="home";
  $thissubPage=""
?>

</head>

<body class="home">

<?php require("header.php"); ?>

<div class="main">

    <div class="release">
        <h2 class="release__announcement">The first single, Pray, is now available to purchase or stream</h2>
        <img class="release__cover" src="/images/Pray-cover.png" alt="Pray cover" />

        <div class="release__outlets">

            <a href="https://open.spotify.com/album/23zKyZuP7hOyMeSUAozbMn?si=LYuNA3woR7mRamqstc6keA">
                <img src="/images/spotify-bw-logo.svg" alt="spotify logo" />
            </a>

            <a href="https://music.apple.com/us/album/pray/1820842421?i=1820842542">
                <img src="/images/apple-music-black-on-white.svg" alt="apple music logo" />
            </a>

            <a href="https://music.amazon.com/albums/B0FD9KH2G4">
                <img src="/images/amazon-music-bw.svg" alt="amazon music logo" />
            </a>

        </div>
    </div>
</div>

<?php require("footer.php"); ?>
</div>