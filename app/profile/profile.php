<!-- Vision JS -->
<link href="../css/app/profile/profile.css" rel="stylesheet">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 main-div">
            <h2 class="page-header title">Dados de Usuário</h2>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <button type="submit" class="btn btn-primary sendButtonProfile">Enviar</button>
                </div>
            </div>
            <div class="content col-lg-12">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading clicker">
                            Dados Necessários<span class="hiddenDescription">( Clique aqui para esconder/expandir )</span>
                        </div>
                        <div class="panel-body list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-6">
                                            <label>Razão Social*</label>
                                            <input type="text" placeholder="Digite aqui a razão social" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Telefone Fixo*</label>
                                            <input type="text" placeholder="Ex: (47)0000-0000" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Celular*</label>
                                            <input type="text" placeholder="Ex: (47)90000-0000" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>CNPJ*</label>
                                            <input type="text" placeholder="Digite aqui seu CNPJ" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Endereço*</label>
                                            <input type="text" placeholder="Digite aqui seu endereço" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Bairro*</label>
                                            <input type="text" placeholder="Digite aqui seu bairro" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Número*</label>
                                            <input type="text" placeholder="Seu número" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputCategory">UF</label>
                                            <select class="form-control" id="inputUF">
                                            <option>Selecione um estado...</option>
                                            <option>Santa Catarina</option>
                                            <option>Paraná</option>
                                            <option>Rio Grande do Sul</option>
                                            <option>Mato Grosso do Sul</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Cidade*</label>
                                            <input type="text" placeholder="Digite aqui sua cidade" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="inputAccountPlan">Setor de atividade</label>
                                            <select class="form-control" id="inputAccountPlan">
                                            <option>Selecione um setor...</option>
                                            <option>Comércio</option>
                                            <option>Serviços</option>
                                            <option>Indústria</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading clicker">
                            Dados Opcionais<span class="hiddenDescription">( Clique aqui para esconder/expandir )</span>
                        </div>
                        <div class="panel-body list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" id="insideTableTitle">
                                        <h4 class="page-header title">Responsável</h4>
                                        <div class="form-group col-lg-6">
                                            <label>Nome</label>
                                            <input type="text" placeholder="Digite o nome do responsável" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>Cargo</label>
                                            <input type="text" placeholder="Digite o cargo do responsável" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>CPF</label>
                                            <input type="text" placeholder="000.000.000-00" class="form-control" required>
                                        </div>
                                        <h4 class="page-header title">Empresa</h4>
                                        <div class="form-group col-lg-8">
                                            <label>Nome Fantasia</label>
                                            <input type="text" placeholder="Nome fantasia da empresa" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputTribute">Bancos</label>
                                            <select class="form-control" id="inputUF">
                                    <option>Selecione um banco...</option>
                                    <option>CAIXA</option>
                                    <option>VISA</option>
                                    <option>Master Card(Credito)</option>
                                    <option>American Express(Débito)</option>
                                    <option>Elo</option>
                                </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Inscrição Estadual</label>
                                            <input type="text" placeholder="000.000.000.000" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Inscr. Municipal</label>
                                            <input type="text" placeholder="Ex: 000000" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputTribute">Tributação</label>
                                            <select class="form-control" id="inputUF">
                                    <option>Selecione uma tributação...</option>
                                    <option>Simples Nacional</option>
                                    <option>Lucro Real</option>
                                    <option>Lucro Presumido</option>
                                </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputTribute">Centro de Custos</label>
                                            <select class="form-control" id="inputUF">
                                    <option>Selecione um centro de custos...</option>
                                    <option>Sem centro de custos</option>
                                    <option>Administrativo</option>
                                    <option>Vendas</option>
                                </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading clicker">
                            Cadastros Empresariais<span class="hiddenDescription">( Clique aqui para esconder/expandir )</span>
                        </div>
                        <div class="panel-body list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-8 col-xs-8">
                                            <label>Centro de Custos*</label>
                                            <input type="text" placeholder="Digite aqui um novo centro de custos" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <button type="submit" class="btn btn-primary buttonBusinessRegister">Enviar</button>
                                        </div>
                                    </form>
                                    <form role="form">
                                        <div class="form-group col-lg-8 col-xs-8">
                                            <label>Bancos*</label>
                                            <input type="text" placeholder="Digite aqui um novo banco" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <button type="submit" class="btn btn-primary buttonBusinessRegister">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading clicker">
                            Plano de Contas<span class="hiddenDescription">( Clique aqui para esconder/expandir )</span>
                        </div>
                        <div class="panel-body list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" id="insideTableTitle">
                                        <h4 class="page-header title">Algum texto dizendo que tem os planos a baixo que os mesmos podem ser alterados ou que pode criar uns novos!</h4>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control" id="inputAccountPlanCustom">
                                                <option value="0">Selecione um plano de contas</option>
                                                <option value="1">Customizado</option>
                                                <option value="2">Comércio</option>
                                                <option value="3">Serviços</option>
                                                <option value="4">Indústria</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-8">
                                            <input type="text" placeholder="Dê um nome ao seu plano de contas" class="form-control" id="inputAccountPlanName" required>
                                        </div>
                                        <div class="group">
                                            <div class="form-group col-lg-6 col-xs-10">
                                                <label>Categoria</label>
                                                <div class="input-group">
                                                    <input type="text" placeholder="Digite alguma descrição" class="form-control" value="Receita Bruta" required>
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" id="groupCheckBox" checked>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <label>Excluir</label>
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                    <input type="text" class="form-control" value="Prestação de Serviços">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                    <input type="text" class="form-control" value="Revenda de Produtos">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                    <input type="text" class="form-control" value="Venda de Produtos">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                    <input type="text" class="form-control" value="Receitas Financeiras">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                    <input type="text" class="form-control" value="Outras Receitas">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                    <input type="text" class="form-control" value="Reembolso">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-1 col-xs-1 img-responsive">
                                                <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-xs-10">
                                            <label>Categoria</label>
                                            <input type="text" placeholder="Digite alguma descrição" class="form-control" value="Impostos Incidentes Sobre Faturamento" required>
                                        </div>
                                        <div class="col-lg-1 col-xs-1 img-responsive">
                                            <label>Excluir</label>
                                            <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" checked>
                                                </span>
                                                <input type="text" class="form-control" value="Imposto Sobre Faturamento">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-1 col-xs-1 img-responsive">
                                            <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="form-group col-lg-6 col-xs-10">
                                            <label>Categoria</label>
                                            <input type="text" placeholder="Digite alguma descrição" class="form-control" value="Custos" required>
                                        </div>
                                        <div class="col-lg-1 col-xs-1 img-responsive">
                                            <label>Excluir</label>
                                            <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" checked>
                                                </span>
                                                <input type="text" class="form-control" value="Matéria Prima">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-1 col-xs-1 img-responsive">
                                            <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" checked>
                                                </span>
                                                <input type="text" class="form-control" value="Compra Mercadoria para Revenda">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-1 col-xs-1 img-responsive">
                                            <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-lg-offset-3 col-xs-10 form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" checked>
                                                </span>
                                                <input type="text" class="form-control" value="Materiais Intermediários">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-1 col-xs-1 img-responsive">
                                            <a><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <button type="submit" class="btn btn-success btn-block">Novo</button>
                                        </div>
                                        <div class="col-lg-8 form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

<!-- Vision JS -->
<script src="../js/vision.js"></script>
<script type="text/javascript">
    $("#inputAccountPlan").on("change", function() {
        VISION.ToastrShow("Temos planos pré cadastrados pra você, mas sinta-se a vontade para altera-los ou cadastrar novos ao final da página!", "warning");
    })


    $("#inputAccountPlanCustom").on("change", function() {
        if (this.value != 0)
            $("#inputAccountPlanName").val(this[this.value].innerHTML);
    })
</script>