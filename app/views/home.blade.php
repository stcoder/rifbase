@extends('../layouts/layout')

@section('content')
	<!-- filters -->
	<h2 class="filter_caption">Поиск техники</h2>
	<div class="row filter">
		<div class="col-sm-4 filter_el_1">
			<div class="filter_control">				
				<select>
					<option selected>Тип техники</option>
					<option>Б</option>
				</select>
			</div>
		</div>
		<div class="col-sm-4 filter_el_2">
			<div class="filter_control">
				<select>
					<option selected>Статус</option>
					<option>Свободен</option>
					<option>Занят</option>
					<option>Уточнить</option>
				</select>
			</div>
		</div>
		<div class="col-sm-4 filter_el_3">
			<div class="filter_control">
				<select>
					<option selected>Город</option>
					<option>Екатеринбург</option>
					<option>Тюмень</option>
				</select>
			</div>
		</div>
		<div class="col-sm-4 filter_el_4">
			<div class="filter_control">
				<form class="form-inline">
					<div class="form-group">
						<label>Год</label>
						<input type="text"> - <input type="text">
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-4 filter_el_5">
			<div class="filter_control">				
				<form class="form-inline">
					<div class="form-group">
						<label>Цена</label>
						<input type="text"> - <input type="text">
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-4 filter_el_6">
			<div class="filter_control">				
				<button class="btn btn-block">Найти</button>
			</div>
		</div>
	</div>

	<!-- table -->
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th class="column_company">Организация/физ.лицо</th>
					<th class="column_type">Тип техники</th>
					<th class="column_model">Марка/Модель</th>
					<th class="column_year">Год</th>
					<th class="column_status">Статус</th>
					<th class="column_price">Цена</th>
					<th class="column_city">Город</th>
					<th class="column_reg">Дата регистрации</th>
					<th class="column_reviews">Отзывы</th>
					<th class="column_photo">Фото</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-success">Свободен</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-danger">Занят</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-info">Уточнить</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-info">Уточнить</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-info">Уточнить</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-info">Уточнить</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
				<tr>
					<td>Южный бастион (ИП Якушев К.В) факс:+7(963)1111111 тел:+7(963)1111111 Константин Валерьевич</td>
					<td>Б</td>
					<td>Брио</td>
					<td>2009</td>
					<td><span class="label label-info">Уточнить</span></td>
					<td>100 000 р</td>
					<td>Екатеринбург</td>
					<td>01.01.14</td>
					<td>59/1</td>
					<td><img src="http://placehold.it/100x100"></td>
				</tr>
			</tbody>
		</table>
	</div>
@stop