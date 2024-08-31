# Sistema de Gerenciamento de Consultas Médicas

## 1. Escopo

### 1.1 Específicos
- Automatizar o processo de agendamento de consultas médicas.
- Implementar autenticação e autorização de usuários.
- Gerenciar o status das consultas.
- Disponibilidade de Consultas.

### 1.2 Mensuráveis
- Reduzir o tempo médio de agendamento de consultas em 50% em comparação com o método manual.
- Atingir 95% de precisão no gerenciamento de status das consultas.
- Implementar o sistema com 100% de cobertura de CRUD.

### 1.3 Atingíveis
- Desenvolver o sistema em 4 meses.
- Realizar testes de usabilidade com 10 usuários.
- Atingir uma taxa de sucesso de login de 98%.

### 1.4 Relevantes
- Melhorar a eficiência do atendimento médico.
- Garantir a segurança dos dados dos pacientes.
- Aumentar a satisfação dos usuários em pelo menos 20%.

### 1.5 Temporais
- **Fase de desenvolvimento:** 4 meses
  - **Primeiro mês:** Design do banco de dados e implementação do CRUD de usuários.
  - **Segundo mês:** Desenvolvimento do CRUD de consultas e lógica de autenticação/autorização.
  - **Terceiro mês:** Implementação de funcionalidades de agendamento, cancelamento e gerenciamento de status de consultas.
  - **Quarto mês:** Testes de usabilidade, ajustes finais e preparação para o lançamento.
- **Lançamento da primeira versão:** 1 mês após a conclusão da fase de desenvolvimento.
- **Revisão e melhorias contínuas:** 6 meses após o lançamento da primeira versão.

## 2. Cronograma de Desenvolvimento (4 meses)

### Mês 1: Planejamento e Design
- **Semana 1:**
  - Reunião de kickoff.
  - Criação do diagrama ER.
  - Definição das tecnologias.
- **Semana 2:**
  - Design das interfaces UI/UX.
  - Desenvolvimento do backend e modelo User.
  - Implementação do CRUD básico para User.
- **Semana 3:**
  - Continuação do CRUD de usuários.
  - Funcionalidades de autenticação e autorização.
  - Testes iniciais.
- **Semana 4:**
  - Finalização do CRUD de usuários.
  - Design e modelagem do banco de dados para consultas.
  - Revisão e ajustes.

### Mês 2: Desenvolvimento do Módulo de Consultas
- **Semana 5:**
  - Implementação do modelo Consulta.
  - CRUD de consultas.
  - Relacionamento entre User e Consulta.
- **Semana 6:**
  - Funcionalidades de filtragem e busca.
  - Testes unitários.
  - Validações de agendamento.
- **Semana 7:**
  - Continuação dos testes e correções.
  - Gerenciamento de status das consultas.
  - Desenvolvimento da UI para o módulo de consultas.
- **Semana 8:**
  - Integração frontend e backend.
  - Testes de integração.
  - Revisão e ajustes.

### Mês 3: Funcionalidades Adicionais e Integração
- **Semana 9:**
  - Implementação dos modelos Médico e Paciente.
  - Desenvolvimento da UI para médicos e pacientes.
- **Semana 10:**
  - Integração dos modelos Médico e Paciente.
  - Funcionalidades de notificações.
  - Testes unitários e de integração.
- **Semana 11:**
  - Implementação de receitas médicas.
  - Feedback dos pacientes.
  - Testes e correções.
- **Semana 12:**
  - Relatórios de consultas e estatísticas.
  - Revisão final e ajustes de UI/UX.
  - Preparação para o lançamento.

### Mês 4: Testes Finais e Lançamento
- **Semana 13:**
  - Testes finais com 10 usuários.
  - Correção de bugs.
  - Otimização do desempenho.
- **Semana 14:**
  - Ajustes pós-teste.
  - Revisão da documentação.
  - Configuração final do ambiente de produção.
- **Semana 15:**
  - Lançamento da versão 1.0.
  - Monitoramento inicial.
  - Coleta de feedback dos usuários.
- **Semana 16:**
  - Revisão de métricas e planejamento de melhorias.
  - Documentação final.

### Fase Pós-Lançamento (1 mês após o lançamento)
- **Mês 5:**
  - Coleta contínua de feedback.
  - Implementação de melhorias incrementais.
  - Planejamento para a próxima versão.

## 3. Diagrama de Casos de Uso
- Criar um sistema para agendamento e gerenciamento de consultas médicas que permita:
  - Agendar, editar e cancelar consultas facilmente.
  - Gerenciar o status das consultas (agendado, cancelado, concluído, pendente).
  - Autenticar e autorizar usuários (médicos e pacientes).
  - Visualizar e agendar consultas disponíveis.

## 4. Recursos

### Recursos Humanos
- Desenvolvedores: Para o backend e frontend.
- Designer UI/UX: Para criar as interfaces.
- Testadores: Para verificar o funcionamento do sistema.
- Gerente de Projeto: Para coordenar o trabalho.

### Recursos Tecnológicos
- Tecnologias: Laravel (PHP), MySQL/PostgreSQL, HTML/CSS, JavaScript.
- Infraestrutura: Servidores e ferramentas de desenvolvimento.

### Recursos Financeiros
- Orçamento: Para equipe, infraestrutura e ferramentas.

## 6. Análise de Riscos

### 6.1 Riscos Técnicos
- **Integração e Desempenho:** Problemas podem surgir ao integrar o sistema ou com o desempenho em grande escala.
  - **Mitigação:** Testar bem a integração e otimizar o desempenho.

### 6.2 Riscos de Cronograma
- **Atrasos:** Podem ocorrer atrasos no desenvolvimento.
  - **Mitigação:** Monitorar o progresso e ajustar o cronograma se necessário.

### 6.3 Riscos de Qualidade
- **Erros e Usabilidade:** Erros no sistema ou problemas de usabilidade.
  - **Mitigação:** Realizar testes rigorosos e ajustar conforme o feedback.

### 6.4 Riscos de Segurança
- **Vulnerabilidades e Privacidade:** Possíveis falhas de segurança e comprometimento de dados.
  - **Mitigação:** Implementar medidas de segurança e proteção de dados.

### 6.5 Riscos de Aceitação
- **Dificuldade de Adoção:** Usuários podem ter dificuldade em usar o sistema.
  - **Mitigação:** Fornecer treinamento e suporte.

### 6.6 Riscos Financeiros
- **Orçamento:** O projeto pode ultrapassar o orçamento.
  - **Mitigação:** Controlar os custos e planejar adequadamente.

## 7. Diagrama

### Models
- **User**
  - Nome
  - Email
  - Senha
  - Telefone
  - Tipo usuário (médico, paciente)
- **Consulta**
  - Nome
  - CRM
  - Especialidade
  - Data da consulta
  - Horário
  - Status (agendado, cancelado, concluído, pendente)
  - Disponível (Sim/Não)
- **Agendamento**
  - Consulta_id
  - User_id
  - Data_agendamento

### Controllers
- UserController
- ConsultaController
- AgendamentoController
- ProfileController
- DashboardController

### Middleware
- ConsultasMiddleware
- AgendamentosMiddleware
- DashboardMiddleware

## 8. Estrutura de Diagrama de Fluxo
- **Início**
  - ↓
  - **Login**
  - ↓
  - **Usuário Logado**
  - ↓
  - **Busca de Consultas**
  - ↓
  - **Termo de Pesquisa Inserido**
  - ↓
  - **Consulta Disponível?**
    - **Sim** / **Não**
    - ↓ / ↓
    - **Exibe Lista de Consultas**  |  **Exibe "Sem Consultas Disponíveis"**
    - ↓
    - **Selecionar Consulta**
    - ↓
    - **Detalhes da Consulta Exibidos**
    - ↓
    - **Confirmar Agendamento?**
      - **Sim** / **Não**
      - ↓ / ↓
      - **Prosseguir com Agendamento**  |  **Retornar à Página Inicial**
      - ↓
      - **Consulta Disponível no Sistema?**
        - **Sim** / **Não**
        - ↓ / ↓
        - **Confirmar Agendamento**  |  **Exibir Mensagem de Indisponibilidade**
        - ↓
        - **Agendamento Concluído**
        - ↓
        - **Fim**
