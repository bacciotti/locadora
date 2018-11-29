## Cliente  
Atributos: número de inscrição, nome, email, sexo e data de nascimento.  
Atributos apenas do Titular: CPF, endereço, telefone residencial, local onde trabalha, telefone comercial e telefone celular.  

### Regras do Negócio  
**1. Apenas maior de idade pode ser titular.**  
**2. Maximo três dependentes.**  

## Distribuidora  
Atributos: razão social, CNPJ, endereço, telefone e pessoa de contato  

## Tipo de Mídia  
Atributos: Nome (DVD, VHS, HD-DVD e Blu-Ray), Valor (DVD, VHS e HD-DVD: R$ 5,00 / Blu-Ray: R$ 7,50)  

## Item  
Atributos: data de aquisição, número de série (código de barras) e tipo de mídia.  

## Gênero  
Atributos: Nome (ação, animação, aventura, comédia, documentário, drama, ficção, guerra, musical, policial, romance, suspense e terror).  

## Filme  
Atributos: título original, título em português, países, ano, direção, elenco, sinopse, duração e gênero.  lançamentos/catálogo

### Regras do Negócio  
**3. Lançamentos têm um acréscimode 50% nos valores.**  
**4. Prazo para devolução é de um dia para lançamentos e três dias para filmes do catálogo.**  

## Reserva de filmes  
Atributos: data e hora, tipo de mídia.  

### Regras do Negócio  
**6. Atendimendo das reservas será feito por ordem de chegada, por tipo de mídia.**  
**9. Não são aceitas reservas para filmes que não têm itens do tipo de mídia requerido disponível ou reservas para as datas específicas.**  

## Locação  
Atributos: x  

### Regras do Negócio  
**7. Uma locação só ́́pode ser feita para um item, se não houver uma reserva não atendida para o seu filme e mídia.**  

## Devolução  
Atributos: x  

### Regras do Negócio  
**5. Contudo, o valor a ser efetivamente pago e a data de devolução prevista de um item locado podem ser alterados pelo atendente da locadora para aplicar descontos individualizados ou ampliar prazos de devolução.**  
**8. Quando um item de um filme e tipo de mídia reservado é devolvido, comunica-se o cliente interessado por e-mail e, a partir desse momento, o cliente tem 24 horas para retirá-lo; caso contrário, expira-se a reserva e o item é liberado.**  
**10. Quando a devolução de um item é feita com atraso, cobra-se multa.**  
**11. A multa é calculada como sendo o valor da locação aplicado ao número de dias de atraso.**  
**12. Caso a locação do item não tenha sido paga no ato da locação, terá́ de ser paga obrigatoriamente na devolução.**  
**13. Não são aceitos pagamentos mensais ou em outros momentos que não a locação ou a devolução.**  
**14. Pagamentos podem ser feitos em dinheiro, cheque ou cartão, sendo que para pagamentos com cheque deseja-se saber: banco, agência, conta e número do cheque.**  
**15. Para pagamentos em cartão, registra-se apenas o valor, a operadora do cartão e o número e a data da autorização.**  

## Consultas  
Atributos: x  
  
### Regras do Negócio  
**16. Consultas ao acervo da locadora devem poder ser feitas pela Internet.**  
**17. Um cliente pode consultar os dados de um filme específico, informando o título (ou parte dele), original ou em português.**  
**18. Também devem ser possíveis consultas por gênero, tipo de mídia disponível, ator, diretor, nacionalidade e lançamentos,bem como combinações dessas informações.**  
**19. Quando.**  
**20. Quando.**  
