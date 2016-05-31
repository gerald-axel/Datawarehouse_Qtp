<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style type="text/css">
body {
	background-image: url("<?php echo $this->webroot.'img/landing5.jpg'; ?>");
	background-size: cover;
}
</style>

<div class="col-md-10 col-md-offset-1" style="margin-top: 100px">
	<table id="facts" class="table table-hover" data-toggle="table"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
       data-pagination="true"
       data-toolbar="#toolbar" data-show-export="true" data-show-pagination-switch="true" >
		<thead>
		<tr>
			<th data-field="category" data-sortable="true">Categoría</th>
			<th data-field="course" data-sortable="true">Course</th>
			<th data-field="status" data-sortable="true">Estatus</th>
			<th data-field="start-date" data-sortable="true">Día Inicio</th>
			<th data-field="end-date" data-sortable="true">Día Fin</th>
			<th data-field="assistant" data-sortable="true">Cliente</th>
			<th data-field="emailing" data-sortable="true">Email</th>
			<th data-field="promotion-id" data-sorter="prec" data-sortable="true">Promoción</th>
			<th data-field="money-loose" data-sorter="prec" data-sortable="true">Dinero Perdido</th>			
			<th data-field="payment-type" data-sorter="prec" data-sortable="true">Tipo de pago</th>			
			<th data-field="region" data-sorter="prec" data-sortable="true">Región</th>			
			<th data-field="country" data-sorter="prec" data-sortable="true">País</th>			
		</tr>
		</thead>
		<tbody id="tbody">
			<?php
		  	foreach ($facts as $fact): ?>
				<tr>
					<td><?php echo h($fact['T3']['CategoryCourseID']); ?></td>
					<td><?php echo h($fact['T3']['CourseName']); ?></td>
					<td><?php echo h($fact['T8']['StatusId']); ?></td>
					<td><?php echo h($fact['T9']['StartDate']); ?></td>
					<td><?php echo h($fact['T9']['EndDate']); ?></td>
					<td><?php echo h($fact['T2']['AssistantID']); ?></td>
					<td><?php echo h($fact['T4']['EmalingID']); ?></td>
					<td><?php echo h($fact[0]['PromotionID']); ?></td>
					<td><?php echo h($fact['T1']['MoneyLoose']); ?></td>
					<td><?php echo h($fact['T5']['PaymentType']); ?></td>
					<td><?php echo h($fact['T7']['Region']); ?></td>
					<td><?php echo h($fact['T7']['Country']); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$('#facts').bootstrapTable();
</script>