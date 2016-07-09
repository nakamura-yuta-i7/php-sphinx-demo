<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = array(
          array(
              'body'    => 'foo',
              'created' => date('Y-m-d H:i:s'),
          ),
          array(
              'body'    => 'bar',
              'created' => date('Y-m-d H:i:s'),
          )
        );

        $posts = $this->table('posts');
        $posts->insert($data)
              ->save();
    }
}
