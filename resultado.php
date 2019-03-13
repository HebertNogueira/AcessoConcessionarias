							<h3>USUARIOS ENCONTRADOS</h3>
								<TABLE BORDER=<?php echo $borda?> CELLSPACING=0>
									<tr>
										<td style="width: 7em">
											<label for="txtListar"> EMPRESA</label>
										</td>
										<td style="width: 7em">
											<label for="txtListar" > USUÁRIO </label>
										</td>
										<td style="width: 7em">
											<label for="txtListar" > NOME </label>
										</td>
									</tr>		
								<?php
									if(OCIExecute($resultado02)){
										do {
								?>
									<tr>
										<td align='center'>
											<input type="text" name="nome" style="width: 95%" value="<?php echo $linha[3]; ?>"/>
										</td>
										<td align='center'>
											<input type="text" name="nome" style="width: 95%" value="<?php echo $linha[4]; ?>"/>
										</td>
										<td align='center'>
											<input type="text" name="nome" style="width: 95%" value="<?php echo $linha[5]; ?>"/>
										</td>
										
									</tr>
								<?php
										} while($linha=oci_fetch_array ($resultado02));
									}
								?>
								</table>