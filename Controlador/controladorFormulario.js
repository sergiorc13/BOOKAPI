import { mostrarDatos } from "./mostrarDatos.js"
import { obtenerDato } from "../Modelo/obtenerDatos.js"

//URL de la API
const url = "http://localhost/DWES/2_Trimestre/API/API_SERVIDOR/Libros.php"

// Identificador del tbody donde pretendo mostrar los datos
const idenTbody = "busqueda";

const filtrar = document.getElementById("filtrar")
const valor = document.getElementById("valor")
const form = document.getElementById("formulario")

form.addEventListener("submit", async (event) => {
  event.preventDefault()
  mostrarDatos(idenTbody, await obtenerDato(url, filtrar.value, valor.value))
  valor.value = ""
})
