<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Billable;
}
