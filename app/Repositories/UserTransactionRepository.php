<?php
namespace App\Repositories;

use \App\Models\UserTransaction;

class UserTransactionRepository extends Repository
{
    public function model()
    {
        return UserTransaction::class;
    }
}
