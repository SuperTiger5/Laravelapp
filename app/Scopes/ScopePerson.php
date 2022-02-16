<?php
namespace App\Scopes;

use Illuminate\Databace\Eloquent\Scope;
use Illuminate\Databace\Eloquent\Model;
use Illuminate\Databace\Eloquent\Builder;

class ScopePerson implements Scope {
  public function apply(Builder $builder, Model $model) {
    $builder->where('age', '>', 20);
  }
}
?>