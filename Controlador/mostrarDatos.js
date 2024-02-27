export const mostrarDatos = (identificador, datos) => {

  const tbody = document.getElementById(identificador)
  tbody.innerHTML = ""
  
  datos.forEach((catalogoLibro) => {
    const tr = document.createElement("tr")
    for (const key in catalogoLibro) {
      const td = document.createElement("td")
      td.classList.add("border")
      td.textContent = catalogoLibro[key]
      tr.appendChild(td)
    }
    tbody.appendChild(tr)
  })
}
