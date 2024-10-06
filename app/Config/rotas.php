<?php

use App\Controllers\UsuarioController;
use App\Controllers\ReceitaController;
use App\Controllers\DespesaController;
use App\Controllers\MetaController;
use App\Controllers\HistoricoController;
use Hefestos\Rotas\Roteador;

$rotas = Roteador::instancia();

/* ----------------------------------------------------------------------
Cada rota deve ser respondida com o retorno de uma função, seja ela uma
função anônima ou um método de controller. Consulte a documentação.
---------------------------------------------------------------------- */


function carregarView($view, $dados = []) {
    return view($view, array_merge([
        'usuario' => [
            'nome' => '',
            'email' => '',
        ],
        'total' => '0',
        'receitas' => [],
        'despesas' => []
    ], $dados));
}


$rotas->get('/', function () {
    $dados = [
        'usuario' => [
            'nome' => 'Pedro Almeida',
            'email' => ' joao.almeida@gmail.com',
        ],
        'total' => '48200',
        'receitas' => ['receita 1', 'receita 2'],
        'despesas' => ['despesa 1']
    ];
    return carregarView('dashboard', $dados);
});


$rotas->get('/cadastro', function () {
    return carregarView('auth/cadastro');
});


$rotas->get('/login', function () {
    return carregarView('auth/login');
});


$rotas->post('/usuarios', [UsuarioController::class, 'store']); 
$rotas->delete('/usuarios/{id}', [UsuarioController::class, 'destroy']); 


$rotas->get('/receitas', [ReceitaController::class, 'index']); 
$rotas->get('/receitas/novo', [ReceitaController::class, 'create']); 
$rotas->post('/receitas', [ReceitaController::class, 'store']); 


$rotas->get('/despesas', [DespesaController::class, 'index']); 
$rotas->get('/despesas/novo', [DespesaController::class, 'create']); 
$rotas->post('/despesas', [DespesaController::class, 'store']); 


$rotas->get('/metas', [MetaController::class, 'index']); 
$rotas->get('/metas/novo', [MetaController::class, 'create']); 
$rotas->post('/metas', [MetaController::class, 'store']); 


$rotas->get('/historico', [HistoricoController::class, 'index']); 

