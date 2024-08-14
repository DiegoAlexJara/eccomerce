<?php

    class RedirecionHelpers{

        function Redirecion($sescion, $URI, $admin){
            
            $noSession = "/tienda/resorces/views/eccomerce/auth/login.php";
            $siSession = "/tienda/index.php";
            $adminSession = "/tienda/resorces/views/admin/auth/admin.php";
            
            if($sescion == 'null' && $URI != $noSession){
                
                echo "<script>console.log('".$sescion."')</script>";
                header("Location: ".$noSession."");
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