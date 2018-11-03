<div class="main">
    <div class="container-fluid">
        <!-- Abas principais -->

        <div class="container">

            <!-- Criação das abas -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#lead" role="tab" data-toggle="tab" class="abas">Lead</a></li>
                <li><a href="#negociacao" role="tab" data-toggle="tab" class="abas">Negociação</a></li>
                <li class="dropdown  col-sm-2 tiipos">
                    <label for="select-tipos"></label><br>

                    <select class="form-control" id="select-tipos">
                        <option value="todos"><a class="tipos" href="#">Todos</a></option>
                        <?php foreach($produtos as $produto):?>
                        <option value='<?php echo $produto->id_produto;?>'><a class="tipos" href="#"><?php echo $produto->nome_produto;?></option>
                        <?php endforeach;?>
                    </select>
                </li>

            </ul>

            <!-- Conteúdo das abas -->
            <div class="tab-content">

                <!-- Aba Lead -->
                <div class="tab-pane active" role="tabpanel" id="lead">
                    <table class="table lead-neg">
                        <tr>
                            
                        <div data-target="#cria_estado_padrao<?php echo $super_estados[0]->id_super_estado;?>" data-toggle="modal" id="edit-kanban" class="container container-plus">
                            <a href="#" data-target="#" data-toggle="modal">
                                <i class="fa fa-plus-circle ad-neg" style="color:black;background-color:#FFCE00;border-radius:70%;margin-top:15px;"></i>
                            </a> 
                        </div> 
                        
                <form method="POST" action="<?php echo base_url('Inicio/atualizaKanban');?>" id="form-atualizaKanban">
                    <input  type="hidden" name="id_negociacao" id="input-negociacao">
                    <input  type="hidden" name="id_sub_estado" id="input-sub">
                </form>
                        
                <?php foreach($sub_estados as $sub_estado):?>
                <?php if($sub_estado->id_super_estado == $super_estados[0]->id_super_estado):?>
                    <div class="container container2" style="background-color:transparent;">
                    <h3 class="title-sub-estados" style="background-color: <?php echo $sub_estado->cor?>;">
                        <a data-target="#popup-edicao-estados<?php echo $sub_estado->id_sub_estado;?>" data-toggle="modal" class="but-info">
                            <i class="fa fa-cog" style="font-size:10px"></i>
                        </a>
                        <?php echo ucfirst($sub_estado->nome_sub_estado);?>
                        <i class="fa fa-angle-double-right flow-exp"></i>
                    </h3>
                        <ul class="sortable connectedSortable" id="<?php echo $sub_estado->id_sub_estado?>">
                        
                        <?php foreach($negociacoes as $negociacao):?>
                            
                            <?php if($negociacao->id_sub_estado == $sub_estado->id_sub_estado):?>
                            <li class="card" id="<?php echo $negociacao->id_negociacao?>">
                                <span class="linha-lateral stackem" style="background-color: <?php echo $sub_estado->cor?>;"></span>
                                <?php echo $negociacao->nome.' '.$negociacao->sobrenome;?>
                                <a data-target="#kanban_info<?php echo $negociacao->id_negociacao;?>" data-toggle="modal" id="edit-kanban" class="but-info">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                                <br><?php echo  $negociacao->nome_curso?>
                                <br><?php echo $negociacao->nome_instituicao?>
                                <br><?php echo $negociacao->nome_produto?> - 18/08
                            </li> 
                            <?php endif;?>
                        <?php endforeach?>
                            <li class="card-plus">
                                <a href="#">
                                    <i class="fas fa-plus-circle ad-neg" style="color:black;background-color:#FFCE00;border-radius:70%;margin-top:15px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div data-target="#cria_estado<?php echo $sub_estado->id_sub_estado.$sub_estado->nome_sub_estado;?>" data-toggle="modal" id="edit-kanban" class="container container-plus">
                        <a href="#" data-target="#" data-toggle="modal">
                            <i class="fa fa-plus-circle ad-neg" style="color:black;background-color:#FFCE00;border-radius:70%;margin-top:15px;"></i>
                        </a> 
                    </div>
                <?php endif;?>
                <?php endforeach;?>
                        </tr>
                    </table>
                </div>

                <!-- Aba Negociação -->
                <div class="tab-pane" role="tabpanel" id="negociacao">
                    <table class="table lead-neg">
                        <tr>
                        <div data-target="#cria_estado_padrao<?php echo $super_estados[1]->id_super_estado;?>" data-toggle="modal" id="edit-kanban" class="container container-plus">
                            <a href="#" data-target="#" data-toggle="modal">
                                <i class="fa fa-plus-circle ad-neg" style="color:black;background-color:#FFCE00;border-radius:70%"></i>
                            </a> 
                        </div> 
                            
                <?php foreach($sub_estados as $sub_estado):?>
                <?php if($sub_estado->id_super_estado == $super_estados[1]->id_super_estado):?>
                    <div class="container container2" style="background-color:transparent;">
                    <h3 class="title-sub-estados" style="background-color: <?php echo $sub_estado->cor?>;">
                        <a data-target="#popup-edicao-estados<?php echo $sub_estado->id_sub_estado;?>" data-toggle="modal" class="but-info">
                            <i class="fa fa-cog" style="font-size:10px"></i>
                        </a>
                        <?php echo ucfirst($sub_estado->nome_sub_estado);?>
                        <i class="fa fa-angle-double-right flow-exp"></i>
                    </h3>
                        <ul class="sortable connectedSortable">
                        
                        <?php foreach($negociacoes as $negociacao):?>
                            
                            <?php if($negociacao->id_sub_estado == $sub_estado->id_sub_estado):?>
                            <li class="card">
                                <span class="linha-lateral stackem" style="background-color: <?php echo $sub_estado->cor?>;"></span>
                                <?php echo $negociacao->nome.' '.$negociacao->sobrenome;?>
                                <a data-target="#kanban_info<?php echo $negociacao->id_negociacao;?>" data-toggle="modal" id="edit-kanban" class="but-info">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                                <br><?php echo  $negociacao->nome_curso?>
                                <br><?php echo $negociacao->nome_instituicao?>
                                <br><?php echo $negociacao->nome_produto?> - 18/08
                            </li> 
                            <?php endif;?>
                        <?php endforeach?>
                        </ul>
                    </div>
                    <div data-target="#cria_estado<?php echo $sub_estado->id_sub_estado.$sub_estado->nome_sub_estado;?>" data-toggle="modal" id="edit-kanban" class="container container-plus">
                        <a href="#" data-target="#" data-toggle="modal">
                            <i class="fa fa-plus-circle ad-neg" style="color:black;background-color:#FFCE00;border-radius:70%"></i>
                        </a> 
                    </div>
                <?php endif;?>
                <?php endforeach;?>
                        </tr>
                    </table>
                </div>


            </div>
        </div>
        <!-- Fim das Abas principais -->
    </div>
</div>

<!--PopUp de ver e editar negociação do kanban-->
<?php foreach($negociacoes as $negociacao):?>
<div id="kanban_info<?php echo $negociacao->id_negociacao;?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button onclick="DesabilitaCampo(<?php echo $negociacao->id_negociacao;?>)" type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Informações da Negociação</h4><br>
                <label>Nome: </label><?php echo " ".$negociacao->nome.' '.$negociacao->sobrenome;?><br>
                <label>CPF: </label><?php echo " ".$negociacao->cpf;?><br>
                <label>Responsável: </label><?php echo " ".$negociacao->nome_usuario." ".$negociacao->sobrenome_usuario;?><br><br>
                
                <label class="switch">
                    <input type="checkbox" id="checkbox-pop<?php echo $negociacao->id_negociacao;?>" onclick="MudaCampo(<?php echo $negociacao->id_negociacao;?>)">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="curso">Curso</label>
                            <input type="text" class="form-control" id="curso-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" value="<?php echo $negociacao->nome_curso;?>" required placeholder="Ex.: Computação">
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="instituicao">Instituição</label>
                            <input type="text" class="form-control" id="instituicao-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" value="<?php echo $negociacao->nome_instituicao;?>" required placeholder="Ex.: UFF - RO">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="produto-pop">Produto</label>
                            <input type="text" class="form-control" id="produto-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" value="<?php echo $negociacao->nome_produto;?>" required placeholder="Ex.: Caneca">
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="qtd-pop">Quantidade</label>
                            <input type="text" class="form-control" id="qtd-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" value="<?php echo $negociacao->quantidade;?>" required placeholder="Ex.: 15">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="preco-pop">Preço</label>
                            <input type="text" class="form-control" id="preco-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" value="<?php echo $negociacao->valor_total_negociacao;?>"required placeholder="Ex.: R$ 30,00">
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="desconto-pop">Desconto</label>
                            <input type="text" class="form-control" id="desconto-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: R$ 5,00">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="end-entrega">Endereço de Entrega</label>
                            <input type="text" class="form-control" id="end-entrega-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: Highway To Hell">
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="numero-entrega">Número</label>
                            <input type="text" class="form-control" id="numero-entrega<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: 100">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="complemento-entrega">Complemento</label>
                            <input type="text" class="form-control" id="complemento-entrega<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: Casa 2">
                        </div>
                    </div>

                     <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="cep-entrega">CEP</label>
                            <input type="text" class="form-control" id="cep-entrega<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: 28.620-000">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="bairro-entrega">Bairro</label>
                            <input type="text" class="form-control" id="bairro-entrega<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: Alegria">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="cidade-entrega">Cidade</label>
                            <input type="text" class="form-control" id="cidade-entrega<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: Rio de Ouro">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="tel-pop">Telefone</label>
                            <input type="tel" class="form-control" id="tel-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" required placeholder="Ex.: (22)99999-9999">
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="email-pop">E-mail</label>
                            <input type="email" class="form-control" id="email-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled" value="<?php echo $negociacao->email;?>" required placeholder="Ex.: exemplo@email.com">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 stackem">
                            <div>
                                <img src="<?php echo base_url("../../assets/imagens/exemplo-popup.jpg")?>" class="img-responsive">
                            </div>
                        </div>
                        <div class="form-group col-sm-3 order-sm-1">
                            <label for="status">Status</label>
                            <select type="text" class="form-control" id="status-pop<?php echo $negociacao->id_negociacao;?>" disabled="disabled">
                                <?php foreach($super_estados as $super_estado):?>
                                <i><optgroup label="<?php echo ucfirst($super_estado->nome_super_estado);?>"></i>
                                    <?php foreach($sub_estados as $sub_estado):?>
                                    <?php if($sub_estado->id_super_estado == $super_estado->id_super_estado):?>
                                    <option value="<?php echo $sub_estado->id_sub_estado;?>" <?php if($negociacao->id_sub_estado == $sub_estado->id_sub_estado) echo "selected=\"selected\"";?>> 
                                        <a class="sub-status" href="#"><?php echo ucfirst($sub_estado->nome_sub_estado);?></a>
                                    </option>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                </optgroup>
                                <?php endforeach;?>    
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url('negociacao/excluir'); ?>" method="POST" onclick="return confirm('Realmente deseja excluir ?');">
                    <input type="hidden" name="id_negociacao" value="<?php echo $negociacao->id_negociacao ;?>" />
                    <input type="hidden" name="id_cliente" value="<?php echo $negociacao->id_cliente ;?>" />
                    <input type="hidden" name="id_produto" value="<?php echo $negociacao->id_produto ;?>" />
                    <button type="submit" class="btn btn-danger" style="display:inline-block;float:left;" title="EXCLUIR">
                        <span>EXCLUIR</span>
                    </button>
                </form>
                <submit onclick="DesabilitaCampo(<?php echo $negociacao->id_negociacao;?>)" type="button" class="btn btn-success" data-dismiss="modal">OK</submit>
            </div>
        </div>
    </div>
</div>
<?php endforeach?>

<!--PopUp de criar novos sub_estados-->
<div id="cria_estado_padrao<?php echo $super_estados[0]->id_super_estado;?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button onclick="" type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Criar Novo Estado</h4><br>
            </div>
            <form role="form" action="<?php echo base_url("Inicio/inserirSubEstado");?>" method="POST">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="responsavel">Nome do Estado</label>
                                <input type="text" class="form-control" name="nome_sub_estado" id="nome_estado" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="cor-estado">Cor do Estado</label>
                                <input type="color" class="form-control" id="cor-estado" name="cor" value="#FFFF00" required>
                            </div>
                            <input type="hidden" name="posicao" value="1">
                            <input type="hidden" name="id_super_estado" value="<?php echo $super_estados[0]->id_super_estado;?>">
                        </div>
                        <div class="row">
                            <h4 style="margin-left:1em"><br>Posição: 1</h4>
                        </div>
                </div>
                <div class="modal-footer">
                    <submit type="button" class="btn btn-danger" style="display:inline-block;float:left;" data-dismiss="modal">FECHAR</submit>
                    <button type="submit" class="btn btn-success" col-sm-offset-5>CRIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="cria_estado_padrao<?php echo $super_estados[1]->id_super_estado;?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button onclick="HabilitaCampo(this.disable,<?php echo $negociacao->id_negociacao;?>)" type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Criar Novo Estado</h4><br>
            </div>
            <form role="form" action="<?php echo base_url("Inicio/inserirSubEstado");?>" method="POST">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="responsavel">Nome do Estado</label>
                                <input type="text" class="form-control" name="nome_sub_estado" id="nome_estado" required>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="cor-estado">Cor do Estado</label>
                                <input type="color" class="form-control" id="cor-estado" name="cor" value="#FFFF00" required>
                            </div>
                            <input type="hidden" name="posicao" value="1">
                            <input type="hidden" name="id_super_estado" value="<?php echo $super_estados[1]->id_super_estado;?>">
                        </div>
                        <div class="row">
                            <h4 style="margin-left:1em"><br>Posição: 1</h4>
                        </div>
                </div>
                <div class="modal-footer">
                    <submit type="button" class="btn btn-danger" style="display:inline-block;float:left;" data-dismiss="modal">FECHAR</submit>
                    <button type="submit" class="btn btn-success" col-sm-offset-5>CRIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach($sub_estados as $sub_estado):?>
<div id="cria_estado<?php echo $sub_estado->id_sub_estado.$sub_estado->nome_sub_estado;?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button onclick="HabilitaCampo(this.disable,<?php echo $negociacao->id_negociacao;?>)" type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Criar Novo Estado</h4><br>
            </div>
            <form role="form" action="<?php echo base_url("Inicio/inserirSubEstado");?>" method="POST">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="responsavel">Nome do Estado</label>
                                <input type="text" class="form-control" name="nome_sub_estado" id="nome_estado" required>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="cor-estado">Cor do Estado</label>
                                <input type="color" class="form-control" id="cor-estado" name="cor" value="#FFFF00" required>
                            </div>
                            <input type="hidden" name="posicao" value="<?php echo $sub_estado->posicao+1;?>">
                            <input type="hidden" name="id_super_estado" value="<?php echo $sub_estado->id_super_estado;?>">
                        </div>
                        <div class="row">
                            <h4 style="margin-left:1em"><br>Posição: <?php echo $sub_estado->posicao+1;?></h4>
                        </div>
                </div>
                <div class="modal-footer">
                    <submit type="button" class="btn btn-danger" style="display:inline-block;float:left;" data-dismiss="modal">FECHAR</submit>
                    <button type="submit" class="btn btn-success" col-sm-offset-5>CRIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach?>

<!-- PopUp Edição de Estados -->
<?php foreach($sub_estados as $sub_estado):?>
<div id="popup-edicao-estados<?php echo $sub_estado->id_sub_estado;?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edição de Estados</h4><br>
            </div>

            <div class="modal-body">
                <form role="form" action="<?php echo base_url("Inicio/editarSubEstado");?>" method="POST">
                    
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="nome-super-estado">Nome do Super Estado</label>
                            <select type="text" class="form-control" id="status" name="id_super_estado">
                                <?php foreach($super_estados as $super_estado):?>
                                <option value="<?php echo $super_estado->id_super_estado;?>" <?php if($super_estado->id_super_estado == $sub_estado->id_super_estado) echo "selected=\"selected\"";?>> 
                                    <a class="sub-status" href="#"><?php echo ucfirst($super_estado->nome_super_estado);?></a>
                                </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    
                    <input type="hidden" name="id_sub_estado" value="<?php echo $sub_estado->id_sub_estado;?>">
                    
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="nome-estado">Nome do Estado</label>
                            <input type="text" class="form-control" id="nome-estado" name ="nome_sub_estado" value="<?php echo $sub_estado->nome_sub_estado;?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="posicao-estado">Posição do Estado</label>
                            <input type="text" class="form-control" id="posicao-estado" name="posicao" value="<?php echo $sub_estado->posicao;?>" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="cor-estado">Cor do Estado</label>
                            <input type="color" class="form-control" id="cor-estado" name="cor" value="<?php echo $sub_estado->cor;?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <submit type="button" class="btn btn-danger" style="display:inline-block;float:left;" data-dismiss="modal">FECHAR</submit>
                        <button type="submit" class="btn btn-success" col-sm-offset-5>EDITAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

<div id="popup-edicao-estados" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edição de Estados</h4><br>
            </div>

            <div class="modal-body">
                <form>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="nome-super-estado">Nome do Super Estado</label>
                            <input type="text" class="form-control" id="nome-super-estado" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="nome-estado">Nome do Estado</label>
                            <input type="text" class="form-control" id="nome-estado" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="posicao-estado">Posição do Estado</label>
                            <input type="text" class="form-control" id="posicao-estado" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="cor-estado">Cor do Estado</label>
                            <input type="color" class="form-control" id="cor-estado" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <submit type="button" class="btn btn-danger" style="display:inline-block;float:left;" data-dismiss="modal">FECHAR</submit>
                    <button type="submit" class="btn btn-success" col-sm-offset-5>CRIAR</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function MudaCampo(id) 
    {
        var check_box = document.getElementById("checkbox-pop"+id).checked;

        var valor = !check_box;

        document.getElementById("curso-pop"+id).disabled = valor;
        document.getElementById("instituicao-pop"+id).disabled = valor;
        document.getElementById("produto-pop"+id).disabled = valor;
        document.getElementById("qtd-pop"+id).disabled = valor;
        document.getElementById("preco-pop"+id).disabled = valor;
        document.getElementById("desconto-pop"+id).disabled = valor;
        document.getElementById("qtd-pop"+id).disabled = valor;
        document.getElementById("end-entrega-pop"+id).disabled = valor;
        document.getElementById("tel-pop"+id).disabled = valor;
        document.getElementById("email-pop"+id).disabled = valor;
        document.getElementById("status-pop"+id).disabled = valor;
    }
    
    function DesabilitaCampo(id)
    {
        document.getElementById("checkbox-pop"+id).checked = false;
        MudaCampo(id);    
    }
</script>