<body>

		<!-- HEADER WRAP -->
		<?php echo $this->load->view('layout/menu_view') ?>
		<!-- HEADER WRAP -->
		

		<?php $this->load->view($module."/".$view_file); ?>

		<!-- FOOTER -->
		<?php echo $this->load->view('layout/footer_view') ?>
		<!-- /.FOOTER -->

		<!-- POPUPS -->
		<?php echo $this->load->view('layout/seccion_view') ?>
		<!-- /.POPUPS -->

		<!-- SCRIPT -->
		<?php echo $this->load->view('layout/script') ?>
		<!-- /.SCRIPT -->

	</div>
</body>
</html>