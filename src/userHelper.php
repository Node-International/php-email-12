<?php

function getEmailById(array $users, int $id): ?string
{
    foreach ($users as $user) {
        if ($user['id'] === $id) {
            return $user['email'];
        }
    }

    return null;
}
