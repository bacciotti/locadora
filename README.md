## Vídeo Locadora Imperial  
Projeto apresentado a disciplina de Engenharia de Software  
Mestrado Profissional em Ciências da Computação  
Turma 2018 - Gestão de TI  
CIN UFPE  
Prof. Dr. Vinícius C. Garcia  

### ÍNDICE
**1. INTRODUÇÃO**  
**2. JUSTIFICATIVA**  
**3. DESCIÇÃO DO PRODUTO**  
**4. METODOLOGIAS**  
**4.1 METODOLOGIA DE GERENCIAMENTO DE PROJETO**  
**4.2 METODOLOGIA DE DESENVOLVIMENTO DE SOFTWARE**  
**5. TECNOLOGIAS**  
**6. MEMBROS DA EQUIPE**  
**7. ARQUIVOS IMPORTANTES**  

### 1. INTRODUÇÃO
Este projeto tem como objetivo tratar os diversos aspectos do Ciclo de Vida do Desenvolvimento do Software para uma Locadora de Vídeos chamada Imperial, como: concepção, análise, desenvolvimento, implementação e implantação, não limitado a estes.  
As informações mais importantes estão neste arquivo README.  
As demais informações acerca do projeto estão no arquivo Relatório Final, referenciado no final deste texto. Todos os documentos relativos ao projeto estão neste repositório GitHub.   
O projeto nos foi proposto em novembro/2018. A primeira reunião da equipe foi em 22/11 (a ata encontra-se no diretório "1 - Atas das Reuniões").

### 2. JUSTIFICATIVA
A Vídeo Locadora Imperial ainda não possui um sistema informatizado para auxílio de seu negócio. A equipe foi procurada para desenvolver um sistema capaz de gerenciar os empréstimos, devoluções, cadastro de clientes, entre outros.  
Entrevistas e reuniões com o cliente foram feitas e os requisitos já foram levantadados. 

### 3. DESCRIÇÃO
-- escrever quando o sistema estiver pronto -- 

### 4. METODOLOGIAS

#### 4.1 METODOLOGIA DE GERENCIAMENTO DE PROJETO
Workflow: sequencia de atividades

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


#### 4.2 METODOLOGIA DE DESENVOLVIMENTO DE SOFTWARE
A metodologia de gerenciamento de projeto escolhida pela equipe em reunião foi a DP - Dirigida a Plano. Os seguintes fatores justificam a escolha:
* a. Em acordo entre os membros da equipe, sentiu-se a necessidade de se ter um Gerente de Projetos para ser facilitador: organizar o cronograma, cobrar as entregas da equipe, entender o contexto do problema, dividir as tarefas, auxiliar em todas as fases do projeto, estimar prazos, mobilizar o time, entre outros.
* b. O projeto possui grande documentação: atas de reuniões, diversas estórias de usuários, artefatos modelados, relatórios, etc.
* c. O gerente de projetos elaborou um extensivo planejamento.
* d. Não há o envovimento do cliente. ( * )
* e. Não há entrega incremental, pois o cliente não está envolvido nas fases de desenvolvimento. Ou seja, não há validação por parte do cliente antes da entrega da versão final. ( * )
* f. Não há entrega de incrementos pequenos. Dado o porte pequeno do projeto, não sentiu-se necessidade de entregas pequenas e periódicas (pequenos releases).
* g. Não faremos uso da Programação em Pres (Pair Programming), devido a distância geográfica entre os membros da equipe. ( * )

( * ) Características do Método Ágil/XP.

Embora utilizemos dos conceitos da DP em sua maioria, não dispensamos algumas ideias interessantes ao projeto do Método Àgil, a saber:
* a. Foco nas pessoas e suas capacidades, não no processo em si.
* b. Manter a simplicidade, sempre que possível.
* c. Utilização de Estórias de Usuário para validar os requisitos.
* d. Utilização de testes TDD e BDD dentro do ciclo de implementação.
* e. Ritmo sustentável: pequenas quantidade de horas-trabalho diárias, devido ao contexto do projeto (distância geográfica entre os membros da equipe somada ao fato de que os membros possuem outras atividades no decorrer do dia).


Por fim, com base na documentação proposta no decorrer das aulas, conseguimos inferir que, de fato, a melhor metodologia a ser utilizada é a DP. Segundo o texto abaixo, notamos seis resposta SIM (que implica o uso de DP) e apenas três NÃO (que implica o uso de Ágil):
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

### 5. TECNOLOGIAS
A tecnologia de desenvolvimento a ser utilizada é a XXXXX, pois...
As ferramentas de desenvolvimento a serem utilizadas são YYYYY, pois...  

Mais detalhes sobre as metodologias e ferramentas podem ser lidas no Relatório Final.  

### 6. MEMBROS DA EQUIPE
i. LUCAS BACCIOTTI MOREIRA   
lbm5@cin.ufpe.br  
Website: https://cin.ufpe.br/~lbm5/    
Twitter: @baciotti  
GitHub: @bacciotti  
Role: Gerente do Projeto e Desenvolvedor  

ii. GUSTAVO COSTA MEIRELES  
gcm3@cin.ufpe.br  
Instagram: @gcmeireles   
GitHub:@gcmeireles  
Role: Analista de Requisitos e Desenvolvedor   

iii. WELINGTON MOTHÉ DE OLIVEIRA  
wmo@cin.ufpe.br  
GitHub: @wemomax  
Role: Engenheiro de Software e Desenvolvedor

iiii. DIEGO MENEGAZZI  
dm5@cin.ufpe.br  
Website: https://cin.ufpe.br/~dm5/  
GitHub: @omenegazzi  
Role: Analista de Testes e Desenvolvedor  

iiiii. CARLOS ALEXANDRE PORTO  
cap@cin.ufpe.br  
GitHub: @capcin  
Role: Analista de Requisitos e Engenheiro de Software   

### 7. ARQUIVOS IMPORTANTES
a. Introdução ao mini-mundo e Requisitos levantados: https://drive.google.com/file/d/16kJfE_s-CRvOfdSN1RvDyEjCLu34ErAx/view?usp=sharing  
b. Relatório Final (Relatório Técnico): https://raw.githubusercontent.com/bacciotti/locadora/master/2%20-%20Documenta%C3%A7%C3%A3o/1%20-%20Relato%CC%81rio%20Final.md?token=AcQVsp4z6bK0o7Vov3XwYxQ8bLTAjeAIks5cA87iwA%3D%3D
