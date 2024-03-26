<div class="sticky">
	
	<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
	
	<aside class="app-sidebar">
		<div class="app-sidebar__header">
			<a class="main-logo" href="index.html">
				<img src="{{ asset('solic_pro/assets/images/brand/light-logo.png') }}" class="desktop-logo desktop-logo-dark" alt="soliclogo">
				<img src="{{ asset('solic_pro/assets/images/brand/dark-logo.png') }}" class="desktop-logo" alt="soliclogo">
				<img src="{{ asset('solic_pro/assets/images/brand/icon.png') }}" class="mobile-logo mobile-logo-dark" alt="soliclogo">
				<img src="{{ asset('solic_pro/assets/images/brand/icon-2.png') }}" class="mobile-logo" alt="soliclogo">
			</a>
		</div>
		<div class="main-sidemenu">
			<div class="slide-left disabled" id="slide-left">
				<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
					<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
				</svg>
			</div>
			<ul class="side-menu">
				
			    <li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/admin/factures">
						<span class="side-menu__icon">
						<i class="fa fa-user"></i>
						</span>
						<span class="side-menu__label text-truncate" >Admin</span>
					</a>

				</li>
				{{--<li><a href="/solic_pro/HTML/switcher.html" class="slide-item">switcher</a></li>--}}
			    <li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
						<span class="side-menu__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z"/></svg>
								</span>
						<span class="side-menu__label text-truncate">Sport</span>
						<i class="angle fa fa-angle-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="panel sidetab-menu">
							
							<div class="panel-body tabs-menu-body p-0 border-0">
								<div class="tab-content">
									<div class="tab-pane active" id="side1">
										<ul class="sidemenu-list">
											<li><a class="slide-item" href="/admin/sports">Sport</a></li>
											<li><a class="slide-item" href="/admin/categories">Categories</a></li>
											<li><a class="slide-item" href="/admin/groupes">Groupe</a></li>
										</ul>

									</div>

								</div>
							</div>
						</li>

					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
						<span class="side-menu__icon">
						<i class="fa fa-tasks" aria-hidden="true"></i>			

					</span>
						<span class="side-menu__label text-truncate">Gestion</span>
						<i class="angle fa fa-angle-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="panel sidetab-menu">
							
							<div class="panel-body tabs-menu-body p-0 border-0">
								<div class="tab-content">
									<div class="tab-pane active" id="side1">
										<ul class="sidemenu-list">
											<li><a class="slide-item" href="/admin/adhreants"> Adherant</a></li>
											<li><a class="slide-item" href="/admin/coaches"> Coach</a></li>
											<li><a class="slide-item" href="/admin/gestionnaires"> Gestionnaire</a></li>
										</ul>

									</div>

								</div>
							</div>
						</li>

					</ul>
				</li>


				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/admin/salles">
						<span class="side-menu__icon">
						
						</span>
						<span class="side-menu__label text-truncate">Salle</span>
					</a>

				</li>

				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/admin/evenements">
						<span class="side-menu__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"/></svg>
						</span>
						<span class="side-menu__label text-truncate">Evenements</span>
					</a>

				</li>

				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
						<span class="side-menu__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
					   </span>
						<span class="side-menu__label text-truncate">Planning</span>
					</a>
					{{--  --}}
				</li>
				
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/admin/abonnements">
						<span class="side-menu__icon">
							<svg xmlns="http://www.w3.org/2000/svg" class="side_menu_img" viewBox="0 0 24 24"><path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z"></path><path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path></svg>
						</span>
						<span class="side-menu__label text-truncate">Abonnement</span>
					</a>
				</li>
                <li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
						<span class="side-menu__icon">
						<i class="fa fa-dollar">‌</i>
						</span>
						<span class="side-menu__label text-truncate">Comptabilité</span>
						<i class="angle fa fa-angle-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="panel sidetab-menu">
							
							<div class="panel-body tabs-menu-body p-0 border-0">
								<div class="tab-content">
									<div class="tab-pane active" id="side1">
										<ul class="sidemenu-list">
											<li><a class="slide-item" href="/admin/factures"> Factures</a></li>
											<li><a class="slide-item" href="javascript:void(0);"> Stat</a></li>
										</ul>

									</div>

								</div>
							</div>
						</li>

					</ul>
				</li>

				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
						<span class="side-menu__icon">
						<i class="fa fa-question-circle"></i>
						</span>
						<span class="side-menu__label text-truncate">Aide</span>
					</a>
				</li>


			</ul>
			<div class="slide-right" id="slide-right">
				<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
					<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
				</svg>
			</div>
		</div>
	</aside>
</div>
