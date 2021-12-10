<h3>Fornecedor</h3>


@php

    /* 
    if(empty($variavel)) {} // retorna true se a variavel estiver vazia

    Variavel com valor vazio em PHP
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
     */

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}

    <!-- 
        $variavel testada não estiver definida
        ou
        $variavel testada possuir o valor null
    -->
@endisset

