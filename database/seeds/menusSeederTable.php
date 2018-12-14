<?php

use Illuminate\Database\Seeder;

class menusSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('menus')->get()->count() == 0) {
            $menus = [
                [
                    'name_menu'   => 'Companies',
                    'action_id'   => '1',
                    'url'       => '/google',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Companies',
                    'action_id'      => '2',
                    'url'       => '/github',
                    'is_delete'    => '0',
                    'parent_id'  => '1',
                    'description' => 'good luck for you 2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Create Companies',
                    'action_id'      => '3',
                    'url'       => '/github',
                    'is_delete'    => '0',
                    'parent_id'  => '1',
                    'description' => 'good luck for you 2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'TypeEvents',
                    'action_id'      => '4',
                    'url'       => '/github',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Type Events',
                    'action_id'      => '5',
                    'url'       => '/github',
                    'is_delete'    => '0',
                    'parent_id'  => '4',
                    'description' => 'good luck for you 2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Events',
                    'action_id'      => '6',
                    'url'       => '/facebook',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 3',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Events',
                    'action_id'      => '7',
                    'url'       => '/facebook',
                    'is_delete'    => '0',
                    'parent_id'  => '6',
                    'description' => 'good luck for you 3',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Create Events',
                    'action_id'      => '8',
                    'url'       => '/facebook',
                    'is_delete'    => '0',
                    'parent_id'  => '6',
                    'description' => 'good luck for you 3',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Tickets',
                    'action_id'      => '9',
                    'url'       => '/googles',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 4',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Comment',
                    'action_id'      => '10',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Comment',
                    'action_id'      => '11',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '10',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Orders',
                    'action_id'      => '12',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Orders',
                    'action_id'      => '13',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '12',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Orders Finish',
                    'action_id'      => '14',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '12',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Unfinish Orders',
                    'action_id'      => '15',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '12',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Actions',
                    'action_id'      => '16',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Actions',
                    'action_id'      => '17',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '16',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Create Actions',
                    'action_id'      => '18',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '16',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Users',
                    'action_id'      => '19',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Users',
                    'action_id'      => '20',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '19',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Create Users',
                    'action_id'      => '21',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '19',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Groups',
                    'action_id'      => '22',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Groups',
                    'action_id'      => '23',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '22',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Create Groups',
                    'action_id'      => '24',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '22',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Menus',
                    'action_id'      => '25',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '0',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'All Menus',
                    'action_id'      => '26',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '25',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],[
                    'name_menu'   => 'Create Menus',
                    'action_id'      => '27',
                    'url'       => '/googless',
                    'is_delete'    => '0',
                    'parent_id'  => '25',
                    'description' => 'good luck for you 5',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ]
            ]; 
            DB::table('menus')->insert($menus);
        }
    }
}