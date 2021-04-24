<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Plan</title>
		<style>
			.viewplanwrapper {
				width: 100%;
				min-height: 100vh;
				position: relative;
			}
			.viewplanwrapper > img {
				width: 100%;
				height: 100vh;
				object-fit: contain;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
		</style>
	</head>
	<body>
		<div class="viewplanwrapper">
			<img src=<?php echo base_url('assets/images/')?><?php
    print_r($imageUrl); 
    ?>
			alt="plan" class="planImg">
		</div>
	</body>
</html>
