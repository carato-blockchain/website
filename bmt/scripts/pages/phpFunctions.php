<?php
	$row_rs_all = returnDBObject("SELECT * FROM ".$datatype, [], 1);
	
	if(isset($_GET['id'])){
		$row_rs_single=returnDBObject("SELECT * FROM ".$datatype." WHERE id=?",array($_GET['id']));
	}
	
	include('inc/scripts_datatypes/createDatatypesArray.php');
				
	
	if(isset($_POST['new'.$datatype])){
		
		//custom fields
			$toStore['permalink']="'".$_POST['permalink']."'";
			$toStore['ref_page']="'".$_POST['ref_page']."'";
		//custom fields
		
		include('inc/scripts_datatypes/standardDatatypeInsertQuery.php');

	}
	
	if(isset($_POST['mod'.$datatype])){
		
		//custom fields
			$toStore['permalink']="'".$_POST['permalink']."'";
			$toStore['ref_page']="'".$_POST['ref_page']."'";
		//custom fields
		
		include('inc/scripts_datatypes/standardDatatypeUpdateQuery.php');
		
	}
	
	if(isset($_GET['delete'])){
		runDBQuery("DELETE FROM ".$datatype." WHERE id=?",array($_GET['id']));
		$_SESSION['success_message']=$bmt_locales[$route]['single'].' '.$bmt_locales['deleted'].'.';
?>
		<script type="text/javascript">
	    	window.location = "<?php echo '/bmt/'.$internal_route; ?>";
	    </script>
<?php
	}
?>