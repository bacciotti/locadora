--- TÓPICOS SOLICITADOS (REMOVER APÓS TÉRMINO) ---


**O projeto deve compreender, não limitado a, os seguintes itens ou tópicos:**  

**Introdução:** Contendo a contextualização do domínio do negócio ao qual o projeto está inserido, o problema e motivação (mercadológica, digamos assim) para o investimento no projeto (você vão fazer uma venda do projeto pra mim, então, tem que estar claro que existe uma oportunidade aqui) e apresentação da proposta.  

**Gerência de Configuração e Ambiente:** Descrição das ferramentas e ambientes de desenvolvimento utilizados, com os respectivos links (i.e. ferramentas de desenvolvimento, linguagens, bancos de dados, bibliotecas, frameworks, repositórios de gerenciamento de versões e mudanças, servidores de implantação, entre outras).  

**Características da aplicação:** Elicitação das características da aplicação, suas funcionalidades, diferenciais, etc.
Visão de Análise e Projeto (Arquitetura): Análise e Projeto do sistema a ser desenvolvido. podem ser utilizados especificações de casos de uso (para os mais 15% mais complexos) e diagramas para apoiar o projeto.  

**Visão de Implantação:** Visão e instruções de implantação do sistema. Um release notes com os erros, falhas e faltas conhecidos também é bem visto. Site onde ele está implantado e/ou um vídeo de demonstração promovendo o produto (pode estar no youtube ou outro serviço semelhante).  

**Visão de Uso:** Guia de uso da solução do ponto de vista de todos os stakeholders identificados.  

**Revisão do Projeto:** Descrição do processo de desenvolvimento, principais problemas e tomadas de decisão em relação ao projeto. Atribuição das atividades e técnicas de gerenciamento, monitoramento e controle.  

**Revisão Individual:** Lições aprendidas do ponto de vista individual dos membros do time em relação a execução do projeto em si.  

**RASCUNHO**  
Explicar sobre o SourceTree eo Kraken.  
Reuniões (online e presenciais).  

------------------------------------------------------------------
------------------------------------------------------------------

### ÍNDICE
**1. SIGLAS UTILIZADAS**  
**2. INTRODUÇÃO**    
**3. GERÊNCIA DE CONFIGURAÇÃO E AMBIENTE**    
**4. CARACTERÍSTICAS DA APLICAÇÃO**   
**5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA)** 
   **5.1 METODOLOGIA DE GERENCIAMENTO DE PROJETO**  
   **5.2 METODOLOGIA DE DESENVOLVIMENTO DE SOFTWARE**  
   **5.3 TECNOLOGIAS**  
   **5.4 FASES**  
**6. VISÃO DE IMPLANTAÇÃO**    
**7. VISÃO DE USO**    
**8. REVISÃO DO PROJETO**    
**9. REVISÃO INDIVIDUAL**

### 1. SIGLAS UTILIZADAS
1 - GP: Gerente de Projetos  
2 - DP: Dirigido a Plano  
3 - US: User Stories (Estórias de Usuário)  

### 2. INTRODUÇÃO
A Vídeo Locadora Imperial ainda não possui um sistema computacional para registro de suas principais atividades, por exemplo: cadastro de clientes, cadastro de filmes, busca de filmes, cadsatro de empréstimos e devoluções.  

Desta forma, a equipe foi procurada para desenvolver um sistema capaz de registrar tais informações, facilitando o gerenciamento do negócio em questão.  

O carro-chefe do negócio é o empréstimo de vídeos/filmes, que possuem cópias em várias mídias diferentes (VHS e Blu-Ray, por exemplo) e vários gêneros. O registro destas informações no sistema a ser desenvolvido é necessário.  

Os empréstimos tem um preço a depender do tipo de mídia e se o filme é lançamento ou não. Porém é possível aumentar ou diminuir o preço e o prazo de devolução em ocasiões extraordinárias.  

Além disso, é necessário registrar as informações das distribuidoras e dos clientes. Os clientes podem ter dependentes.  

Quanto à devolução, caso haja atraso é aplicada uma multa.  

Consultas ao acervo de vídeos/filmes podem ser feitas pela internet.  

Diante do citado, a Equipe precisa elaborar todas as fases do desenvolvimento deste projeto de software para entregar no prazo estipulado. O levantamento de requisitos foi realizado mediante entrevistas e reuniões com o cliente. Desta forma, se faz necessário a conclusão da análise de requisitos, a documentação, o planejamento, a implementação e, por fim, a implantação do sistema.  

A Equipe irá se reunir periodicamente para discussão das tarefas. As reuniões serão tanto presenciais como online. Um Gerente de Projeto foi escolhido para ser facilitador da equipe: ajudar a organizar o cronograma, definir papéis e assistir as fases do projeto como um todo.  

Para controle de versões (tanto do código como de todos os outros artefatos do projeto) será usado a tecnologia Git, com o cliente online GitHub, embora alguns desenvolvedores também façam uso de clientes locais, como SourceTree e Kraken.  

A análise de requisitos será convertida em Estórias de Usuários, para facilitar a elaboração de cada uma das funcionalidades do sistema. Para cada requisito do cliente será feita uma ou mais Estórias de Usuários.  

Na fase de documentação, alguns artefatos podem ser úteis aos desenvolvedores, como o Diagrama de Classes. Novos artefatos surgirão a medida que forem constatadas sua necessidade pela equipe.  

Para resolver a problemática apresentada a Equipe desenvolveu um software leve, intuitivo, rápido e online.
Com as tecnologias de desenvolvimento web utilizadas, o cliente terá um software capaz de ser executado em vários computadores com internet, ou seja, cada funcionário poderá utilizar um computador ao mesmo tempo que outros, sem prejudicar o armazenamento e recuperação de informações.  

Os únicos requisitos são: possuir um computador com internet e com um navegador, visto que utilizamos técnicas que fazem o processamento de informações ficar toda no servidor, e não em sua máquina local. Seu computador apenas exibirá os resultados do processamento.  

Além disso, o fato de o processamento e os dados estarem nas nuvens diminui o risco de perda de informações por sinistros (incêndios, alagamentos, quedas de energia, assaltos).  

Sua interface amigável encurta o espaço entre o usuário leigo e a aplicação. Botões intuitivos e a forma que os itens estão dispostos na tela tornam a experiência facilitada, mesmo para aqueles que não tem muita bagagem em informática.  

A velocidade é o diferencial: com uma conexão estável, o software faz o armazenamento e a recuperação das informações sem depender do disco rígido local.  

O botão XXX, por exemplo,...  

A tela YYY, ...  

Já o módulo KKKKK...  

Nosso software poderá ser utilizado por qualquer locadora de vídeos. Sua arquitetura flexível permite adaptar-se a contextos diferentes com pouca manutenção.  

Como consequência de o software estar em um servidor externo, as atualizações se darão por meio da internet, sem a necessidade da visita de um técnico especializado no local.  

Desta forma, apresentamos nosso produto a seguir:  
Tela X...  
Tela Y...  
Funcionalidade K...  
Módulo Z...  

### 5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA)

#### 5.1 METODOLOGIA DE GERENCIAMENTO DE PROJETO
A metodologia de desenvolvimento de software escolhida pela equipe é a Cascata (ou Waterfall). Entende-se que esta metodologia é mais aplicável neste projeto pelos fatores a seguir:

* a. Os membros da equipe possuem experiência neste modelo em questão. O entendimento e a posterior implantação de uma nova modalidade de desenvolvimento implicaria em possíveis atrasos no cronograma.
* b. Já possuímos os requisitos levantados: desta forma, poderemos prosseguir com a documentação e planejamento prévios antes de iniciarmos a codificação (característica da Waterfall/BDUF - Big Design Up Front).
* c. O cliente (neste caso, o professor) não estará presente nas fases do ciclo de vida do projeto. Deste modo, a refatoração dos pequenos releases se torna complicada. O cliente não estará apto para analisar todas as versões. ( * )
* d. Temos o controle de todo o processo, com visão adequada do cronograma, divisão de tarefas e papéis. ( * )
* e. Não há a necessidade de se desenvolver a primeira versão o mais rápido possível. Entendemos que, pelo fato de o prazo para entrega ser curto, a entrega de versões periódicas atrasaria o projeto. Portanto, optamos por entregar apenas uma versão final ao cliente. isto não impede, é claro, que versões internas sejam refatoradas e testadas iterativamente entre os membros da equipe. ( * )
* f. Dado o porte pequeno do projeto, não será desenvolvido um protótipo. ( * )
* g. Nós possuímos uma visão detalhada do mini-mundo e dos requisitos, portanto possuímos uma especificação detalhada do sistema. ( * )

( * ) Características inerentes ao processo evolucionário de desenvolvimento de software.

Embora utilizemos majoritariamente os princípios do método Waterfall, algumas ideias do processo evolucionário foram utilizadas, mesmo que minimamante: a implementação, os testes e a validação dos requisitos foram intercalados e iterados entre os membros da equipe.

Por fim, conforme sugestão no enunciado no projeto, a ferrament Kanban (aba Projects do GitHub) foi utilizada para auxiliar na divisão das tarefas e na observação de todo o ciclo de vida do projeto. Devido a distância geográfica entre os membros da equipe e o prazo curto para entrega, o Kanban, por ser visual, proporciona um rápido entendimento do estado atual das tarefas e seus responsáveis. Além disso, ele é fácil de trabalhar e está online na plataforma GitHub, juntamente a outros artefatos do projeto.

Mais detalhes sobre as metodologias e ferramentas podem ser lidas no Relatório Final.  


#### 5.2 METODOLOGIA DE DESENVOLVIMENTO DE SOFTWARE
A metodologia de gerenciamento de projeto escolhida pela equipe em reunião foi a DP - Dirigida a Plano. Os seguintes fatores justificam a escolha:
* a. Em acordo entre os membros da equipe, sentiu-se a necessidade de se ter um Gerente de Projetos para ser facilitador: organizar o cronograma, cobrar as entregas da equipe, entender o contexto do problema, dividir as tarefas, auxiliar em todas as fases do projeto, estimar prazos, mobilizar o time, entre outros.
* b. O projeto possui grande documentação: atas de reuniões, diversas estórias de usuários, artefatos modelados, relatórios, etc.
* c. O gerente de projetos elaborou um extensivo planejamento.
* d. Não há o envovimento do cliente. ( * )
* e. Não há entrega incremental, pois o cliente não está envolvido nas fases de desenvolvimento. Ou seja, não há validação por parte do cliente antes da entrega da versão final. ( * )
* f. Não há entrega de incrementos pequenos. Dado o porte pequeno do projeto, não sentiu-se necessidade de entregas pequenas e periódicas (pequenos releases).
* g. Não faremos uso da Programação em Pres (Pair Programming), devido a distância geográfica entre os membros da equipe. ( * )

( * ) Características do Método Ágil/XP.

Embora utilizemos dos conceitos da DP em sua maioria, não dispensamos algumas ideias interessantes ao projeto do Método Ágil, a saber:
* a. Foco nas pessoas e suas capacidades, não no processo em si.
* b. Manter a simplicidade, sempre que possível.
* c. Utilização de Estórias de Usuário para validar os requisitos.
* d. Utilização de testes TDD e BDD dentro do ciclo de implementação.
* e. Ritmo sustentável: pequenas quantidade de horas-trabalho diárias, devido ao contexto do projeto (distância geográfica entre os membros da equipe somada ao fato de que os membros possuem outras atividades no decorrer do dia).


Por fim, com base em SOMMERVILLE (2011), conseguimos inferir que, de fato, a melhor metodologia a ser utilizada é a DP. Segundo o texto abaixo, notamos seis respostas SIM (que implica o uso de DP) e apenas três NÃO (que implica o uso de Ágil):
* 1. É importante ter uma especificação e projeto? SIM
* 2. Os clientes não estão disponíveis para feedback? SIM
* 3. O Sistema a ser desenvolvido é grande? NÃO
* 4. O Sistema é complexo (ex. tempo real)? NÃO
* 5. Vai ter um ciclo de vida longo? SIM
* 6. Está utilizando ferramentas “ruins”? NÃO
* 7. O time está geograficamente distribuído? SIM
* 8. A cultura do time é orientada a documentação? SIM
* 9. O Time tem um perfil “fraco” de desenvolvimento? SIM
* 10.O sistema está sujeito a regulamentação externa? SIM

Mais detalhes sobre as metodologias e ferramentas podem ser lidas no Relatório Final.  

### 5.3 TECNOLOGIAS
A tecnologia de desenvolvimento a ser utilizada é a XXXXX, pois...
As ferramentas de desenvolvimento a serem utilizadas são YYYYY, pois...  

Mais detalhes sobre as metodologias e ferramentas podem ser lidas no Relatório Final.  
