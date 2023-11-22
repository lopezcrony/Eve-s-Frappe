const productos = [
    { id: 1, nombre: 'roma', precio: 800 , imagen: 'img/roma.jpg'},
    { id: 2, nombre: 'mexico', precio: 300, imagen: 'img/mexico.jpg' },
    { id: 3, nombre: 'colombia', precio: 350, imagen: 'img/colombia.jpg' },
    { id: 4, nombre: 'vaticano', precio: 500, imagen: 'img/vaticano.jpg' },
    { id: 5, nombre: 'cuba', precio: 500, imagen: 'img/cuba.jpg' },
    { id: 6, nombre: 'Estados Unidos', precio: 500, imagen: 'img/estados.jpg' },
    { id: 7, nombre: 'Argentina', precio: 500, imagen: 'img/argentina.jpg' },
    { id: 8, nombre: 'Noruega', precio: 500, imagen: 'img/noruega.jpg' }

];

let carrito = [];

// Función para renderizar productos
function renderizarProductos() {
const contenedorProductos = document.getElementById('productos');

for (let i = 0; i < productos.length; i++) {
const producto = productos[i];

// Crear el contenedor de la tarjeta de producto
const tarjetaProducto = document.createElement('div');
tarjetaProducto.className = 'col mb-5';

// Crear la card de Bootstrap
const cardBootstrap = document.createElement('div');
cardBootstrap.className = 'card h-100';

// Agregar la imagen del producto
const imagenProducto = document.createElement('img');
imagenProducto.className = 'card-img-top';
imagenProducto.src = producto.imagen;
cardBootstrap.appendChild(imagenProducto);

// Detalles del producto
const detallesProducto = document.createElement('div');
detallesProducto.className = 'card-body p-4';

// Nombre del producto
const nombreProducto = document.createElement('h5');
nombreProducto.className = 'fw-bolder';
nombreProducto.textContent = producto.nombre;
detallesProducto.appendChild(nombreProducto);

// Precio del producto
const precioProducto = document.createElement('div');
precioProducto.textContent = `Precio: $${producto.precio}`;
detallesProducto.appendChild(precioProducto);

detallesProducto.className = 'text-center';
detallesProducto.appendChild(nombreProducto);
detallesProducto.appendChild(precioProducto);

cardBootstrap.appendChild(detallesProducto);

// Acciones del producto (botón "Viajar" en este caso)
const accionesProducto = document.createElement('div');
accionesProducto.className = 'card-footer p-4 pt-0 border-top-0 bg-transparent text-center mt-3';

const botonViajar = document.createElement('button');
botonViajar.className = 'btn btn-outline-dark mt-auto text-center';
botonViajar.textContent = 'Viajar';
// Asociar la función agregarAlCarrito al evento click del botón Viajar
botonViajar.onclick = () => agregarAlCarrito(producto.nombre, producto.precio);

accionesProducto.appendChild(botonViajar);
cardBootstrap.appendChild(accionesProducto);

// Agregar la card de Bootstrap al contenedor de productos
tarjetaProducto.appendChild(cardBootstrap);

// Agregar el contenedor de la tarjeta de producto al contenedor general
contenedorProductos.appendChild(tarjetaProducto);
}
}


// Llamada a la función para renderizar productos

// Función para agregar productos al carrito
function agregarAlCarrito(nombre) {
    const productoEncontrado = productos.find(producto => producto.nombre === nombre);
  
    if (productoEncontrado) {
      const itemExistente = carrito.find(item => item.nombre === nombre);
  
      if (itemExistente) {
        itemExistente.cantidad++;
      } else {
        carrito.push({ nombre, precio: productoEncontrado.precio, cantidad: 1 });
      }
  
      actualizarCarrito();
    } else {
      console.error(`Producto no encontrado: ${nombre}`);
    }
  }
function actualizarCarrito() {
    const contenedorItemsCarrito = document.getElementById('items-carrito');
    const totalCarritoElemento = document.getElementById('total-carrito');

    contenedorItemsCarrito.innerHTML = '';
    let total = 0;

    carrito.forEach((item, index) => {
        const elementoItemCarrito = document.createElement('li');
        elementoItemCarrito.className = 'item-carrito';

        const nombreItem = document.createElement('span');
        nombreItem.textContent = ` ${item.nombre} (Precio por dia: $${item.precio}) dias de estancia: ${item.cantidad}`;

        const controlesItem = document.createElement('div');

        const botonAumentar = document.createElement('button');
        botonAumentar.textContent = '+';
        botonAumentar.onclick = () => aumentarCantidad(index);

        const botonDisminuir = document.createElement('button');
        botonDisminuir.textContent = '-';
        botonDisminuir.onclick = () => disminuirCantidad(index);

        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.onclick = () => eliminarItem(index);

        controlesItem.appendChild(botonDisminuir);
        controlesItem.appendChild(botonAumentar);
        controlesItem.appendChild(botonEliminar);

        elementoItemCarrito.appendChild(nombreItem);
        elementoItemCarrito.appendChild(controlesItem);
        
        contenedorItemsCarrito.appendChild(elementoItemCarrito);
        total += item.precio * item.cantidad;
    });

    totalCarritoElemento.textContent = total;
}

// Función para vaciar el carrito
function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
}

// Función para aumentar la cantidad de un producto en el carrito
function aumentarCantidad(index) {
    carrito[index].cantidad++;
    actualizarCarrito();
}

// Función para disminuir la cantidad de un producto en el carrito
function disminuirCantidad(index) {
    if (carrito[index].cantidad > 1) {
        carrito[index].cantidad--;
    } else {
        eliminarItem(index);
    }
    actualizarCarrito();
}

// Función para eliminar un producto del carrito
function eliminarItem(index) {
    carrito.splice(index, 1);
    actualizarCarrito();
}

// Inicializar la tienda
renderizarProductos();



