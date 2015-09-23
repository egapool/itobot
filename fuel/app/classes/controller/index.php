<?php
class Controller_Index extends Controller_Base
{
    public function before()
    {
        parent::before();
        $this->js .= Asset::js('vendor/json2.js');
        $this->js .= Asset::js('vendor/underscore-min.js');
        $this->js .= Asset::js('vendor/backbone-min.js');
        $this->js .= Asset::js('vendor/handlebars-v3.0.3.js');
        $this->js .= Asset::js('vendor/moment.min.js');
        $this->js .= Asset::js('backbonejs/namespace.js');
        $this->js .= Asset::js('backbonejs/helper.js');
        $this->js .= Asset::js('backbonejs/templates/layout.js');
        $this->js .= Asset::js('backbonejs/router.js');
        $this->js .= Asset::js('backbonejs/views/header.js');
        $this->js .= Asset::js('backbonejs/views/footer.js');
        $this->js .= Asset::js('backbonejs/views/container.js');
        $this->js .= Asset::js('backbonejs/views/sites/page.js');
        $this->js .= Asset::js('backbonejs/views/sites/edit.js');
        $this->js .= Asset::js('backbonejs/views/sites/list.js');
        $this->js .= Asset::js('backbonejs/views/sites/item.js');
        $this->js .= Asset::js('backbonejs/views/sites/minItem.js');
        $this->js .= Asset::js('backbonejs/views/sites/minList.js');
        $this->js .= Asset::js('backbonejs/views/urls/page.js');
        $this->js .= Asset::js('backbonejs/views/urls/list.js');
        $this->js .= Asset::js('backbonejs/views/urls/item.js');
        $this->js .= Asset::js('backbonejs/Models/site.js');
        $this->js .= Asset::js('backbonejs/Models/url.js');
        $this->js .= Asset::js('backbonejs/Collections/sites.js');
        $this->js .= Asset::js('backbonejs/Collections/urls.js');

    }

	public function action_index()
	{
		// View表示
		// $this->template->content = View::forge("index/index");
	}
}