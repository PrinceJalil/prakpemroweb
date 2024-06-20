<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layar Movies</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>

        <div class="logo">
            <h1>Layar<span>Movies</span></h1>
        </div>

        <div class="right">
        <ul>
            <li style="color: white; font-size:large">{{ Auth::user()->name }}</li>
            <li><a href="">
                <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button><p><i class="fa-solid fa-right-from-bracket fa-lg"></i></p></button>

                </form>
            </a></li>
        </ul>
        
        

        </div>

    </nav>
    <section>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>The Maze Runer</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                        <div class="genre">

                            <a href="#" class="category">Action</a>
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        <div class="watch">
                            <a href="/maze"><i class="fa-solid fa-play"></i></a>
                            <p>watch the trailer</p>
                        </div>

                    </div>

                    <img src="/images/background_1.jpg">

                </div>

              </div>

              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>The Avengers</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                        <div class="genre">

                            <a href="#" class="category">Action</a>
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        <div class="watch">
                            <a href="/avengers"><i class="fa-solid fa-play"></i></a>
                            <p>watch the trailer</p>
                        </div>

                    </div>

                    <img src="/images/background_2.jpg">

                </div>

              </div>

              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>Fullmetal Alchemist: Final Transmutation</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                        <div class="genre">

                            <a href="#" class="category">Action</a>
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        <div class="watch">
                            <a href="/fullmetal"><i class="fa-solid fa-play"></i></a>
                            <p>watch the trailer</p>
                        </div>

                    </div>

                    <img src="/images/background_4.jpg">

                </div>

              </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </section>




    <div class="second">

        <div class="latest">

            <h1>Popular Movies</h1>

            <div class="box">
                
                <a href="/wakanda">
                    <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Black Panther: Wakanda Forever</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Action/Adventure</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>7.1</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/Black_Panther.webp">

                    </div>
                </a>

                

                <a href="/interceptor">
                    <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Interceptor</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Action/Adventure</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>4.6</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/Interceptor.jpg">

                </div></a>

                

                <a href="/thor"><div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Thor: Love and Thunder</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Action/Adventure</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>6.3</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/Thor.jpg">

                </div>
            </a>

                <a href="/black"><div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Black Adam</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Action/Adventure</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>6.4</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/Black_Adam.jpg">

                </div>
            </a>

            </div>

        </div>

    </div>



    <div class="upcoming">

        <div class="movies_box">

            <h1>Upcoming Movies</h1>

            <div class="box">

                <a href="/john">
                   <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">John Wick: Chapter 4</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">Action/Neo-noir</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/john_wick.jfif">

                </div> 
                </a>

                <a href="/meg2"><div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Meg 2: The Trench</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">Adventure</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/meg.jpg">

                </div>
            </a>

            <a href="/aquaman"><div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Aquaman and the Lost Kingdom</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">Action/Fantasy</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/aquaman.jpg">

                </div></a>

                <a href="/quantumania"><div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Ant-Man and the Wasp: Quantumania</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">Action/Adventure</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div>

                    </div>

                    <img src="/images/ant_man.jpg">

                </div></a>

                

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    
</body>
</html>