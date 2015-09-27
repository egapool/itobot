<?php

class Controller_Api_Urls extends Controller_Rest{

    public function get_index()
    {
        $get = Input::get();
        $siteId = $get['siteId'];
        $site = DB::select('id')
            ->from(Model_Site::table())
            ->where('id','=',$siteId)
            ->execute()
            ->current();

        if ( $site ) {
            $urls = DB::select()
                ->from(Model_Url::table())
                ->where('site_id','=',$site['id'])
                ->execute()
                ->as_array();
            $this->response($urls, 200);
        } else {
            $this->response(array('ok'=>true), 403);
        }

    }

    public function post_index()
    {
        $post = json_decode(Input::post()['model'],true);
        $post['created_at'] = time();
        $post['updated_at'] = time();
        try {
            DB::insert(Model_Site::table())
                ->set($post)
                ->execute();

            $new = DB::select('id')
                ->from(Model_Site::table())
                ->order_by('created_at','DESC')
                ->limit(1)
                ->execute()
                ->current();

            return $this->response(array(
                'id' => $new['id'],
            ));
        } catch(Exception $e) {
            return $this->response(array(
                'ok' => false,
                'message' => $e->getMessage(),
            ),
            500);
        }
        var_dump($post);die;
    }

    public function put_index($id)
    {
        $put = json_decode(Input::put()['model'],true);
        $data = array(
            'title'      => $put['title'],
            'domain'     => $put['domain'],
            'user'       => $put['user'],
            'pass'       => $put['pass'],
            'updated_at' => time(),
        );

        try {
            DB::update(Model_Site::table())
                ->set($data)
                ->where('id','=',$id)
                ->execute();
            return $this->response(array(
                'ok' => true,
            ));
        } catch (Exception $e) {
            return $this->response(array(
                'ok' => false,
                'message' => $e->getMessage(),
            ),
            500);
        }
    }

    public function delete_index($id)
    {
        DB::delete(Model_Site::table())
            ->where('id','=',$id)
            ->execute();
        $this->response(array('ok'=>true),200);
    }
}