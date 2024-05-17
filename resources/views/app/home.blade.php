@extends('layouts.app')

@section('title')
    <title>home</title>
@endsection

@section('css')

@endsection

@section('body')
<div class="container text-center">
    <div class="row">
      <div class="col">
        <h1>Gaviões da Fiel</h1>
        <p>O Grêmio Recreativo Cultural e Escola de Samba Gaviões da Fiel Torcida é a maior torcida organizada do Sport Club Corinthians Paulista e também uma escola de samba da cidade de São Paulo. Fundada em 1969, localiza-se no bairro do Bom Retiro, contando com mais de 140 mil associados
        </p>
        <img src="{{ asset('img/gavioes.jpg') }}"/>
      </div>
      <div class="col">
        <h1>Pavilhão 9</h1>
        <p>
            O Grêmio Recreativo Cultural Social Bloco Torcida Clube Desportivo Pavilhão 9 é uma torcida organizada do Sport Club Corinthians Paulista, e ao mesmo tempo, uma entidade carnavalesca de São Paulo, Brasil.
        </p>
        <img src="{{ asset('img/pavilhao.jpg') }}"/>

      </div>
      <div class="col">
        <h1>Estopim</h1>
        <p>
            A Estopim da Fiel é uma torcida organizada do Sport Club Corinthians Paulista do estado de São Paulo, Brasil. Foi fundada em 5 de janeiro de 1979, em Diadema. No ano de 1988, tornou-se também um bloco de carnaval na cidade, e posteriormente transformou-se numa escola de samba.
        </p>
        <img src="{{ asset('img/estopim.jpg') }}"/>
      </div>
    </div>
  </div>
<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light-emphasis ">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        {{-- <span>Get connected with us on social networks:</span> --}}
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Produtos
            </h6>
            <p>
              <a href="#!" class="text-reset">Pratos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">vasos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">esculturas</a>
            </p>
            <p>
              <a href="#!" class="text-reset">saleiro</a>
            </p>
            <p>
              <a href="#!" class="text-reset">caneca</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Instagram</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Facebook</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Github</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Linkedin</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
            <p><i class="fas fa-home me-3"></i> Diadema, 10012, SP</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              mainarte@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">edson mainarte.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection


    
