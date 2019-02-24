<?php
	require_once("../../services/db_connect.php");
	
	$sql = "SELECT * FROM classes WHERE teacher_code = " . $user["uid"];
	
	if(!($result = $conn->query($sql))) {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
?>

<!-- START X-NAVIGATION -->
<ul class="x-navigation">
	<li class="xn-logo">
		<a href="index.html">Teacher's Zone</a>
		<a href="#" class="x-navigation-control"></a>
	</li>
	
	<li class="xn-profile">
		<a href="#" class="profile-mini">
			<img src="../../<?php echo $_SESSION["user"]["profileImg"]?>" alt="John Doe" />
		</a>
		
		<div class="profile">
			<a href="editProfile.php">
				<div class="profile-image">
					<img src="../../<?php echo $_SESSION["user"]["profileImg"]?>" alt="John Doe" />
				</div>
				<div class="profile-data">
					<div class="profile-data-name">
						<?php echo $user["name"]?>
					</div>
					<div class="profile-data-title">
						<?php echo $user["desg"]?>
					</div>
				</div>
			</a>
		</div>
	</li>
	<li class="xn-title">Navigation</li>
	<li id="index">
		<a href="index.php"><span class="fa fa-desktop"></span><span class="xn-text">Home</span></a>
	</li>
	<li id="class" class="xn-openable">
		<a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Classes</span></a>
		<ul>
			<?php
				while($row = $result->fetch_assoc()) {
			?>
				<li class="xn-openable">
					<a href="#"><span class="fa fa-files-o"></span> <?php echo $row["class_name"]?></a>
					<ul>
						<li id="class-id-<?php echo $row["class_id"]?>"><a href="viewClass.php?classId=<?php echo $row["class_id"]?>"><span class="fa fa-desktop"></span> Class Dashboard</a></li>
						<li id="assign-id-<?php echo $row["class_id"]?>"><a href="addAssignment.php?classId=<?php echo $row["class_id"]?>"><span class="fa fa-file"></span> Add Assignment</a></li>
						<li id="material-id-<?php echo $row["class_id"]?>"><a href="addMaterial.php?classId=<?php echo $row["class_id"]?>"><span class="fa fa-book"></span> Add Material</a></li>
					</ul>
								
				</li>
				
			<?php
				}
			?>
			<li id="add-class"><a href="addClass.php"><span class="fa fa-plus"></span>Add Class</a></li>
		</ul>
	</li>
	
	<li id="address-book">
		<a href="addressBook.php"><span class="fa fa-users"></span><span class="xn-text">Address Book</span></a>
	</li>
	
	<li id="mailbox" class="xn-openable">
		<a href="#"><span class="fa fa-envelope"></span><span class="xn-text">Mailbox</span></a>
		<ul>
			<li id="mailInbox"><a href="mailboxInbox.php"><span class="fa fa-inbox"></span> Inbox</a></li>
			<li id="mailMessage"><a href="mailboxMessage.php"><span class="fa fa-file-text"></span> Message</a></li>
			<li id="mailCompose"><a href="mailboxCompose.php"><span class="fa fa-pencil"></span> Compose</a></li>
		</ul>
	</li>
	
	<li id="cal"><a href="calendar.php"><span class="fa fa-calendar"></span><span class="xn-text">Calendar</span></a></li>
	
	<li id="tasks"><a href="tasks.php"><span class="fa fa-edit"></span><span class="xn-text">Tasks</span></a></li>
	
	<li id="profile" class="xn-openable">
		<a href="#"><span class="fa fa-user"></span><span class="xn-text">Update Profile</span></a>
		<ul>
			<li id="updateProfile"><a href="editProfile.php"><span class="fa fa-user"></span> Update Profile</a></li>
			<li id="changePass"><a href="changePass.php"><span class="fa fa-user"></span> Change Password</a></li>
		</ul>
	</li>
</ul>
<!-- END X-NAVIGATION -->

<script src="js/navbar.js" type="text/javascript"></script>