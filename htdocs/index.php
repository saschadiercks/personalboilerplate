<!DOCTYPE html>
<html dir="ltr" lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>__Inpu Title__</title>
	<meta name="description" content="description" />
	<meta name="keywords" content="keywords" />
	<?php require_once 'modules/framework/head-meta.php'; ?>

</head>

<body id="index">
	<div class="wrapper">
		<?php require_once 'modules/framework/header.php'; ?>

		<div class="inner">
			<?php require_once 'modules/navigation/nav-main.php'; ?>

			<main role="content">
				<form action="#" method="get" role="form">
					<div>
						<label for="dummy-input">Label for dummy-input</label>
						<input type="text" placeholder="dummy-input" id="dummy-input" />
					</div>
					<div class="action">
						<button type="submit">Submit form</button>
					</div>
				</form>
			</main>
		</div>

		<?php require_once 'modules/framework/footer.php'; ?>
	</div><!-- /.wrapper -->

	<?php require_once 'modules/framework/javascript.php'; ?>
</body>
</html>
