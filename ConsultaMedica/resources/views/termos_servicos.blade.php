@extends('layouts.app')

@section('content')
    <div class="container mt-5"><br><br>
        <h1 class="text-center mb-4">Termos de Serviço</h1>
        
        <div class="card p-4">
            <p>Última Atualização: <strong>{{ now()->format('d/m/Y') }}</strong></p>

            
            <p>Bem-vindo ao nosso sistema de consultas médicas. Ao utilizar nossos serviços, você concorda em seguir os termos e condições descritos abaixo. Por favor, leia-os atentamente.</p>

            <h3>1. Aceitação dos Termos</h3>
            <p>Ao acessar ou usar nosso sistema de consultas médicas, você concorda em cumprir estes Termos de Serviço, bem como nossa <a href="">Política de Privacidade</a>. Se você não concordar com qualquer parte dos termos, você não deve usar o serviço.</p>

            <h3>2. Uso do Sistema</h3>
            <h4>2.1 Cadastro e Acesso</h4>
            <p>Para usar o sistema, você deve se registrar fornecendo informações precisas e completas, incluindo nome, e-mail e senha. Você é responsável por manter a confidencialidade de suas credenciais de login e por todas as atividades realizadas em sua conta.</p>

            <h4>2.2 Responsabilidade do Usuário</h4>
            <p>O usuário é responsável por todas as informações fornecidas no sistema, incluindo a veracidade dos dados relacionados às consultas agendadas.</p>

            <h3>3. Agendamento e Cancelamento de Consultas</h3>
            <h4>3.1 Agendamento</h4>
            <p>Os usuários podem agendar consultas médicas diretamente pelo sistema, de acordo com as datas e horários disponíveis. Ao confirmar o agendamento, o usuário concorda em comparecer à consulta no local e horário informados.</p>

            <h4>3.2 Cancelamento</h4>
            <p>Os cancelamentos de consultas podem ser realizados diretamente pelo sistema, dentro do prazo estipulado pelo médico ou clínica.</p>

            <h3>4. Conduta do Usuário</h3>
            <p>Ao utilizar o sistema, você concorda em não violar ou tentar violar a segurança do sistema; não enviar ou transmitir qualquer conteúdo ilegal, prejudicial ou ofensivo; e respeitar a privacidade e os direitos de outros usuários.</p>

            <h3>5. Direitos Autorais e Propriedade Intelectual</h3>
            <p>Todos os conteúdos do sistema são de propriedade da empresa ou licenciados para uso pela mesma. É proibido copiar, distribuir ou modificar qualquer conteúdo do sistema sem permissão.</p>

            <h3>6. Limitação de Responsabilidade</h3>
            <p>O sistema é fornecido "como está". Não garantimos que o serviço será ininterrupto ou livre de erros, e não somos responsáveis por qualquer dano resultante do uso do sistema.</p>

            <h3>7. Alterações nos Termos</h3>
            <p>Reservamo-nos o direito de modificar estes Termos de Serviço a qualquer momento. As alterações entrarão em vigor imediatamente após a publicação.</p>

            <h3>8. Política de Privacidade</h3>
            <p>Ao utilizar o sistema, você também concorda com nossa <a href="">Política de Privacidade</a>.</p>

            <h3>9. Contato</h3>
            <p>Em caso de dúvidas sobre estes Termos de Serviço, entre em contato pelo e-mail suporte@sistemadeconsultas.com ou pelo telefone (19) 98987-1025.</p>

            <h3>10. Lei Aplicável</h3>
            <p>Estes Termos de Serviço são regidos pelas leis do Brasil. Quaisquer disputas serão resolvidas nos tribunais do estado de São Paulo.</p>
        </div>
    </div>
@endsection
