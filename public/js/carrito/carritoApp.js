const cards = document.getElementById('cards');
const items = document.getElementById('items');
const footer = document.getElementById('footer');
const templateCard = document.getElementById('template-card').content;
const templateFooter = document.getElementById('template-footer').content;
const templateCarrito = document.getElementById('template-carrito').content;
const fragment = document.createDocumentFragment();

let carrito = {};
// Usando el addEventListener que espera se ejecute toda la página
document.addEventListener('DOMContentLoaded', () => {
    fetchData();
    //obtenerDataBase();
});

const obtenerDataBase = () => {
    try {
        $.ajax({
            url: "/ajax-request",
            type:"POST",
            data:"",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(response){
              //console.log(response);
              if(response) {
                console.log("Exito"); 
                //console.log(response.success);
                let data = response.success;
                console.log(data);
                console.log(typeof(data));
                pintarCards(data);
              } else {
                console.log("Problema"); 
              }
            },
            error: function(jqXHR, textStatus, errorThrown) { 
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
        
    } catch (error) {
        console.log(error);
    }
};

cards.addEventListener('click', e => {
    addCarrito(e);
})
const fetchData = async() => {
    try {
        //const res = await fetch('/ajax-request');
        const res = await fetch('js/carrito/carritoApi.json');
        //console.log(res);
        const data = await res.json();
        console.log(data);
        console.log(typeof(data));
        pintarCards(data);
    } catch (error) {
        console.log(error);
    }
}

const pintarCards = data => {
    //console.log(data);
    data.forEach(producto => {
        //console.log(producto);
        templateCard.querySelector('.card-img-top').setAttribute('src', producto.thumbnailUrl);
        templateCard.querySelector('.card-title').textContent = producto.title;
        templateCard.querySelector('.card-text').textContent = producto.precio;
        templateCard.querySelector('.btn-dark').dataset.id = producto.id;
        const clone = templateCard.cloneNode(true);
        fragment.appendChild(clone);
    });
    cards.appendChild(fragment);
};

const addCarrito = e => {
    //console.log(e.target);
    //console.log(e.target.classList.contains('btn-dark'));
    if (e.target.classList.contains('btn-dark')) {
        //console.log(e.target.parentElement);
        setCarrito(e.target.parentElement);
    }
    e.stopPropagation(); //Detener cualquier otro evento que se genere.

};

const setCarrito = objeto => {
    //console.log(objeto);
    const producto = {
        id: objeto.querySelector('.btn-dark').dataset.id,
        title: objeto.querySelector('.card-title').textContent,
        precio: objeto.querySelector('.card-text').textContent,
        cantidad: 1,
    }
    if (carrito.hasOwnProperty(producto.id)) {
        producto.cantidad = carrito[producto.id].cantidad + 1;
    };
    carrito[producto.id] = {...producto };
    //console.log(producto);
    //console.log(carrito);
    pintarCarrito();
};

const pintarCarrito = () => {
    //console.log(carrito);
    items.innerHTML = '';
    Object.values(carrito).forEach(producto => {
        templateCarrito.querySelector('th').textContent = producto.id;
        templateCarrito.querySelectorAll('td')[0].textContent = producto.title;
        templateCarrito.querySelectorAll('td')[1].textContent = producto.cantidad;
        templateCarrito.querySelector('.btn-info').dataset.id = producto.id;
        templateCarrito.querySelector('.btn-danger').dataset.id = producto.id;
        templateCarrito.querySelector('span').textContent = producto.cantidad * producto.precio;

        const clone = templateCarrito.cloneNode(true);
        fragment.appendChild(clone);
    });
    items.appendChild(fragment);
    pintarFooter();
};

const pintarFooter = () => {
    footer.innerHTML = '';
    if (Object.keys(carrito).length === 0) {
        footer.innerHTML = `
            <th scope="row" colaspan="5">Carrito vacío - comience a comprar!</th>
        `
    };

    const nCantidad = Object.values(carrito).reduce((acc, { cantidad }) => acc + cantidad, 0);
    const nPrecio = Object.values(carrito).reduce((acc, { cantidad, precio }) => acc + cantidad * precio, 0);
    //console.log(nCantidad);
    //console.log(nPrecio);
    templateFooter.querySelectorAll('td')[0].textContent = nCantidad;
    templateFooter.querySelector('span').textContent = nPrecio;

    const clone = templateFooter.cloneNode(true);
    fragment.appendChild(clone);

    footer.appendChild(fragment);

};


