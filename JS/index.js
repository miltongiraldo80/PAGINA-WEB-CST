const contenedorTarjetas = document.getElementById("productos-container");

/** Crea las tarjetas de productos teniendo en cuenta la lista en articulos.js */
function crearTarjetasProductosInicio(productos){
  productos.forEach(producto => {
    const nuevoArticulo= document.createElement("div");
    nuevoArticulo.classList = "tarjeta-producto"
    nuevoArticulo.innerHTML = `
    <img src="./img/productos/${producto.id}.jpg" alt="articulo 1">
    <h3>${producto.nombre}</h3>
    <p class="precio">$${producto.precio}</p>
    <button>Agregar al carrito</button>`
    contenedorTarjetas.appendChild(nuevoArticulo);
    nuevoArticulo.getElementsByTagName("button")[0].addEventListener("click",() => agregarAlCarrito(producto))
  });
}
crearTarjetasProductosInicio(articulos);