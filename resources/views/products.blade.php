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
  <h1>Nuestros Groustachos!</h1>
  <div style="display: flex; flex-wrap: wrap">
  @foreach ($products as $item)
  <div style="border: 1px solid rgb(187, 143, 197); width:200px; height: 200px; overflow:hidden; border-radius: 10px; margin: 5px; display:flex; flex-direction:column; justify-content:space-between">
    <h4 style="text-align: center; flex:1 1 auto;margin:15px">{{$item->Name}}</h4>
    <p style="overflow:hidden; flex:1 1 auto;margin:5px">{{$item->Description}}</p>
    <h3 style="text-align: end; flex:0 1 auto;margin:5px">{{$item->Price}}</h3>
  </div>
  @endforeach
  </div>
</body>
</html>