<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">
  	Меню
</button>

<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
	<div class="offcanvas-header">
		<h1 class="offcanvas-title" id="offcanvasDarkLabel">Меню</h1>
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
	</div>
	<div class="offcanvas-body">
		
	<ul class="navbar-nav justify-content-end flex-grow-1 pe-3 offcanvas-font-size">
		<li class="nav-item mb-3 dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Справочная информация
			</a>
			<ul class="dropdown-menu dropdown-menu-dark">
				<li><a class="dropdown-item" href="<?=base_url('type_ep/browse')?>">Вид ОП</a></li>
				<li><a class="dropdown-item" href="<?=base_url('focus/browse')?>">Направление</a></li>
				<li><a class="dropdown-item" href="<?=base_url('type_doc/browse')?>">Вид документа</a></li>
				<li><a class="dropdown-item" href="<?=base_url('form_teach/browse')?>">Форма обучения</a></li>
			</ul>
		</li>
		<li class="nav-item mb-3">
			<a class="nav-link" href="<?=base_url('program/browse')?>">Образовательная программа</a>
		</li>
		<li class="nav-item mb-3">
			<a class="nav-link" href="<?=base_url('teach_plan/browse')?>">Учебный план</a>
		</li>
		<li class="nav-item mb-3">
			<a class="nav-link" href="<?=base_url('schedule/browse')?>">График курсов</a>
		</li>
		<li class="nav-item mb-3">
			<a class="nav-link" href="<?=base_url('reg_teacher/browse')?>">Регистрация преподавателей</a>
		</li>
		<button class="btn btn-outline-light mt-3">Выйти из системы</button>
	</ul>

	</div>
</div>

