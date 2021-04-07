<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Carrito</title>
</head>
<body>

    <div class="container">
    <h4>Carrito</h4>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Acción</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody id="items"></tbody>
        <tfoot>
            <tr id="footer">
                <th scope="row" colaspan="5">Carrito vacío - comience a comprar!</th>
            </tr>
        </tfoot>
    </table>
    <div class="row" id="cards"></div>
    </div>
<template id="template-card">
<div class="col-12 mb-2 col-md-4">
<div class="card">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">Precio</p>
    <!-- <a href="#" class="btn btn-dark">Comprar</a> -->
    <button class="btn btn-dark">Comprar</button>
  </div>
</div>
</div>
</template>

<template id="template-footer">
    <th scope="row" colspan="2">Total productos</th>
    <td>10</td>
    <td>
        <button class="btn btn-dark btn-sm" id = "vaciar-carrito">
            vaciar todo
        </button>
    </td>
    <td class="font-weight-bold">$ <span>5000</span></td>
</template>

<template id="template-carrito">
    <tr>
        <th scope="row">id</th>
        <td>Café</td>
        <td>1</td>
        <td>
            <button class="btn btn-info btn-sm" id = "vaciar-carrito">
                +
            </button>
            <button class="btn btn-danger btn-sm" id = "vaciar-carrito">
                -
            </button>
        </td>
        <td>$ <span>500</span></td>
    </tr>
</template>
<script type="text/javascript">
    //const user = @json($carrito);
    //console.log(user);
</script>
<!-- Scripts -->
<!-- <script src="{{ asset('js/carrito/carritoApp.js') }}" defer></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/carrito/carritoApp.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
