<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Employee;

class EmployeeTranslation extends Model
{
    protected $baseModuleModel = Employee::class;
}
