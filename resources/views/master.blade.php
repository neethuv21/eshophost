<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Project</title>
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
   @yield('content')
   {{View::make('footer')}}
  
</body>
<style>
       .custom-login{
           height: 480px;
           padding-top: 80px;
       }
       img.slider-img{
           height: 400px !important;
       }
       .slider-text{
           background-color:wheat !important;
           text-decoration: none;

       }
       .trending-image{
           height: 100px;
       }
       .trending-item{
           float: left;
           width: 20%;
       }
       .trending-wrapper{
           margin: 30px;
       }
       .detail-img{
           height: 200px;
       }
       .search-box{
           width: 400px;
       }
       .cart-list-devider{
           border-bottom: 1px solid #46754d;
           margin-bottom: 20px;
           padding-bottom: 20px;
       }

       .a{
           text-decoration: none;
       }
       </style>
</html>