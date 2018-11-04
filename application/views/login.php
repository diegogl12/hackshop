<!DOCTYPE html>

<html lang="pt-br">
<head>

    <title>Login</title>
    <meta charset="utf-8">
    
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/css/estilo.css"); ?>" rel="stylesheet">

    <style type="text/css">

        body{
            background-image: url("<?php echo base_url('assets/imagens/back.png')?>");
            width: 100%;
            height: 100%;
        }

        form{
            margin-top: 20px;
        }
        
        h3{
            color : red;
        }
        
        .instrucao{
            border-radius: 115px;
            margin-top: 150px;
            position: relative;
            line-height: 30px;
            
        }
        .caixas{
            text-align: center;
            line-height: 30px;
            font-size: 16px;
            border-radius: 5px;
            -moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow:  0px 2px 10px rgba(0, 0, 0, 0.3);
            background-color: #f7f7f7;
        }

        .botaum{
            background-color: white;
            color: black;
            padding: 10px 10px;
            text-align: center;
            margin: 4px 2px;
            font-size: 10px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            border: solid red 4px;
            font-weight: bold;
        }


        .logologo{
            display: block;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            margin-top: 140px;
            width: 100px;
            height: 100px;
        }
        
        .logo{
            display: block;
            position: relative;
            margin-left: 10%;
            margin-right: 90%;
            margin-top: 90%;
            width: 20%;
            height: 20%;
        }
        
        .top
        {
            margin-top: 90%;
            width: 100%;
            height: 30%;
            background-color: black;
             
        }

        #main {
            margin: auto;
            margin-top: -155px;
            box-sizing: border-box;
            width: 360px;
            height: 450px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .novo-usuario{
            position: absolute;
            left: 88%;
            top: 10px;
            text-decoration: none;
        }
        
        .botaum-nu{
            background-color: white;
            color: black;
            padding: 10px 10px;
            text-align: center;
            margin: 4px 2px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            border: solid red 6px;
        }

        .log-box{
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow:  0px 2px 10px rgba(0, 0, 0, 0.3);
        }

    </style>

</head>

<body>

    <div class="top">
        <img src="<?php echo base_url('assets/imagens/logo AiCuide.png')?>" alt="gradu" class="logo">

        <div class="topnav" style="width: 480px; margin-left: 55%; position: relative">
            <a class="active" href="<?php echo base_url("login")?>">Página Principal</a>
            <a href="<?php echo base_url('historico')?>">Histórico de Atendimento</a>
          <a href="#contact">Logout</a>
        </div>
    </div>
    
    <img src="<?php echo base_url('assets/imagens/digital.png')?>" alt="gradu" class="logologo">


    <div class="log-box" id="main">
        <h3 class="instrucao">
            INSIRA UMA DIGITAL
        <br>OU</h3>
    
        <form role="form" action="<?php echo base_url('Login/validar'); ?>" method="POST">
            <input class="caixas" type="text" id="cpf" name="usuario" autofocus required placeholder="CPF ou RG" autocomplete="OFF">
            <select class="caixas" name="documento">
                <option selected value="cpf">CPF</option>
                <option value="rg">RG</option>
            </select>
            <br><br>

            <a href="sucesso.php.html">
                <input class="botaum" type="submit" value="PESQUISAR">
            </a>
            

        </form>

            <div class="my-panel-heading">
                <h3 class="panel-title" style="padding: 5px">
                    <u> <?php echo $this->session->flashdata('mensagem_login'); ?> </u>
                </h3>
            </div>
        
    </div>

</body>
</html>
