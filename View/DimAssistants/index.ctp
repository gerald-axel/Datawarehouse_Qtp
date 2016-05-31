<div class="col-md-10 col-md-offset-1">

	<h2><u><?php echo __('Hechos'); ?></u></h2>

	<div id="toolbar" class="btn-group">

  </div>
</div>
<br/>

<div class="col-md-10 col-md-offset-1">
	<table id="facts" data-toggle="table" data-url="" data-click-to-select="true" data-search="true"
       data-show-refresh="true" data-sort-name="stargazers_count" data-sort-order="desc" onLoadSuccess="">
		<thead>
		<tr>
			<th data-field="category" data-sortable="true">Categoría</th>
			<th data-field="status" data-sortable="true">Estatus</th>
			<th data-field="start-date" data-sortable="true">Día Inicio</th>
			<th data-field="end-date" data-sortable="true">Día Fin</th>
			<th data-field="assistant" data-sortable="true">Cliente</th>
			<th data-field="emailing" data-sortable="true">Email</th>
			<th data-field="promotion-id" data-sorter="prec" data-sortable="true">Promoción</th>
			<th data-field="money-loose" data-sorter="prec" data-sortable="true">Dinero Perdido</th>			
			<th data-field="payment-type" data-sorter="prec" data-sortable="true">Tipo de pago</th>
		</tr>
		</thead>
		<tbody id="tbody">
			<?php
		  	foreach ($facts as $fact): ?>
				<tr>
					<td><?php echo h($fact['T7']['CategoryCourseID']); ?></td>
					<td><?php echo h($fact['T12']['StatusId']); ?></td>
					<td><?php echo h($fact['T13']['StartDate']); ?></td>
					<td><?php echo h($fact['T13']['EndDate']); ?></td>
					<td><?php echo h($fact['T6']['AssistantID']); ?></td>
					<td><?php echo h($fact['T8']['EmalingID']); ?></td>
					<td><?php echo h($fact['ed']['rango']); ?></td>
					<td><?php echo h($fact[0]['PromotionID']); ?></td>
					<td><?php echo h($fact[0]['MoneyLoose']); ?></td>
					<td><?php echo h($fact['T9']['PaymentType']); ?></td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>
<script type="text/javascript">
	$('#facts').bootstrapTable();
</script>