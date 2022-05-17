<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
  </head>
  <body>
    @include('berita.layouts.navbar')

    <main>
      <!-- bagian sebelah kiri -->
      @yield('container')

      <!-- bagian kanan -->
      @include('berita.layouts.newslatter')
    </main>
    
<div class="container pt-5 mt-5 w-75" style="background-color: #ffffff">
<div class="be-comment-block">
	<h1 class="comments-title">Comments (3)</h1>
	<div class="be-comment">
		<div class="be-img-comment">	
			<a href="blog-detail-2.html">
				<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
			</a>
		</div>
		<div class="be-comment-content">
			
				<span class="be-comment-name">
					<a href="blog-detail-2.html">Ravi Sah</a>
					</span>
				<span class="be-comment-time">
					<i class="fa fa-clock-o"></i>
					May 27, 2015 at 3:14am
				</span>

			<p class="be-comment-text">
				Pellentesque gravida tristique ultrices. 
				Sed blandit varius mauris, vel volutpat urna hendrerit id. 
				Curabitur rutrum dolor gravida turpis tristique efficitur.
			</p>
		</div>
	</div>
	<div class="be-comment">
		<div class="be-img-comment">	
			<a href="blog-detail-2.html">
				<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="be-ava-comment">
			</a>
		</div>
		<div class="be-comment-content">
			<span class="be-comment-name">
				<a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
			</span>
			<span class="be-comment-time">
				<i class="fa fa-clock-o"></i>
				May 27, 2015 at 3:14am
			</span>
			<p class="be-comment-text">
				Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in turpis tristique blandit.
			</p>
		</div>
	</div>
	<div class="be-comment">
		<div class="be-img-comment">	
			<a href="blog-detail-2.html">
				<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="be-ava-comment">
			</a>
		</div>
		<div class="be-comment-content">
			<span class="be-comment-name">
				<a href="blog-detail-2.html">Cüneyt ŞEN</a>
			</span>
			<span class="be-comment-time">
				<i class="fa fa-clock-o"></i>
				May 27, 2015 at 3:14am
			</span>
			<p class="be-comment-text">
				Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant
			</p>
		</div>
	</div>
	<form class="form-block">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="form-group fl_icon">
					
					<input class="form-input" type="text" placeholder="Your name">
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 fl_icon">
				<div class="form-group fl_icon">
				
					<input class="form-input" type="text" placeholder="Your email">
				</div>
			</div>
			<div class="col-xs-12">									
				<div class="form-group">
					<textarea class="form-input" required="" placeholder="Your text"></textarea>
				</div>
			</div>
			<a class="btn btn-primary pull-right">submit</a>
		</div>
	</form>
</div>
</div>
    @include('berita.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/js.js"></script>
  </body>
</html>