<!DOCTYPE html>

<html lang="pt-br">
<head>

    <title>Login</title>
    <meta charset="utf-8">

    <style type="text/css">

        body{
            background-image: url("<?php echo base_url('assets/imagens/fundo.jpg')?>");
        }

        form{
            margin-top: 195px;
        }
        
        h3{
            color : red;
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
            background-color: yellow;
            color: black;
            padding: 10px 10px;
            text-align: center;
            margin: 4px 2px;
            font-size: 10px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            border: solid black 4px;
            font-weight: bold;
        }


        .logologo{
            display: block;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            margin-top: 140px;
            width: 300px;
            height: 128px;
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
            background-color: yellow;
            color: black;
            padding: 10px 10px;
            text-align: center;
            margin: 4px 2px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            border: solid black 6px;
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

    
    <img src="<?php echo base_url('assets/imagens/logo-sem-slogan.png')?>" alt="gradu" class="logologo">

    <div class="log-box" id="main">

        <form role="form" action="<?php echo base_url('login/validar'); ?>" method="POST">

            <input class="caixas" type="text" id="usuario" name="usuario" autofocus required placeholder="LOGIN" >
            <br><br>

            <input class="caixas" type="password" id="senha" name="senha" required placeholder="SENHA">
            <br><br>

            <a href="sucesso.php.html">
                <input class="botaum" type="submit" value="ENTRAR">
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
