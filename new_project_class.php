<?php



        class new_project_work
        {
            public function new_project_register($connect)
            {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone_number = $_POST['phone_number'];
                $address = $_POST['address'];
                $address2 = $_POST['address2'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];


                $user_image = $_FILES['user_image']['name'];
                $target_file = "./uploads/$user_image";

                move_uploaded_file($_FILES['user_image']['tmp_name'], $target_file);




                $register_select = "SELECT *FROM new_project_table WHERE phone_number = '".$phone_number."' or email = '".$email."'";


                $register_query = mysqli_query($connect,$register_select);
                $register_num = mysqli_num_rows($register_query);

                if($register_num>0)
                {
                    echo 'Details Arlready Exists';
                }
                else
                {
                    $register_select1 = "SELECT *FROM new_project_table ORDER BY id DESC LIMIT 1";
                    $register_query1 = mysqli_query($connect,$register_select1);
                    $register_fetch = mysqli_fetch_array($register_query1);

                    if($register_fetch['user_id']!="")
                    {
                        $last_user_id = $register_fetch['user_id'];
                        $new_user_id = str_replace("User","",$last_user_id);
                        $new_user_id++;
                        $new_user_id = "User".$new_user_id;


                        $register_insert = "INSERT INTO `new_project_table`(`user_id`,`first_name`,`last_name`,`user_image`,`email`,`password`,`phone_number`,`address`,`address2`,`city`,`state`,`zip`) VALUES('".$new_user_id."','".$first_name."','".$last_name."','".$user_image."','".$email."','".$password."','".$phone_number."','".$address."','".$address2."','".$city."','".$state."','".$zip."')";

                        $register_sql = mysqli_query($connect,$register_insert);
                        
                        if($register_sql)
                        {
                            echo 'insert done';
                        }
                        else
                        {
                            echo 'insert not done';
                        }
                    }
                    else
                    {
                        $new_user_id = "User1000";
                        echo $register_insert = "INSERT INTO `new_project_table`(`user_id`,`first_name`,`last_name`,`user_image`,`email`,`password`,`phone_number`,`address`,`address2`,`city`,`state`,`zip`) VALUES('".$new_user_id."','".$first_name."','".$last_name."','".$user_image."','".$email."','".$password."','".$phone_number."','".$address."','".$address2."','".$city."','".$state."','".$zip."')";

                        $register_sql = mysqli_query($connect,$register_insert);
                        
                        if($register_sql)
                        {
                            echo 'insert done';
                        }
                        else
                        {
                            echo 'insert not done';
                        }
                    }
                }
            }
            public function new_project_login($connect)
            {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $select = "select * from `new_project_table` where email = '".$email."' AND password = '".$password."'";
                $resselect = mysqli_query($connect,$select);
                $numrow = mysqli_num_rows($resselect);
                if($numrow>0)
                {
                    $row = mysqli_fetch_array($resselect);
                    $full_name = $row['first_name']." ".$row['last_name'];
                    $user_id = $row['user_id'];
                    $password = $row['password'];
                    $last_login = date("Y-m-d H:i:s");

                    $login_insert = "INSERT INTO `last_login_logout_table`(`user_id`,`full_name`,`password`,`last_login`) VALUES('".$user_id."','".$full_name."','".$password."','".$last_login."')";

                    $login_query = mysqli_query($connect,$login_insert);
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['user_id'] = $row['user_id'];
                    echo 1;

                    
                    $notification_insert = "INSERT INTO `notification_table`(`user_id`) VALUES('".$_SESSION['user_id']."')";
                    mysqli_query($connect,$notification_insert);
                }
                else
                {
                    echo 0;
                }
            }
            public function select_user_data($connect)
            {
                $select ="select *from `new_project_table` where user_id = '".$_SESSION['user_id']."'";
                $reselect = mysqli_query($connect,$select);
                $numrow = mysqli_num_rows($reselect);
                if($numrow)
                {
                    
                    $row = mysqli_fetch_array($reselect);
                    return $row;
                }
                else
                {
                    return 0;
                }
            }
            public function select_data_user_login($connect)
            {
                $select_last_login="SELECT  * FROM `new_project_table` LEFT JOIN `last_login_logout_table` on new_project_table.user_id=last_login_logout_table.user_id WHERE new_project_table.user_id = '".$_SESSION['user_id']."'";
                
                $last_login_query = mysqli_query($connect,$select_last_login);
                $numrow = mysqli_num_rows($last_login_query);
                if($numrow)
                {
                    
                    $row = mysqli_fetch_assoc($last_login_query);
                    return $row;
                }
                else
                {
                    return 0;
                }
            }
            public function last_logout_update($connect)
            {
                $last_login = date("Y-m-d H:i:s");
                $last_logout = date("Y-m-d H:i:s");
                $last_logout_update = "UPDATE last_login_logout_table SET last_login = '$last_login', last_logout = '$last_logout' WHERE user_id = '".$_SESSION['user_id']."'";
                $last_login_query = mysqli_query($connect,$last_logout_update);
            }

            public function new_project_update($connect)
            {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $address = $_POST['address'];
                $address2 = $_POST['address2'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

                $select = "SELECT * FROM new_project_table WHERE user_id = '".$_SESSION['user_id']."'";
                $select_query = mysqli_query($connect, $select);
                $select_fetch = mysqli_fetch_array($select_query);

                $user_image = isset($_FILES['user_image']['name']) ? $_FILES['user_image']['name'] : '';

                if ($user_image != "") {
                    $target_file = "./uploads/$user_image";
                    move_uploaded_file($_FILES['user_image']['tmp_name'], $target_file);
                } else {
                    $user_image = $select_fetch['user_image'];
                }

                $update = "UPDATE `new_project_table` SET 
                            `first_name`='".$first_name."', 
                            `last_name`='".$last_name."', 
                            `user_image`='".$user_image."', 
                            `email`='".$email."', 
                            `phone_number`='".$phone_number."', 
                            `address`='".$address."', 
                            `address2`='".$address2."', 
                            `city`='".$city."', 
                            `state`='".$state."', 
                            `zip`='".$zip."' 
                            WHERE user_id = '".$_SESSION['user_id']."'";



                $update_query = mysqli_query($connect, $update);

                $display = 1;
                $title = "Profile Update Notification";
                $description = "Your Profile is Update";
                $notification_update = "UPDATE `notification_table` SET `display` = '$display',`title` = '$title', `description` = '$description' WHERE `user_id` = '".$_SESSION['user_id']."'";

                $notification_update_query = mysqli_query($connect,$notification_update);

                if ($update_query) {
                    echo 1;
                } else {
                    echo 0;
                }
            }
            
            public function change_password($connect)
            {
                $id = $_POST['processuser'];
                $old_password = $_POST['old_password'];
                $new_password = $_POST['new_password'];
                $confirm_password = $_POST['confirm_password'];
                
                $select = "SELECT * FROM `new_project_table` WHERE user_id = '".$_SESSION['user_id']."'";
                $select_query = mysqli_query($connect, $select);
                $select_fetch = mysqli_fetch_array($select_query);
                $password = $select_fetch['password'];
                
                if ($password != $old_password) {
                    echo "old password not match";
                } elseif ($new_password != $confirm_password) {
                    echo "new password and confirm password do not match";
                } else {
                    //$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    //$update = "UPDATE `new_project_table` SET password = '$hashed_password' WHERE user_id = '".$_SESSION['user_id']."'";
                    $update = "UPDATE `new_project_table` SET password = '$new_password' WHERE user_id = '".$_SESSION['user_id']."'";
                    $update_query = mysqli_query($connect, $update);
                    if ($update_query) {
                        echo "record update successful";
                    } else {
                        echo "record not update";
                    }
                }
            }

            public function process_bussiness_form($connect) {
                $banner_photo = $_FILES['banner_photo']['name'];
                $target_file = "uploads/$banner_photo";
                move_uploaded_file($_FILES['banner_photo']['tmp_name'], $target_file);
        
                $business_name = $_POST['business_name'];
                $service_name = $_POST['service_name'];
                $service_location = $_POST['service_location'];
                $business_owner_name = $_POST['business_owner_name'];
                $business_owner_number = $_POST['business_owner_number'];
                $business_email = $_POST['business_email'];
                $business_contact_number = $_POST['business_contact_number'];
                $business_whatsapp_number = $_POST['business_whatsapp_number'];
                $business_pan_number = $_POST['business_pan_number'];
                $business_gst_number = $_POST['business_gst_number'];
                $business_aadhar_number = $_POST['business_aadhar_number'];
                $business_cat_id = $_POST['business_cat_id'];
                $business_description = $_POST['business_description'];
                $describe_goal = json_encode($_POST['describe_goal']);
                $describe_service_type = json_encode($_POST['describe_service_type']);
                $tick_business_goal = json_encode($_POST['tick_business_goal']);
        
                $insert_query = "INSERT INTO business_profiles (
                    banner_photo, business_name, service_name, service_location, business_owner_name, 
                    business_owner_number, business_email, business_contact_number, business_whatsapp_number, 
                    business_pan_number, business_gst_number, business_aadhar_number, business_cat_id, 
                    business_description, describe_goal, describe_service_type, tick_business_goal
                ) VALUES (
                    '$banner_photo', '$business_name', '$service_name', '$service_location', '$business_owner_name', 
                    '$business_owner_number', '$business_email', '$business_contact_number', '$business_whatsapp_number', 
                    '$business_pan_number', '$business_gst_number', '$business_aadhar_number', '$business_cat_id', 
                    '$business_description', '$describe_goal', '$describe_service_type', '$tick_business_goal'
                )";
        
                $result = mysqli_query($connect, $insert_query);
        
                if ($result) {
                    echo 'Business profile added successfully';
                } else {
                    echo 'Failed to add business profile';
                }
            }

            /*public function notification_insert($connect)
            {
                $user_id = $_SESSION['user_id'];
                $notification_insert = "INSERT INTO `notification_table`(`user_id`) VALUES('".$user_id."')";
                    mysqli_query($connect,$notification_insert);
            }*/
        }



?>