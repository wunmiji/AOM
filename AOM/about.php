<?php 
    $title = "About";
    include 'include/header.php'; 
?>
<main>
	<section class="about">
		<div class="logo"><?php echo $title; ?></div>
		<div class="story">
			<div class="quote">
				<img src="images/icon/quote-left.png" alt="quote-left">
				<div>My goal is simple. It is a complete understanding of the most universe, <br>
			    why it is as it is and why it exists at all.<span>Stephen Hawking</span></div>
			</div>
			<div class="lang">
				<p>I love Java and little Php</p>
				<div class="img">
					<img src="images/icon/java.png" alt="java">
					<img src="images/icon/php.png" alt="php">					
				</div>
				
			</div>
		</div>
	</section>
	<?php include 'include/sidebar.php'; ?>
</main>
<?php include 'include/footer.php'; ?>