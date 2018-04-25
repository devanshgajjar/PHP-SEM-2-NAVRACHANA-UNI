require 'db_connect.php';
if ($dbc == false)
{
DIE("CONNECTION FAILED", 	mysqli_connect_error());
}
else
{
i_query ="insert into c_registration(f_name, m_name, l_name, gender, dob, email, address) values {'$fn', '$mn', '$ln', '$g', '$dob', '$phone', '$mail', '$address'}";
$run_query =mysqli_query($dbc, $i_query);

if($run_query == True)
{
echo "Successful"
}
else
{
echo "Not Successful"
}
mysqli_close($dbc);
}