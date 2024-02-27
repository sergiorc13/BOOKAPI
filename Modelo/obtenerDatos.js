export const obtenerDato = async (url, campo, valor) => {
  try {
    const response = await axios.get(`${url}?${campo}=${valor}`)
    const final = response.data.catalogo
    return final
  } catch (error) {
    console.log(error)
  }
}