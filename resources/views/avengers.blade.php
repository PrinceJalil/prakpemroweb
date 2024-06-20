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
        <div class="container"><iframe width="660" height="415" src="https://www.youtube.com/embed/eOrNdBpGMv8?si=peAVPVOvhW_Tr3gF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
    
    </section>
    
</body>
</html>