<?php
function isLoggedIn($username) {
    if($username) {
        return true;
    }
    return false;
}

function isAdmin($role) {
    if ($role === 'Admin'  || $role === 'Coordinator'  ) {
        return true;
    }
    return false;
}
?>