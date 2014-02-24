<?php

namespace rsanchez\Deep\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use rsanchez\Deep\Model\Field;
use rsanchez\Deep\Model\Entry;
use stdClass;

class Fieldtype extends Model
{
    protected $table = 'fieldtypes';
    protected $primaryKey = 'fieldtype_id';
}