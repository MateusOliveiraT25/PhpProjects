@extends('layouts.app')

@section('content')

    <div class="container mt-5"><br><br>
        <h2 class="text-center mb-4">Manual de Orientação para o Usuário</h2>

        <div class="card">
            <div class="card-body">
                <h3>Introdução</h3>
                <p>Este manual tem o objetivo de orientar os usuários sobre a utilização do sistema de consultas médicas. Abaixo estão descritas as principais funcionalidades e instruções para o uso adequado do sistema.</p>
                <hr>

                <h3>1. Acesso ao Sistema</h3>
                <ul>
                    <li>Passo 1: Abra o navegador de sua preferência.</li>
                    <li>Passo 2: Acesse o site do sistema de consultas médicas através do endereço: <strong><a href="http://127.0.0.1:8000">http://127.0.0.1:8000</a></strong></li>
                    <li>Passo 3: Realize o login utilizando suas credenciais (e-mail e senha).</li>
                </ul>
                <hr>

                <h3>2. Página Inicial - Dashboard</h3>
                <p>Após realizar o login, você será redirecionado à página inicial, onde poderá visualizar as seguintes funcionalidades:</p>
                <ul>
                    <li><strong>Boas-vindas:</strong> Uma mensagem de boas-vindas com seu nome será exibida.</li>
                    <li><strong>Perfil:</strong> Acesse seu perfil clicando no botão "Perfil" para editar suas informações pessoais.</li>
                    <li><strong>Logout:</strong> Clique no botão "Logout" para sair da conta com segurança.</li>
                </ul>
                <hr>

                <h3>3. Pesquisa de Consultas</h3>
                <p>No centro da tela, há um campo de pesquisa para facilitar a localização de consultas. Utilize os seguintes critérios:</p>
                <ul>
                    <li><strong>Nome do Médico:</strong> Pesquise pelo nome completo ou parcial do médico.</li>
                    <li><strong>CRM:</strong> Pesquise pelo número do CRM do médico.</li>
                    <li><strong>Especialidade:</strong> Pesquise pela especialidade médica desejada.</li>
                </ul>
                <hr>

                <h3>4. Visualização das Consultas</h3>
                <p>As consultas disponíveis aparecerão em cartões na tela com as seguintes informações:</p>
                <ul>
                    <li>Nome do Médico</li>
                    <li>CRM</li>
                    <li>Especialidade</li>
                    <li>Data e Horário da Consulta</li>
                    <li>Botão "Ver Consulta" para obter mais detalhes.</li>
                </ul>
                <hr>

                <h3>5. Detalhes da Consulta</h3>
                <p>Ao clicar no botão "Ver Consulta", você será redirecionado para uma página com mais detalhes, incluindo o local da consulta e instruções para o dia.</p>
                <hr>

                <h3>6. Agendamento de Consultas</h3>
                <p>Para agendar uma nova consulta:</p>
                <ul>
                    <li>Passo 1: Clique no menu "Agendar Consulta".</li>
                    <li>Passo 2: Escolha o médico, especialidade, data e horário disponíveis.</li>
                    <li>Passo 3: Confirme os dados e clique em "Agendar".</li>
                </ul>
                <p>Você receberá uma confirmação do agendamento.</p>
                <hr>

                <h3>7. Cancelar uma Consulta</h3>
                <p>Para cancelar uma consulta já agendada:</p>
                <ul>
                    <li>Passo 1: Acesse a página "Meus Agendamentos".</li>
                    <li>Passo 2: Encontre a consulta que deseja cancelar.</li>
                    <li>Passo 3: Clique no botão "Cancelar" e confirme a ação.</li>
                </ul>
                <hr>

                <h3>8. Dúvidas e Suporte</h3>
                <p>Caso encontre algum problema ou tenha dúvidas sobre o sistema, você pode entrar em contato com o suporte através do e-mail <a href="mailto:suporte@sistemadeconsultas.com">suporte@sistemadeconsultas.com</a> ou pelo telefone (19) 98987-1025.</p>
            </div>
        </div>
    </div>
@endsection
