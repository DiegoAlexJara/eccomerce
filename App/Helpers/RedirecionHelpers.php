<?php
    
    class RedirecionHelpers{

        function Redirecion($sescion, $URI, $admin, $app_base){
            
            $noSession = "/$hola/resorces/views/eccomerce/auth/login.php";
            $siSession = "/$app_base/index.php";
            $adminSession = ".$app_base/resorces/views/admin/auth/admin.php";
            // echo "Constructed URL: " . $noSession;
                
            // if($sescion == 'null' && $URI != $noSession){
                
            //     echo "<script>console.log('".$noSession."')</script>";
            //     header("Location:" . $noSession);
            //     echo $noSession;
            //     exit();

            // }
            // if($sescion != "null"){
            //     if( $admin != true && $URI != $siSession){

            //         echo "<script>console.log('".$sescion."')</script>";
            //         header("Location: ".$siSession."");
            //         exit();


            //     }
            //     if($admin === true && $URI != $adminSession){

            //         echo "<script>console.log('".$sescion.$admin."')</script>";
            //         header("Location: ".$adminSession."");
            //         exit();

            //     }
                
            // }
            


        }

    }
?>