<?php
header('Content-Type text/javascript');
?>
<?php echo $_GET['callback']; ?>({"response": {"status": {"version": "4.2", "code": 0, "message": "Success"}, "artists": [{"name": "Angel", "id": "1"}, {"name": "Zilch", "id": "2"}, {"name": "Fox", "id": "3"}]}})