



const botonesAgregar = document.querySelectorAll(".boton-agregar");
const listaCarrito = document.querySelector(".lista-carrito");
const total = document.querySelector(".total");

// Función para agregar un producto al carrito
function agregarProducto(id) {
  // Obtener el producto del DOM
  const producto = document.querySelector(`.producto[data-id="${id}"]`);

  // Crear un elemento para el producto en el carrito
  const itemCarrito = document.createElement("li");
  itemCarrito.classList.add("item-carrito");
  itemCarrito.innerHTML = `
    <img src="${producto.querySelector("img").src}" alt="${producto.querySelector("h3").textContent}">
    <h3>${producto.querySelector("h3").textContent}</h3>
    <p>Precio: $${producto.querySelector("p").textContent}</p>
    <button class="boton-eliminar" data-id="${id}">Eliminar</button>
  `;

  // Agregar el elemento al carrito
  listaCarrito.appendChild(itemCarrito);

  // Actualizar el total
  actualizarTotal();

  // Agregar evento al botón eliminar
  const botonEliminar = itemCarrito.querySelector(".boton-eliminar");
  botonEliminar.addEventListener("click", eliminarProducto);
}

// Función para actualizar el total
function actualizarTotal() {
  // Obtener todos los precios de los productos en el carrito
  const precios = listaCarrito.querySelectorAll(".item-carrito p");

  // Sumar los precios
  let totalCompra = 0;
  precios.forEach((precio) => {
    totalCompra += parseFloat(precio.textContent.replace("$", ""));
  });

  // Mostrar el total
  total.textContent = `Total: $${totalCompra.toFixed(2)}`;
}

// Función para eliminar un producto del carrito
function eliminarProducto(e) {
  // Obtener el ID del producto
  const id = e.target.dataset.id;

  // Eliminar el elemento del carrito
  e.target.parentNode.remove();

  // Actualizar el total
  actualizarTotal();
}

// Agregar eventos a los botones de agregar
botonesAgregar.forEach((boton) => {
  boton.addEventListener("click", () => {
    agregarProducto(boton.dataset.id);
  });
});
