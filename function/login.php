<?php
function isLoggedIn($username) {
    if($username) {
        return true;
    }
    return false;
}

function isAdmin($role2) {
    if ($role2 === '1'  || $role2 === '2'  ) {
        return true;
    }
    return false;
}
function isInstructor($role2) {
    if ($role2 === '3' ) {
        return true;
    }
    return false;
}

function isAccountant($role2) {
    if ($role2 === '4'    ) {
        return true;
    }
    return false;
}

function isRector($role2) {
    if ($role2 === '5'  ) {
        return true;
    }
    return false;
}


// function isActive($status2) {
//     if ($status2 === 'Active'   ) {
//         return true;
//     }
//     return false;
//}
?>