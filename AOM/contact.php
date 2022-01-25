<?php 
    $title = "Contact";
    include 'include/header.php'; 
?>
<main>
	<section class="contact">
		<div class="logo"><?php echo $title; ?></div>
		<form>
			<div><input type="text" class="form-row" name="" placeholder="Enter Name" required=""></div>
			<div><input type="email" class="form-row" name="" placeholder="Enter Email" required=""></div>
			<div><textarea class="form-row" placeholder="Go ahead. Am Listening..."></textarea></div>
			<div><button>Submit</button></div>
		</form>
	</section>
	<?php include 'include/sidebar.php'; ?>
</main>
<?php include 'include/footer.php'; ?>