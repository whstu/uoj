<div class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><?= UOJUserBlog::id() ?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="/archive">日志</a></li>
				<li><a href="/aboutme">关于我</a></li>
				<li><a href="<?= HTML::url('/') ?>">UOJ</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
