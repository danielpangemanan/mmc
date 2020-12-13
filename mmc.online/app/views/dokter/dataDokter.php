<div class="container">
	<h2>Data Dokter</h2>
	<?php foreach ($data['dokter'] as $dok ) : ?>
		<ul>
			<li>Nama: <?= $dok['nama'] ?></li>
			<li>Alamat: <?= $dok['alamat'] ?></li>
			<li>Status Kepegawaian: <?= $dok['status'] ?></li>
		</ul>
	<?php endforeach; ?>
</div>