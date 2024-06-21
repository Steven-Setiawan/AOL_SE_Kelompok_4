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
            <li><a class="dropdown-item" href="#">Mandarin</a></li>
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
            <p>勿里洞岛（Belitung），或称Belitong（当地语言，取自一种海蜗牛的名字），原名Billiton，是印度尼西亚苏门答腊岛东海岸的一个岛屿，两侧是加斯帕海峡和卡里马塔海峡。该岛以当地语言称为萨杭的白胡椒（Piper sp.）和白锡（Stannuum）、石英砂、白粘土（高岭土）和花岗岩等C型采矿材料而闻名。最近它已成为另类自然旅游目的地。</p>
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
            <p>周一（2024 年 5 月 27 日），一群空军学院学员和学员在 HAS Hanandjoeddin Belitung 空军基地 Wira Angkasa 大楼举行了社交活动。此次活动邀请了勿里洞县的数百名高中生，让他们更深入地了解军事院校的世界，并激发学生成为 AAU Taruni 军校学员的兴趣。在本次活动中，AAU学员和学员们分享了在学院学习的经历。</p>
            <button onclick="readMore()">Read more</button>
        </div>

        <div class="card">
            <img src="{{url('image/news2.jpg')}}" alt="">
            <p>PT PLN Tanjungpandan 客户服务部参加了地球日庆祝活动。这是在清理勿里洞县丹绒潘丹区丹绒彭丹海滩的相互合作行动中实现的。这项环保运动是 PLN 致力于保护环境，特别是沿海生态系统的一种形式。所有参与者不仅悠闲地散步，还积极参与垃圾分类，特别是丹绒彭丹海滩沿线发现的塑料垃圾。</p>
            <button onclick="readMore()">Read more</button>
        </div>

        <div class="card">
            <img src="{{url('image/news3.png')}}" alt="">
            <p>Bangka Belitung 在岛屿地区提供愉快的度假体验。邦加勿里洞是印度尼西亚的一个群岛省。该地区被称为彩虹战士之地。邦加勿里洞旅游局以其迷人的海滩而闻名。邦加勿里洞旅游区不仅有海滩，还散布着迷人的小岛屿。邦加勿里洞共有 470 个岛屿。邦加勿里洞旅游绝对不会让人失望。</p>
            <button onclick="readMore()">Read more</button>
        </div>
        </div>
      </section>


    </main>


    

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/scriptCHP.js"></script>
</html>
