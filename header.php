<style>
    .carousel-img {
        height: 350px;
        object-fit: cover;
        filter: brightness(70%);
    }

    .custom-caption {
        bottom: 30%;
    }

    .custom-caption h1 {
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
    }

    .custom-caption p {
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
    }
</style>


<div id="carouselExample"
    class="carousel slide carousel-fade"
    data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active">

            <img src="assets/img/bola.jpg"
                class="d-block w-100 carousel-img">

            <div class="carousel-caption custom-caption">

                <h1 class="fw-bold display-5">
                    Football
                </h1>

                <p class="fs-5">
                    Semangat • Kompetitif • Sportif
                </p>

            </div>

        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item">

            <img src="assets/img/gitar.jpg"
                class="d-block w-100 carousel-img">

            <div class="carousel-caption custom-caption">

                <h1 class="fw-bold display-5">
                    Music
                </h1>

                <p class="fs-5">
                    Berkarya • Kreatif • Harmoni
                </p>

            </div>

        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item">

            <img src="assets/img/it.jpg"
                class="d-block w-100 carousel-img">

            <div class="carousel-caption custom-caption">

                <h1 class="fw-bold display-5">
                    Technology
                </h1>

                <p class="fs-5">
                    Belajar • Coding • Berkembang
                </p>

            </div>

        </div>

    </div>

    <!-- BUTTON PREV -->
    <button class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>

    <!-- BUTTON NEXT -->
    <button class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>