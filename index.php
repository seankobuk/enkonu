<?php 

  $title = "Enkonu home";
  $description = "indie artist from another planet";
  $keywords = "enkonu indie music artist";
  include('head.php');
?>

<?php $thisPage="home";
  $thissubPage=""
?>

<script>
    // Wait for the DOM content to be fully loaded before running the script.
    document.addEventListener('DOMContentLoaded', () => {
        // Select the button with the class "scroll-down" from the document.
        const scrollDownButton = document.querySelector('.scroll-down');

        // Select the target element with the class "main" that the page will scroll to.
        const mainSection = document.querySelector('.main');

        // Check if both elements exist on the page to prevent errors.
        if (scrollDownButton && mainSection) {
            // Add a 'click' event listener to the button.
            scrollDownButton.addEventListener('click', (event) => {
                // Prevent the default anchor link behavior, which is to jump instantly.
                event.preventDefault();

                // Use the 'scrollIntoView' method to smoothly scroll to the main section.
                mainSection.scrollIntoView({
                    behavior: 'smooth', // This provides the animated, smooth scroll effect.
                    block: 'start'      // This aligns the top of the main section with the top of the viewport.
                });
            });
        }
    });
</script>

</head>

<body class="home">

<section class="hero">
    <div class="hero-content">
        <h1><a href="/" class="logo">
                <img src="/images/Enkonu-logo-white.svg" alt=""/><span>Enkonu</span>
            </a></h1>
        <div class="hero-tagline">The Darkness Has Many Colors</div>

        <div class="genres">
            <div class="genre">Americana</div>
            <div class="genre">Indie Rock</div>
            <div class="genre">Electro</div>
            <div class="genre">90's Rock</div>
            <div class="genre">Dark Folk</div>
            <div class="genre">Indie Pop</div>
            <div class="genre">Singer/Songwriter</div>
            <div class="genre">Alternative</div>
            <div class="genre">Experimental</div>
        </div>


        <!-- INTENSE · TRUTHFUL · INDIE MUSIC -->
    </div>
    <div class="scroll-down">Explore the Unknown <i class="ri-arrow-down-line"></i></div>
</section>

<div class="main">


    <section class="video-section">
        <div class="section-content">
            <h2 class="section-title">Video</h2>

            <div class="video-container release__video drift-left">
                <iframe
                        src="https://www.youtube.com/embed/xcFN9Aff73Q?si=VMAgU6lVdsdB2dMt"
                        title="YouTube video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>

            <div class="video-container release__video drift-right">
                <iframe
                        src="https://www.youtube.com/embed/X5TP0guHlvE?si=UAiVteybRP3W-diy"
                        title="YouTube video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>

            <div class="video-container release__video drift-left">
                <iframe
                        src="https://www.youtube.com/embed/S3XFFWnTHxw?si=kUqK7DY_3IP6y2ba"
                        title="YouTube video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>

        </div>
    </section>


    <section class="music-section">
        <div class="section-content">
            <h2 class="section-title">MUSIC</h2>

            <div class="release drift-left">
                <div class="release-title"><span class="release-type">EP:</span> Human by Nature</div>
                <div class="release-cover">
                    <img src="/images/Human_by_Nature-cover.jpg" alt="Human by Nature cover" />
                </div>

                <div class="streaming-platforms release__outlets">
                    <a href="https://open.spotify.com/album/5gTSOVqVOsLGuxKJicKS0f" class="platform">
                        <i class="ri-spotify-fill"></i>
                        <span>Spotify</span>
                    </a>
                    <a href="https://music.apple.com/us/album/human-by-nature-ep/1857876217" class="platform">
                        <i class="ri-apple-fill"></i>
                        <span>Apple Music</span>
                    </a>
                    <a href="https://music.amazon.com/albums/B0G4QSPGL8" class="platform">
                        <i class="ri-amazon-fill"></i>
                        <span>Amazon Music</span>
                    </a>
                </div>
            </div>

            <div class="release drift-right">
                <div class="release-title"><span class="release-type">Single:</span> Changeling</div>
                <div class="release-cover">
                    <img src="/images/Changeling-cover.jpg" alt="Changeling cover" />
                </div>

                <div class="streaming-platforms release__outlets">
                    <a href="https://open.spotify.com/track/44cEGpMtaxoX3c9sh2vNxZ" class="platform">
                        <i class="ri-spotify-fill"></i>
                        <span>Spotify</span>
                    </a>
                    <a href="https://music.apple.com/us/album/changeling/1851783795?i=1851783796" class="platform">
                        <i class="ri-apple-fill"></i>
                        <span>Apple Music</span>
                    </a>
                    <a href="https://music.amazon.com/albums/B0FZNWMHKR" class="platform">
                        <i class="ri-amazon-fill"></i>
                        <span>Amazon Music</span>
                    </a>
                </div>
            </div>


            <div class="release drift-left">

                <div class="release-title"><span class="release-type">Single:</span> Pray</div>

                <div class="release-cover">
                    <img src="/images/Pray-cover.webp" alt="Pray cover" />
                </div>

                <div class="streaming-platforms release__outlets">
                    <a href="https://open.spotify.com/album/23zKyZuP7hOyMeSUAozbMn?si=LYuNA3woR7mRamqstc6keA" class="platform">
                        <i class="ri-spotify-fill"></i>
                        <span>Spotify</span>
                    </a>
                    <a href="https://music.apple.com/us/album/pray/1820842421?i=1820842542" class="platform">
                        <i class="ri-apple-fill"></i>
                        <span>Apple Music</span>
                    </a>
                    <a href="https://music.amazon.com/albums/B0FD9KH2G4" class="platform">
                        <i class="ri-amazon-fill"></i>
                        <span>Amazon Music</span>
                    </a>

                </div>

            </div>


        </div>
    </section>

    <section class="bio-section">
        <div class="section-content drift-right">
        <h2 class="section-title">WELCOME</h2>
        <div class="bio-content">
            <p>Life is hard and sometimes it feels like no one sees you for who you are. This is your sanctuary, a place where you can experience music that
                knows your pain and accepts you for who you are. Together we will be stronger.</p>
            <p>Forget about genres or trends. Lets stretch beyond the silos we get put in and just experience music in all it's wonder.</p>
        </div>
        </div>
    </section>

    <!--<div class="release">
        <h2 class="release__announcement">The first single, Pray, is now available to purchase or stream</h2>


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
    </div>-->

</div>


<footer>
    <div class="footer-content">
        <div class="streaming-platforms">
            <a href="https://open.spotify.com/artist/02KBm2uquvIJNafHvX2n0L" class="platform">
                <i class="ri-spotify-fill"></i>
            </a>
            <a href="https://music.apple.com/us/artist/enkonu/1820822960" class="platform">
                <i class="ri-apple-fill"></i>
            </a>
            <a href="https://music.amazon.co.uk/artists/B0FD9L8LSX/enkonu" class="platform">
                <i class="ri-amazon-fill"></i>
            </a>
            <a href="https://www.youtube.com/@EnkonuMusic" class="platform">
                <i class="ri-youtube-fill"></i>
            </a>
            <a href="https://www.instagram.com/enkonumusic/" class="platform">
                <i class="ri-instagram-line"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=61578176699012" class="platform">
                <i class="ri-facebook-line"></i>
            </a>

        </div>
        <!--<div class="footer-links">
            <a href="https://assets-persist.lovart.ai/agent_images/b914be02-fbfc-43d6-80af-a09e1c8b0fbe.html#">Home</a>
            <a href="https://assets-persist.lovart.ai/agent_images/b914be02-fbfc-43d6-80af-a09e1c8b0fbe.html#">Music</a>
            <a href="https://assets-persist.lovart.ai/agent_images/b914be02-fbfc-43d6-80af-a09e1c8b0fbe.html#">About</a>
            <a href="https://assets-persist.lovart.ai/agent_images/b914be02-fbfc-43d6-80af-a09e1c8b0fbe.html#">Contact</a>
        </div>-->
        <div class="copyright">© 2026 Enkonu. All Rights Reserved.</div>
    </div>
    <div class="tree-silhouette"></div>
</footer>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>