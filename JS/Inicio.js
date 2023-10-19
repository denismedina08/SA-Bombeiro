function Gravar(local, x, y, r) {
    c = cpf.value
    console.log("CPF:", c, "Ferimento:", local, "Localização:", x, y, r)
    window.open("grava.php?cpf=" + c + "&local=" + local + "&x=" + x + "&y=" + y + "&r=" + r, "_blank")

}
