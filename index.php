<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Simple Tasks</title>
		<!-- StyleSheets -->
		<link rel="stylesheet" href="/assets/css/fonts.css" />
		<link rel="stylesheet" href="/assets/css/reset.css" />
		<link rel="stylesheet" href="/assets/css/style.css" />
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" />
		<!-- JavaScripts -->
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script>
			$(function() {
				$(".flex-item ul").append('<li class="ui-state-default"><input type="text" value="Item 1" /></li><li class="ui-state-default"><input type="text" value="Item 2" /></li><li class="ui-state-default"><input type="text" value="Item 3" /></li><li class="ui-state-default"><input type="text" value="Item 4" /></li><li class="ui-state-default"><input type="text" value="Item 5" /></li>');
				$(".flex-item ul").each(function (i, v) {
					$(this).find("input").attr("name", "task[" + i + "][]");
				});
				$(".flex-item ul").sortable({
					connectWith: ".flex-item ul",
					placeholder: "ui-state-highlight",
					change: function () {
						$("input").attr("name", "");
						$(".flex-item ul").each(function (i, v) {
							$(this).find("input").attr("name", "task[" + i + "][]");
						});
					}
				});
				$(".flex-item ul").dblclick(function () {
					$(this).append('<li class="ui-state-default"><input type="text" value="New Item" /></li>').focus();
					$(".flex-item ul").each(function (i, v) {
						$(this).find("input").attr("name", "task[" + i + "][]");
					});
				});
				$(".btn").click(function () {
					$(".flex-item ul").each(function (i, v) {
						$(this).find("input").attr("name", "task[" + i + "][]");
					});
					$.post("api.php", $("form").serialize());
					return false;
				});
			});
		</script>
	</head>
	<body>
		<header>
			<section class="heading">
				<div class="wrap">
					<h1><a href="/">Simple Tasks</a></h1>
				</div>
			</section>
			<section class="intro">
				<div class="wrap">
					<p>Simple Tasks is a web based Tasks Manager, featuring draggable tasks interface in a weekly basis.</p>
					<p><a href="#" class="btn">Sign In</a> <a href="#" class="btn">Register</a></p>
				</div>
			</section>
		</header>
		<section class="tasks">
			<form action="" class="tasks-columns flex-container">
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
				<article class="flex-item">
					<h3>
						<strong>Day</strong>
						<span>Date</span>
					</h3>
					<ul>
						
					</ul>
				</article>
			</form>
		</section>
	</body>
</html>