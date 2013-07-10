<?php namespace Laravella\Ravel\Page;

use Laravella\Ravel\Content\Content;

class Page extends Content
{

	protected $contentType = 'page';
	
	protected $useContentCategories = false;

	public function ContentModel()
	{
		return app('ContentModel');
	}
}