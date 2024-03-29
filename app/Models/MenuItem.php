<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{



	public function children() {
		return $this->hasMany('\App\Models\MenuItem', 'parent_id');
	}

	public function allChildren()
	{
		return $this->children()->with('allChildren');
	}
}
