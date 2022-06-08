@extends('layouts.main')

@section('container')
<section class="py-0">
    <div class="container py-0">
      <!-- Home listing -->
      <div class="row align-items-stretch gx-lg-0">
        <div class="col-lg-6 order-2 order-lg-1 bg-full-left">
          <div class="h-100 bg-light d-flex align-items-center">
            <div class="py-5 px-4">
              <p class="text-primary font-weight-bold small text-uppercase mb-2">Skul Blog</p>
              <h3 class="h4"> <a class="text-reset" href="#">Ayok Ke Sekul Gan</a></h3>
              <div class="text-muted">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur, perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur, repellendus.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur, perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur, repellendus.</p>
              </div>
              <ul class="list-inline small text-uppercase mb-0">
                <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="/blog/img/person-1.jpg" alt="" width="30"/></li>
                <li class="list-inline-item me-0 text-gray align-middle">By </li>
                <li class="list-inline-item align-middle me-0"><a class="fw-bold reset-anchor" href="#!">Jason Doe</a></li>
                <li class="list-inline-item text-gray align-middle me-0">|</li>
                <li class="list-inline-item text-gray align-middle">Jan, 2019</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2"><a class="d-block h-100 bg-center bg-cover" href="post.html" style="background: url(https://source.unsplash.com/1080x720?school)"></a></div>
      </div>
    </div>
  </section>
@endsection