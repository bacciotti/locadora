### User Stories
* Responsável: Carlos Alexandre Porto (@capcin)
* Objetivo: Escrever Histórias de Usuário com base nos Requisitos Levantados
* Documento origem (Requisitos): https://drive.google.com/file/d/16kJfE_s-CRvOfdSN1RvDyEjCLu34ErAx/view
* Deadline: 10/12/18

[US001] Como um funcionário da locadora, eu quero registrar todas as locações de cada cliente para que possa controlar as 
datas de devolução e valores de cada item alugado.  
[US002] Como um funcionário da locadora, eu quero registrar todas as devoluções para que eu tenha controle sobre os itens 
devolvidos e os itens a devolver.  
[US003] Como funcionário da locadora, eu quero registrar quanto e quando o cliente irá pagar por cada locação, seja no ato  
do aluguel ou na entrega.  
[US004] Como funcionário da locadora, eu preciso registrar reservas de filmes para qualquer cliente, bem como o tipo de  
mídia que o cliente deseja reservar (BlueRay ou DVD).  
[US005] Como funcionário da locadora, eu quero que as reservas com prazo de retirada de filmes expirados sejam desfeitas  
automaticamente, conforme as normas da empresa.  
[US006] Como cliente de uma locadora, eu gostaria de cancelar as minhas reservas quando desejar, de acordo com as normas da  
locadora.  
[US007] Como proprietário da locadora, eu preciso controlar todo o acervo da locadora, indicando quais filmes estão na empresa  
e quais filmes estão locados, bem como a data de devolução de cada item alugado.  
[US008] Como proprietário da locadora, eu preciso registrar todas as distribuidoras de filmes, bem como qual empresa é  
responsável por distribuir cada filme.  
[US009] Como funcionário da locadora, eu quero realizar cosultas ao acervo de filmes, podendo pesquisar e/ou filtrar os filmes  
pelas seguintes infomações: Título (inteiro pou parte dele), gênero, tipo de mídia disponível ou ator.  
[US010] Como funcionário da locadora, eu quero registrar e gerir todos os clientes titulares da locadora. Quero ainda registrar os clientes dependentes que podem alugar filmes no nome do Cliente Titular.  
[US011] Como funcionário da locadora, eu preciso ter a liberdade de ativar e desativar clientes, conforme as normas da empresa.  
[US012] Como cliente de uma locadora, eu gostaria de receber mensagens sempre que o filme que eu reservei estiver disponível para  
retirada.  
[US013] Como funcionário da locadora, eu preciso conseguir flexibilizar o valor das locações através de descontos, bem como  
aumentar o prazo de devolução de filmes, de acordo com as normas da empresa.  
[US014] Como proprietário de uma locadora, eu preciso que o sistema efetue a cobrança de multa por itens devolvidos com atraso.  
O valor da multa se dará pelo número de dias em atraso multiplicados pelo valor da locação do Item (M = n * LV).  
[US015] Como funcionário da locadora, eu quero que as reservas canceladas automaticamente pelo sistema não sejam excluídas, mas sim marcadas como expiradas para que possam ser consultadas em qualquer momento no futuro.  
[US016] Como funcionário da locadora, eu quero manter um histórico de todas as locações e é imprescindível que clientes que  
tenham realizado algum empréstimo não possam ser excluídos.  
[US017] Como proprietário de uma locadora, eu quero que, sempre que um cliente titular for desativado, todos os clientes dependentes  
atrelados a ele devem ser também desativados.  
[US018] Como proprietário de uma locadora, eu quero que cada cliente tenha um número de inscrição único no meu sistema de locação.  
[US019] Como cliente de uma locadora, eu gostaria de poder registrar de zero até três dependentes, bem como excluir ou  
adicionar dependentes há qualquer tempo, dependendo das normas da empresa.  
[US020] Como funcionário de uma locadora, eu posso permitir que os clientes paguem pelos itens locados no ato do aluguel ou no  
momento da devolução dos filmes. Caso a segunda opção seja escolhida, o pagamento deverá ser obrigatóriamente realizado na devolução.  
[US021] Como proprietário de uma locadora, eu quero permitir que os clientes realizem pagamentos em dinheiro, cheque ou cartão.  
[US022] Como funcionário de uma locadora, eu devo atender às reservas conforme a ordem temporal de realização das mesmas, considerando  
ainda o tipo de mídia em solicitado em cada registro.  
[US023] Como proprietário de uma locadora, eu quero que cada filme inserido no sistema possua um valor de locação associado. Esse  
valor de locação dependerá do tipo de mídia e do registro do filme (Lançamento ou Catálogo). Portanto, caso o item seja um lançamento,  
um acréssimo de 50% do valor deve ser inserido no valor desse mesmo item.  
[US024] Como funcionário de uma locadora, eu quero que o sistema coloque o prazo de devolução automaticamente para cada aluguel.  
Filmes com registro tipo Lançamento devem ser devolvidos no dia seguinte, enquanto filmes com registro tipo Catálogo devem ser devolvidos em 3 dias corridos.  
[US025] Como cliente de uma locadora, eu devo ter a garantia de que, sempre que eu alugar um filme e pagar no ato da locação, esse  
aluguel não poderá ser cancelado em nenhuma hipótese.  
[US026] Como funcionário de uma locadora, eu quero que a data de devolução de um filme seja sempre superiores à data de locação, não  
importando a circunstância.  
[US027] Como funcionário de uma locadora, eu desejo que uma reserve expire após 24h da comunicação da mesma para o Cliente.  
[US028] Como proprietário de uma locadora, eu quero impedir clientes com débitos de realizar locações ou reservas, independente do  
valor devido.  
[US039] Como funcionário de uma locadora, eu não quero que o sistema aceite reservas de filmes que estejam disponíveis na locadora.  
[US030] Como proprietário de uma locadora, eu quero que o sistema seja segmentado e que determinadas funcionalidades não sejam  
visíveis por todos. A Manipulação ao acervo deve ser restrita os administradores da empresa, funcionalidades de atendimento ao cliente  
devem ser visíveis por todos os funcionário da empresa, enquanto as funcionalidades de consulta ao acervo devem estar disponíveis a  
todos, inclusive na internet.  
[US031] Como cliente de uma locadora, eu gostaria de realizar consultas ao acervo de qualquer um dos principais navegadores WEB sem  
qualquer tipo de problema.  
[US032] Como proprietário de uma locadora, eu quero que cada filme registrado seja indetificado por um código de barras,  
possibilitando aos funcionário a leitura por qualquer dispositivo de leitura de código de barras.  
[US033] Como proprietário de uma locadora, eu quero que todos os clientes sejam atendidos em até 5 segundos sempre que todos os dados  
forem inseridos corretamente.  
[US034] Como proprietário de uma locadora, eu quero possibilitar oos clientes o pagamento via cartão de crédito. Para tanto, o meu  
sistema deve possuir um módulo de fácil integração com os Sistemas de Operadoras de Cartão de Crédito.  
[US035] Como cliente de uma locadora, eu gostaria de receber as informação de disponibilidade de uma reserva automaticamente  
através do e-mail registrado no sistema da locadora.  
[US036] Como proprietário de uma locadora, eu quero que todos os meus registro sejam inseridos em um sistema gerenciador de  
banco de dados realacional. Entretanto, deve ser um sistema de fácil portabilidade para, sempre que houver necessidade, facilitar a  
migração de todos os dados para qualquer outra plataforma de gerenciamento de dados.  
[US037] Como funcionário de uma locadora, eu quero que o sistema seja de fácil utilização, evitando a digitação desnecessária de  
dados, agilizando assim o atendimento aos clientes.  
[US038] Como proprietário de uma locadora, eu quero um sistema que possa ser personalizado de acordo com as minhas necessidades.  
Quero ainda um sistema de fácil manutenção e expansão, facilitando a administração da empresa e até mesmo uma enventual abertura de  
filiais.  
  
  
### End of User Stories
