<style>
footer{
    color:#FFFFFF;
    padding: 2% 0;
		margin-top: 5%;
    background-color: #FF5E42;
}
</style>
<footer class="footer">
		<div class="container text-center">
		<p class="lead">Social Care Application <?php echo date("Y")?> &copy; Danny Monroy</p>
		</div>
</footer>
<?php
// 5. Close database connection
	if(isset($connection)){
		mysqli_close($connection);
	}
?>
