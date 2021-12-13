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

    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: @{{ $fornecedor['nome'] }}
        <br>
        Status: @{{ $fornecedor['status'] }}
        <br>
        CNPJ: @{{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: (@{{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse

@endisset
<br>
