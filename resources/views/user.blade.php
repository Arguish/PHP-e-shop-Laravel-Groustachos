<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
</head>
<body style="background-color: black">
    <a href="/"><img style="width: 100px" src="https://www.elcorteingles.es/centroscomerciales/uploads/event/main_picture/4246/Imatge_presentaci__6_d_octubre_-_Ventura.png" alt=""></a>
  <h1>Groustachos Contentos!</h1>
  <div style="display: flex; flex-wrap: wrap">
  @foreach ($user as $item)
  <div style="border: 1px solid rgb(187, 143, 197); width:200px; height: 200px; overflow:hidden; border-radius: 10px; margin: 5px; ">
    <h4 style="text-align: center">{{$item->name}}</h4>
    <p>{{$item->email}}</p>
    <img src="https://picsum.photos/200?random={{$item->id}}&grayscale" style="text-align: end"></img>
  </div>
  @endforeach
  </div>
</body>
</html>