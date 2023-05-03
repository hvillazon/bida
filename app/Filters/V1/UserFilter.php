<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class UserFilter extends ApiFilter
{
    protected $safeParms = [
        'id'   => ['eq'],
        'name' => ['eq'],
        'email' => ['eq'],
        'password' => ['eq'],
        'email_verified_at' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'created_at' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'updated_at' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];

    protected $columnMap = [
        'email_verified_at' => 'email_verified_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
    ];

    protected $operatorMap = [
        'eq'    =>  '=',
        'lt'    =>  '<',
        'lte'    =>  '<=',
        'gt'    =>  '>',
        'gte'    =>  '>=',
    ];
}