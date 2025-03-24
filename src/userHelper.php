<?php

function getEmailById($users, $id)
{
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user['name'];
        }
    }
    return null;
}
