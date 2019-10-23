<?php
$con = mysqli_connect("localhost","root","","presensi_stmik");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();

//   function my_session_start()
// {
//       $sn = session_name();
//       if (isset($_COOKIE[$sn])) {
//           $sessid = $_COOKIE[$sn];
//       } else if (isset($_GET[$sn])) {
//           $sessid = $_GET[$sn];
//       } else {
//           return session_start();
//       }

//      if (!preg_match('/^[a-zA-Z0-9,\-]{22,40}$/', $sessid)) {
//           return false;
//       }
//       return session_start();
// }

// function start_session(){
//   if ( !my_session_start() ) {
//       session_id( uniqid() );
//       session_start();
//       session_regenerate_id();
//   }
// }


function filter_sid($sid){
  
  $result = preg_replace('/[^A-Za-z0-9]/', '', $sid);
  return $result;
}
?>