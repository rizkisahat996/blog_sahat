@extends('berita.layouts.utama')

@section('container')

<div class="justify-content-center mt-5 pt-3  mx-0 px-5  d-inline-block row t   ms-5  p-5" style="background-color: #ffffff" id="teng">
    <div class="container px-3 mx-3 "> <h1 class="ms-3" style="font-family: Roboto,sans-serif;">Judul berita</h1>
        <ul  class="list-group list-group-horizontal-sm" id="li">
            <li class="list-group-item border-0"><span class="bi bi-clock"></span> Medan</li>
            <li class="list-group-item border-0"><span class="bi bi-person"></span> admin</li>
            <li class="list-group-item border-0"><span class="bi bi-chat"></span> 0 comment</li>
            <li class="list-group-item border-0"><span class="bi bi-eye-fill"></span> 10 views</li>
        </ul>
    </div>
    <div class="row ps-5">
        <img src="img/contoh.jpg" class="shadow p-1 mb-5 bg-body rounded" alt="...">
    </div>
    <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel mollis nunc, vel iaculis arcu. Phasellus vehicula pulvinar eros commodo ornare. Etiam lobortis augue eu urna ullamcorper lobortis. Nulla convallis leo a lacus dictum iaculis id ut justo. In ac placerat libero. Nunc mollis risus justo, sed pretium augue faucibus quis. Aliquam vehicula ut tortor a tempus. Praesent volutpat velit nec sapien sollicitudin elementum. In vel viverra dui.

            Vestibulum eget mi auctor, pharetra tellus et, suscipit justo. Mauris venenatis quam vitae sodales aliquam. Nunc aliquet efficitur lectus ut iaculis. Donec volutpat venenatis porta. Fusce elementum fringilla odio in porttitor. Vivamus gravida sodales condimentum. Praesent ornare maximus sem, nec hendrerit eros tincidunt sed. Nullam at sollicitudin tortor. In ornare vestibulum placerat. Cras sapien nulla, porttitor a posuere ut, tempor ac diam. Donec sed ornare mi. Vivamus fermentum tortor mi, et dictum arcu condimentum non. Curabitur tempor sit amet ligula sed pulvinar.
        </p>
    </div>
    
    <div class="pt-5 mt-5">
        <div class="col-sm-3 mt-3" style="background-color: rgba(196, 196, 196, 0.17);" id="ba">
            <h2>Berita Terpopuler</h2>
        </div>
        <div class="d-flex flex-row-sm-2  pt-2 mt-5 gap-2" >
            <div class="card border-0 float-lg-start"  id="k">
                <img src="img/contoh2.jpg" class="card-img-top" alt="...">
                <div class="card-body ">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card ms-2 border-0 float-lg-start"  id="k">
                <img src="img/contoh2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card ms-2 border-0 float-lg-start"  id="k">
                <img src="img/contoh2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>


    
</div>


</div>

@endsection