<?php
    // $data = 'hola crtl producto';
    // die('<script>console.log('.json_encode( $data ) .');</script>');
    $path = $_SERVER['DOCUMENT_ROOT'] . '/CRUD2.1 Mejoras';
    include ($path . "/module/producto/model/DAOProducto.php");
    // session_start();
    
    switch($_GET['op']){
        case 'list';
            // $data = 'hola crtl producto';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
              
            try{
                $daoproducto = new DAOProducto();
            	$rdo = $daoproducto->select_all_producto();
                //die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/producto/view/list_producto.php");
    		}
            break;

            case 'list1';
            // $data = 'hola crtl producto';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
              
            try{
                $daoproducto = new DAOProducto();
            	$rdo = $daoproducto->select_all_producto();
                //die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/producto/view/list_futbol11.php");
    		}
            break;
            
        case 'create';
            // $data = 'hola crtl producto create';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            include("module/producto/model/validate.php");
            
            $check = true;
            
            if ($_POST){
                // $data = 'hola create post producto';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate();
                //die('<script>console.log('.json_encode( $check ) .');</script>');

                if ($check){
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        $daoproducto = new DAOProducto();
    		            $rdo = $daoproducto->insert_producto($_POST);
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    //die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Creado correctamente',
                                text: 'El producto ha sido creado en la base de datos.',
                                timer: 4000,
                                showConfirmButton: false
                            })</script>";
                        echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_producto&op=list";
                        }, 2000);</script>';
            		}else{
            			$callback = 'index.php?page=503';
    			        //die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/producto/view/create_producto.php");
            break;
            
        case 'update';
            // $data = 'hola crtl producto update';
            // die('<script>console.log('.json_encode( $data ) .');</script>');

            //$check = true;
            include("module/producto/model/validate.php");
            
            if ($_POST){
                 //$data = 'hola update post producto';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                
                $check=validate_update();
                //$check = true;
                //die('<script>console.log('.json_encode( $check ) .');</script>');
                
                if ($check){
                    //die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        $daoproducto = new DAOProducto();
    		            $rdo = $daoproducto->update_producto($_POST);
                        //die('<script>console.log('.json_encode( $rdo ) .');</script>');
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Modificado correctamente',
                                text: 'El producto ha sido modificado en la base de datos.',
                                timer: 4000,
                                showConfirmButton: false
                            })</script>";
                        echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_producto&op=list";
                        }, 2000);</script>';
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }else{
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_producto&op=list";
                    }, 2000);</script>';
                }
            }else{
                // $data = 'hola crtl producto update';
                // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
             //die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
            try{
                $daoproducto = new DAOProducto();
            	$rdo = $daoproducto->select_producto($_GET['id']);
            	$producto=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/producto/view/update_producto.php");
    		}
        }
            break;
            
    //     case 'read';
    //         // $data = 'hola crtl producto read';
    //         // die('<script>console.log('.json_encode( $data ) .');</script>');
    //         // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

    //         try{
    //             $daoproducto = new DAOProducto();
    //         	$rdo = $daoproducto->select_producto($_GET['id']);
    //         	$producto=get_object_vars($rdo);
    //             //die('<script>console.log('.json_encode( $producto ) .');</script>');
    //         }catch (Exception $e){
    //             $callback = 'index.php?page=503';
	// 		    die('<script>window.location.href="'.$callback .'";</script>');
    //         }
    //         if(!$rdo){
    // 			$callback = 'index.php?page=503';
    // 			die('<script>window.location.href="'.$callback .'";</script>');
    // 		}else{
    //             include("module/producto/view/read_producto.php");
    // 		}
    //         break;
            
    //     case 'delete';
    //         // $data = 'hola crtl curso delete';
    //         // die('<script>console.log('.json_encode( $data ) .');</script>');
    //         // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

    //         if ($_POST){
    //             //die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
    //             try{
    //                 $daocurso = new DAOCurso();
    //             	$rdo = $daocurso->delete_curso($_GET['id']);
    //             }catch (Exception $e){
    //                 $callback = 'index.php?page=503';
    // 			    die('<script>window.location.href="'.$callback .'";</script>');
    //             }
    //         	if($rdo){
    //                 echo "<script>
    //                         Swal.fire({
    //                             icon: 'success',
    //                             title: 'Eliminado correctamente',
    //                             text: 'El curso ha sido eliminado en la base de datos.',
    //                             timer: 4000,
    //                             showConfirmButton: false
    //                         })</script>";
    //                 echo '<script language="javascript">setTimeout(() => {
    //                     window.location.href="index.php?page=controller_curso&op=list";
    //                 }, 2000);</script>';
    //     		}else{
    //     			$callback = 'index.php?page=503';
	// 		        die('<script>window.location.href="'.$callback .'";</script>');
    //     		}
    //         }else{
            
    //             //die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
    //            try{
    //                $daocurso = new DAOCurso();
    //                $rdo = $daocurso->select_curso($_GET['id']);
    //                $curso=get_object_vars($rdo);
    //            }catch (Exception $e){
    //                $callback = 'index.php?page=503';
    //                die('<script>window.location.href="'.$callback .'";</script>');
    //            }
               
    //            if(!$rdo){
    //                $callback = 'index.php?page=503';
    //                die('<script>window.location.href="'.$callback .'";</script>');
    //            }else{
    //                include("module/curso/view/delete_curso.php");
    //            }
    //        }
    //         break;
    //     default;
    //         include("view/inc/error404.php");
    //         break;

    //         case 'delete_all';
             
    //         if ($_POST){
    //             try{
    //                 $daocurso = new DAOCurso();
    //                 $rdo = $daocurso-> delete_all_curso();
    //             }catch (Exception $e){
    //                 $callback = 'index.php?page=controller_curso&op=503';
    //                 die('<script>window.location.href="'.$callback .'";</script>');
    //             }
                
    //             if($rdo){
    //                 echo "<script>
    //                         Swal.fire({
    //                             icon: 'success',
    //                             title: 'Lista borrada correctamente',
    //                             text: 'La lista ha sido eliminada en la base de datos.',
    //                             timer: 4000,
    //                             showConfirmButton: false
    //                         })</script>";
    //                 $callback = 'index.php?page=controller_curso&op=list';
	// 		        die('<script>window.location.href="'.$callback .'";</script>');
    //             }else{
    //                 $callback = 'index.php?page=controller_ccurso&op=503';
    //                 die('<script>window.location.href="'.$callback .'";</script>');
    //             }
    //         }
            
    //         include("module/curso/view/delete_all_curso.php");
    //         break;

    //     case 'dummies';
    //     if ($_POST){
    //         try{
    //             $daocurso = new DAOCurso();
    //             $rdo = $daocurso -> dummies_curso();
    //         }catch (Exception $e){
    //             $callback = 'index.php?page=controller_car&op=503';
    //             die('<script>window.location.href="'.$callback .'";</script>');
    //          }
    
    //          if($rdo){
    //             echo "<script>
    //                         Swal.fire({
    //                             icon: 'success',
    //                             title: 'Dummies Creados correctamente',
    //                             text: 'La lista ha sido creado en la base de datos.',
    //                             timer: 4000,
    //                             showConfirmButton: false
    //                         })</script>";
    //              $callback = 'index.php?page=controller_curso&op=list';
	// 		     die('<script>window.location.href="'.$callback .'";</script>');
    //          }else{
    //               $callback = 'index.php?page=controller_car&op=503';
    //               die('<script>window.location.href="'.$callback .'";</script>');
    //          }
    //     }
            
    //         include("module/curso/view/dummies_curso.php");
    //     break;

    case 'read_modal':
        //echo $_GET["id"]; 
        //exit;

        try{
            $daoproducto = new DAOProducto();
            $rdo = $daoproducto->select_producto($_POST['id']);
        }catch (Exception $e){
            echo json_encode("error");
            exit;
        }
        if(!$rdo){
            echo json_encode("error");
            exit;
        }else{
            $producto=get_object_vars($rdo);
            echo json_encode($producto);
            //echo json_encode("error");
            exit;
        }
        break;

        include("view/inc/error404.php");
        break;
}