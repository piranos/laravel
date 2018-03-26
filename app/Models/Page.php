<?php
namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $fillable = array('title', 'content');

   public function getContent($title){
   	
   	$content = DB::table('pages')->where('title', $title)->first();
   	
   	return $content->content;
   }
}