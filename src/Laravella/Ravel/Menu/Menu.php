<?php namespace Laravella\Ravel\Menu;

use Laravella\Ravel\ServiceModel;
use Laravella\Ravel\Menu\FrontMenuBuild;
use Laravella\Ravel\Menu\MenuBuild;
use MenuModel;

class Menu extends ServiceModel
{

	protected function setup()
	{
		$this->model = new MenuModel;
	}


	//static method to allow build menu items
	static public function build($name = null, $buildType = 'frontend')
	{
		$scopes = explode('.', $name);
		$menuName = $name;
		if(count($scopes) == 2)
		{
			if($scopes[0] == 'admin' || $scopes[0] == 'backend')
			{
				$buildType = 'admin';
				$menuName = $scopes[1];
			}
		} 

		switch ($buildType) {
			case 'admin':
					
					$builder = new MenuBuild;
				break;
			
			default:
					$builder = new FrontMenuBuild;
			break;
		}

		return $builder->build($menuName);

	}
}