<?php
    
    class RedirecionHelpers{

        function Redirecion($sescion, $URI, $admin){
            
            $noSession = "/eccomerce/resorces/views/eccomerce/auth/login.php";
            $siSession = "/eccomerce/index.php";
            $adminSession = "/eccomerce/resorces/views/admin/auth/admin.php";
            // echo "Constructed URL: " . $noSession;
                
            if($sescion == 'null' && $URI != $noSession){
                
                echo "<script>console.log('".$noSession."')</script>";
                header("Location:" . $noSession);
                echo $noSession;
                exit();

            }
            if($sescion != "null"){
                if( $admin != true && $URI != $siSession){

                    echo "<script>console.log('".$sescion."')</script>";
                    header("Location: ".$siSession."");
                    exit();


                }
                if($admin === true && $URI != $adminSession){

                    echo "<script>console.log('".$sescion.$admin."')</script>";
                    header("Location: ".$adminSession."");
                    exit();

                }
                
            }
            


        }

    }
?>