<?php namespace Laravella\Ravel\PostCategories;

use Laravella\Ravel\ServiceModel;
use Event;

class PostCategories extends ServiceModel
{	

	protected function setup()
	{
		$this->model = app('CategoryModel');
	}


	public function insert($data, $callback=null)
	{
		$data['lang'] = $this->getLocale();

		return parent::insert($data, $callback);
		
	}

}