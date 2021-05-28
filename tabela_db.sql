
-- Tabela de Usuários 

CREATE TABLE `usuarios` (
  `usuario_id` int(12) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `contato` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserir dados na tabela
INSERT INTO `usuarios` (`usuario_id`, `nome`, `sobrenome`, `endereco`, `contato`) VALUES
(1, 'John ', 'Doe', 'New York', '238729837'),
(2, 'Samuel', 'No lastname', 'Earth', '28372983');

-- Alterações na tabela 
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);
  
  
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;