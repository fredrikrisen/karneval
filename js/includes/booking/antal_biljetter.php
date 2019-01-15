<?php
    include('../connect.php');


$result = mysqli_query($conn,"SELECT COUNT(*) as total FROM tickets where ticketType = 'spexet'");

$data=mysqli_fetch_assoc($result);
print $data['total'];

?>
<script>
    
</script>