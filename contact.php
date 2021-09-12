<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ambiental Consultores | Fale Conosco</title>
    <link rel="shortcut icon" href="static/images/ambiental_favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="static/styles/compiled.css" />
</head>
<body>
    <?php include("./templates/navbar.php") ?>
    <div>
        <h1>Fale Conosco</h1>
        <div>
            <div>
                <p>Nós esperamos pelos seus comentários e questões.</p>
                <p>
                    Se você precisar de uma cotação, por favor preencha o nosso formulário de requisição
                    ao lado e um dos nossos colaboradores lhe responderá o mais breve possível.
                </p>
            </div>
            <div>
                <div>
                    <h4>envie-nos um email</h4>
                    <a href="mailto:fnato@ambientalconsultores.co.mz">
                        fnato@ambientalconsultores.co.mz
                    </a>
                </div>
                <div>
                    <h4>contacte-nos</h4>
                    <a href="tel:+258847747842">
                        +258 84 774 7842
                    </a>
                </div>
            </div>
            <div>
                <h2>Nossos Escritórios</h2>
                <div>
                    <div>
                        <h3>Maputo</h3>
                        <p>Rua do Sidano, Nr. 58 Bairro da Polana</p>
                    </div>
                    <div>
                        <h3>Nampula</h3>
                        <p>Nacala Porto Bairro Maiaia</p>
                    </div>
                    <div>
                        <h3>Tete</h3>
                        <p>Vila de Moatize Bairro Chithata EN-7</p>
                    </div>
                    <div>
                        <h3>Cabo Delgado</h3>
                        <p>Vila de Palma</p>
                    </div>
                </div>
            </div>
        </div>
        <form>
            <div>
                <div>
                    <h3>Informações Pessoais</h3>
                    <h4>* - Campos Obrigatórios</h4>
                </div>
                <div>
                    <div>
                        <label>nome*</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>apelido*</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>email*</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>número de telefone*</label>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div>
                <h3>Endereço da Propriedade</h3>
                <div>
                    <div>
                        <label>rua/avenida</label>
                        <input type="text">
                    </div>
                    <div>
                        <div>
                            <label>província</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>cidade</label>
                            <input type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3>Endereço da Propriedade</h3>
                <div>
                    <label>mensagem</label>
                    <textarea></textarea>
                </div>
            </div>
            <button type="submit">submeter requisição</button>
        </form>
    </div>
    <?php include("./templates/footer.php") ?>
</body>
</html>