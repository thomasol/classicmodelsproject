<html>
<head>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables-1.10.9/media/css/jquery.dataTables.css') ?>">
<script type="text/javascript" language="javascript"
 	src="<?= base_url('assets/DataTables-1.10.9/media/js/jquery.js') ?>">
 </script>
<script type="text/javascript" language="javascript" 
 	src="<?= base_url('assets/DataTables-1.10.9/media/js/jquery.dataTables.js')
	?>">
</script>
<?= $this->table->generate($Products) ?>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
$('#productsTable').DataTable({
	
});
} );
</script>
</head>
<body>
</body>
</html>