<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<style type="text/css">
body {
	background-image: url("<?php echo $this->webroot.'img/landing2.jpg'; ?>");
	background-size: cover;
}
</style>
<div class="col-md-11 col-md-offset-1">
	<i>
		<b>
			<p id="search-title" style="margin-top: 100px; margin-bottom: -40px"></p>
		</b>
	</i>
</div>
<div class="container-fluid">
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
			<th data-field="money-missing" data-sorter="prec" data-sortable="true">Dinero Faltante</th>			
			<th data-field="payment-type" data-sorter="true" data-sortable="true">Tipo de pago</th>			
			<th data-field="region" data-sorter="true" data-sortable="true">Región</th>			
			<th data-field="country" data-sorter="true" data-sortable="true">País</th>			
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
					<td><?php echo h($fact['T1']['MoneyOwe']); ?></td>
					<td><?php echo h($fact['T5']['PaymentType']); ?></td>
					<td><?php echo h($fact['T7']['Region']); ?></td>
					<td><?php echo h($fact['T7']['Country']); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<div class="row">
		<div class="col-md-4 pull-right" style="margin-top: 30px">
			<div class="form-group">
				<div class="col-md-4">
					<label style="color:white">Dinero perdido total:</label>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<div class="input-group">
						  <span class="input-group-addon">$</span>
						  <input type="text" class="form-control"  id="total-loose" readonly>
						    <span class="input-group-addon">.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-md-4 pull-right" style="margin-top: 30px">
			<div class="form-group">
				<div class="col-md-4">
					<label style="color:white">Dinero faltante total:</label>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<div class="input-group">
						  <span class="input-group-addon">$</span>
						  <input type="text" class="form-control"  id="total-missing" readonly>
  							<span class="input-group-addon">.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#facts').bootstrapTable();
		getTotal();
		
		$('#facts').on('post-body.bs.table', function(e, name, args){
			getTotal();
		});

		$('.search input').on('input', function(){
			 var search = $('.search input').val();
			 $('#search-title').html('Search: ' + search);
		});

	});

	function getTotal(){
		var tableLength = $('#tbody tr').length;
		var sumMoneyLoose = 0;
		var sumMoneyMissing = 0;

		for (var i = 0; i < tableLength; i++) {
			sumMoneyLoose += parseFloat($('#tbody').children().get(i).children[8].innerHTML);
			sumMoneyMissing += parseFloat($('#tbody').children().get(i).children[9].innerHTML);
		}

		$('#total-loose').val(sumMoneyLoose.toLocaleString());
		$('#total-missing').val(sumMoneyMissing.toLocaleString());

	}

	function prec(a, b){
		var numero = parseFloat(a);
		var numero2 = parseFloat(b);

		return numero < numero2 ? -1 : 1;
	}

</script>