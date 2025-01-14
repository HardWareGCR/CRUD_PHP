<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_REQUEST["nome"];
            $email = $_REQUEST["email"];
            $senha = md5($_REQUEST["senha"]);
            $data_nasc = $_REQUEST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query( $sql);

            if($res==true){
                print "<script>alert('Cadastrado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi Possivel Cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
            
        case 'editar':
            $nome = $_REQUEST["nome"];
            $email = $_REQUEST["email"];
            $senha = md5($_REQUEST["senha"]);
            $data_nasc = $_REQUEST["data_nasc"];

            $sql = "UPDATE usuarios SET
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nasc}'
                    WHERE
                        id=".$REQUEST["id"];


            $res = $conn->query( $sql);

            if($res==true){
                print "<script>alert('Editado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi Possivel Editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case "excluir":

            $sql = "DELETE FROM usuarios WERE id=".$_REQUEST["id"];

            $res = $conn->query( $sql);

            if($res==true){
                print "<script>alert('Excluído com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi Possivel Exclir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }