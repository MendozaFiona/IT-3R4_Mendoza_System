<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Main extends Model{

        protected $table = 'tbluser';
        
        protected $fillable = [
            'username', 'password'
        ];

        public $timestamps = false;


}