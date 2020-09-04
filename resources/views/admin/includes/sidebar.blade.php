<aside class="main-sidebar elevation-4 sidebar-dark-primary" style="overflow-x: hidden;">
	<a href="index3.html" class="brand-link">
		<img src="http://mais.codejunior.com.br/img/logo-fechada.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Usuário</a>
			</div>
			<div class="info align-self-center">
				<form id="logout-form" method="post" action="{{ route('logout') }}">
					@csrf
					<a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
				</form>
			</div>
		</div>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview ">
					<a href="/" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				@can('viewAny', App\User::class)
					<li class="nav-item has-treeview ">
						<a href="{{ route('users.index') }}"
							class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
							<i class="nav-icon fas fa-users"></i>
							<p>
								Usuários
							</p>
						</a>
					</li>
				@endcan
			</ul>
		</nav>
	</div>
</aside>