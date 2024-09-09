1 - Criar banco de dados:
	- criar um novo schema (database name)
	- importar o .sql existente (data import)
	
2 - Abrir projeto no VSCode

	2.1 - ConexaoBD.php
		- Ajustar configuração

3 - Backend
	3.1 - TabelaDAO
		- Modificar toda a classe para se ajustar à tabela onde serão armazenados os dados: nome de tabela, campos, etc
	3.2 - Outros DAOs
		- O sistema precisará de DAOs para consultar Países e Esportes. Um deles está pronto. Finalize o outro.

4 - Frontend
	4.1 - Cadastro (form-cadastro.php)
	- Dentro do form, criar os campos <input>
		- Todo <input> tem um "name" igual ao campo da tabela
		- O campo GÊNERO possui os valores (value) definidos: MASCULINO ou FEMININO
		- O campo ESPORTE deve ter o valor (value) com o NOME do ESPORTE
		- Os campos das medalhas (OURO, PRATA e BRONZE) devem ter o NOME do PAÍS
	- Criar um botão do tipo "submit"
	- Criar <form action="programa.php"> que chamará o cadastrar do TabelaDAO.php

	4.2 - Listagem (lista.php)
	- Utilize a função "listar()" do DAO para exibir todos os dados cadastrados na forma de tabela