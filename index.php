<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolução de Veículo - Web II</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <form method="get" action="valida.php">
        <div class="container">
            <h1>Devolução de Veículo</h1>
            <!-- coletando as informações!-->

            <h1 class="titulo">INFORMAÇÕES</h1> <br>

            <label for="nome"> Nome: <br>
                <input class="inf" type="text" class="text_digitavel" id="nome" placeholder="Digite o seu nome aqui"
                    name="nome_cliente" required> <br> <br>
            </label>

            <label for="carro">Carro alugado: <br>

                <select class="inf" type="text" class="text_digitavel" id="carro" placeholder="Digite o carro aqui"
                    name="modelo_veiculo" required>
                    <option value="Corrola Cross">Corrola Cross</option>
                    <option value="Creta 2.0">Creta 2.0</option>
                    <option value="T-Cross">T-Cross</option>
                    <option value="Tiggo 5x">Tiggo 5x</option>
                    <option value="Versa">Versa</option>
                </select> <br> <br>

                <label for="quilometragem">quilometragem percorrida: <br>
                    <input class="inf" type="number" id="quilometragem" placeholder="Digite a quilometragem aqui"
                        name="km_rodados" required> <br> <br>
                </label>
                <br>
                <input class="button" type="submit" name="btn_enviar" value="Enviar" cla />
                </fieldset>
        </div>
    </form>

</body>

</html>