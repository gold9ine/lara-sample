<nav class="navbar navbar-default navbar-fixed-top">
	<!-- user area -->
	<div class="container">
		<div class="navbar-header">
			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
            <a class="navbar-brand cursorPointer" href="{{ url('/') }}">
				{{ config('app.name', '대성오토바이') }}
			</a>

			<div class="pull-right">
				<p class="navbar-text navbar-right marginR15">고객상담 : 010-2094-5575</p>
			</div>

		</div>


		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">

				<li><a href="{{ url('/info') }}">센터소개</a></li>

				<!-- Authentication Links -->
				@guest
				<li><a href="{{ route('login') }}">로그인</a></li>
				<li><a href="{{ route('register') }}">회원가입</a></li>
				@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
				@endguest


			</ul>
		</div>
		<!-- <p class="navbar-text navbar-right pull-right">고객상담 : 010-2094-5575</p> -->
	</div>


</nav>
<br>
<br>
<br>