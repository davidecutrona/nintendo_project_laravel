<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="./media/nintendo.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h5 class="text-white fs-1 carousel-item-fontcustom">NEXT & OLD</h5>
                <p class="text-white fs-5">Dalle console più recenti fino a quelle più vecchie, più di 40
                    anni di successi</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="./media/nes.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h5 class="text-white fs-1 carousel-item-fontcustom">NES STYLE??</h5>
                <p class="text-white fs-5">Scopri o rivivi le emozioni di una volta se sei un nostalgico</p>
            </div>
        </div>
        <a href="{{ route('nintendos') }}">
            <div class="carousel-item" data-bs-interval="4000">
                <img src="./media/personaggi.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="text-white fs-1 carousel-item-fontcustom">COMMUNITY</h5>
                    <p class="fs-4 rounded transparent-blur">Sfoglia il catalogo degli altri giocatori per
                        vedere cosa ti manca!</p>
                </div>
            </div>
        </a>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>