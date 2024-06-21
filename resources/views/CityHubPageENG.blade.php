<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{url('css/stylesCHP.css')}}" rel="stylesheet">
        <title>CityHUB</title>
    </head>

    <body>

    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-absolute z-3 w-100">
      <div class="container-fluid">
        <img src="{{url('image/Logo.png')}}" alt="Line">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/cityPage">City</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Transportation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/forum">Forum</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
            </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/city/belitung">Indonesia</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
            <li><a class="dropdown-item" href="/CHPMND">Mandarin</a></li>
          </ul>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    </header>

    <main>

      <section class="hero" id="section_1">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="{{url('image/Belitung.png')}}" class="d-block w-100" alt="...">
          </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="{{url('image/CP-Background.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{url('image/HP-Background.jpeg')}}" class="d-block w-100" alt="...">
      </div>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </section>


      <section class="hero2" id="section_2">
        <div class = "content">
            <p>Belitung, or Belitong (local language, taken from the name of a type of sea snail), was formerly known as Billiton an island off the east coast of Sumatra, Indonesia, flanked by the Gaspar Strait and the Karimata Strait. This island is famous for white pepper (Piper sp.) which in local language is called sahang, and C-type mining materials such as white tin (Stannuum), quartz sand, white clay (kaolin), and granite. And recently it has become an alternative natural tourism destination.</p>
        </div>
        <div class ="containIMG">
          <h2>BELITUNG</h2>
            <img src="{{url('image/Belitung.png')}}" alt="Line">   
        </div>
      </section>

      <section class="hero3" id="section_3">
        <div class="Headlines">
          <h1>NEWS</h1>
        </div>

        <div class="card-container">
          <div class="card">
            <img src="{{url('image/news1.jpg')}}" alt="">
            <p>A group of Air Force Academy cadets and cadets held a socialization at the Wira Angkasa building H AS Hanandjoeddin Belitung Air Base, Monday (27/5/2024). This event invited hundreds of high school students throughout Belitung Regency to provide a deeper understanding of the world of military academies, as well as motivating students to be interested in becoming part of the AAU Taruni Cadets. In this event, AAU cadets and cadets shared their experiences while studying at the academy.</p>
            <button onclick="readMore()">Read more</button>
        </div>

        <div class="card">
            <img src="{{url('image/news2.jpg')}}" alt="">
            <p>PT PLN Tanjungpandan Customer Service Unit participated in celebrating Earth Day. This was realized in the mutual cooperation action to clean Tanjung Pendam Beach, Tanjung Pandan District, Belitung Regency. This environmental care movement is a form of PLN's commitment to protecting the environment, especially the ecosystem around the coast. Not only taking a leisurely walk, all participants took an active part in sorting waste, especially plastic waste found along the Tanjung Pendam Beach line.</p>
            <button onclick="readMore()">Read more</button>
        </div>

        <div class="card">
            <img src="{{url('image/news3.png')}}" alt="">
            <p>Bangka Belitung offers a pleasant holiday experience in the island region. Bangka Belitung is an archipelagic province in Indonesia. This region is known as the Land of the Rainbow Warriors. Bangka Belitung Tourism is known for its charming beaches. Not only beaches, Bangka Belitung tourism is also scattered with charming small islands. There are a total of 470 islands in Bangka Belitung. Bangka Belitung tourism will definitely not disappoint when visited.</p>
            <button onclick="readMore()">Read more</button>
        </div>
        </div>
      </section>


    </main>


    

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/scriptCHP.js"></script>
</html>
