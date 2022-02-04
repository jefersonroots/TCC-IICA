<select id = 'selecionar' name = "ativo_movel" class = "form-control" placeholder = "Selecione" obrigatório>
                        <option value = '' selected> Escolha uma opção </option>      

                         <? php
                          $ result_pesquisa = "SELECT DISTINCT` ativo_movel` FROM `bd_iica` WHERE` ativo_movel`! = 'NULL' pedido por `ativo_movel` DESC";
                          $ resultado_niveis_acesso = mysqli_query ($ conn, $ result_pesquisa);
                          while ($ row_pesquisa = mysqli_fetch_assoc ($ resultado_niveis_acesso)) { 
                           if ($ row_pesquisa ['ativo_movel'] == 'N') {
                              $ tipoa = 'NÃO';
                            }
                            if ($ row_pesquisa ['ativo_movel'] == 'S') {
                              $ tipoa = 'SIM';
                            }
                            ?>
                            <option value = "<? php echo $ row_pesquisa ['ativo_movel'];?>"> <? php echo $ tipoa; ?> </option>
                        <? php
                          }
                        ?>                   
                                              
                    </select>