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
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset

