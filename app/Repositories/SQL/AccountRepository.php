<?php

namespace App\Repositories\SQL;

use App\Models\Account;
use App\Models\User;
use App\Repositories\Contracts\AccountContract;
use App\Repositories\SQL\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AccountRepository extends BaseRepository implements AccountContract
{
     /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(Account $model)
    {
        parent::__construct($model);
    }
}
