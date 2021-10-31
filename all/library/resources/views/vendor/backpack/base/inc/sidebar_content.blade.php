<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fas fa-book-reader"></i> Bibliothèque</a>
    <ul class="nav-dropdown-items">
		<li class='nav-item'>
			<a class='nav-link' href="{{ backpack_url('author') }}">
				<i class="nav-icon fas fa-at"></i> {{ __('lang.'.'Authors') }}
			</a>
		</li>
		<li class='nav-item'>
			<a class='nav-link' href="{{ backpack_url('book') }}">
				<i class="nav-icon fas fa-book"></i> {{ __('lang.'.'Books') }}
			</a>
		</li>
		<li class='nav-item'>
			<a class='nav-link' href="{{ backpack_url('theme') }}">
				<i class="nav-icon fas fa-graduation-cap"></i> {{ __('lang.'.'Themes') }}
			</a>
		</li>
		<li class='nav-item'>
			<a class='nav-link' href="{{ backpack_url('keyword') }}">
				<i class="nav-icon fas fa-key"></i> {{ __('lang.'.'Keywords') }}
			</a>
		</li>
	</ul>
</li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fas fa-user-graduate"></i> Ancien(ne)s Etudiant(e)s</a>
	<ul class="nav-dropdown-items">
		<li class='nav-item'>
			<a class='nav-link' href='{{ backpack_url('contact') }}'><i class="nav-icon fas fa-users"></i> Contacts</a>
		</li>
	</ul>
</li>

<!--li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fab fa-page4"></i></i> {{ __('lang.'.'Content Page') }}</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href="{{ backpack_url('page') }}"><i class='nav-icon fa fa-file'></i> <span>Pages</span></a></li>
    </ul>
</li-->

<!-- Users, Roles, Permissions -->
<!--li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> {{ __('lang.'.'Authentication') }}</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>{{ __('lang.'.'Users') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-id-badge"></i> <span>{{ __('lang.'.'Roles') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>{{ __('lang.'.'Permissions') }}</span></a></li>
    </ul>
</li-->

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fas fa-cogs"></i> {{ __('lang.'.'Seetings') }}</a>
    <ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>{{ __('lang.'.'Users') }}</span></a></li>
		<li class='nav-item'><a class='nav-link' href="{{ backpack_url('backup') }}"><i class='nav-icon fa fa-hdd'></i> Backups</a></li>
	</ul>
</li>