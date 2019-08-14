<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles2.css')}}">
    <title>Cadastro Funcionario</title>
</head>

<body>

    <div class="container contact">
        <div class="row">
            <div class="col-md-3 md3">
                <div class="contact-info">
                    <i class="fa fa-address-card fa-10x"></i>
                    <h2>Cadastro de Funcionários</h2>
                    <h4>Preencha todos os campos !!</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">

                    <form>

                        <div class="form-group">
                            <label for="inputAddress">Nome</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Nome Completo">
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Email</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Senha</label>
                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                                </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputEmail4">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="CPF">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data" placeholder="01/01/2019">
                            </div>
                            <div class="form-group col-md-3">
                                    <label for="inputEstado">Sexo</label>
                                    <select id="inputEstado" class="form-control">
                                      <option selected>Masculino</option>
                                      <option>Feminino</option>
                                    </select>

                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Endereço </label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP">
                            </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-5">
                                        <label for="inputEmail4">Função</label>
                                        <input type="text" class="form-control" id="cpf" placeholder="função">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Data da Admissão</label>
                                        <input type="date" class="form-control" id="data" placeholder="01/01/2019">
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label for="inputEmail4">Salario</label>
                                        <input type="text" class="form-control" id="salario" placeholder="R$:">
        
                                    </div>

                            </div>



                       
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                   

                </div>
                
            </div>
            
        </div>
    </div>





    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>