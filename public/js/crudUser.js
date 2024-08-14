function redirigir(select){


    let opcionSeleccionada = select.value;
    
    if(opcionSeleccionada === 'modificar'){

        window.location.href = '/tienda/resorces/views/eccomerce/auth/updateAccount.php';
    
    }

    else if(opcionSeleccionada === 'eliminar'){

        if (confirm('¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.')) {
            
            window.location.href = '/tienda/App/Controllers/users/Delete_account.php'; // Redirigir a la página de eliminar si se confirma
                
        }
        
        else{
        
             window.location.reload();
                
        }

    }
    else if(opcionSeleccionada === 'salir'){
        
        window.location.href = '/tienda/App/Controllers/users/Logout.php';

    }

}
