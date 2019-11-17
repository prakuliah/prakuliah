<?php
move_uploaded_file($_FILES["file"]["tmp_name"], "../userdata/profile_pictures/" . $_FILES["file"]["name"]);
