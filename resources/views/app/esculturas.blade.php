@extends('layouts.app')

@section('title')
    <title>Cêramicas Sena</title>
@endsection

@section('css')
<style>footer {
    background-color: var(--color-primary-2);
}

#footer_items {
    display: flex;
    justify-content: space-between;
    padding: 0px 8% 24px 8%;
    align-items: center;
}

#copyright {
    color: var(--color-neutral-1);;
    font-weight: 500;
}

@media screen and (max-width: 600px) {
    #footer_items {
        flex-direction: column;
        gap: 20px;
    }
}

header {
    width: 100%;
    padding: 28px 8%;
    position: sticky;
    top: 0;
    background-color: var(--color-primary-1);
    z-index: 3;
}

#navbar {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#nav_logo {
    font-size: 24px;
    color: var(--color-primary-6);
}

#nav_list {
    display: flex;
    list-style: none;
    gap: 48px;
}

.nav-item a {
    text-decoration: none;
    color: #1d1d1dad;
    font-weight: 600;
}

.nav-item.active a {
    color: var(--color-neutral-1);
    border-bottom: 3px solid var(--color-primary-4);
}

#mobile_btn {
    display: none;
}

#mobile_menu {
    display: none;
}

@media screen and (max-width: 1170px) {
    #nav_list,
    #navbar .btn-default {
        display: none;
    }

    #mobile_btn {
        display: block;
        border: none;
        background-color: transparent;
        font-size: 1.5rem;
        cursor: pointer;
    }

    #mobile_menu.active {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #mobile_nav_list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin: 12px 0px;
    }

    #mobile_nav_list .nav-item {
        list-style: none;
        text-align: center;
    } 
}

#home {
    display: flex;
    min-height: calc(100vh - 91px);
    position: relative;
}

#cta {
    width: 35%;
    display: flex;
    flex-direction: column;
    gap: 28px;
    margin-top: 5%;
}

#cta .title {
    font-size: 4rem;
    color: var(--color-neutral-1);;
}

#cta .title span {
    color: var(--color-primary-6);
}

#cta .description {
    font-size: 1.2rem;
}

#cta_buttons {
    display: flex;
    gap: 24px;
}

#cta_buttons a {
    text-decoration: none;
    color: var(--color-neutral-1);;
}

#phone_button {
    display: flex;
    gap: 8px;
    align-items: center;
    background-color: #ffffff;
    padding: 8px 14px;
    font-weight: 500;
    box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
}

#phone_button button {
    box-shadow: none;
}

#banner {
    display: flex;
    align-items: start;
    justify-content: end;
    width: 70%;
    z-index: 2;
}

#banner img {
    height: 100%;
    width: fit-content;
}

.shape {
    background-color: var(--color-primary-2);
    width: 50%;
    height: 100%;
    position: absolute;
    border-radius: 40% 30% 0% 20%;
    top: 0;
    right: 0;
    z-index: 1;
}

@media screen and (max-width: 1170px) {
    #home {
        min-height: 100%;
        padding-top: 0px;
    }

    #banner,
    #banner img,
    #home .shape {
        display: none;
    }

    #cta {
        width: 100%;
        text-align: center;
        align-items: center;
    }
}

@media screen and (max-width: 450px) {
    #phone_button button {
        display: none;
    }
}

#menu {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

#dishes {
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 24px;
    margin-top: 32px;
}

.dish {
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 20px;
    gap: 18px;
    width: 25%;
    padding: 20px;
    background-color: var(--color-neutral-0);
    box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.dish-heart {
    position: absolute;
    background-color: var(--color-primary-6);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.563rem;
    color: var(--color-primary-1);
    width: 70px;
    height: 70px;
    right: -10px;
    top: -10px;
    border-radius: 0px 37.5px 0px 42.5px;
}

.dish-description {
    color: #434343;
    text-align: center;
}

.dish-rate i {
    color: var(--color-primary-6);
}

.dish-price {
    display: flex;
    align-items: center;
    gap: 20px;
}

@media screen and (max-width: 1170px) {
    #dishes {
        flex-wrap: wrap;
        justify-content: center;
    }

    .dish {
        width: calc(50% - 12px);
    }
}

@media screen and (max-width: 600px) {
    .dish {
        width: 100%;
    }

    #menu .section-subtitle {
        text-align: center;
    }
} 

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('header.css');
@import url('home.css');
@import url('menu.css');
@import url('testimonials.css');
@import url('footer.css');

:root {
    --color-primary-1: #fff9ea;
    --color-primary-2: #ffe8b4;
    --color-primary-3: #f8d477;
    --color-primary-4: #ffe100;
    --color-primary-5: #ffcb45;
    --color-primary-6: #e9a209;

    --color-neutral-0: #fff;
    --color-neutral-1: #1d1d1d;
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    background-color: var(--color-primary-1);
}

section {
    padding: 28px 8%;
}

.btn-default {
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--color-primary-5);
    border-radius: 12px;
    padding: 10px 14px;
    font-weight: 600;
    box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: background-color .3s ease;
}

.btn-default:hover {
    background-color: var(--color-primary-3);
}

.social-media-buttons {
    display: flex;
    gap: 18px;
}

.social-media-buttons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 40px;
    background-color: var(--color-neutral-0);
    font-size: 1.25rem;
    border-radius: 10px;
    text-decoration: none;
    color: var(--color-neutral-1);;
    box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
    transition: box-shadow .3s ease;
}

.social-media-buttons a:hover {
    box-shadow: 0px 0px 12px 8px rgba(0, 0, 0, 0.1);
}

.section-title {
    color: var(--color-primary-6);
    font-size: 1.563rem;
}

.section-subtitle {
    font-size: 2.1875rem;
} 

#testimonials {
    min-height: calc(100vh - 91px);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 48px;
}

#testimonial_chef {
    width: 500px;
    height: auto;
}

#testimonials .section-subtitle {
    font-size: 3rem;
}

#testimonials_content {
    width: 50%;
}

#feedbacks {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-bottom: 40px;
    margin-top: 30px;
}

.feedback {
    display: flex;
    align-items: center;
    gap: 20px;
    background-color: var(--color-neutral-0);
    padding: 12px;
    border-radius: 12px;
    box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
}

.feedback-avatar {
    width: 100px;
    height: 100px;
    border-radius: 100%;
    object-fit: cover;
}

.feedback-content p {
    display: flex;
    justify-content: space-between;
}

.feedback-content p span {
    color: var(--color-primary-6);
}

@media screen and (max-width: 1170px) {
    #testimonials {
        flex-direction: column;
    }

    #testimonials .section-subtitle {
        text-align: center;
        font-size: 2.5rem;
    }

    #testimonial_chef {
        display: none;
    }

    #testimonials_content {
        width: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
}

@media screen and (max-width: 600px) {
    #testimonials .section-subtitle {
        font-size: 2rem;
    }

    #testimonials_content {
        width: 100%;
    }

    .feedback {
        flex-direction: column;
    }
} </style>
@endsection

@section('body')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>CÊRAMICAS SENA</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
             Menu
              </button>
              
              <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
 
                  </div>
                  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

    .sidebar {
        height: 100%;
        width: px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #ffffff;
        padding-top: 20px;
    }

 
    .sidebar a {
        padding: 10px;
        text-decoration: none;
        font-size: 16px;
        color: #000;
        display: block;
    }

    .sidebar a:hover {
        background-color: #f1f1f1;
        
        
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 20px;
        margin-left: 120px;
    }
</style>
</head>
<body>

<div class="sidebar">
    <h2>Menu</h2>
    <a href="{{route('pratos')}}">Pratos</a>
    <a href="{{route('vasos')}}">Vasos</a>
    <a href="{{route('canecas')}}">Canecas</a>
    <a href="{{route('esculturas')}}">Esculturas</a>
    <a href="{{route('sobre-nos')}}">Quem somos</a>
</div>



</body>
</html>

                </div>
              </div>
            <i class="fa-solid fa-burge" id="nav_logo">CERAMICAS SENA</i>
            

            <ul id="nav_list">
                <li class="nav-item active">
                <a href="{{route('home')}}">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>

            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                <a href="{{route('home')}}">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
        </div>
    </header>

    <section id="menu">
            <h2 class="section-title">Peças</h2>
            <h3 class="section-subtitle">Esculturas</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('img/escultura_de_onca.jpg')}}" class="dish-image" alt="">

                    <h3 class="dish-title">
                    Escultura de onça
                    </h3>

                    <span class="dish-description">
                        Impressão botânica, peça única e exclusiva feita de forma manual
                        Tamanho: 28x10x15
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>R$490,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('img/Folha_de_lirio.jpg')}}" class="dish-image" alt="">

                    <h3 class="dish-title">
                    Folha de lírio
                    </h3>

                    <span class="dish-description">
                        Impressão botânica, peça única e exclusiva feita de forma manual
                        Tamanho: 30x15x2
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>R$130,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('img/rsz_1apoio_de_colher_folha.jpg')}}" class="dish-image" alt="">

                    <h3 class="dish-title">
                    Apoio de colher folha
                    </h3>

                    <span class="dish-description">
                        Apoio de folha de costela de Adão em cêramica artesanal, com impressão botânica peça única e exclusiva feita de forma manual
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>R$150,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
        </section>

        <footer>
            <img src="src/images/wave.svg" alt="">
    
            <div id="footer_items">
                <span id="copyright">
                    &copy 2024 ceramicasena22@gmail.com
                </span>
    
                <div class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
    
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
    
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>
        </footer>
        <script src="src/javascript/script.js"></script>