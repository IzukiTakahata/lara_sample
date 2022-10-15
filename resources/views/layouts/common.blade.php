<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サンプルシステム</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <header class="text-white bg-info bg-danger  p-3 mb-2">
        <div class="container">
			<div class="row">
				<div class="col">
					<h1>サンプルシステム</h1>
				</div>
				<div class="col">
					<a href="/"><button>TOP</button></a>
				</div>
			</div>
        </div>
    </header>

    <main class="container my-5">
		<div class="row">
			<div class="col-md">
				<img class="w-100" src="{{asset('img/icon_cat_kangae.png')}}" alt="">
			</div>
			<div class="col-md">
				<h2 style="color: red" class="mb-2">@yield('title')</h2>
        		@yield('content')
			</div>
		</div>
    </main>

    <footer class="p-3 bg-dark text-white text-center">
        Izuki Takahata
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
