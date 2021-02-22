<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Minha primeira página </title>
        <link rel="shortcut icon" href="icon/camera.png">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Minha primeira página!!!</h1>
        <p><b>Felicidades para você</b>, por este dia tão especial que é o seu aniversário.
            <a href="https://www.youtube.com/watch?v=RAQmKOsonhc " target="blanck">Parabéns</a>...
            <strong> que possa ter muitos anos de vida, abençoados e felizes,</strong>
            e que estes <mark> dias futuros </mark>sejam todos de <ins> harmonia, paz e desejos realizados.</ins>
            <i>Que seu coração esteja sempre em festa,</i> <del>porque você é um ser de luz e especial para mim.</del></p>

        <p>
            <img src="Imagem/parabéns.jpg" title="Parabéns!" alt="parabéns">
        <form action="/action_page.php" method="get">
            <label for="browser">Choose your browser from the list:</label>
            <input list="browsers" name="browser" id="browser">
            <datalist id="browsers">
                <option value="Edge">
                <option value="Firefox">
                <option value="Chrome">
                <option value="Opera">
                <option value="Safari">
            </datalist>
            <input type="submit">
        </form>
    </p>
    <h1>Lista de compras</h1>
    <div>
        <ul>
            <li>Uva</li>
            <li>Morango</li>
            <li>Abacate</li>
            <li>Banana</li>
            <li>Maça</li>
            <li>Batata</li>
            <li>tomate</li>
        </ul>
    </div>
    <h1>Tabela de notas</h1>
    <div class="tabela">
        <table >
            <tr>
                <th>Aluno</th>
                <th>Nota1</th>
                <th>Nota2</th>
                <th>Nota3</th>
                <th>Nota4</th>
                <th>Média</th>
            </tr>
            <tr>
                <td>Ralf</td>
                <td>7</td>
                <td>6</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Ralf</td>
                <td>7</td>
                <td>6</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Bruna</td>
                <td>7</td>
                <td>6</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Lucas</td>
                <td>7</td>
                <td>6</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
            </tr>
            <tr>
                <td>João</td>
                <td>7</td>
                <td>6</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
            </tr>
        </table>
    </div>
    <h1>Vídeos</h1>
    <iframe id="video"  width="560" height="315" src="https://www.youtube.com/embed/HgfL3MMrvzM"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write;
            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <h1>Mapa</h1>
    <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30712.986378878537!2d-47.896985608628434!3d-15.797451398291399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae665464fb7%3A0x29d89d9adf83e13f!2sSenac%20Jess%C3%A9%20Freire%20(DF)!5e0!3m2!1spt-BR!2sbr!4v1613996280864!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <h1>Formulários</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Formulário de cadastro</legend>
            <label> Nome:</label>
            <input type="text" placeholder="Digite seu primeiro nome"><br> 
            <label> Sobrenome:</label>
            <input type="text" placeholder="Digite seu último nome"><br>
            <label> Idade:</label>
            <input type="number"><br>
            <label> Telefone:</label>
            <input type="tel"><br>
            <label> Data de nascimento:</label>
            <input type="date"><br>
            <label> Gênero:</label> <br>
            <input type="radio" name="genero" value="masculino">
            <label> Masculino:</label>
            <input type="radio" name="genero" value="Feminino">
            <label> Feminino:</label>
            <input type="radio" name="genero" value="Outros">
            <label> Outros:</label><br>
            <label> Transporte: </label>
            <input type="checkbox" value="bike">
            <label> Bicicleta</label>
            <input type="checkbox" value="moto">
            <label> Moto</label>
            <input type="checkbox" value="carro">
            <label> Carro</label>
            <input type="checkbox" value="publico">
            <label> Público</label><br>
            <label>Cidade satélite</label><br>
            <select size="1">
                <option>Selecione...</option>
                <option value="aguasclaras">Águas Claras</option>
                <option value="brazlandia">Brazlândia</option>
                <option value="ceilandia">Ceilândia</option>
                <option value="cruzeiro">Cruzeiro</option>
                <option value="gama">Gama</option>
                <option value="guara">Guará</option>
            </select><br>
            <label>Mensagem:</label><br>
            <textarea cols="50" rows="10"></textarea><br>
            <input type="submit" value="Cadastrar">
            <input type="button" value="Limpar">
            <button>Cancelar</button>
        </fieldset>
    </form>
</body>
</html>
