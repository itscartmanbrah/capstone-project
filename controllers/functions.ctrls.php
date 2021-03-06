<?php


function randomPassword()
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function randomName()
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 30; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function mailSender($recipient, $subject, $body)
{
    $scriptUrl = "https://script.google.com/macros/s/AKfycby-9Q_FJcT8immG1dFWe1cEk2NKRIhDb5WFQShX05zS8uJk8-qBPCQN6P5weWo6vKRmOQ/exec";

    $data = array(
        "recipient" => $recipient,
        "subject" => $subject,
        "body" => $body,
        "isHTML" => 'true'
    );

    $ch = curl_init($scriptUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    echo $result;
}

function emptyInputSignup($firstname, $lastname, $username, $email, $password)
{
    $result = true;

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result = true;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = true;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $repeat_password)
{
    $result = true;

    if ($password !== $repeat_password) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailExist($conn, $email)
{
    $sql_user = "SELECT * FROM users WHERE email = ?;";
    $sql_members = "SELECT * FROM members WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);


    if (!mysqli_stmt_prepare($stmt, $sql_user)) {
        header("location: ../views/pages-register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s",  $email);
    mysqli_stmt_execute($stmt);


    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);

    if (empty($row)) {
        if (!mysqli_stmt_prepare($stmt, $sql_members)) {
            header("location: ../views/pages-register.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s",  $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($resultData);
        return $row;
    } else if (!empty($row)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastname, $username, $email, $password, $date_created)
{
    $sql = "INSERT INTO users (firstname, lastname, username, email, password, date_created) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/pages-register.php?error=stmtfailed");
        exit();
    }

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $username, $email, $hashedpassword, $date_created);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
    $_SESSION['status'] = "
        <script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      })
  
      Toast.fire({
        icon: 'success',
        title: 'Registration Success'
      })</script>";
    header("location: ../views/pages-login.php?");
    exit();
}


function emptyInputLogin($email, $password)
{
    $result = true;

    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password)
{
    $emailExist = emailExist($conn, $email);

    if ($emailExist == false) {

        session_start();
        $_SESSION['status'] = "
        <script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      })
  
      Toast.fire({
        icon: 'warning',
        title: 'User does not exist'
      })</script>";

        header("location: ../views/pages-login.php?");
        exit();
    }

    $passwordHashed = $emailExist["password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword == false) {

        session_start();
        $_SESSION['status'] = "
        <script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      })
  
      Toast.fire({
        icon: 'warning',
        title: 'Incorrect Password'
      })</script>";

        header("location: ../views/pages-login.php?");
        exit();
    } else if ($checkPassword == true) {
        session_start();
        $_SESSION["userid"] = $emailExist["user_id"];
        $_SESSION['status'] = "
        <script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      })
  
      Toast.fire({
        icon: 'success',
        title: 'Logged in successfully'
      })</script>";
        header("location: ../views/index.php?");
        exit();
    }
}
function emptyInputUserProfile($firstname, $lastname)
{
    $result = true;

    if (empty($firstname) || empty($lastname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function editUserProfile($conn, $user_id, $firstname, $lastname, $file, $mobile, $bio, $address, $facebook, $gmail, $twitter, $github, $instagram)
{
    $allow = array('jpg', 'jpeg', 'png');
    $exntension = explode('.', $file['name']);
    $fileActExt = strtolower(end($exntension));
    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
    $filePath = '../assets/uploads/' . $fileNew;

    if (in_array($fileActExt, $allow)) {
        if ($file['size'] > 0 && $file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                $sql = "UPDATE users SET firstname=?, lastname=?, image=?,mobile=?, bio=?, address=?, facebook=?, gmail=?, twitter=?, github=?, instagram=? WHERE user_id=$user_id;";

                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/pages-profile.php?error=stmtfailed");
                    exit();
                }

                mysqli_stmt_bind_param($stmt, "sssssssssss", $firstname, $lastname, $filePath, $mobile, $bio, $address, $facebook, $gmail, $twitter, $github, $instagram);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                header("location: ../views/pages-profile.php?error=none");
                exit();
            }
        }
    }
}

function emptyInputOrganization($organization_name, $organization_description, $user_id)
{
    $result = true;

    if (empty($organization_name) || empty($organization_description) || empty($user_id)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createOrganization($conn, $organization_name, $organization_description, $user_id, $file, $date_created)
{

    $allow = array('jpg', 'jpeg', 'png');
    $exntension = explode('.', $file['name']);
    $fileActExt = strtolower(end($exntension));
    $fileNew = randomName() . "." . $fileActExt;  // rand function create the rand number 
    $filePath = '../assets/uploads/' . $fileNew;

    if (in_array($fileActExt, $allow)) {
        if ($file['size'] > 0 && $file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                $sql = "INSERT INTO organizations (organization_name, organization_description, user_id, image, date_created) VALUES (?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/pages-add-organization.php?error=mysqlierror");
                    exit();
                }

                mysqli_stmt_bind_param($stmt, "sssss", $organization_name, $organization_description, $user_id, $filePath, $date_created);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);


                session_start();
                $_SESSION["status"] =
                    "<script>
                    Swal.fire(
                    'Added!',
                    'An organization has been added.',
                    'success')
                    </script>";
                header("location: ../views/index.php?error=none");
                exit();
            }
        }
    }
}
function deleteOrganization($conn, $organization_id)
{
    $sql_org = "DELETE FROM organizations WHERE organization_id=?";
    $sql_dept = "DELETE FROM departments WHERE organization_id=?";
    $sql_mem = "DELETE FROM members WHERE organization_id=?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql_org)) {
        header("location: ../views/pages-add-organization.php?error=mysqlierror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $organization_id);
    mysqli_stmt_execute($stmt);

    if (!mysqli_stmt_prepare($stmt, $sql_dept)) {
        header("location: ../views/pages-add-organization.php?error=mysqlierror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $organization_id);
    mysqli_stmt_execute($stmt);

    if (!mysqli_stmt_prepare($stmt, $sql_mem)) {
        header("location: ../views/pages-add-organization.php?error=mysqlierror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $organization_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
    $_SESSION["status"] =
        "<script>
        Swal.fire(
        'Deleted!',
        'An organization has been deleted.',
        'success')
        </script>";
    header("location: ../views/index.php?error=none");
    exit();
}

function editOrganization($conn, $organization_name, $organization_description, $file, $user_id, $organization_id)
{

    $allow = array('jpg', 'jpeg', 'png');
    $exntension = explode('.', $file['name']);
    $fileActExt = strtolower(end($exntension));
    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
    $filePath = '../assets/uploads/' . $fileNew;
    if (in_array($fileActExt, $allow)) {
        if ($file['size'] > 0 && $file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                $sql = "UPDATE organizations SET organization_name=?, organization_description=?, image=? WHERE user_id= $user_id AND organization_id= $organization_id;";

                $stmt = mysqli_stmt_init($conn);


                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/pages-my-organization.php?error=stmtfailed");
                    exit();
                }

                mysqli_stmt_bind_param($stmt, "sss", $organization_name, $organization_description, $filePath);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);


                session_start();
                $_SESSION["status"] =
                    "<script>
                 Swal.fire(
                'Updated!',
                'Succesfully Updated!',
                'success')
                </script>";
                header("location: ../views/pages-my-organization.php?id=$organization_id&error=editsuccess");
                exit();
            }
        }
    }
}
function emptyInputDepartment($department_name, $department_desc, $department_code, $user_id, $organization_id)
{
    $result = true;

    if (empty($department_name) || empty($department_desc) || empty($department_code) || empty($user_id) || empty($organization_id) || empty($department_code)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function departmentExists($conn, $department_name, $organization_id)
{
    $sql = "SELECT * FROM departments WHERE department_name = ? AND organization_id = ?;";
    $stmt = mysqli_stmt_init($conn);


    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/pages-register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss",  $department_name, $organization_id);
    mysqli_stmt_execute($stmt);


    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);

    if (!empty($row)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}
function createDepartment($conn, $department_name, $department_desc, $department_code, $file, $user_id, $organization_id, $date_created)
{


    $allow = array('jpg', 'jpeg', 'png');
    $exntension = explode('.', $file['name']);
    $fileActExt = strtolower(end($exntension));
    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
    $filePath = '../assets/uploads/' . $fileNew;

    if (in_array($fileActExt, $allow)) {
        if ($file['size'] > 0 && $file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], $filePath)) {

                $sql = "INSERT INTO departments (department_name, department_description, department_code, department_image, user_id, organization_id, date_created) VALUES (?,?,?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    session_start();
                    $_SESSION["status"] =
                        "<script>
                    Swal.fire(
                    'Error!',
                    'Something went wrong!',
                    'warning')
                    </script>";
                    header("location: ../views/index.php");
                    exit();
                }

                mysqli_stmt_bind_param($stmt, "ssssiis", $department_name, $department_desc, $department_code, $filePath, $user_id, $organization_id, $date_created);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                session_start();
                $_SESSION["status"] =
                    "<script>
                    Swal.fire(
                    'Added!',
                    'A department has been added.',
                    'success')
                    </script>";
                header("location: ../views/pages-my-organization.php?id=$organization_id");
                exit();
            }
        }
    }
}

function editDepartment($conn, $department_name, $department_desc, $department_code, $file, $user_id, $organization_id, $department_id)
{


    $allow = array('jpg', 'jpeg', 'png');
    $exntension = explode('.', $file['name']);
    $fileActExt = strtolower(end($exntension));
    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
    $filePath = '../assets/uploads/' . $fileNew;
    if (in_array($fileActExt, $allow)) {
        if ($file['size'] > 0 && $file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                $sql = "UPDATE departments SET department_name=?, department_description=?, department_code=?, department_image=? WHERE user_id=$user_id AND organization_id=$organization_id AND department_id=$department_id;";

                $stmt = mysqli_stmt_init($conn);


                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/pages-my-department.php?user_id=$user_id&org_id=$organization_id&dept_id=$department_id&error=stmtfailed");
                    exit();
                }

                mysqli_stmt_bind_param($stmt, "ssss", $department_name, $department_desc, $department_code, $filePath);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                header("location: ../views/pages-my-department.php?user_id=$user_id&org_id=$organization_id&dept_id=$department_id&error=editsuccess");
                exit();
            }
        }
    }
}

function deleteDepartment($conn, $department_id, $organization_id)
{
    $sql_dept = "DELETE FROM departments WHERE department_id=?";
    $sql_mem = "DELETE FROM members WHERE department_id=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql_dept)) {
        header("location: ../views/pages-add-organization.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $department_id);
    mysqli_stmt_execute($stmt);
    if (!mysqli_stmt_prepare($stmt, $sql_mem)) {
        header("location: ../views/pages-add-organization.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $department_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    $_SESSION["status"] =
        "<script>
        Swal.fire(
        'Deleted!',
        'A department has been deleted.',
        'success')
        </script>";

    header("location: ../views/pages-my-organization.php?id=$organization_id");
    exit();
}


function importMembers($conn, $files, $department_id, $importer_id, $organization_id, $date_created)
{
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );

    if (
        !empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)
    ) {


        $files = fopen($_FILES['file']['tmp_name'], 'r');


        fgetcsv($files);

        while (($getData = fgetcsv($files, 10000, ",")) !== FALSE) {

            $firstname = $getData[0];
            $middlename = $getData[1];
            $lastname = $getData[2];
            $email = $getData[3];
            $course = $getData[4];
            $yearlevel = $getData[5];
            $usertype = "member";

            $sql = "SELECT * FROM members WHERE email = ? AND department_id = ?;";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../views/pages-register.php?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "ss", $email, $department_id);
            mysqli_stmt_execute($stmt);

            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if (isset($user['email']) == $email && isset($user['department_id']) == $department_id && isset($user['importer_id']) == $importer_id) {
                $sql = "UPDATE members SET firstname=?, middlename=?, lastname=?, email=?, course=?, yearlevel=?, usertype=? WHERE email='$email' AND department_id = '$department_id';";
                $stmt = mysqli_stmt_init($conn);
                $stmt = $conn->prepare($sql);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/pages-my-department.php?user_id=$importer_id&org_id=$organization_id&dept_id=$department_id&error=stmntfailed");
                    exit();
                }
                mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $middlename, $lastname, $email, $course, $yearlevel, $usertype);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            } else {
                $sql = "INSERT INTO members (firstname, middlename, lastname, email, password, course, yearlevel, usertype, department_id, importer_id,organization_id,date_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/pages-my-department.php?user_id=$importer_id&org_id=$organization_id&dept_id=$department_id&error=stmntfailed");
                    exit();
                }

                $password = randomPassword();
                $subject = "Your Login Details";
                // mailSender($email, $subject, $password);

                $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssssssssiiis", $firstname, $middlename, $lastname, $email, $hashedpassword, $course, $yearlevel, $usertype, $department_id, $importer_id, $organization_id, $date_created);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }
        }

        fclose($files);

        session_start();
        $_SESSION["status"] =
            "<script>
                    Swal.fire(
                    'Added!',
                    'Import success.',
                    'success')
                    </script>";
        header("location: ../views/pages-my-department.php?user_id=$importer_id&org_id=$organization_id&dept_id=$department_id&error=none");
        exit();
    } else {
        header("location: ../views/pages-my-department.php?user_id=$importer_id&org_id=$organization_id&dept_id=$department_id&error=stmntfailed");
        exit();
    }
}
function emptyInputEditMember($firstname, $middlename, $lastname, $email, $course, $yearlevel, $usertype)
{
    $result = true;

    if (empty($firstname) || empty($middlename) || empty($lastname) || empty($email) || empty($course) || empty($yearlevel) || empty($usertype)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function editMember($conn, $organization_id, $user_id, $department_id, $importer_id, $firstname, $middlename, $lastname, $email, $course, $yearlevel, $usertype)
{
    $sql = "UPDATE members SET firstname = ?, middlename = ?, lastname = ?, email = ?, course = ?, yearlevel = ?, usertype = ? WHERE user_id=$user_id AND organization_id=$organization_id AND department_id=$department_id AND importer_id=$importer_id; ";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/pages-add-organization.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $middlename, $lastname, $email, $course, $yearlevel, $usertype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    $_SESSION["status"] =
        "<script>
        Swal.fire(
        'Updated!',
        'Updated Member details.',
        'success')
        </script>";

    header("location: ../views/pages-my-department.php?user_id=$importer_id&org_id=$organization_id&dept_id=$department_id#members-list");
    exit();
}

function emptyInputEvent()
{
}
